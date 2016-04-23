<?php

include '../Inputs.php';
include '../DB.php';

use inyavicsage\Inputs;

$inputs = new Inputs([
	'username' => 'Inyavic Sage',
	'password' => '1234',
	'email_address' => 'inyavicsage@inyavic.com',
	'phone_number' => '+2348012345678'
]);

$inputs->chkFilter([
	'username' => ['func_name' => 'preg_match', 'filter' => '/^[a-z_\-0-9]+$/i'],
	'email_address' => ['func_name' => 'filter_var', 'filter' => FILTER_VALIDATE_EMAIL],
	'phone_number' => ['func_name' => 'preg_match', 'filter' => '/^[+0-9]+$/']
]);

$inputs->chkLen([
	'username' => ['len' => ['min' => 3, 'max' => 20]],
	'password' => ['len' => ['min' => 6, 'max' => 50]],
	'email_address' => ['len' => ['min' => 5, 'max' => 50]],
	'phone_number' => ['len' => ['min' => 5, 'max' => 20]]
]);

$inputs->chkUniqness([
	'username' => ['tbl' => 'users'],
	'email_address' => ['tbl' => 'users'],
	'phone_number' => ['tbl' => 'users']
], '1st');

var_dump($inputs->getErrs('chk'));

$inputs->changeDetails([
	'password' => password_hash($inputs->getDetails()['password'], PASSWORD_DEFAULT)
]);

var_dump($inputs->getDetails());