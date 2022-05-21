<?php

require_once 'router.php';

post('/ajax/login', 'ajaxs/authentication/login.php');
post('/ajax/register', 'ajaxs/authentication/register.php');

get('/ajax/cart', 'ajaxs/cart/cart_list.php');
post('/ajax/cart', 'ajaxs/cart/cart_add.php');
delete('/ajax/cart/$itemId', 'ajaxs/cart/cart_remove.php');
delete('/ajax/cart-clear', 'ajaxs/cart/cart_clear.php');

post('/ajax/checkout', 'ajaxs/checkout.php');