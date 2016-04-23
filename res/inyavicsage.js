var inyavicsage = inyavicsage || {};

inyavicsage.Inputs = function (details) {
	this.details = details;
	this.errs = new Object();
	this.errs.chk = new Object();
}

inyavicsage.Inputs.prototype = {
	constructor: this,
	getDetails: function () {
		return this.details;
	},
	changeDetails: function (details) {
		for (inputID in details) {
			this.details[inputID] = details[inputID];
		}
	},
	chkFilter: function (rules) {
		for (inputID in rules) {
			var input = this.details[inputID];
			var filter = rules[inputID].filter;
			var regExp = new RegExp(filter);
			
			if (! regExp.test(input)) {
				this.errs.chk[inputID] = 'This ' + inputID.replace('-', ' ') + ' is invalid.';
			}
		}
	},
	chkLen: function (rules) {
		for (inputID in rules) {
			var input = this.details[inputID];
			var minLen = rules[inputID].len.min;
			var maxLen = rules[inputID].len.max;
			
			var err = false;

			if (input.length < minLen) {
				err = 'short';
			} else if (input.length > maxLen) {
				err = 'long';
			}
			
			if (err) {
				this.errs.chk[inputID] = 'This ' + inputID.replace('-', ' ') + ' is too '
				+ err + '.';
			}
		}
	},
	chkUniqness: function (rules, dbPos, ajaxReturnURL) {
		for (inputID in rules) {
			var input = this.details[inputID];
			var tbl = rules[inputID].tbl;
			
			$.post(ajaxReturnURL, {
				'action': 'chk_uniqness', 'input_id': inputID, 'input': input, 'tbl': tbl,
				'db_pos': dbPos
			}, function(data){
				console.log(data);
			});
		}
	},
	getErrs: function (funcType) {
		return this.errs[funcType];
	}
}