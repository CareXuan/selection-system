<?php


namespace app\controllers\web;

use app\models\ColumnCategory;
use app\models\FinalGrade;
use app\models\Grade;
use app\models\Student;
use Yii;
use yii\web\Controller;

class CalculationController extends Controller
{
    /**
     * @desc 德智体分数计算
     */
    public function actionDzt(){
        $year = date('Y');
        $data = ColumnCategory::find()->where(['year' => $year])->asArray()->all();
        $stu_data = Student::find()->asArray()->all();
        foreach ($stu_data as $item){
            $add_arr[$item['stu_id']] = [
                'intellectual' => 0,
                'sport' => 0,
                'character_add' => 0,
                'intellectual_add' => 0,
                'sport_add' => 0,
                'drop' => 0,
            ];
        }
        //获取基础分和最高分
        foreach ($data as $item){
            if ($item['type'] == 1){
                $character_basic = $item['basic'];
                $character_headgrade = $item['headgrade'];
            }
            if ($item['type'] == 2){
                $intellectual_basic = $item['basic'];
                $intellectual_headgrade = $item['headgrade'];
            }
            if ($item['type'] == 3){
                $sport_basic = $item['basic'];
                $sport_headgrade = $item['headgrade'];
            }
        }
        //清除当前学年所有分数重新计算
        Grade::deleteAll(['year' => $year]);
        //德育加分
        $add_grade_sql = "select a.stu_number,b.grade,b.type from
                        (select stu_number,class from grade_add where year = 2020 and status = 1) a
                        join
                        (select id,grade,type from grade_add_set) b
                        on a.class = b.id";
        $add_grade_arr = Grade::getDb()->createCommand($add_grade_sql)->queryAll();
        foreach ($add_grade_arr as $item){
            if ($item['type'] == 1){
                $add_arr[$item['stu_number']]['character_add'] = $item['grade'];
            }
            if ($item['type'] == 2){
                $add_arr[$item['stu_number']]['intellectual_add'] = $item['grade'];
            }
            if ($item['type'] == 3){
                $add_arr[$item['stu_number']]['sport_add'] = $item['grade'];
            }
            if ($item['type'] == 100){
                $add_arr[$item['stu_number']]['drop'] = $item['grade'];
            }
        }
        $grade_sql = "select stu_id,class_type,avg(grade) from grade group by class_type,stu_id";
        $grade_arr = Grade::getDb()->createCommand($grade_sql)->queryAll();
        foreach ($grade_arr as $item){
            if ($item['class_type'] == 1){
                $add_arr[$item['stu_id']]['intellectual'] = $item['grade'];
            }
            if ($item['class_type'] == 2){
                $add_arr[$item['stu_id']]['sport'] = $item['grade'];
            }
        }

        foreach ($add_arr as $key => $value){
            $final_grade = new FinalGrade();
            $final_grade->stu_number = $key;
            $final_grade->character_grade = (($character_basic + $value['character_add']) < $character_headgrade) ? ($character_basic + $value['character_add']) : $character_headgrade;
            $final_grade->intellectual_grade = (($intellectual_basic + $value['intellectual_add']) < $intellectual_headgrade) ? ($intellectual_basic + $value['intellectual_add']) : $intellectual_headgrade;
            $final_grade->sport_grade = (($sport_basic + $value['sport_add']) < $sport_headgrade) ? ($sport_basic + $value['sport_add']) : $sport_headgrade;
            $final_grade->save();
        }
    }
}