<?php
/**
 * Created by PhpStorm.
 * User: 刘懿萱
 * Date: 2020/1/22
 * Time: 16:39
 */

return [
  'enablePrettyUrl' => true,
  'showScriptName' => false,
  'rules' => [
    'index' => 'web/index/index',
    'test' => 'web/index/test',

    //最佳班级
    'best-class/ranking' => 'web/best-class/ranking',
    'best-class/necessary' => 'web/best-class/necessary',

    //导航栏管理
    'privilege-management/index' => 'web/privilege-management/index',
    'privilege-management/add' => 'web/privilege-management/add',

    //信息导入
    'message-add/character' => 'web/message-add/character',
  ]
];