<?php
	session_start();
	$linkdb = mysql_connect('localhost','root','123') or die("unable to connect mysql");
	mysql_select_db('jalsut',$linkdb) or die("unable to connect to database");
	if($_POST['Submit'] == "Submit")
	{
		$name = $_POST['name'];		
		$email = $_POST['email'];
		$result = mysql_query("select * from tab1 where name = '$name' and email='$email'",$linkdb);
		$Details = mysql_fetch_array($result);
		$rows = mysql_num_rows($result);
		if($rows > 0)
		{
			echo"done";
			$_SESSION['name'] =$name;
			$_SESSION['email']=$Details['email'];
			header("Location:index1.php");
			
		}

		else
		{

			
			echo "Inavlid name and email";
		}

		
	}
?>
<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3983832653"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?4031767524"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?502987549" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="u69"><!-- group -->
     <div class="clip_frame grpelem" id="u72"><!-- image -->
      <img class="block" id="u72_img" src="images/images.jpg" alt="" width="92" height="62"/>
     </div>
     <div class="clearfix grpelem" id="u71-4"><!-- content -->
      <p>SMART MEDICAL&nbsp; ACCESS SYSTEM</p>
     </div>
    </div>
    
	<form method="post">
	<center>
	<table width=60% border=20 height=250>
	<tr>
	<td><br></td>
	<td><br></td>
	</tr>
	
	<tr>
	<td colspan=2 align ="center"> <h2> <i><b><u>Check here</u></b></i> </h2></td>
	</tr>

	<tr>
	<td> name:</td>
	<td><input type="text" name="name" required="required" placeholder="Enter your name"></td>
	</tr>
	
	<tr>
	<td> Enter Patient's email:</td>
	<td><input type="text" name="email" required="required" placeholder="Enter your email"></td>
	</tr>

	<tr>
	<td><input type="submit" name="submit" value="submit" onClick="parent.location='my-room1.php'"></td>
	<td><input type="reset" name="reset" value="reset"></td>
</tr>

	
	</table>
	</center>
	</form>
    <div class="verticalspacer"></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u111-17-r.png" alt=""/>
   <img class="preload" src="images/u111-17-m.png" alt=""/>
   <img class="preload" src="images/u111-17-fs.png" alt=""/>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?4291592202" type="text/javascript"></script>
  <script src="scripts/webpro.js?3903299128" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?4068933136" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('#widgetu78', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu78 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
