<?php

include_once __DIR__ . '/layout.html.php';

?>
<div class="form">
    <form action="login.php" method="post">
        <label for="" >UserName</label>
        <input type="text" name="username" id=""required/>

        <label for="">Password </label>
            <input type="password" name="password" id="" required/>

        <input type="submit" name="submit" value="Login" />
    </form>
    <hr><hr>
    <div class="admin">
        <h3> Login as Admin? </h3>
        <a href="admin_login.php"> Click here </a>
</div>

<?php include_once __DIR__.'/footer.html.php'; ?>