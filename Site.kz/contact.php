<?php
include_once("lib/connectdb.php");
$msg= "";
if(isset($_POST['msg_name'])){
	$msg_name = $_POST['msg_name'];
	$msg_email = $_POST['msg_email'];
	$msg_subject = $_POST['msg_subject'];
	$msg_message = $_POST['msg_message'];
	
	$msg_name = strip_tags($msg_name);
	$msg_email = strip_tags($msg_email);
	$msg_subject = strip_tags($msg_subject);
	$msg_message = strip_tags($msg_message);

	$msg_name = stripslashes($msg_name);
	$msg_email = mysql_real_escape_string($msg_email);
	$msg_subject = stripslashes($msg_subject);
	$msg_message = stripslashes($msg_message);
	if((!$msg_name) || (!$msg_email) || (!$msg_subject) || (!$msg_message)){
		$msg = "<p style='color: #C00; font-weight: bold; font-size: 14px; font-family: arial;'>Пополните все данные!</p>";
	}
	else{
		include_once("lib/connectdb.php");
			$sql = mysql_query("INSERT INTO messages(msg_name, msg_email, msg_subject, msg_message, msg_date)
			VALUES('$msg_name','$msg_email','$msg_subject','$msg_message', now())");
			$msg = "<p style='color: #676767; font-weight: bold;'>Ваше письмо успешно отправлено!</p>";
			
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
<title>Контакты</title>

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/inner.css" rel="stylesheet" type="text/css" />
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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functionAddEvent.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/xmlHttp.js"></script>  
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Grandesign_Neue_Serif_400.font.js"></script>
<script type="text/javascript">
           
</script>   
    
</head>
<body>

	<!-- MAIN_CONTAINER -->
		<div id="main_container">
        
        	<!-- FRAME -->
				<div id="frame">
                	
                   	<!-- BEGIN HEADER -->
						<div id="top">
                        	<div id="logo">
								<div id="pad_logo">
									<a href="index.html"><img src="images/logo.gif" alt="" /></a>
								</div>
							</div>
                            <div id="topmenu">
                                <div id="nav">
                                    <ul id="menu">
                                         <li><a  href="index.html">Главная</a></li>                                        
                                        <li><a href="about.html">О компании</a></li>                                        
                                        <li><a href="services.html">Услуги</a></li> 
										<li><a href="otzyvy.html">Отзывы</a></li>
                                        <li><a href="news.php">Новости</a></li> 
                                        <li class="last current"><a class="active" href="contact.php">Контакты</a></li>
                                    </ul>
                                </div>
                            </div>                            							
						</div>                        
					<!-- END OF HEADER -->           
                                                                       
                     <!-- BEGIN CONTENT -->
                     <div id="content">                     	                   	
                     	<div id="content-inner"> 
                        	<div id="head-top-inner">
                           		<div id="head-title-inner">
                                	<h2>Свяжитесь с нами</h2><!-- Page title here -->
                            	</div>                            	
                        	</div>                            
                            <div class="maincontent">                            
                          






<div id="wrapper">

<div id="content"><br>
<br>
<br>

<div id="content_inner"> <div class="base">

 
 
  <tr>
<td style="width: 100%;">
<p>С помощью этого раздела, вы сможете написать нам, чтобы узнать ответы на ваши интересуещиеся вопросы по поводу информации о компании, о сотрудничестве и об услугах. 
							</p>
							
 <br/>
  <form action="contact.php" method="post" enctype="multipart/form-data">
   <table width="100%" cellpadding="4" cellspacing="4" border="0">
    <tr>
     <td align="right" width="150"><label>Имя:</label></td>
     <td align="left"><input type="text" name="msg_name" class="text_input" maxlength="100" /></td>
	 
    </tr>
    <tr>
     <td align="right"><label>Email:</label></td>
     <td align="left"><input type="email" name="msg_email" class="text_input" maxlength="80" /></td>
	  
    </tr>
    <tr>          
     <td align="right"><label>Тема:</label></td>
     <td align="left"><input type="text" name="msg_subject" class="text_input" maxlength="50" /></td>
	 
    </tr>
    <tr>
     <td align="right"><label>Сообщение:</label></td>
     <td align="left">
      <textarea name="msg_message" style="width:300px;height:100px;padding:5px;resize:none">
      </textarea>  
     </td>
    </tr>
    <tr>
     <td align="center" colspan="2"><input class="input-submit"  type="submit" name="submit" id="button" value=""/></td>
	 
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
                        <div id="content-right">
                        	<div class="side-box">
                            <h3>Контактная информация</h3>                            
                                <p>
                                <strong>Ернар Сервис</strong><br />
                              адрес: г.Шымкент, мкр."Самал-1"<br />
							  ул.Казиева, 117<br />
						тел/факс: 8 (7252) 36-13-83<br />
						Email: ernar.service@mail.ru<br />
                            
                                </p>                                                                                                      
                            </div>
                            <div class="side-box">
                            <h3>На карте</h3>                            
                            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2948.1152381810507!2d69.6008924309106!3d42.361383307809916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38a91c6cafc60169%3A0xc3f4a81afbab7385!2z0YPQuy4g0JouINCa0LDQt9C40LXQstCwLCDQqNGL0LzQutC10L3Rgiwg0JrQsNC30LDRhdGB0YLQsNC9!5e0!3m2!1sru!2s!4v1430682921837" width="310" height="130" frameborder="0" style="border:0"></iframe>                               
                            </div>
                                                              
                            </div>                                                                
                        </div>
                     </div>
                	 <!-- END OF CONTENT -->
                     
                </div>
                <!-- END OF FRAME -->
        </div>
        <!-- END OF MAIN_CONTAINER -->
        
         <!-- BEGIN FOOTER -->
		<div id="bottom_container">
			<div id="footer">
				<div id="foot">
						<div class="left-foot">
                       адрес: г.Шымкент, мкр."Самал-1"<br />
					   ул.Казиева, 117<br />
						тел/факс: 8 (7252) 36-13-83<br />
						Email: ernar.service@mail.ru<br />
						
                        </div>
                        
				</div>
			</div>
		</div>
		<!-- END OF FOOTER -->
        
</body>
</html>