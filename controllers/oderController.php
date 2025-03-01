<?php

function orderCheckOut()
{
    $title = 'Trang thanh toán';
    $view = 'checkout/checkOut';
    $style = 'checkout';
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        header('Location:' . BASE_URL . '?act=cart-list');
        exit();
    }
    require_once PATH_VIEW . 'layouts/client.php';
}

