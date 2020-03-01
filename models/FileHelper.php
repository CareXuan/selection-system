<?php


namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class FileHelper extends ActiveRecord
{
    public static function uploadByForm($input_name,$class_check_arr,$save_dir = '/tmp/upload/'){
        $file = $_FILES[$input_name];
        $tmp_name = $file['tmp_name'];

        $arr = explode('.',$file['name']);
        $data = end($arr);
        if (in_array($data,$class_check_arr)){
            if (!is_dir($save_dir)){
                mkdir($save_dir);
            }
            $save_file = $save_dir.$file['name'];
            move_uploaded_file($tmp_name,$save_file);
            return $save_file;
        }else{
            return false;
        }
    }

    public static function getContent($txtfile) {
        ini_set('memory_limit', '4G');
        $file = @fopen($txtfile, 'r');
        $content = array();
        if (!$file) {
            return 'file open fail';
        } else {
            $i = 0;
            while (!feof($file)) {
                $content[$i] = mb_convert_encoding(fgets($file), "UTF-8");
                $i++;
            }
            fclose($file);
            $content = array_filter($content); //数组去空
        }

        return $content;
    }
}