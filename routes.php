<?php

require_once 'router.php';

post('/ajax/login', 'ajaxs/authentication/login.php');
post('/ajax/register', 'ajaxs/authentication/register.php');

get('/ajax/cart', 'ajaxs/cart/cart_list.php');
post('/ajax/cart', 'ajaxs/cart/cart_add.php');
delete('/ajax/cart/$itemId', 'ajaxs/cart/cart_remove.php');
delete('/ajax/cart-clear', 'ajaxs/cart/cart_clear.php');

post('/ajax/checkout', 'ajaxs/checkout.php');

get('/ajax/history', 'ajaxs/history/history_list.php');
get('/ajax/history/$historyId', 'ajaxs/history/history_detail.php');

get('/', 'views/pages/home.php');
get('/authentication', 'views/pages/regist-login.php');
get('/checkout', 'views/pages/checkout.php');
get('/cart', 'views/pages/cart.php');

get('/store/acoustic', 'views/pages/store/acoustic.php');
get('/store/capo', 'views/pages/store/capo.php');
get('/store/electric', 'views/pages/store/electric.php');
get('/store/pedals', 'views/pages/store/pedals.php');
get('/store/acoustic', 'views/pages/store/acoustic.php');
get('/store/straps', 'views/pages/store/straps.php');
get('/store/strings', 'views/pages/store/strings.php');