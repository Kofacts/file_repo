<?php

include '../DB.php';

use inyavicsage\DB;

DB::conn('1st');

var_dump(DB::quote('"username"'));

$SQLStatement = 'SELECT `username` FROM `users` WHERE `id` = 1';
$usernames = DB::query($SQLStatement);

foreach ($usernames as $username) {
	var_dump($username);
}
