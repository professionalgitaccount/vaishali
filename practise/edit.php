<?php
$id='';
if(isset($_GET['id'])){
$id=$_GET['id'];}
require_once 'db.php';
$sql='SELECT * FROM people WHERE id=:id';
$statement=$connection->prepare($sql);
$statement->execute([':id' => $id]);
$person=$statement->fetch(PDO::FETCH_OBJ);
if(isset($_POST['firstname'])&& isset($_POST['lastname'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$sql='UPDATE  people SET firstname=:firstname,lastname=:lastname WHERE id=:id';
	$statement=$connection->prepare($sql);
	if($statement->execute([':firstname'=>$firstname,':lastname'=>$lastname,':id'=>$id])){
		header("Location:create.php");
	}
	
}
?>
<?php
require_once 'header.php';
?>
<div class="container">
	<div class="card mt-5">
		<div class="card-header">
			<h2>Update a person</h2>
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
					<input value="" type="text" name="firstname" id="firstname" class="form-control">
				</div>
				<div class="form-group">
					<label for="lastname">LastName</label>
					<input value="" type="text" name="lastname" id="lastname" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info">Update a person</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
require_once 'footer.php';
?>