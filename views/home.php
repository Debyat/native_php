<?php require "layout/header.php" ?>
<style>
    html body{
        height: 100%;
        background-image: url('../public/images/Homebackground.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
    <div class = "navbar navbar-default">
        <?php include('common/logo.php') ?>
    </div>
    <div id = "top" class = "login">
		<div class = "panel panel-primary">
			<div class = "panel-heading">
				<center><h1 class = "panel-title">Administrator</h1></center>
			</div>
			<div class = "panel-body">
				<form enctype = "multipart/form-data" action = "/login" role = "form" method = "POST">
					<div class = "form-group">
						<label for = "username">Username</label>
						<input class = "form-control" name = "username" placeholder = "Username" type = "text" required = "required" >
					</div>
					<div class = "form-group">
						<label for = "password">Password</label>
						<input class = "form-control" name = "password" placeholder = "Password" type = "password" required = "required" >
					</div>
					<div class = "form-group">
						<button class = "btn btn-block btn-success"  name = "login"><span class = "glyphicon glyphicon-log-in"></span> Login</button>
					</div>
				</form>
			</div>
		</div>	
	</div>
<?php require "layout/footer.php" ?>