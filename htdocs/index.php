<?php
	session_start();
	$linkdb = mysql_connect("localhost","root", "123") or die("unable to connect mysql");
	mysql_select_db('jalsut',$linkdb) or die("unable to connect to database");
	if($_POST['submit'] == "")
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$result = mysql_query("select * from tab where email = '$email'",$linkdb);
		$rows = mysql_num_rows($result);
			if($rows > 0)
			{
				echo "Try again..this EMAIL is already registered !!";
			}
			else
			{
				$query = "insert into tab set email='$email',password='$password'";
				$result = mysql_query($query,$linkdb);
					if($result)
					{
						"<center><h1> <p> Successfully registered </p> </h1></center>";
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
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3983832653"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?3911233787"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?231721102" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="clearfix colelem" id="u69"><!-- group -->
    <div class="clip_frame grpelem" id="u75"><!-- image -->
     <img class="block" id="u75_img" src="images/images.jpg" alt="" width="93" height="62"/>
    </div>
    <div class="clearfix grpelem" id="u71-4"><!-- content -->
     <p>SMART MEDICAL ACCESS SYSTEM</p>
    </div>
   </div>
   <form class="form-grp clearfix colelem" id="widgetu3161" method="post" enctype="multipart/form-data" action="scripts/form-u3161.php"><!-- none box -->
    <div class="fld-grp clearfix grpelem" id="widgetu3170" data-required="true"><!-- none box -->
     <label class="fld-label actAsDiv clearfix grpelem" id="u3172-4" for="widgetu3170_input"><!-- content -->
      <span class="actAsPara">Email:</span>
     </label>
     <span class="fld-input NoWrap actAsDiv clearfix grpelem" name="email" id="u3174-4"><!-- content --><input class="wrapped-input" name="email" type="text" spellcheck="false" id="widgetu3170_input" required="required" tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu3170_prompt" for="widgetu3170_input"><span class="actAsPara">Enter Email</span></label></span>
    </div>
    <div class="fld-grp clearfix grpelem" id="widgetu3163" data-required="true"><!-- none box -->
     <label class="fld-label actAsDiv clearfix grpelem" id="u3167-4" for="widgetu3163_input"><!-- content -->
      <span class="actAsPara">Password:</span>
     </label>
     <span class="fld-input NoWrap actAsDiv clearfix grpelem" name="password" id="u3165-4"><!-- content --><input class="wrapped-input" name="password" type="password" required= "required" tabindex="2"/ placeholder="Enter Password"></span>
    </div>

    <input class="submit-btn NoWrap grpelem" id="u3169-17" type="submit" value="" name="submit" tabindex="3"/><!-- state-based BG images -->
   </form>
   <div class="clearfix colelem" id="pppmenuu419"><!-- group -->
    <div class="clearfix grpelem" id="ppmenuu419"><!-- column -->
     <div class="clearfix colelem" id="pmenuu419"><!-- group -->
      <ul class="MenuBar clearfix grpelem" id="menuu419"><!-- vertical box -->
       <li class="MenuItemContainer clearfix colelem" id="u1329"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem" id="u1330" href="index.php"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1332-4"><!-- content --><p>Home</p></div></a>
       </li>
       <li class="MenuItemContainer clearfix colelem" id="u1336"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1339" href="hospitals.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1341-4"><!-- content --><p>Hospitals</p></div></a>
        <div class="SubMenu  MenuLevel1 clearfix" id="u1337"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem" id="u1338"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem" id="u1378"><!-- horizontal box -->
           <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1379"><!-- horizontal box -->
            <div class="MenuItemLabel clearfix grpelem" id="u1381-4"><!-- content -->
             <p>Cardiac Centre</p>
            </div>
           </div>
           <div class="SubMenu  MenuLevel2 clearfix" id="u1383"><!-- vertical box -->
            <ul class="SubMenuView clearfix colelem" id="u1384"><!-- vertical box -->
             <li class="MenuItemContainer clearfix colelem" id="u1399"><!-- horizontal box -->
              <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1400" href="tagore-hospital.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1402-4"><!-- content --><p>Tagore Hospital</p></div></a>
             </li>
             <li class="MenuItemContainer clearfix colelem" id="u1406"><!-- horizontal box -->
              <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1409" href="bbc-heart-care.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1411-4"><!-- content --><p>BBC Heart Care</p></div></a>
             </li>
            </ul>
           </div>
          </li>
          <li class="MenuItemContainer clearfix colelem" id="u1385"><!-- horizontal box -->
           <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1388"><!-- horizontal box -->
            <div class="MenuItemLabel clearfix grpelem" id="u1390-4"><!-- content -->
             <p>Neuro Centre</p>
            </div>
           </div>
           <div class="SubMenu  MenuLevel2 clearfix" id="u1386"><!-- vertical box -->
            <ul class="SubMenuView clearfix colelem" id="u1387"><!-- vertical box -->
             <li class="MenuItemContainer clearfix colelem" id="u1413"><!-- horizontal box -->
              <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1414" href="apex-hospital.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1416-4"><!-- content --><p>Apex Hospital</p></div></a>
             </li>
             <li class="MenuItemContainer clearfix colelem" id="u1420"><!-- horizontal box -->
              <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1421" href="ashoka-neuro-hospital.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1424-4"><!-- content --><p>Ashoka Neuro Hospital</p></div></a>
             </li>
            </ul>
           </div>
          </li>
          <li class="MenuItemContainer clearfix colelem" id="u1392"><!-- horizontal box -->
           <div class="MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1393"><!-- horizontal box -->
            <div class="MenuItemLabel clearfix grpelem" id="u1395-4"><!-- content -->
             <p>Maternity Homes</p>
            </div>
           </div>
           <div class="SubMenu  MenuLevel2 clearfix" id="u1397"><!-- vertical box -->
            <ul class="SubMenuView clearfix colelem" id="u1398"><!-- vertical box -->
             <li class="MenuItemContainer clearfix colelem" id="u1427"><!-- horizontal box -->
              <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1428" href="apex-maternity-hospital.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1430-4"><!-- content --><p>Apex Maternity Hospital</p></div></a>
             </li>
             <li class="MenuItemContainer clearfix colelem" id="u1434"><!-- horizontal box -->
              <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1437" href="chawla-nursing-home.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1438-4"><!-- content --><p>Chawla Nursing Home</p></div></a>
             </li>
            </ul>
           </div>
          </li>
         </ul>
        </div>
       </li>
       <li class="MenuItemContainer clearfix colelem" id="u1343"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1344" href="know-you-disease.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1345-4"><!-- content --><p>Know You Disease</p></div></a>
        <div class="SubMenu  MenuLevel1 clearfix" id="u1348"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem" id="u1349"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem" id="u1441"><!-- horizontal box -->
           <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1442" href="cardio-vascular.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1444-4"><!-- content --><p>Cardio&#45;Vascular</p></div></a>
          </li>
          <li class="MenuItemContainer clearfix colelem" id="u1448"><!-- horizontal box -->
           <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1449" href="neuro-muscular.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1450-4"><!-- content --><p>Neuro&#45;Muscular</p></div></a>
          </li>
         </ul>
        </div>
       </li>
       <li class="MenuItemContainer clearfix colelem" id="u1350"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1353" href="emergency.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1355-4"><!-- content --><p>Emergency</p></div></a>
        <div class="SubMenu  MenuLevel1 clearfix" id="u1351"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem" id="u1352"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem" id="u1455"><!-- horizontal box -->
           <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1456" href="cardiac-arrest.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1458-4"><!-- content --><p>Cardiac Arrest</p></div></a>
          </li>
          <li class="MenuItemContainer clearfix colelem" id="u1462"><!-- horizontal box -->
           <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1463" href="fracture.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1465-4"><!-- content --><p>Fracture</p></div></a>
          </li>
          <li class="MenuItemContainer clearfix colelem" id="u1469"><!-- horizontal box -->
           <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u1472" href="labor-pain.html"><!-- horizontal box --><div class="MenuItemLabel clearfix grpelem" id="u1475-4"><!-- content --><p>Labor Pain</p></div></a>
          </li>
         </ul>
        </div>
       </li>
      </ul>
      <div class="clearfix grpelem" id="u1277-3"><!-- content -->
       <p>&nbsp;</p>
      </div>
     </div>
     <div class="clearfix colelem" id="u623"><!-- group -->
      <div class="pointer_cursor clearfix grpelem" id="u616"><!-- group -->
       <a class="block" href="register.php"></a>
       <a class="nonblock nontext clearfix grpelem" id="u620-4" href="register.php"><!-- content --><p>REGISTER WITH SMAS</p></a>
      </div>
     </div>
    </div>
    <div class="SlideShowWidget clearfix grpelem" id="slideshowu854"><!-- none box -->
     <div class="popup_anchor" id="u896popup">
      <div class="SlideShowContentPanel clearfix" id="u896"><!-- stack box -->
       <div class="SSSlide clip_frame clearfix grpelem" id="u976"><!-- image -->
        <div id="u976_clip">
         <img class="ImageInclude position_content" id="u976_img" data-src="images/nexusae0_samsung-galaxy-gear-smartwatch-sketch_thumb1.jpg" src="images/blank.gif" alt="" data-width="368" data-height="246"/>
        </div>
       </div>
       <div class="SSSlide invi clip_frame clearfix grpelem" id="u958"><!-- image -->
        <div id="u958_clip">
         <img class="ImageInclude position_content" id="u958_img" data-src="images/2-patient-monitoring.jpg" src="images/blank.gif" alt="" data-width="368" data-height="246"/>
        </div>
       </div>
       <div class="SSSlide invi clip_frame clearfix grpelem" id="u967"><!-- image -->
        <div id="u967_clip">
         <img class="ImageInclude position_content" id="u967_img" data-src="images/dcaeb166-0483-42ef-85f1-4f68acb243bf-1409675868681.jpg" src="images/blank.gif" alt="" data-width="334" data-height="251"/>
        </div>
       </div>
      </div>
     </div>
     <div class="popup_anchor" id="u860popup">
      <div class="SSSlideLinks clearfix" id="u860"><!-- horizontal-rows box -->
       <div class="SSSlideLink clip_frame clearfix grpelem" id="u979"><!-- image -->
        <div id="u979_clip">
         <img class="position_content" id="u979_img" src="images/nexusae0_samsung-galaxy-gear-smartwatch-sketch_thumb1.jpg" alt="" width="67" height="45"/>
        </div>
       </div>
       <div class="SSSlideLink clip_frame clearfix grpelem" id="u961"><!-- image -->
        <div id="u961_clip">
         <img class="position_content" id="u961_img" src="images/2-patient-monitoring.jpg" alt="" width="67" height="45"/>
        </div>
       </div>
       <div class="SSSlideLink clip_frame grpelem" id="u970"><!-- image -->
        <img class="block" id="u970_img" src="images/dcaeb166-0483-42ef-85f1-4f68acb243bf-1409675868681.jpg" alt="" width="60" height="45"/>
       </div>
      </div>
     </div>
    </div>
    <div class="clearfix grpelem" id="pu179-3"><!-- column -->
     <div class="clearfix colelem" id="u179-3"><!-- content -->
      <p>&nbsp;</p>
     </div>
     <div class="clearfix colelem" id="u937"><!-- group -->
      <div class="rounded-corners clearfix grpelem" id="u934"><!-- group -->
       <img class="grpelem" id="u625-4" src="images/u625-4.png" alt="The future of medical systems is here for you. Just register with SMAS and forget to keep a watch of your health. In case of emergency SMAS is here to dispatch an ambulance at your doors automatically. SMAS continuously monitors your health statistics to be analyzed by best doctors in India. Ever want to know your medical history SMAS will always be for you. " width="309" height="157"/><!-- rasterized frame -->
      </div>
     </div>
     <div class="clearfix colelem" id="u936-3"><!-- content -->
      <p>&nbsp;</p>
     </div>
    </div>
    <div class="rounded-corners clearfix grpelem" id="u988"><!-- column -->
     <div class="position_content" id="u988_position_content">
      <img class="colelem" id="u989-4" src="images/u989-4.png" alt="Facts for the day !!!" width="171" height="29"/><!-- rasterized frame -->
      <div class="clearfix colelem" id="u2476-31"><!-- content -->
       <p><span id="u2476">1. Eat balanced diet</span></p>
       <p>&nbsp;</p>
       <p><span id="u2476-4">2. Regularly do exercise</span></p>
       <p>&nbsp;</p>
       <p><span id="u2476-7">3. Never do smoking</span></p>
       <p>&nbsp;</p>
       <p><span id="u2476-10">4. Do not take stress</span></p>
       <p>&nbsp;</p>
       <p><span id="u2476-13">5. Maintain blood pressure</span></p>
       <p>&nbsp;</p>
       <p><span id="u2476-16">6. Avoid junk food</span></p>
       <p>&nbsp;</p>
       <p><span id="u2476-19">7. Drink lot of water</span></p>
       <p>&nbsp;</p>
       <p><span id="u2476-22">8. Control your weight</span></p>
       <p>&nbsp;</p>
       <p><span id="u2476-25">9. Sleep for 8 hours</span></p>
       <p>&nbsp;</p>
       <p><span id="u2476-28">10. Undertake distressing activities</span></p>
      </div>
     </div>
    </div>
   </div>
   <div class="verticalspacer"></div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u3169-17-r.png" alt=""/>
   <img class="preload" src="images/u3169-17-m.png" alt=""/>
   <img class="preload" src="images/u3169-17-fs.png" alt=""/>
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
  <script src="scripts/jquery.musemenu.js?3788803530" type="text/javascript"></script>
  <script src="scripts/musewpslideshow.js?138381373" type="text/javascript"></script>
  <script src="scripts/jquery.museoverlay.js?4250894771" type="text/javascript"></script>
  <script src="scripts/touchswipe.js?4156838003" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?4068933136" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('#widgetu3161', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu3161 */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#slideshowu854', function(elem) { $(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:true,displayInterval:3500,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:500,enableSwipe:true,fullScreen:false})); });/* #slideshowu854 */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
