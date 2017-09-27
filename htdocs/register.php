<?php
	session_start();
	$linkdb = mysql_connect("localhost","root", "123") or die("unable to connect mysql");
	mysql_select_db('jalsut',$linkdb) or die("unable to connect to database");
	
	if($_POST['submit'] == "submit")
	{
		
		$name = $_POST['name'];
		$email=$_POST['email'];
		$waddress = $_POST['waddress'];
		$wcity =$_POST['wcity'];
		$wstate=$_POST['wstate'];
		$wcode=$_POST['wcode'];
		$wcountry=$_POST['wcountry'];
		$haddress=$_POST['haddress'];
		$hcity=$_POST['hcity'];
		$hstate=$_POST['hstate'];
		$hcode=$_POST['hcode'];
		$hcountry = $_POST['hcountry'];
		$hphone=$_POST['hphone'];
		$cphone = $_POST['cphone'];
		$result = mysql_query("select * from tab1 where email = '$email'",$linkdb);
		$rows = mysql_num_rows($result);
			if($rows > 0)
			{
		
			echo "Try again..this EMAIL is already registered !!";
			
			}

		else
		{
			$query = "insert into tab1 set name='$name',email='$email',waddress='waddress',wcity='$wcity',wstate='$wstate',
			wcode='$wcode',wcountry='$wcountry',haddress='$haddress',hcity='$hcity',hstate='$hstate',hcode='$hcode',hcountry='$hcountry',hphone='$hphone',cphone='$cphone'";
			$result = mysql_query($query,$linkdb);
				if($result)
				{
				echo "<center><h1> You have been registered successfully..!! </h1></center>";
				}
				else
				{
				echo mysql_error($linkdb);
				}
		

		}
	}
	
?>

<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <title>Register</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3983832653"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?3911233787"/>
  <link rel="stylesheet" type="text/css" href="css/register.css?420404990" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="u69"><!-- group -->
     <div class="clip_frame grpelem" id="u75"><!-- image -->
      <img class="block" id="u75_img" src="images/images.jpg" alt="" width="93" height="62"/>
     </div>
     <div class="clearfix grpelem" id="u71-4"><!-- content -->
      <p>SMART MEDICAL ACCESS SYSTEM</p>
     </div>
    </div>
    <div class="clearfix colelem" id="u3683"><!-- group -->
     <img class="grpelem" id="u3686-4" src="images/u3686-4.png" alt="REGISTRATION" width="254" height="40"/><!-- rasterized frame -->
    </div>
    <form method="post">
	<center>
	<table width=60% border=20 height=250>
	
	<tr>
	<td colspan=2 align ="center"> <h2> <i><b><u>Register here</u></b></i> </h2></td>
	</tr>

	<tr>
	<td> Name:</td>
	<td><input type="text" name="name" required="required" placeholder="Enter your name"></td>
	</tr>
	
	<tr>
	<td> Email:</td>
	<td><input type="text" name="email" required="required" placeholder="Enter your email"></td>
	</tr>
	
	<tr>
	<td><br></td></tr>
	<tr>
	
	<td><i><b><u>Working:</u></b></i></td>
	</tr>
	
	<tr>
	<td> Address:</td>
	<td><input type="text" name="waddress" required="required" placeholder="Enter your address"></td>
	</tr>
	
	<tr>
	<td> City:</td>
	<td><input type="text" name="wcity" required="required" placeholder="Enter your city"></td>
	</tr>
	
	<tr>
	<td> State:</td>
	<td><input type="text" name="wstate" required="required" placeholder="Enter your state" ></td>
	</tr>
	
	<tr>
	<td> Code:</td>
	<td><input type="text" name="wcode" required="required" placeholder="Enter your code"></td>
	</tr>
	
	<tr>
	<td> Country:</td>
	<td><input type="text" name="wcountry" required="required" placeholder="Enter your country"></td>
	</tr>
	<tr>
	<td><br></td></tr>
	<tr>
	
	<tr>
	<td><i><b><u>HOME:</u></b></i></td>
	</tr>
	
	<td> Address:</td>
	<td><input type="text" name="haddress" required="required" placeholder="Enter your address"></td>
	</tr>
	
	<tr>
	<td> City:</td>
	<td><input type="text" name="hcity" required="required" placeholder="Enter your city"></td>
	</tr>
	
	<tr>
	<td> State:</td>
	<td><input type="text" name="hstate" required="required" placeholder="Enter your state" ></td>
	</tr>
	
	<tr>
	<td> Code:</td>
	<td><input type="text" name="hcode" required="required" placeholder="Enter your code"></td>
	</tr>
	
	<tr>
	<td> Country:</td>
	<td><input type="text" name="hcountry" required="required" placeholder="Enter your country"></td>
	</tr>
	
	<tr>
	<td> Home Phone:</td>
	<td><input type="text" name="hphone" required="required" placeholder="Enter your home phone number"></td>
	</tr>
	
	<tr>
	<td> Cell Phone:</td>
	<td><input type="text" name="cphone" required="required" placeholder="Enter your cell phone number"></td>
	</tr>
	
	<tr>
	<td><input type="submit" name="submit" value="submit"</td>
	<td><input type="reset" name="reset" value="reset"></td>
</tr>

	
	</table>
	</center>
	</form>
    <div class="verticalspacer"></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u3387-17-r.png" alt=""/>
   <img class="preload" src="images/u3387-17-m.png" alt=""/>
   <img class="preload" src="images/u3387-17-fs.png" alt=""/>
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
Muse.Utils.initWidget('#widgetu3333', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu3333 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
