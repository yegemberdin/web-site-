<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>


<?php


if(isset($_POST["login"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    
	$query =mysql_query("SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");

    $numrows=mysql_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysql_fetch_assoc($query))
    {$dbadmin=$row['admin'];
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }
if($username == $dbusername && $password == $dbpassword && $dbadmin=='1'){


    $_SESSION['session_username']=$username;

header("Location: ../admin.php");}
else{
    if($username == $dbusername && $password == $dbpassword && $dbadmin=='0')

    {


    $_SESSION['session_username']=$username;

    /* Redirect browser */
    ;
    }}
} else {

 $message =  "Неправильный логин или пароль";
    }

} else {
    $message = "Заполните поля";
}


}
?>



<html>
<title>Вход в админ-панель</title>	
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <div >
            <div id="login">
    <h1>Вход</h1>

<form name="loginform" id="loginform" action="" method="POST">
    <p>
        <label for="user_login">Ваш логин<br />
        <input type="text" name="username" id="username" class="input" value="" size="20" /></label>
    </p>
    <p>
        <label for="user_pass">Ваш пароль<br />
        <input type="password" name="password" id="password" class="input" value="" size="20" /></label>
    </p>
        <p class="submit">
        <input type="submit" name="login" class="button" value="Войти" />
    </p>
       
</form>

    </div>

    </div>
</html>	
	
	
	
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "Предупреждение: ". $message . "</p>";} ?>
	