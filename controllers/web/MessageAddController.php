<?php


namespace app\controllers\web;

use app\models\ColumnCategory;
use app\models\FileHelper;
use app\models\Grade;
use app\models\GradeAdd;
use app\models\GradeAddSet;
use app\models\StuClass;
use app\models\Student;
use app\models\Test;
use Yii;
use yii\web\Controller;

class MessageAddController extends BaseController
{
    /**
     * @return string
     * @desc 德智体评分规则设定
     */
    public function actionSet(){
        $character_headgrade = Yii::$app->request->post('character_headgrade',0);
        $character_basic = Yii::$app->request->post('character_basic',0);
        $intellectual_headgrade = Yii::$app->request->post('intellectual_headgrade',0);
        $intellectual_basic = Yii::$app->request->post('intellectual_basic',0);
        $sport_headgrade = Yii::$app->request->post('sport_headgrade',0);
        $sport_basic = Yii::$app->request->post('sport_basic',0);

        $year = date('Y');

        ColumnCategory::deleteAll(['year' => $year]);
        $character = new ColumnCategory();
        $intellectual = new ColumnCategory();
        $sport = new ColumnCategory();
        $character->type = 1;
        $character->year = $year;
        $character->headgrade = $character_headgrade;
        $character->basic = $character_basic;
        $intellectual->type = 2;
        $intellectual->year = $year;
        $intellectual->headgrade = $intellectual_headgrade;
        $intellectual->basic = $intellectual_basic;
        $sport->type = 3;
        $sport->year = $year;
        $sport->headgrade = $sport_headgrade;
        $sport->basic = $sport_basic;
        $character->save();
        $intellectual->save();
        $sport->save();
        return $this->render('set');
    }

    /**
     * @return string
     * @desc 学生信息录入
     */
    public function actionStudent(){
        $file_return_msg = "";
        if (key_exists('file',$_FILES)){
            $file_name = FileHelper::uploadByForm('file',['csv']);
            if ($file_name){
                $content = FileHelper::getContent($file_name);
                foreach ($content as $item){
                    $arr = explode(',',trim($item));
                    $student = new Student();
                    $student->stu_id = $arr[0];
                    $student->stu_name = $arr[1];
                    $student->stu_sex = $arr[2];
                    $student->stu_year = $arr[3];
                    $student->class = $arr[4];
                    $student->work = $arr[5];
                    $student->stu_class = $arr[6];
                    $student->bedroom = $arr[7];
                    $student->save();
                }
                $file_return_msg = '导入成功';
            }else{
                $file_return_msg = '文件格式有误';
            }
        }
        $out = [
            'return_msg' => $file_return_msg,
        ];
        return $this->render("student",$out);
    }

    /**
     * @return string
     * @desc 班级信息录入
     */
    public function actionClass(){
        $file_return_msg = "";
        if (key_exists('file',$_FILES)){
            $file_name = FileHelper::uploadByForm('file',['csv']);
            if ($file_name){
                $content = FileHelper::getContent($file_name);
                foreach ($content as $item){
                    $arr = explode(',',trim($item));
                    $class = new StuClass();
                    $class->college_id = $arr[0];
                    $class->college_name = $arr[1];
                    $class->major_id = $arr[2];
                    $class->major_name = $arr[3];
                    $class->class_id = $arr[4];
                    $class->class_name = $arr[5];
                    $class->save();
                }
                $file_return_msg = '导入成功';
            }else{
                $file_return_msg = '文件格式有误';
            }
        }
        $out = [
            'return_msg' => $file_return_msg,
        ];
        return $this->render("class",$out);
    }

    /**
     * @return string
     * @desc 班级信息录入
     */
    public function actionDzt(){
        $class = Yii::$app->request->post('class');
        $file_return_msg = "";
        if (key_exists('file',$_FILES)){
            $file_name = FileHelper::uploadByForm('file',['csv']);
            if ($file_name){
                $content = FileHelper::getContent($file_name);
                foreach ($content as $item){
                    $arr = explode(',',trim($item));
                    $grade = new Grade();
                    $grade->stu_id = $arr[0];
                    $grade->name = $arr[1];
                    $grade->year = date('Y');
                    $grade->class_name = $arr[2];
                    $grade->grade = $arr[3];
                    $grade->class_name = $class;
                    $grade->save();
                }
                $file_return_msg = '导入成功';
            }else{
                $file_return_msg = '文件格式有误';
            }
        }
        $out = [
            'return_msg' => $file_return_msg,
        ];
        return $this->render("dzt",$out);
    }

    /**
     * @return string
     * @desc 加分可申请项目设置界面
     */
    public function actionGradeAddSet(){
        $page = Yii::$app->request->get('page',1);
        $pagesize = 10;
        $offset = ($page - 1) * $pagesize;
        $cnt = GradeAddSet::find()->count();
        $all_page = ceil($cnt / $pagesize);
        if ($page > $all_page - 1){
            $page = $all_page - 1;
        }elseif($page < 1){
            $page = 1;
        }
        $data = GradeAddSet::find()->limit($pagesize)->offset($offset)->asArray()->all();
        $out = [
            'all_data' => $data,
            'page' => $page,
            'all_page' => ceil($cnt / $pagesize),
        ];
        return $this->render('grade-add-set',$out);
    }

    /**
     * @return string
     * @desc 可申请项目设置添加修改
     */
    public function actionGradeAddSetAdd(){
        $params['type'] = Yii::$app->request->post('type');
        $params['reason'] = Yii::$app->request->post('reason');
        $params['grade'] = Yii::$app->request->post('grade');
        $params['id'] = Yii::$app->request->get('id',0);
        $params['check'] = Yii::$app->request->post('check',0);

        if ($params['id']){
            $nav_bar = GradeAddSet::getById($params['id']);
        }else{
            $nav_bar = new GradeAddSet();
        }

        if ($params['check']){
            $nav_bar->type = $params['type'];
            $nav_bar->reason = $params['reason'];
            $nav_bar->grade = $params['grade'];
            $nav_bar->year = date('Y');
            $result = $nav_bar->save();
            if ($result){
                $return_msg = '添加成功';
            }else{
                $return_msg = '添加失败，请咨询管理员!';
            }
        }else{
            $return_msg = '';
        }
        $data = GradeAddSet::find()->asArray()->all();
        $out = [
            'data' => $data,
            'msg' => $return_msg,
            'type' => $nav_bar->type,
            'reason' => $nav_bar->reason,
            'grade' => $nav_bar->grade,
            'id' => $nav_bar->id,
        ];
        return $this->render('grade-add-set-add',$out);
    }

    public function actionDemerit(){
        $number = Yii::$app->request->post('number');
        $reason = Yii::$app->request->post('reason','');
        $msg = '';
        $stu_data = Student::find()->asArray()->all();

        if ($number){
            $grade_add = new GradeAdd();
            $grade_add->stu_number = $number;
            $grade_add->reason = $reason;
            $grade_add->class = 100;
            $grade_add->status = 0;
            $grade_add->year = date('Y');
            $result = $grade_add->save();
            if ($result){
                $msg = '添加成功';
            }else{
                $msg = '添加失败，请重试';
            }
        }
        $out = [
            'msg' => $msg,
            'stu_data' => $stu_data,
        ];
        return $this->render('demerit',$out);
    }
}