<?php
session_start();
if(isset($_SESSION['username'])) {
    echo '<script>window.location.replace("./index.php");</script>';
} else {
?>
<center><h1>Form Login Tanpa Mysql</h1>
<form action="./ceklogin.php" method="post">
<input type="username" name="username" placeholder="Username" alt="username" required="required"/><br/>
<input type="password" name="password" placeholder="Password" alt="password" required="required"/><br/><br/>
<input type="submit" name="submit" value="Submit" alt="submit"/>
</form><br/>
</center>
<?php } ?>