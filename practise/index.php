<?php
require_once 'db.php';
$sql='SELECT * FROM people';
$statement=$connection->prepare($sql);
$statement->execute();
$people=$statement->fetchALL(PDO::FETCH_OBJ);


?>


<?php
require_once 'header.php';
?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>ALL people</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Action</th>
        </tr>
        <?php foreach($people as $person):?>
        <tr>
          <td><?=$person->id;?></td>
          <td><?=$person->firstname;?></td>
          <td><?=$person->lastname;?></td>
          <td>
            <a href="edit.php?id=<?=$person->id ?>"class="btn btn-info">Edit</a>
            <a onclick="return confirm('Are you sure you want to delete this entry?')"href="delete.php?id=<?=$person->id ?>"class='btn btn-danger'>Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php 
require_once 'footer.php';
?>    