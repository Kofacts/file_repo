<?php

define('SMARTY_DIR', __DIR__ . '/libs/smarty/libs/');
define('WEBSITE_TITLE', 'File Repository');
define('WEBSITE_URL', 'http://localhost/file_repo');

spl_autoload_register(function ($classNamespaceName) {
	$classPath = __DIR__ . '/libs/' . str_replace('\\', '/', $classNamespaceName) . '.php';

	if (file_exists($classPath)) {
		require_once $classPath;
	}
});

function init_new_smarty() {
	require_once SMARTY_DIR . 'Smarty.class.php';

	$smarty = new Smarty();
	$smarty->setTemplateDir(SMARTY_DIR . 'templates');
	$smarty->setCompileDir(SMARTY_DIR . 'templates_c');
	$smarty->setConfigDir(SMARTY_DIR . 'configs');
	$smarty->setCacheDir(SMARTY_DIR . 'cache');
	$smarty->assign('website_title', WEBSITE_TITLE);
	$smarty->assign('website_url', WEBSITE_URL);

	return $smarty;
}