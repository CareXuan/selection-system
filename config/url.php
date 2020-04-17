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
    'privilege-management/role' => 'web/privilege-management/role',
    'privilege-management/add-role' => 'web/privilege-management/add-role',
    'privilege-management/del-role' => 'web/privilege-management/del-role',
    'privilege-management/user' => 'web/privilege-management/user',
    'privilege-management/add-user' => 'web/privilege-management/add-user',
    'privilege-management/del-user' => 'web/privilege-management/del-user',

    //信息导入
    'message-add/character' => 'web/message-add/character',

    //登录相关
    'user/login' => 'web/user/login',
    'user/logout' => 'web/user/logout',

    //加分申请
    'add-apply/character' => 'web/add-apply/character',

    //申请审核
    'add-check/unaudited' => 'web/add-check/unaudited',
    'add-check/audited' => 'web/add-check/audited',
    'add-check/check' => 'web/add-check/check',
    'add-check/check-status' => 'web/add-check/check-status',
  ]
];