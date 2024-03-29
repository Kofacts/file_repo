{extends file='users/main.tpl'}
{block name=title}{$page_title} - {$website_title} {$section_title}{/block}
{block name=body}{strip}
	<div class="container-fluid">
		<div class="row">
			<div class="modal-dialog">
				<form class="form-horizontal" action="{$website_url}/users/signin.php" method="post">
					<div class="modal-content">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title">{$page_title}</h1>
						</div>
						<div class="modal-body">
							{if isset($smarty.get.msg)}<div class="alert alert-info text-center" role="alert">{$smarty.get.msg|escape}</div>{/if}
							<div class="form-group">
								<b class="col-sm-offset-2 col-sm-10 text-right text-danger">{if isset($errors.username)}{$errors.username}{/if}</b>
								<label class="col-sm-4 control-label" for="username">
									<select>
										<option value="username">Username</option>
										<option value="email-address">Email Address</option>
										<option value="phone-number">Phone Number</option>
									</select>
								</label>
								<div class="col-sm-8">
									<input name="username" id="username" class="form-control" type="text" placeholder="Enter your username here">
								</div>
							</div>
							<div class="form-group">
								<b class="col-sm-offset-2 col-sm-10 text-right text-danger">{if isset($errors.password)}{$errors.password}{/if}</b>
								<label class="col-sm-4 control-label" for="password">Password</label>
								<div class="col-sm-8">
									<input name="password" id="password" class="form-control" type="password" placeholder="Enter your password here">
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