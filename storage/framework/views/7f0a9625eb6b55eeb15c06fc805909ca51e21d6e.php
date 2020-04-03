<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home!</h1>&nbsp
	<a href="/home">back</a> |
	<a href="/logout">Logout</a> 

	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>CGPA</th>
			<th>DEPT</th>
			<th>Action</th>
		</tr>
		
		<?php for($i=0; $i< count($stds); $i++): ?>
		<tr>
			<td><?php echo e($stds[$i]['id']); ?></td>
			<td><?php echo e($stds[$i]['name']); ?></td>
			<td><?php echo e($stds[$i]['cgpa']); ?></td>
			<td><?php echo e($stds[$i]['dept']); ?></td>
			<td>
				<a href="/home/edit/<?php echo e($stds[$i]['id']); ?>">Edit</a> | 
				<a href="/home/delete/<?php echo e($stds[$i]['id']); ?>">Delete</a> 
			</td>
		</tr>
		<?php endfor; ?>
	</table>

</body>
</html><?php /**PATH E:\AWeb\Spring_2020_laravel-master\A\laratest\resources\views/home/view_users.blade.php ENDPATH**/ ?>