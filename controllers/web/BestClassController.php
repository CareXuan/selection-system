<?php


namespace app\controllers\web;

use app\models\BestClassNecessary;
use Yii;
use yii\web\Controller;

class BestClassController extends BaseController
{
    public function actionRanking(){
        return $this->render('ranking');
    }

    public function actionNecessary(){
        $params['grade'] = Yii::$app->request->post('grade','');
        $params['major'] = Yii::$app->request->post('major','');
        $params['class'] = Yii::$app->request->post('class','');

        $where = ['and'];
        if ($params['grade']){
            $where[] = ['=','grade',$params['grade']];
        }
        if ($params['major']){
            $where[] = ['=','major',$params['major']];
        }
        if ($params['class']){
            $where[] = ['=','class',$params['class']];
        }

        $result = BestClassNecessary::find()
            ->where($where)
            ->asArray()
            ->all();

        $select = "grade,AVG(avg_grade) as avg_grade,AVG(error_cnt) as avg_error_cnt,AVG(warning_cnt) as avg_warning_cnt,AVG(super_avg_grade) as avg_super_cnt";

        $avg_result = BestClassNecessary::find()
            ->select($select)
            ->where($where)
            ->groupBy('grade')
            ->asArray()
            ->all();

        $option_data = BestClassNecessary::find()
            ->select('grade,major,class')
            ->groupBy('grade,major,class')
            ->asArray()
            ->all();

        $return_option_data = [
            'grade' => [],
            'major' => [],
            'class' => []
        ];
        foreach ($option_data as $option_val){
            if (!in_array($option_val['grade'],$return_option_data['grade'])){
                $return_option_data['grade'][] = $option_val['grade'];
            }
            if (!in_array($option_val['major'],$return_option_data['major'])){
                $return_option_data['major'][] = $option_val['major'];
            }
            if (!in_array($option_val['class'],$return_option_data['class'])){
                $return_option_data['class'][] = $option_val['class'];
            }
        }
        $out = [
            'data' => $result,
            'avg_data' => $avg_result,
            'return_option' => $return_option_data,
            'return_grade' => $params['grade'],
            'return_major' => $params['major'],
            'return_class' => $params['class'],
        ];
        return $this->render('necessary',$out);
    }
}