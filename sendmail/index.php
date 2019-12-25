<?php
if($_POST['send'])
{
	$email=$_POST[email];
 $fromAddr='PHP Gurukul Programing Blog <www.phpgurukul.com>'; // the address to show in From field.
 $recipientAddr = $_POST[email];
 $subjectStr = 'PHP Gurukul demo from Website';

$mailBodyText = <<<HHHHHHHHHHHHHH
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Demo From Website</title>
</head>
<body>
<table>
<tr>
<td style="width:150px;"><b>Subject:</b></td>
<td><b>:</b></td>
<td style="text-transform:capitalize;">$_POST[subject]</td>
</tr>
<tr>
<td><b>Message</b></td>
<td><b>:</b></td>
<td style="text-transform:capitalize;">$_POST[message]</td>
</tr>

</table>
</body>
</html>
HHHHHHHHHHHHHH;

$headers= <<<TTTTTTTTTTTT
From: $fromAddr
MIME-Version: 1.0
Content-Type: text/html;
TTTTTTTTTTTT;

mail($recipientAddr,$subjectStr,$mailBodyText,$headers);
//echo "($recipientAddr,$subjectStr,$mailBodyText,$headers)";
$_SESSION['msg']="Your Information has been send sucessfully...";
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>PHP GURUKUL | DEMO</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../insertdata/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../insertdata/css/styles.css" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="#">PHP GURUKUL | PROGRAMING BLOG</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>		</button>
  </div>

</nav>

<div class="container-fluid">
  
  <!--left-->
 <div class="col-sm-3">
        
    	<div class="panel panel-default">
         	
         	<div class="panel-body"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8398523804879135"
     data-ad-slot="9206572000"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
        </div>
        <hr>
        
       
		 </div>
      
     
 <!--/left-->
  
  <!--center-->
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>Send a mail Using PHP</h3>
        <p style="color:#FF0000; font-size:12px;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
		<form name="mail" action="" method="post">
       <table width="100%"  border="0">

  <tr>
    <th height="60" scope="row">Email :</th>
    <td><input type="email" name="email" value="" class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">Subject  :</th>
    <td><input type="text" name="subject" value="Demo from PHP GURUKUL Programing Blog" class="form-control" readonly /></td>
  </tr>
  
  <tr>
    <th height="60" scope="row">Message :</th>
    <td><textarea name="message" rows="6" class="form-control" readonly>This is sample text for testing. 
  From : PHP GURUKUL Programing Blog
	</textarea></td>
  </tr>
  <tr>
    <th height="60" scope="row">&nbsp;</th>
    <td><input type="submit" value="Send" name="send"  class="btn-primary" /></td>
  </tr>
</table>
     </form>
      </div>
    </div>
    <hr>
  </div>
  <!--/center-->

  <!--right-->
  <div class="col-sm-3">
 
    	<div class="panel panel-default">
      
         	<div class="panel-body"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8398523804879135"
     data-ad-slot="9206572000"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>.</div>
        </div>
        <hr>
        
      
  </div>
<!--/right-->
  <hr>
</div><!--/container-fluid-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../insertdata/js/bootstrap.min.js"></script>
	</body>
</html>