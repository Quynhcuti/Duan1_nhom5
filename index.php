<?php

session_start();

// Require file trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
require_once './commons/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);



// Điều hướng
$act = $_GET['act'] ?? '/';


// khai báo được link cần đăng nhập thì mới được vào
$arrRouteNeedAuth = [
    'cart-add',
    'cart-list',
    'cart-icn',
    'cart-dec',
    'cart-delete'
];




require_once './commons/disconnect-db.php';
