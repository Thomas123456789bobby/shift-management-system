<?php include('../include/header.php'); ?>
<?php include('../../database/connectdb.php'); ?>
<?php
    $id = $_POST["id"];
    $sql = "SELECT * FROM `admin` where id = :id"; 
    $sth = $db->prepare($sql); 
    $sth->execute(
        [":id" => $id]
    );
    while($row = $sth->fetch()) { ?>
    <form method="post" action="/php/login/wijzigen.php">
    <div class="form-group">
    <label for="exampleInputname1">name</label>
    <input type="text" name="name" class="form-control" id="exampleInputname1" aria-describedby="emailHelp" placeholder="Enter name" value="<?php echo $row["name"] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $row["email"] ?>">
    <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row["pass"] ?>">
  </div>
    <input type="hidden" name="id" value="<?php echo $row["id"]?>">
  <br>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php } ?>