var Inyavic = Inyavic || {};

Inyavic.Inputs = function (details) {
	this.details = details;
	this.errors = new Object();
	this.errors.check = new Object();
}

Inyavic.Inputs.prototype = {
	constructor: this,
	checkFilter: function (rules) {
		for (rule in rules) {
			var inputID = rule;
			var input = this.details[rule];
			var filter = rules[rule].filter;
			var regExp = new RegExp(filter);
			
			if (! regExp.test(input)) {
				this.errors.check[inputID] = 'This ' + inputID.replace('-', ' ') + ' is invalid.';
			}
		}
	},
	checkLength: function (rules) {
		var error;
		
		for (rule in rules) {
			var inputID = rule;
			var input = this.details[rule];
			var minimumLength = rules[rule].length.minimum;
			var maximumLength = rules[rule].length.maximum;
			
			if (input.length < minimumLength) {
				error = 'short';
			} else if (input.length > maximumLength) {
				error = 'long';
			} else {
				error = null;
			}
			
			if (error) {
				this.errors.check[inputID] = 'This ' + inputID.replace('-', ' ') + ' is too ' + error + '.';
			}
		}
	},
	checkUniqueness: function (rules) {
		for (rule in rules) {
			var inputID = rule;
			var input = this.details[rule];
			var table = rules[rule].table;
			
			$.post('http://localhost/Inyavic/ajaxpages/accounts.php', {
				'action': 'check-uniqueness', 'input-id': inputID, 'input': input, 'table': table
			}, function(data){
				console.log(data);
			});
		}
	},
	getErrors: function () {
		return this.errors;
	}
}

//		uniqueness: function (inputNames) {
//			for (var i = 0; i < inputNames.length; i++) {
//				var inputName = Object.keys(this.details[inputName]);
//				var table = this.details[$inputName]['check']['uniqueness']['table'];
//				var inputValue = this.details[inputName]['inputValue'];
//				
//			}
//		}
//	}