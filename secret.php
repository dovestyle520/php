<?php
     $name = $_POST['name'];
     $password = $_POST['password'];

    if((!isset($name)) || (!isset($password))){
?>
    <h1>Please Log In</h1>
    <p>This page is secret.</p>
    <form method="post" action="secret.php">
        <p>UserName:<input type="text" name="name"></p>
        <p>Password:<input type="password" name="password"></p>
        <p><input type="submit" name="Log In"></p>
    </form>
<?php            
    }else if(($name=="user") && ($password=="pass")){
        echo "<h1>Here it is!</h1>
             <p>I bet you are glad you can see this page</p>";
    }else{
                echo "<h1>Go Away!</h1>
             <p>You have no right</p>";
    }
?>