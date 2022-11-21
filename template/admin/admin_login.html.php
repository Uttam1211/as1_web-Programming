<?php

include_once __DIR__ . '/../layout.html.php';
?>
<div class="form">
    <form action="admin_login.php" method="post">
        <label for="" >UserName</label>
        <input type="text" name="admin_username" id=""required/>

        <label for="">Password </label>
            <input type="password" name="admin_password" id="" required/>

        <input type="submit" name="submit" value="Login" />
    </form>
<hr><hr>
    <div class="user">
        <h3> Login as User? </h3>
        <a href="login.php"> CLick here </a>
</div>