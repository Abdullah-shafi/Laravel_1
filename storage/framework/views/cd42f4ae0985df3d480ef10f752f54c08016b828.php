<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	<form method="post" >
		<?php echo csrf_field(); ?>
<!-- 		<?php echo e(csrf_field()); ?> -->		
<!-- 		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> -->
		Username: <input type="text" name="uname" > <br>
		Password: <input type="password" name="password" ><br>
		<input type="submit" name="submit" value="Submit" >
	</form>
</body>
</html><?php /**PATH E:\AWeb\Spring_2020_laravel-master\A\laratest\resources\views/login/index.blade.php ENDPATH**/ ?>