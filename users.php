<?php

require_once 'init.php';

$smarty = init_new_smarty();
$smarty->assign('section_title', 'Users');

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'signup') {
		$pageName = 'Sign Up';
	} else if ($_GET['action'] == 'signin') {
		$pageName = 'Sign In';
	} else {
		header('Location: ' . WEBSITE_URL);
		exit();
	}
} else {
	header('Location: ' . WEBSITE_URL);
	exit();
}

$smarty->assign('page_title', $pageName);
$smarty->display('users/' . $_GET['action'] . '.tpl');