$(document).ready(function(){
	$.when(
		$.getScript('public/bootstrap-3.3.6-dist/js/bootstrap.min.js'),
		$.getScript('public/inyavicsage.js'),
		$.Deferred(function(deferred){
			$(deferred.resolve);
		})
	).done(function(){
		$('input[data-check]').keypress(function(){
			var inputs = $('input[data-check]').val();;
			console.log(inputs);
			//$(this).parents('div.form-group').find('[data-error]').val('ok');
		});

		function tt() {

		}

		var inputs = new inyavicsage.Inputs({
			'username': 'Inyavic Sage',
			'password': '1234',
			'email_address': 'inyavicsage@gmail.com',
			'phone_number': '+2348012345678'
		});
		
		inputs.chkFilter({
			'username': {'filter': /^[a-z_\-0-9]+$/i},
			'email_address': {'filter': /^.+@.+\..+$/},
			'phone_number': {'filter': /^[+0-9]+$/}
		});
		
		inputs.chkLen({
			'username': {'len': {'min': 3, 'max': 20}},
			'password': {'len': {'min': 6, 'max': 50}},
			'email_address': {'len': {'min': 5, 'max': 50}},
			'phone_number': {'len': {'min': 5, 'max': 20}}
		});
		
		inputs.chkUniqness({
			'username': {'tbl': 'users'},
			'email_address': {'tbl': 'users'},
			'phone_number': {'tbl': 'users'}
		}, '1st', 'ajax_returns/users.php');

		inputs.changeDetails({
			'password': '123456'
		});
		
		console.log(inputs.getErrs('chk'));
	});
});