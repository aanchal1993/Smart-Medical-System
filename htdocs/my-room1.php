
	
	<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content ="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <title>My Room</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3983832653"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?4031767524"/>
  <link rel="stylesheet" type="text/css" href="css/my-room.css?426235782" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  
     <p><b>SMART MEDICAL&nbsp; ACCESS SYSTEM</b></p>
	 <form method="post">
				<table align="right">
				<tr>
				<td>Please re-enter the patient's email :  </td>
				<td><input type="email" name = "email" size=40 required="required" placeholder="Enter your email"></td>
				</tr>
				
				<tr>
				<td><input type="Submit" name = "Submit" value = "  OK  "><input type="Reset" name = "Submit" value = "  Cancel  "></td>
				</tr>
				</table>
			</form>
	 <br><br><br>
	 
	 <h1></h1>
	 <br>
	 <?php 
	session_start();
	$linkdb = mysql_connect("localhost","root", "123") or die("unable to connect mysql");
	mysql_select_db('jalsut',$linkdb) or die("unable to connect to database");
	if($_POST['Submit'] == "  OK  ")
	{
	$email = $_POST['email'];
	
	//fetch the results----converts results into an array
	
	$q1=mysql_query("select * from tab2 where email='$email'");
	while($rows=mysql_fetch_array($q1)){
	$email= $rows['email'];
	$bp= $rows['bp'];
	$sugar= $rows['sugar'];
	echo "THE DETAILS ARE :- <br><br>";
	echo "email= $email<br>blood pressure= $bp<br>Sugar Level= $sugar<br><br><br>";
	}
	
	//fetch the results----converts results into an array
	
	$query=mysql_query("select * from tab1 where email='$email'");
	while($rows=mysql_fetch_array($query))
	{
	$name= $rows['name'];
	$email= $rows['email'];
	$waddress= $rows['waddress'];
	$wcity= $rows['wcity'];
	$wstate = $rows['wstate'];
	$wcode= $rows['wcode'];
	$wcountry= $rows['wcountry'];
	$haddress= $rows['haddress'];
	$hcity= $rows['hcity'];
	$hstate= $rows['hstate'];
	$hcode= $rows['hcode'];
	$hcountry= $rows['hcountry'];
	$hphone= $rows['hphone'];
	$cphone= $rows['cphone'];
	echo "THE GENERAL DETAILS TO THE PATIENT ARE:- <br><br>";
	echo "name= $name<br>email= $email<br><br>WORKING DETAILS<br><br>address= $waddress<br>city= $wcity<br>state= $wstate<br>pin code= $wcode<br>country= $wcountry<br><br>HOME DETAILS<br><br>Address= $haddress<br>City= $hcity<br>State= $hstate<br>Code= $hcode<br>Country= $hcountry<br>Home Phone No= $hphone<br>Cell Phone No= $cphone<br>";
	}
	}
	
	
	?>
    
 
   </body>
</html>
