<head>
  <link rel="stylesheet" href="/css/indexstyle.css">
</head>
<?php include('php/include/header.php'); ?>
<div class="mainf">
<div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form" method="post"  action="/php/login/userlogin.php">
        <input class="un " name="uname" type="text" align="center" placeholder="Username">
        <input class="pass" name="password" type="password" align="center" placeholder="Password">
        <input type="submit" class="submit" align="center">
    </form>
    </div>
    </div>
<?php include('php/include/footer.php'); ?>