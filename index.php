<?php include('php/include/header.php'); ?>
<?php
?>
<div class="Chatbox-group">
        <div class="login">
            <div class="user">
                <form method="post" action="/php/ChatBox/UserChatBoxsetup.php">
                    <br><br>
                    <input type="text" name="uname" placeholder="Email">
                    <br><br>
                    <input type="text" name="password" placeholder="password">
                    <br><br>
                    <input type="submit" name="chatboxUserVerstuur" value="Verstuur">
                </form>
            </div>
        </div>
        <div class="login">
            <div class="admin">
                <form method="post" action="/php/ChatBox/AdminLogin.php">
                    <br><br><br>
                    <input type="text" name="uname" placeholder="Email">
                    <br><br>
                    <input type="password" name="password" placeholder="password">
                    <br><br>
                    <input type="submit" name="chatboxAdminVerstuur" value="Verstuur">
                </form>
            </div>
        </div>
</div>
<?php include('php/include/footer.php'); ?>