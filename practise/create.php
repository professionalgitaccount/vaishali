<?php
require_once 'db.php';
$message='';
if(isset($_POST['firstname'])&& isset($_POST['lastname'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$sql='INSERT INTO people(firstname,lastname) VALUES(:firstname,:lastname)';
	$statement=$connection->prepare($sql);
	if($statement->execute([':firstname'=>$firstname,':lastname'=>$lastname])){
		$message='data inserted successfully';
	}
	
}
?>
<?php
require_once 'header.php';
?>
<div class="container">
	<div class="card mt-5">
		<div class="card-header">
			<h2>Create a person</h2>
		</div>
		<div class="card-body">
			<?php if(!empty($message)):?>
				<div class="alert alert-success">
					<?= $message;?>
				</div>
			<?php endif;?> 
			<form method="post">
				<div class="form-group">
					<label for="firstname">FirstName</label>
					<input type="text" name="firstname" id="firstname" class="form-control">
				</div>
				<div class="form-group">
					<label for="lastname">LastName</label>
					<input type="text" name="lastname" id="lastname" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info">Add Records</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
require_once 'footer.php';
?>