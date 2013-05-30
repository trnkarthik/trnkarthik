<script>
    $(document).ready(function() {
	 
	$('#wrong_email').hide();
	 
        $('#contact_submit').click(function(){
            var i = $.fn.validateForm();
	     	     
	     //verifying email id format
	    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	    if(regex.test($('#email_id').val())==false){
	        $('#wrong_email').show();
		i=1;
	    }
	     
            if(i==0){
                
                //posting a comment
                var message = $('#message').val();
                var name = $('#name').val();
                var email_id = $('#email_id').val();
                var subject = $('#subject').val();
                
                $.ajax({
		    type: "POST",
                    url: "includes/postComment.php",
                    data: {
                        message: message,
                        name:name,
                        email_id:email_id,
                        subject:subject,
                    },
                    success: function(msg) {
                        if(msg == 1)
			{
			    //posted successfully!
			    $('#contact_me_form').html("<div class='successful_posting'><br/>Your message reached me successfully.<br/>Thanks for contacting me!<br/>I will get back to you at the earliest.</div>");
			}
                    }
                });
                
            }
        });
        $.fn.validateForm = function() { 
            var i=0;
            if($('#name').val().trim().length==0)
            {
               document.getElementById("name").style.border='1px solid red';
               i=1;
            }
            if($('#email_id').val().trim().length==0)
            {
               document.getElementById("email_id").style.border='1px solid red';
               i=1;
            }
            if($('#message').val().trim().length==0)
            {
               document.getElementById("message").style.border='1px solid red';
               i=1;
            }
	    
	    /*
	     var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	    if(regex.test($('#email_id').val())==false)
	    {
		//alert("Please verify your email id");
	        $('#wrong_email').show();
		i=1;
	    }
            */
            return i;
        }
        
        $('#name').focus(function () {
               document.getElementById("name").style.border='1px solid #ccc';
        });
        $('#email_id').focus(function () {
	       $('#wrong_email').hide();
               document.getElementById("email_id").style.border='1px solid #ccc';
        });
        $('#message').focus(function () {
               document.getElementById("message").style.border='1px solid #ccc';
        });
       
    });
    
</script>

<div id="contact_link"></div>
		 <div id="contact" class="section" style="padding-bottom:40px">
		    <div class="section_title">
			Contact Me
		    </div>
		    <div id="social_connect">
			<ul>
			    <li>
				<a href="http://www.linkedin.com/pub/karthik-tangirala/21/693/a85" target="_blank">Connect with me on <i class="icon-linkedin-sign linkedin"></i></a>
			    </li>
			    <li>
				<a href="https://github.com/trnkarthik" target="_blank"">Follow me on <i class="icon-github github"></i></a>
			    </li>
			    <li>
				<a href="https://www.facebook.com/trnkarthik" target="_blank">Subscribe to me on <i class="icon-facebook-sign fb"></i></a>
			    </li>
			</ul>
			
		    </div>
		    <div id="contact_me_form">
			<table style="margin-left: 10%;">
			    <tr>
				<td>Name</td>
				<td><input type= "text" id="name"> <span class="required_text">(required)</span></td>
			    </tr>
			    <tr>
				<td>Email Id</td>
				<td id="email_handling">
				    <input type= "text" id="email_id">
					<span class="required_text">(required)</span>
					<div style='text-align:center;color:red;font-size:20px;' id='wrong_email'>Please verify your email id</div>
				</td>
			    </tr>
			    <tr>
				<td>Subject</td>
				<td><input type= "text" id="subject"></td>
			    </tr>
			    <tr>
				<td>Message</td>
				<td><textarea cols=30 rows=5 id="message"></textarea>
				    <span class="required_text">(required)</span></td>
			    </tr>
			    <tr>
				<td></td>
				<td>
				    <input type="submit" id="contact_submit">
				</td>
			    </tr>
			</table>
				
		    </div>
		 </div>