<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home!</h1>&nbsp
	<a href="<?php echo e(route('home.list')); ?>">Back</a> |
	<a href="/logout">Logout</a> <br>

	<form>
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" readonly name="id" value="<?php echo e($id); ?>"></td>
			</tr>

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo e($name); ?>"></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><input type="text" name="cgpa" value="<?php echo e($cgpa); ?>"></td>
			</tr>
			<tr>
				<td>DEPT</td>
				<td><input type="text" name="dept" value="<?php echo e($dept); ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" name="submit" value="update"></td>
			</tr>
		</table>
	</form>

</body>
</html><?php /**PATH E:\AWeb\Spring_2020_laravel-master\A\laratest\resources\views/home/edit.blade.php ENDPATH**/ ?>