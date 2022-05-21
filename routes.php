<?php

require_once 'router.php';

post('/ajax/login', 'ajaxs/authentication/login.php');
post('/ajax/register', 'ajaxs/authentication/register.php');