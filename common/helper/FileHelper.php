<?php
/**
 * Created by PhpStorm.
 * User: 刘懿萱
 * Date: 2020/1/22
 * Time: 9:39
 */

namespace common\helper;

use Yii;

class FileHelper {
  public static function getFileLines($file_name){
    ini_set('memory_limit', '2G');
    $file = @fopen($file_name, 'r');
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