<?php
/**
 * Created by PhpStorm.
 * User: 刘懿萱
 * Date: 2020/1/22
 * Time: 9:43
 */

namespace common\helper;

use Yii;

class HttpHelper {
  public static function curl($url, $json='', $type='POST', $token = '', $header = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    if ($token) {
      curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Postman-Token: '.$token
      ]);
    }
    if ($header) {
      curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }
}