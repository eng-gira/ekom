<?php include('C:\xampp\htdocs\social_site\inc\navbar.php');?>


<?php

    $err_logIn = '';
    if($this->getData()['note']==md5("err_logIn"))
    {
        $err_logIn = md5("err_logIn");
        echo "<h4>Incorrect Password. <br></h4>";
    }

    $link = strlen($err_logIn) > 0 ? "../authenticate" : "authenticate";
?>

<form action = <?php echo $link; ?> method = "POST">
    Username: <input type="text" name="username" required/>
    Password: <input type="password" name="pw" required/>
    <button type="submit"> Login </button>
</form>

<p> Don't have an account? <a href="/social_site/public/auth/reg"> Register </a></p>