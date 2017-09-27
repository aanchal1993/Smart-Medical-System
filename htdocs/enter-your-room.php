
 <?php
	session_start();
	$linkdb = mysql_connect('localhost','root','123') or die("unable to connect mysql");
	mysql_select_db('jalsut',$linkdb) or die("unable to connect to database");
	if($_POST['Submit'] == "Insert")
	{
		$bp = $_POST['bp'];
		$sugar=$_POST['sugar'];
		$email=$_POST['email'];

		$query = "insert into tab2 set bp = '$bp',sugar ='$sugar', email='$email'";
		$result = mysql_query($query,$linkdb);
		if($result)
		{
			echo "Successfully Registered";
		}
		else
		{
			echo mysql_error($linkdb);
		}

	
	
	}
?>
<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <title>Enter Your Room</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3983832653"/>
  <link rel="stylesheet" type="text/css" href="css/master_b-master.css?3865838128"/>
  <link rel="stylesheet" type="text/css" href="css/enter-your-room.css?206953982" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="u4028"><!-- group -->
     <div class="clip_frame grpelem" id="u4029"><!-- image -->
      <img class="block" id="u4029_img" src="images/images.jpg" alt="" width="93" height="62"/>
     </div>
     <div class="clearfix grpelem" id="u4031-4"><!-- content -->
      <p>SMART MEDICAL ACCESS SYSTEM</p>
     </div>
    </div>
<form method="post">
<table>
<tr>
	<td><h1><b>Enter your Blood Pressure :   </b></h1></td>
	<td><input type="text" name = "bp" required="required" placeholder="Enter your blood pressure"></td>
</tr>

<tr>
	<td><p><b>Enter your Sugar level :   </b></p></td>
	<td><input type="text" name = "sugar" required="required" placeholder="Enter your sugar level"></td>
</tr>

<tr>
	<td><p><b>Enter your Email Id :   </b></p></td>
	<td><input type="email" name = "email" required="required" placeholder="Enter your abc@xyz.com"></td>
</tr>

<tr>
	<td><input type="Submit" name = "Submit" value = "Insert"><br><input type="Reset" name = "Submit" value = "Reset"></td>
	
</tr>
</table>
</form>
    <div class="verticalspacer"></div>
    <div class="clearfix colelem" id="u4038"><!-- group -->
     <div class="clearfix grpelem" id="u4035"><!-- group -->
      <a class="nonblock nontext clearfix grpelem" id="u4037-4" href="index.php"><!-- content --><p><span id="u4037">Sign Out</span></p></a>
      <a class="nonblock nontext clearfix grpelem" id="u4036-4" href="home-copy.php"><!-- content --><p><span id="u4036">Back To Home</span></p></a>
     </div>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u4140-17-r.png" alt=""/>
   <img class="preload" src="images/u4140-17-m.png" alt=""/>
   <img class="preload" src="images/u4140-17-fs.png" alt=""/>
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
Muse.Utils.initWidget('#widgetu4107', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu4107 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
