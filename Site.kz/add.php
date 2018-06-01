<?php
include_once("lib/connectdb.php");
$msg= "";
if(isset($_POST['title'])){
	$title = $_POST['title'];
	$text = $_POST['text'];
	
	$title = strip_tags($title);
	$text = strip_tags($text);

	$title = stripslashes($title);
	$text = stripslashes($text);
	if((!$title) || (!$text) ){
		$msg = "<p style='color: #C00; font-weight: bold; font-size: 14px; font-family: arial;'>Пополните все данные!</p>";
	}
	else{
		include_once("lib/connectdb.php");
			$sql = mysql_query("INSERT INTO articles(title, text)
			VALUES('$title','$text')");
			$msg = "<p >Ваша статья успешно отправлена!</p>";
			
	}
	

}

?>			
	
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru_KZ" xml:lang="ru_KZ"><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8 />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="" />
  <meta name="description" content="" />
  <meta charset="utf-8" />
<title>Добавить статью</title>

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="css/admin.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<!--[if IE 6]>
    <script type="text/javascript" src="js/unitpngfix.js"></script>
	<link href="css/ie6.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<![endif]-->
<style type='text/css' media='screen,projection'>
<!--
fieldset { border:0;margin:0;padding:0; }
label {  padding-right:15px; float:left; width:70px;}
input.text{ width:290px;font:12px/12px 'courier new',courier,monospace;color:#333;padding:3px;margin:1px 0; }
-->
</style>

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
  
    
</head>
<body>

	<!-- MAIN_CONTAINER -->
		<div id="main_container">
        
        	<!-- FRAME -->
				<div id="frame">
                	
                           
                                                                       
                     <!-- BEGIN CONTENT -->
                     <div id="content">                     	                   	
                     	<div id="content-inner"> 
                        	
                           		
                                	<h1>Пополните данные</h1><!-- Page title here -->
                                                 	
                        	                          
                            <div class="maincontent">                            
                          






<div id="wrapper">

<div id="content"><br>
<br>
<br>

<div id="content_inner"> <div class="base">

 
 
  <tr>
<td style="width: 100%;">

							
 <br/>
  <form action="add.php" method="post" enctype="multipart/form-data">
   <table width="100%" cellpadding="4" cellspacing="0" border="0">
    <tr>
     <td align="right" width="150"><label>Название:</label></td>
     <td align="left"><input type="text" name="title" class="text_input" maxlength="50" /></td>
	 
    </tr>

    <tr>
     <td align="right"><label>Текст:</label></td>
     <td align="left">
      <textarea name="text" style="width:300px;height:100px;padding:5px;resize:none">
      </textarea>  
     </td>
    </tr>
    <tr>
     <td  style="padding-left:250px" colspan=2"><input class="input-submit"  type="submit" name="submit" id="button" value="Добавить статью"/></td>
	 
    </tr>
    <tr>
    <td align="center" colspan="2"><?php echo $msg; ?></td>

    </tr>
   </table>
  </form>
 </td>
</tr>
		
	
 </div>
			</div>
</div>
<br><br><br></div>
                        	</div>
                        </div>  
						 </div>
                     </div>
<form action="index.html" method="post">
<input type="submit" name="logout" class="button" value="Выйти" />
</form>
<form action="admin.php" method="post">
<input type="submit" name="back" class="button" value="Назад в админ-панель" />
</form>
</body>
</html>

