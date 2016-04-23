<?php

include '../init.php';

use \inyavicsage\Inputs;
use \inyavicsage\DB;

$inputs = new Inputs([
	'username' => $_POST['username'],
	'password' => $_POST['password'],
	'email_address' => $_POST['email_address'],
	'phone_number' => $_POST['phone_number']
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

$smarty = init_new_smarty();
$smarty->assign('inputs', $_POST);

if ($inputs->getErrs('chk')) {
	$smarty->assign('section_title', 'Users');
	$smarty->assign('page_title', 'Sign Up');
	$smarty->assign('errors', $inputs->getErrs('chk'));
	$smarty->display('users/signup.tpl');
} else {
	DB::conn('1st');

	$SQLStatement = 'INSERT into `users` (
		`username`, `password`, `email_address`, `phone_number`
	) VALUES ('
		. DB::quote($_POST['username']) . ',' . DB::quote($_POST['password']) . ','
		. DB::quote($_POST['email_address']) . ',' . DB::quote($_POST['phone_number'])
	. ')';
	DB::query($SQLStatement);

	$msg = 'Your sign up was successful. Please sign in to continue.';
	header('Location: ' . WEBSITE_URL . '/users.php?action=signin&msg=' . $msg);
	exit();
}