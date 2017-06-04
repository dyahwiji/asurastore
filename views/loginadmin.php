<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
      <link rel="stylesheet" href="<?php echo base_url('assets/css/loginstyle.css');?>">
</head>

  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
    <form method="post" action="<?php echo base_url().'AdminLoginController/adminlogin'?>">
			<div class="login-form">
				<div class="control-group">
				<input type="text" name="admin_name" class="login-field" value="" placeholder="username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                    
				<div class="control-group">
				<input type="password" name="pass_admin" class="login-field" value="" placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
                
                <div>                    
                    <input type="submit" value="Login">
			</div>
		</div>
            </form>
        </div>
      </div>
    </body>
