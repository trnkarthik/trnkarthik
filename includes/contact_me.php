<script>
    $(document).ready(function() {
        $('#contact_submit').click(function(){
            var i = $.fn.validateForm();
            if(i!=1){
                
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
                        alert(msg);
                    }
                });
                
            }
        });
        $.fn.validateForm = function() { 
            var i=0;
            if($('#name').val()=='')
            {
               document.getElementById("name").style.border='1px solid red';
               i=1;
            }
            if($('#email_id').val()=='')
            {
               document.getElementById("email_id").style.border='1px solid red';
               i=1;
            }
            if($('#message').val()=='')
            {
               document.getElementById("message").style.border='1px solid red';
               i=1;
            }
            
            return i;
        }
        
        $('#name').focus(function () {
               document.getElementById("name").style.border='1px solid #ccc';
        });
        $('#email_id').focus(function () {
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
				<td><input type= "text" id="name"></td>
			    </tr>
			    <tr>
				<td>Email Id</td>
				<td><input type= "text" id="email_id"></td>
			    </tr>
			    <tr>
				<td>Subject</td>
				<td><input type= "text" id="subject"></td>
			    </tr>
			    <tr>
				<td>Message</td>
				<td><textarea cols=30 rows=5 id="message"></textarea></td>
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