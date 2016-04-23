{strip}
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>{block name=title}{/block}</title>
			<link href="{$website_url}/res/styles.css" rel="stylesheet">
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
			{block name=head}{/block}
		</head>
		<body>
			{block name=body}{/block}
			<script src="{$website_url}/res/jquery-1.12.3.min.js"></script>
			<script src="{$website_url}/res/script.js"></script>
		</body>
	</html>
{/strip}