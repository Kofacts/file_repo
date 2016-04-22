$(document).ready(function(){
	$.when(
		$.getScript('resources/bootstrap-3.3.6-dist/js/bootstrap.min.js'),
		$.getScript('resources/inyavic.js'),
		$.Deferred(function(deferred){
			$(deferred.resolve);
		})
	).done(function(){
		var input = new Inyavic.Inputs({
			'username': 'Inyavic Sage',
			'password': '1234',
			'email-address': 'inyavicsage@inyavic.com',
			'phone-number': '+2348012345678'
		});
		
		input.checkFilter({
			'username': {'filter': /^[a-z_\-0-9]+$/i},
			'email-address': {'filter': /^.+@.+\..+$/},
			'phone-number': {'filter': /^[+0-9]+$/}
		});
		
		input.checkLength({
			'username': {'length': {'minimum': 3, 'maximum': 20}},
			'password': {'length': {'minimum': 6, 'maximum': 50}},
			'email-address': {'length': {'minimum': 5, 'maximum': 50}},
			'phone-number': {'length': {'minimum': 5, 'maximum': 20}}
		});
		
		input.checkUniqueness({
			'username': {'table': 'accounts'},
			'email-address': {'table': 'accounts'},
			'phone-number': {'table': 'accounts'}
		});
		
		console.log(input.getErrors());
	});
});