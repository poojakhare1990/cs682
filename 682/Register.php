<!DOCTYPE HTML>
<html>
<head>
	<title>Register</title>
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
	<script type="javascript">
		addEventListener("load", function(){setTimeout(hideURLbar, 0);},false);
		function hideURLbar(){window.scrollTo(0, 1);}
	</script>
</head>
<body>
	<?php
	echo '
		<div class="main">
				 <div class="inset">
				 	<div class="social-icons">
		    			 <div class="span"><a href="#"><img src="images/fb.png" alt=""/><i>Connect with Facebook </i><div class="clear"></div></a></div>	
    					 <div class="span1"><a href="#"><img src="images/t-bird.png" alt=""/><i>Connect with Twitter</i><div class="clear"></div></a></div>
    					 <div class="clear"></div>
					</div>
				 </div>	
				 <h2>Or sign up with</h2>
				 <form>
						<div class="lable">
		                     <input type="text" class="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" id="active">

		                     <input type="text" class="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}">
		                    </div>
		                    <div class="clear"> </div>
		                    <div class="lable-2">
		                    <input type="text" class="text" value="your@email.com " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your@email.com ';}">
		                     <input type="password" class="text" value="Password " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password ';}">
							</div>
							<div class="clear"> </div>
							 <h3>By creating an account, you agree to our <span><a href="#">Terms & Conditions</a> <span></h3>
								 <div class="submit">
									<input type="submit" onclick="myFunction()" value="Create account" >
								</div>
									<div class="clear"> </div>
							 </form>
		</div>
   					<div class="copy-right">
						<p>More Templates <a href="http://www.cssmoban.com/" target="_blank" title="Software Development">Software</a></p> 
					</div>
	';?>
</body>
</html>