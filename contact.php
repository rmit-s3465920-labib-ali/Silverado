<?php
     $title="Contact Us";
     include_once('Header.php');
?>
<DOCTYPE html>
<html>


    <body style="background-image: url('Images/Background.jpg')">  
  
	 
    <main>
	    <div class="main">
		 <h1>Contact Us</h1>
		 </br></br>
		 <div class="form">
		     
         <form action='http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php' method='Post'>
             
             Subject:</br>
			 <select name="subject" required>
                         <option value="General Enquiry">General Enquiry</option>
                         <option>Group and Corporate Bookings</option>						 
		                 <option value="Suggestions & Complaints"> Suggestions & Complaints</option>
					 </select></br></br>
             Email:</br>
			 <input type="email" name="email" required></br></br>	
             Message:</br>
			 <textarea name="message" rows="10" cols="30" required></textarea></br></br>
             <input type="submit" value="submit">	 
	     </div>
		
		</div>
		
        
        
	
	</main>
   


</body>

</html>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php
     include_once('Footer.php');
?>
