
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru_KZ" xml:lang="ru_KZ"><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8 />
  <meta charset="utf-8" />
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<title>Оставленные сообщения</title>
<body>

<?php 
  include ("includes/connection.php");


$result=mysql_query("SELECT id,msg_name,msg_email,msg_subject, msg_message, msg_date FROM messages ORDER BY msg_date"); 

//$result - ассоциированный массив, т.е. таблички, у которой есть названия столбцов 

//узнаем, сколько в массиве $result строчек 
$n=mysql_num_rows($result); 

//вывод на страничку в виде таблицы 
echo "<table border=2> 
<tr><th>ID</th><th>Имя</th><th>Email</th><th>Тема</th><th>Сообщение</th><th>Дата</th></tr>"; 

//вывод построчно 
for($i=0;$i<$n;$i++) 
 echo  
"<tr><td>",mysql_result($result,$i,'id'), 
"</td><td>",mysql_result($result,$i,'msg_name'), 
"</td><td>",mysql_result($result,$i,'msg_email'), 
"</td><td>",mysql_result($result,$i,'msg_subject'), 
"</td><td>",mysql_result($result,$i,'msg_message'), 
"</td><td>",mysql_result($result,$i,'msg_date'), 
"</td></tr>"; 
echo "</table>"; 

?>
<form action="index.html" method="post">
<input type="submit" name="logout" class="button" value="Выйти" />
</form>
<form action="admin.php" method="post">
<input type="submit" name="back" class="button" value="Назад в админ-панель" />
</form>
</body>
</html>