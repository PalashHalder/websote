<!doctype html>

<html lang="en">
<?php include 'header.php'; ?>

<!---This section is for navbar-->

<?php include 'menu.php'; ?>

<body>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Your Comments</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<level>Username</level>
					<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<level>Email</level>
					<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<level>Mobile</level>
					<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<level>Comments</level>
					<textarea class="form-control" name="comments">
					</textarea>
			</div>
			<button type="text" class="btn btn-success">Submit</button>                                <!-- success is color variable like primary.....-->
		</form>
	</div>
</section>

<?php include 'social.php'; ?>

<!--This section goes for Footer-->
<?php include 'footer.php'; ?>
    
  </body>
</html>