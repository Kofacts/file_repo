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
								<p class="text-right text-danger">dddd</p>
								<label class="col-sm-2 control-label" for="username">Username</label>
								<div class="col-sm-10">
									<input name="username" id="username" class="form-control" type="text" placeholder="Enter your username here">
									<span class="help-block">[3-20 characters]</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="password">Password</label>
								<div class="col-sm-10">
									<input name="password" id="password" class="form-control" type="password" placeholder="Enter your password here">
									<p class="help-block">[6-50 characters]</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="email_address">Email Address</label>
								<div class="col-sm-10">
									<input name="email_address" id="email_address" class="form-control" type="email" placeholder="Enter your email address here">
									<p class="help-block">[5-50 characters]</p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="phone_number">Phone Number</label>
								<div class="col-sm-10">
									<input name="phone_number" id="phone_number" class="form-control" type="tel" placeholder="Enter your phone number here">
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