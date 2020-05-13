<?php


namespace app\controllers\web;

use app\models\StuClass;
use app\models\Student;
use Yii;
use yii\web\Controller;

class SystemManagementController extends BaseController
{
    public function actionStudentAdmin(){
        $result = Student::find()->asArray()->all();
        $out = [
            'data' => $result,
        ];
        return $this->render("student-admin",$out);
    }

    public function actionStudentAdminChange(){
        $id = Yii::$app->request->get('id',0);
        $result = Student::findOne(['id' => $id]);
        $out = [
            'data' => $result,
        ];
        return $this->render("student-admin-change",$out);
    }

    public function actionStudentChange(){
        $id = Yii::$app->request->post('id');
        $stu_id = Yii::$app->request->post('stu_id');
        $stu_name = Yii::$app->request->post('stu_name');
        $stu_sex = Yii::$app->request->post('stu_sex');
        $stu_year = Yii::$app->request->post('stu_year');
        $class = Yii::$app->request->post('class');
        $work = Yii::$app->request->post('work');
        $stu_class = Yii::$app->request->post('stu_class');
        $bedroom = Yii::$app->request->post('bedroom');

        $student = Student::getById($id);
        $student->stu_id = $stu_id;
        $student->stu_name = $stu_name;
        $student->stu_sex = $stu_sex;
        $student->stu_year = $stu_year;
        $student->class = $class;
        $student->work = $work;
        $student->stu_class = $stu_class;
        $student->bedroom = $bedroom;
        $student->save();

        $result = Student::find()->asArray()->all();
        $out = [
            'data' => $result,
        ];
        return $this->render("student-admin",$out);
    }

    public function actionClassAdmin(){
        $result = StuClass::find()->asArray()->all();
        $out = [
            'data' => $result,
        ];
        return $this->render("class-admin",$out);
    }

    public function actionClassAdminChange(){
        $id = Yii::$app->request->get('id',0);
        $result = StuClass::findOne(['id' => $id]);
        $out = [
            'data' => $result,
        ];
        return $this->render("class-admin-change",$out);
    }

    public function actionClassChange(){
        $id = Yii::$app->request->post('id');
        $college_id = Yii::$app->request->post('college_id');
        $college_name = Yii::$app->request->post('college_name');
        $major_id = Yii::$app->request->post('major_id');
        $major_name = Yii::$app->request->post('major_name');
        $class_id = Yii::$app->request->post('class_id');
        $class_name = Yii::$app->request->post('class_name');

        $class = StuClass::getById($id);
        $class->college_id = $college_id;
        $class->college_name = $college_name;
        $class->major_id = $major_id;
        $class->major_name = $major_name;
        $class->class_id = $class_id;
        $class->class_name = $class_name;
        $class->save();

        $result = StuClass::find()->asArray()->all();
        $out = [
            'data' => $result,
        ];
        return $this->render("class-admin",$out);
    }

    public function actionCadreAdmin(){
        $result = Student::find()->where(['!=','work',''])->asArray()->all();
        $out = [
            'data' => $result,
        ];
        return $this->render('cadre-admin',$out);
    }
}