{extends file='users/main.tpl'}
{block name=title}{$page_title} - {$website_title} {$section_title}{/block}
{block name=body}{strip}
	<div class="container-fluid">
		<div class="row">
			<div class="modal-dialog">
				<form class="form-horizontal" action="{$website_url}/users/signup.php" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title">{$page_title}</h1>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<b class="col-sm-offset-2 col-sm-10 text-right text-danger">{if isset($errors.username)}{$errors.username}{/if}</b>
								<label class="col-sm-2 control-label" for="username">Username</label>
								<div class="col-sm-10">
									<input name="username" id="username" class="form-control" type="text" value="{if isset($inputs.username)}{$inputs.username|escape}{/if}" placeholder="Enter your username here">
									<span class="help-block">[3-20 characters]</span>
								</div>
							</div>
							<div class="form-group">
								<b class="col-sm-offset-2 col-sm-10 text-right text-danger">{if isset($errors.password)}{$errors.password}{/if}</b>
								<label class="col-sm-2 control-label" for="password">Password</label>
								<div class="col-sm-10">
									<input name="password" id="password" class="form-control" type="password" value="{if isset($inputs.password)}{$inputs.password|escape}{/if}" placeholder="Enter your password here">
									<p class="pull-left help-block">[6-50 characters]</p>
									<label class="pull-right"><input type="checkbox"> Show</label>
								</div>
							</div>
							<div class="form-group">
								<b class="col-sm-offset-2 col-sm-10 text-right text-danger">{if isset($errors.email_address)}{$errors.email_address}{/if}</b>
								<label class="col-sm-2 control-label" for="email_address">Email Address</label>
								<div class="col-sm-10">
									<input name="email_address" id="email_address" class="form-control" type="email" value="{if isset($inputs.email_address)}{$inputs.email_address|escape}{/if}" placeholder="Enter your email address here">
									<p class="help-block">[5-50 characters]</p>
								</div>
							</div>
							<div class="form-group">
								<b class="col-sm-offset-2 col-sm-10 text-right text-danger">{if isset($errors.phone_number)}{$errors.phone_number}{/if}</b>
								<label class="col-sm-2 control-label" for="phone_number">Phone Number</label>
								<div class="col-sm-10">
									<input name="phone_number" id="phone_number" class="form-control" type="tel" value="{if isset($inputs.phone_number)}{$inputs.phone_number|escape}{/if}" placeholder="Enter your phone number here">
									<p class="help-block">[5-20 characters]</p>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="col-sm-offset-2 col-sm-10">
								<button class="btn btn-primary" type="submit">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
{/strip}{/block}