		
	
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru_KZ" xml:lang="ru_KZ"><head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8 />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="" />
  <meta name="description" content="" />
  <meta charset="utf-8" />
<title>Новости</title>

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
                                        <li class="current"><a class="active"  href="news.php">Новости</a></li> 
                                        <li class="last current"><a href="contact.php">Контакты</a></li>
                                    </ul>
                                </div>
                            </div>                            							
						</div>                        
					<!-- END OF HEADER -->           
                                                                       
                     <!-- BEGIN CONTENT -->
					   <div id="content"> 
                     <?php 
  include ("includes/connection.php");


$result=mysql_query("SELECT id,title,text FROM articles  ORDER BY id"); 

//$result - ассоциированный массив, т.е. таблички, у которой есть названия столбцов 

//узнаем, сколько в массиве $result строчек 
$n=mysql_num_rows($result); 

//вывод на страничку в виде таблицы 
echo "<table border=1> 
<tr><th>№</th><th>Название</th><th>Текст</th></tr>"; 

//вывод построчно 
for($i=0;$i<$n;$i++) 
 echo  
"<tr><td>",mysql_result($result,$i,'id'), 
"</td><td>",mysql_result($result,$i,'title'), 
"</td><td>",mysql_result($result,$i,'text'), 

"</td></tr>"; 
echo "</table>"; 

?>
</div>
                     
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