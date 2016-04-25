<?php

include '../init.php';

use inyavicsage\Inputs;

if (isset($_POST['action'])) {
	if ($_POST['action'] == 'chk_uniqness') {
		if (isset($_POST['input_id']) && isset($_POST['input']) && isset($_POST['tbl'])
		&& isset($_POST['db_pos'])) {
			$inputs = new Inputs([
				$_POST['input_id'] => $_POST['input']
			]);
			
			$inputs->chkUniqness([
				$_POST['input_id'] => ['tbl' => $_POST['tbl']]
			], $_POST['db_pos']);

			if ($inputs->getErrs('chk')[$_POST['input_id']]) {
				echo 'true';
			} else {
				echo 'false';
			}
		}
	}
}