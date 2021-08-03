<?php include("include/menu.html"); ?>
<!-- content -->
<div class=" row2">
  <div id="container" class="clear">
    <!-- content body -->
    <div id="content" class="msg">
      <!-- main content -->
      

<?php 
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$headers = "From: $email". "\r\n" . "Reply-To: $email" . "\r\n" . 'X-Mailer: PHP/' . phpversion(); 
		$to="chitranshu@gmail.com" ;
		//$bool=filter_var($email, FILTER_VALIDATE_EMAIL );
				
		$sent =	mail($to,$subject,$message,$headers);
			if($sent)
				{
					echo "<img src=\"images/smiling_smiley.jpg\" height=\"20\" width=\"20\">Thank you. We will get back to you soon.";
					}
					else
					{
						echo "<img src=\"images/sad_smiley.jpg\" height=\"20\" width=\"20\"> ";
						echo "Something went wrong. Unable to send mail. <br/>";
						echo "Please wait while you are being redirected to our Contact page in few seconds";
				 						header("Refresh: 5;url=contact.php");
						}
		
	?>
    
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- footer -->
<div class=" row3">
  <footer id="footer" class="clear">
    <center><p><?php echo "Copyright &copy; ". date("Y") ." HIMT, Rohtak"?></p></center>
	
    <!--<p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>-->
  </footer>
</div>
</div>
</body>
</html>
