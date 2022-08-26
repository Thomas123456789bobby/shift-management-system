<?php include('../include/header.php'); ?>
<?php include('../../database/connectdb.php'); ?>
    <form method="post" action="/php/login/create.php">
    <div class="form-group">
    <label for="exampleInputname1">name address</label>
    <input type="text" name="name" class="form-control" id="exampleInputname1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <br>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>