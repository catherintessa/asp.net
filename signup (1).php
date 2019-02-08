<!DOCTYPE html>
<html lang="en">
<head>
<title>Pet Club | Contacts</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/jquery.js"></script><!--
<script src="js/forms.js"></script>-->
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
jQuery(document).ready(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.html"><img src="images/1.png" alt=""></a> </h1>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li><a href="index.php">Home</a></li>
           <!-- <li><a href="about-us.html">About Us</a>
              <ul>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Archive</a></li>
              </ul>
            </li>
            <li><a href="services.html">Services</a></li>
            <li><a href="blog.html">Blog</a></li>-->
            <li class="current"><a href="signup.php">login </a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="content pt1">
  <div class="container_12">
    <!--<div class="grid_6">
      <h2>Contact Info</h2>
      <br>
      <div class="map">
        <figure class="img_inner">
          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        </figure>
        <address>
        <dl>
          <dt>
            <p>The Company Name Inc.<br>
              8901 Marmora Road,<br>
              Glasgow, D04 89GR.</p>
          </dt>
          <dd><span>Freephone:</span>+1 800 559 6580</dd>
          <dd><span>Telephone:</span>+1 800 603 6035</dd>
          <dd><span>FAX:</span>+1 800 889 9898</dd>
        </dl>
        </address>
      </div>
    </div>-->
    <div class="grid_5 prefix_3">
    <br/>
    <?php
    if(isset($_REQUEST["p"]))
	{
		
		if($_REQUEST["p"]=="user")
		{
		?>
	    <div style="border:#666 solid thin;margin-top:20px;padding-left:60px;padding-bottom:20px; width:100%;">
      <h2 class="ic1"> User Registration </h2>
      <form id="form" action="user_reg.php" method="post">
       <!-- <div class="success_wrapper">
          <div class="success">Contact form submitted!<br>
            <strong>We will be in touch soon.</strong> </div>
        </div>-->
        <fieldset>
         <label class="name">
            <input type="text" placeholder="Name:" name="t1">
            <br class="clear">
            <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
         <label class="message">
            <textarea placeholder="Address:" name="t2" style="height:100px;width:225px;margin-bottom:10px;"></textarea>
            <br class="clear">
             <span class="empty">*This field is required.</span> </label>
               <label class="name">
            <input type="text" placeholder="street:" name="t3">
            <br class="clear">
            <span class="error error-empty">*This is not a valid street name.</span><span class="empty error-empty">*This field is required.</span> </label>

              <label class="name">
            <input type="text" placeholder="location:" name="t4">
            <br class="clear">
            <span class="error error-empty">*This is not a valid location.</span><span class="empty error-empty">*This field is required.</span> </label>
              <label class="name">
            <input type="text" placeholder="district:"name="t5" >
            <br class="clear">
            <span class="error error-empty">*This is not a valid district name.</span><span class="empty error-empty">*This field is required.</span> </label>
              <label class="name">
            <input type="text" placeholder="state:" name="t7">
            <br class="clear">
            <span class="error error-empty">*This is not a valid state.</span><span class="empty error-empty">*This field is required.</span> </label>
              <label class="pincode">
            <input type="text" placeholder="pincode:" name="t8">
            <br class="clear">
            <span class="error error-empty">*This is not a valid pincode.</span><span class="empty error-empty">*This field is required.</span> </label>
                <label class="phone">
            <input type="tel" placeholder="Phone number:" name="t9">
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                <label class="phone">
            <input type="tel" placeholder="alternative:" name="t91">
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                <label class="gender" >
            <input type="radio" value="male" name="t10" style="width:10px;height:10px;"><span style="font-size:15px;color:#333;">male</span><br/>
            <input type="radio" value="female" name="t10" style="width:10px;height:10px;"><span style="font-size:15px;color:#333;">female</span>

            <br class="clear">
           <!-- <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> --></label>
          <label class="email">
            <input type="text" placeholder="E-mail:" name="t11">
            <br class="clear">
            <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>  
             <label class="message">
            <textarea placeholder="questions:" style="height:100px;width:225px;margin-bottom:10px;" name="t12"></textarea>
            <br class="clear">
            </label>
            
      
     <label class="message">
            <textarea placeholder="answer:" style="height:100px;width:225px;margin-bottom:10px;" name="t13"></textarea>
            <br class="clear">
            </label>
            
                <label class="phone">
               <input type="tel" placeholder="password:" name="t14">
            <br class="clear">
            <span class="error error-empty">*must have 10 numbers.</span><span class="empty error-empty">*This field is required.</span> </label>
          <div class="clear"></div>
          <div class="btns"><button type="submit" style="background:#FC0;height:30px;width:100px; border:none;">register</button>
            <div class="clear"></div>
           <div style="margin-right:30px;text-align:right;"><a href="signup.php?p=shop" style="color:blue;text-decoration:underline;">I am a shop owner</a>&nbsp;/&nbsp;<a href="signup.php" style="color:blue;text-decoration:underline;">already have an account</a></div>
          </div>
        </fieldset>
      </form>
      </div>

	<?php
		}else if($_REQUEST["p"]=="shop")
		{
			?>
			
			   <div style="border:#666 solid thin;margin-top:20px;padding-left:60px;padding-bottom:20px; width:100%;">
     
			<h2 class="ic1">Shop Registration</h2>
      <form id="form" action="shop_reg.php" method="post" enctype="multipart/form-data">
       <!-- <div class="success_wrapper">
          <div class="success">Contact form submitted!<br>
            <strong>We will be in touch soon.</strong> </div>
        </div>-->
        <fieldset>
         <label class="name">
            <input type="text" placeholder=" Shop Name:" name="t1">
            <br class="clear">
            <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
         <label class="message">
            <textarea placeholder="shop Address:" name="t2" style="height:100px;width:225px;margin-bottom:10px;"></textarea>
            <br class="clear">
             <span class="empty">*This field is required.</span> </label>
               <label class="text">
            <input type="text" placeholder="licences no:" name="t3">
            <br class="clear">
            <span class="error error-empty">*This is not a valid street name.</span><span class="empty error-empty">*This field is required.</span> </label>
            
            <label class="gender" >
            <input type="radio" value="male" name="t6" style="width:10px;height:10px;"><span style="font-size:15px;color:#333;">male</span><br/>
            <input type="radio" value="female" name="t6" style="width:10px;height:10px;"><span style="font-size:15px;color:#333;">female</span>

            <br class="clear">
           <!-- <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> --></label>
              <label class="name">
            <input type="text" placeholder="location:" name="t7">
            <br class="clear">
            <span class="error error-empty">*This is not a valid location.</span><span class="empty error-empty">*This field is required.</span> </label>
              <label class="name">
            <input type="text" placeholder="street:" name="t8">
            <br class="clear">
            <span class="error error-empty">*This is not a valid street name.</span><span class="empty error-empty">*This field is required.</span> </label>
              <label class="name">
            <input type="text" placeholder="district:"name="t9" >
            <br class="clear">
            <span class="error error-empty">*This is not a valid district name.</span><span class="empty error-empty">*This field is required.</span> </label>
        
                <label class="phone">
            <input type="tel" placeholder="Phone number:" name="t10">
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                <label class="phone">
            <input type="tel" placeholder="alternative:" name="t11">
            <br class="clear">
            <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
                
          <label class="email">
            <input type="text" placeholder="Officil E-mail:" name="t12">
            <br class="clear">
            <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>  
             <label class="message">
            <textarea placeholder="questions:" style="height:100px;width:225px;margin-bottom:10px;" name="t13"></textarea>
            <br class="clear">
            </label>
            
      
     <label class="message">
            <textarea placeholder="answer:" style="height:100px;width:225px;margin-bottom:10px;" name="t14"></textarea>
            <br class="clear">
            </label>
 <label class="email">
            <input type="text" placeholder="personal E-mail:" name="t15">
            <br class="clear">
            <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>  
            
                <label class="phone">
               <input type="tel" placeholder="password:" name="t16">
            <br class="clear">
            <span class="error error-empty">*must have 10 numbers.</span><span class="empty error-empty">*This field is required.</span> </label>
          <div class="clear"></div>
          <div class="btns"><button type='submit' style="background:#FC0;height:30px;width:100px; border:none;">register</button>
            <div class="clear"></div>
           <div style="margin-right:30px;text-align:right;"><a href="signup.php?p=user" style="color:blue;text-decoration:underline;">I am a user</a>&nbsp;/&nbsp;<a href="signup.php" style="color:blue;text-decoration:underline;">already have an account</a></div>
          </div>
        </fieldset>
      </form>
      </div>
			
			<?php
			
			
			}
	}else
	{
	?>
    <div style="border:#666 solid thin;margin-top:20px;padding-left:60px;padding-bottom:20px;">
      <h2 class="ic1">Login Form</h2>
      <form id="form" action="login.php" method="post">
       <!-- <div class="success_wrapper">
          <div class="success">Contact form submitted!<br>
            <strong>We will be in touch soon.</strong> </div>
        </div>-->
        <fieldset>
         <!-- <label class="name">
            <input type="text" value="Name:">
            <br class="clear">
            <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>-->
          <label class="email">
            <input type="text" placeholder="username" name="t1" />
            <br class="clear">
            <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
          <label class="phone">
            <input type="password" placeholder="password" name="t2" />
            <br class="clear">
            <span class="error error-empty">*This is not a valid password.</span><span class="empty error-empty">*This field is required.</span> </label>
      <!--    <label class="message">
            <textarea></textarea>
            <br class="clear">
            <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>-->
          <div class="clear"></div>
          <div class="btns"><button type="submit"style="background:#FC0;height:30px;width:100px; border:none;">login</button>
            <div class="clear"></div>
           <div style="margin-right:30px;text-align:right;"><a href="" style="color:blue;text-decoration:underline;">Forgot Password</a>&nbsp;/&nbsp;<a href="signup.php?p=user" style="color:blue;text-decoration:underline;">create your account here</a></div>
          </div>
        </fieldset>
      </form>
      </div>
      <?php }?>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <p>Pet Shop &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a></p>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>