<?php namespace inyavicsage;

use \inyavicsage\DB;

class Inputs {
	private $details;
	private $errs;

	public function __construct(array $details) {
		$this->details = $details;
	}

	public function getDetails() {
		return $this->details;
	}

	public function changeDetails(array $details) {
		foreach ($details as $inputID => $input) {
			$this->details[$inputID] = $input;
		}
	}

	public function chkFilter(array $rules) {
		foreach ($rules as $inputID => $rule) {
			$input = $this->details[$inputID];
			$funcName = $rule['func_name'];
			$filter = $rule['filter'];

			$err = false;

			if ($funcName == 'preg_match') {
				if (! preg_match($filter, $input)) {
					$err = true;
				}
			} else if ($funcName == 'filter_var') {
				if (! filter_var($input, $filter)) {
					$err = true;
				}
			}

			if ($err) {
				$this->errs['chk'][$inputID] = 'This ' . str_replace('_', ' ', $inputID)
					. ' is invalid.';
			}
		}
	}

	public function chkLen(array $rules) {
		foreach ($rules as $inputID => $rule) {
			$input = $this->details[$inputID];
			$minLen = $rule['len']['min'];
			$maxLen = $rule['len']['max'];

			$err = false;

			if (strlen($input) < $minLen) {
				$err = 'short';
			} else if (strlen($input) > $maxLen) {
				$err = 'long';
			}

			if ($err) {
				$this->errs['chk'][$inputID] = 'This ' . str_replace('_', ' ', $inputID)
					. ' is too ' . $err . '.';
			}
		}
	}

	public function chkUniqness(array $rules, $dbPos) {
		DB::conn($dbPos);
		
		foreach ($rules as $inputID => $rule) {
			$input = $this->details[$inputID];
			$tbl = $rule['tbl'];

			$SQLStatement = 'SELECT `' . $inputID . '` FROM `' . $tbl . '` WHERE `' . $inputID
				. '` = ' . DB::quote($input);
			$usersDetails = DB::query($SQLStatement);

			foreach ($usersDetails as $userDetail) {
				if ($input == $userDetail[$inputID]) {
					$this->errs['chk'][$inputID] = 'This ' . str_replace('_', ' ', $inputID)
						. ' already exist in our database.';
				}
			}
		}
	}

	public function save(array $inputIDs, $tbl, $dbPos) {
		DB::conn($dbPos);

		$cols = null; $vals = null;
		foreach ($inputIDs as $index => $inputID) {
			if ($index + 1 == count($inputIDs)) {
				$cols = $cols . '`' . $inputID . '`';
				$vals = $vals . DB::quote($this->details[$inputID]);
			} else {
				$cols = $cols . '`' . $inputID . '`, ';
				$vals = $vals . DB::quote($this->details[$inputID]) . ', ';
			}
		}

		$SQLStatement = 'INSERT into `' . $tbl . '` (' . $cols . ') VALUES (' . $vals . ')';
		DB::query($SQLStatement);
	}

	public function getErrs($funcAction) {
		return $this->errs[$funcAction];
	}
}