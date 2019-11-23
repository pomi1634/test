<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"   "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">

<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Located in Washington, D.C., the George Washington University offers undergraduate, graduate and professional programs through its 10 colleges and schools." />

  <title>faculty form</title>


<link type="text/css" rel="stylesheet" href="css/style2.css" media="all" />
<link type="text/css" rel="stylesheet" href="css/style3.css" media="screen" />


<script type="text/javascript" src="js/js1.js"></script>


<script type="text/javascript" src="js/webvator-file.js"></script>

	
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="/asrc/css/ie.css" media="screen, projection" />
	<![endif]-->

	
	<link rel="stylesheet" type="text/css" href="./CSS1/form.css">

	
	
	
	
	

<link rel="stylesheet" type="text/css" href="./CSS1/bootstrap.min.css">

<script type="text/javascript">
function validateForm()
{
if (!reg.name.value.match(/^[a-zA-Z\s]+$/) && reg.name.value !="")
  {
reg.name.value="";
reg.name.focus();
alert("Please Enter only alphabets in text");
}
if (!reg.disignation.value.match(/^[a-zA-Z\s]+$/) && reg.disignation.value !="")
  {
reg.disignation.value="";
reg.disignation.focus();
alert("Please Enter only alphabets in text");
}
if (!reg.qua.value.match(/^[a-zA-Z\s\.\()]+$/) && reg.qua.value !="")
  {
reg.qua.value="";
reg.qua.focus();
alert("Please Enter only alphabets in text");
}
}
</script>


<title>Faculty Addition form</title>
</head>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37631291-1']);
  _gaq.push(['_setDomainName', 'webvator.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<body class="html front not-logged-in no-sidebars page-frontpage tao" >
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    <div id="header">
<div id="header-wrapper">


		<a id="mobile-nav" href="#">
	  	<span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
</a><img src="images/sdsd.JPG" alt="" width="944" height="153" /></div></div>
</div>

<!--<div id='branding'><div class='limiter clearfix'>
  <h1 class='site-name'></h1></div></div>-->

<!--<div id='navigation'><div class='limiter clearfix'>
                </div></div>-->


<div id='page'><div class='limiter clearfix'>
                
        <div>


</div>
  
  <div id='main-content' class='clearfix'>
    
  
                <div id='content' class='clearfix'>  <div class="region region-content">
    <div class="panel-display panel-front-page clearfix" >
	
	  		<div class="hero-wrapper">	
    		<div class="panel-panel panel-hero">
      			<div class="inside"><div class="panel-pane pane-views-panes pane-gw-main-site-hero-rotator-panel-pane-1" >
  
      
  
  <div class="pane-content">
    <div class="view view-gw-main-site-hero-rotator view-id-gw_main_site_hero_rotator view-display-id-panel_pane_1 view-dom-id-d58c7f6586e6d226256e157a6320e2c0">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
    
  <div class="rotating-large-hero"><!-- end responsive-slider -->
			<div class="navigation-wrapper"><div class="navi"></div></div>
 			</div><!-- rotating large hero -->
			  </div>
    </div>
  
  
  
  
  
  
</div>  </div>

  
  </div>
</div>
    		</div>
		</div>
  	
      <div class="panel-panel panel-col-top">
      <div class="inside"><div class="panel-pane pane-gwu-primary-navigation" >
  
      
  
  <div class="pane-content">
    <div id="menu-wrapper"><div id="menu-top"><div class="menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1">
 <ul class="menu"><li class="first leaf has-children menu-mlid-784"><span title=""><a href="index.php">HOME</a></span></li>
  <li class="first leaf has-children menu-mlid-784"><span title=""><a href="addmission.php">Check Admissions</a></span></li>
  <li class="leaf has-children menu-mlid-785"><span title=""><a href="news.php">News Detail</a></span></li>
  <li class="leaf has-children menu-mlid-785"><span title=""><a href="faculty.php">Add Faculty</a></span></li>
  <li class="leaf has-children menu-mlid-785"><span title=""><a href="accepted.php">Accepted Students</a></span></li>
<li class="leaf has-children menu-mlid-785"><span title=""><a href="logout.php">Log Out</a></span></li>

</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div> 
  <div id="content"><br>
	
<center>
  <h3>User Addition Form</h3></center>


<div class="form">
<script type="text/javascript">
    var BASE_PATH = "/asrc";
    function changeSelectedVal(val){
         document.getElementById('domicileid').selectedIndex=0;
    }
    function provinceUpdate(){
        $('#Soldier_tehsil_id').empty();
        var newOption = $('<option value="0">---Select Tehsil---</option>');
        $('#Soldier_tehsil_id').append(newOption);
        $('#Soldier_tehsil_id').trigger("chosen:updated");

        $('#Soldier_unioncouncil_id').empty();
        var newOption = $('<option value="0">---Select Union Council---</option>');
        $('#Soldier_unioncouncil_id').append(newOption);
        $('#Soldier_unioncouncil_id').trigger("chosen:updated");
    }
    function districtUpdate(){
        $('#Soldier_unioncouncil_id').empty();
        var newOption = $('<option value="0">---Select Union Council---</option>');
        $('#Soldier_unioncouncil_id').append(newOption);
        $('#Soldier_unioncouncil_id').trigger("chosen:updated");
    }
    function domicile(){
        var val = $('#domicileid option:selected').val();
        //alert(val);
    }
</script>
<form name="reg" action="adduser.php"  method="post" enctype="multipart/form-data">
<div style="display:none"><input type="hidden" value="b0192bcc1312c7bb0836b18ec94864a14730f820" name="YII_CSRF_TOKEN"></div>
<!--<div align="right">-->
<!--    --><!--</div>-->
<fieldset>
    <legend>Personal Information</legend>

    <div class="row wide">
        Name   <span class="required">*</span> &nbsp;&nbsp;&nbsp;  : <input name="name" id="Soldier_name" type="text" maxlength="34"   onkeyup="validateForm()" required="required" />            </div>



    <div class="row wide">
        Password <span class="required">*</span>&nbsp;&nbsp;&nbsp; :
                <input type="text" name="pass"   onkeyup="validateForm()" required="required">
            </div>

    
    
    
</fieldset>




<!--addl qual-->

    
    <div></div><br>
    <br>
    <div class="row" align="center">
      <input class="btn btn-success" type="submit" name="submit" value="Submit">    <input  class="btn btn-success" type="reset" name="reset" value="Reset"></div>
     <center>
       <p>&nbsp;</p> 
       
       <span class="required">
         <?php
      if(isset($_GET['faculty']))echo "User Added Successfully";
	  ?>
         <?php
      if(isset($_GET['faculty1']))echo" User name/Password already exists,Please try again....";
			 
	  ?>
      </span>
      
     
     </center>
 
      
     
</form>


  <table width="100%" border="0" style="margin-left:-1px;">
    <tr>
      <td>Action</td>
      
      <td>Name</td>
      <td>Password</td>
      
    </tr>
    <?php do { ?>
    <tr>
      <td><a href="delete6.php?username=<?php echo $row_rs_faculty['username']; ?>">Delete</a></td>
      
      <td><?php echo $row_rs_faculty['username']; ?></td>
      <td><?php echo $row_rs_faculty['password']; ?></td>
      
    </tr>
    <?php } while ($row_rs_faculty = mysql_fetch_assoc($rs_faculty)); ?>
  </table>

        </div>
    </div>
  
  
  
  
  
  
</div> 
  </div>
  </div>
	</div>
  </div>

  
</div></div>

<div id="footer">
	<div id="footer-wrapper">

<div class="view view-main-footer view-id-main_footer view-display-id-main_footer_panel_pane view-dom-id-5a0318ceefb9acc947ed87b008e71452">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
    <div class="footer-wrapper clearfix">
<div class="footer-left clearfix">
<div class="footer-logo clearfix">
		<a href="index.php" title="Canada MI"><div class="field field-name-field-logo field-type-image field-label-hidden"><div class="field-items"><div class="field-item even"><img typeof="foaf:Image" src="images/LOGO1.jpg" width="100" height="60"  title="Canada MI University" /></div></div></div></a>
</div>

<div class="footer-address clearfix">Design by Qasim Ali</div>
</div>
<div class="footer-right clearfix">
<div class="row-one clearfix"><ul>
<li>	<a href="user.php">Add User</a></li>
<li>	<a href="test.php">Add Test Question</a></li>
<li>	<a href="feedback.php">Check Comments</a></li>
										
									
								</ul></div>	

<div class="row-two clearfix"><ul>
										
											<li></li>
											
                                            
							</ul>	</div>
</div>
</div>  </div>
    </div>
  
  
  
  
  
  
</div></div>
</div>  </body>
</html>
