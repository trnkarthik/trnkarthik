<style>
    .step img {
position: absolute;
left: 60%;
top: -15%;
width: 325px;
height: 550px;
}
.color-1{
background-color: #E3D8FF;
background-color: rgba(139, 139, 139, 1);
}
.color-2{
background-color: #1E9DB9;
background-color: rgb(85, 128, 138);
}
.color-3{
background-color: rgb(175, 94, 31);
background-color: rgb(153, 98, 55);
background-color: rgba(20, 82, 35, 1);
}
.color-4{
background-color: rgb(153, 98, 55);
}
.color-5{
background-color: rgba(99, 36, 36, 1);
}
</style>
<section id="jms-slideshow" class="jms-slideshow">
    <div class="step" data-color="color-1" data-x="2000" data-y="1000" data-z="3000" data-rotate="-20">
	<div class="jms-content">
            <h3>Just when I thought...</h3>
	    <p>From fairest creatures we desire increase, that thereby beauty's rose might never die</p>
	    <a class="jms-link" href="#">Read more</a>
	</div>
	<img src="http://localhost/trnkarthik/images/BMIApplication_with_shadow/1.png" width=250px height=450px/>
	</div>
     
    <div class="step" data-color="color-2" data-x="1000" data-z="2000" data-rotate="20">
	<div class="jms-content">
            <h3>Holy cannoli!</h3>
	    <p>But as the riper should by time decease, his tender heir might bear his memory</p>
	    <a class="jms-link" href="#">Read more</a>
	</div>
	<img src="http://localhost/trnkarthik/images/BMIApplication_with_shadow/1.png" />
    </div>
                
    <div class="step" data-color="color-3" data-x="2000" data-y="1500" data-z="1000" data-rotate="20">
	<div class="jms-content">
            <h3>No time to waste</h3>
	    <p>Within thine own bud buriest thy content and, tender churl, makest waste in niggarding</p>
	    <a class="jms-link" href="#">Read more</a>
	</div>
	<img src="http://localhost/trnkarthik/images/BMIApplication_with_shadow/1.png" />
    </div>
	
    <div class="step" data-color="color-4" data-x="3000" data-y="2000">
	<div class="jms-content">
            <h3>Supercool!</h3>
	    <p>Making a famine where abundance lies, thyself thy foe, to thy sweet self too cruel</p>
	    <a class="jms-link" href="#">Read more</a>
	</div>
	<img src="http://localhost/trnkarthik/images/BMIApplication_with_shadow/1.png" />
    </div>
    				
    <div class="step" data-color="color-5" data-x="4000" data-y="1500" data-z="1000" data-rotate="-20">
	<div class="jms-content">
            <h3>Did you know that...</h3>
            <p>Thou that art now the world's fresh ornament and only herald to the gaudy spring</p>
	    <a class="jms-link" href="#">Read more</a>
        </div>
	<img src="http://localhost/trnkarthik/images/BMIApplication_with_shadow/1.png" />
    </div>
                
    </section>
          
    <script type="text/javascript">
	$(function() {
            var jmpressOpts	= {
		animation: { transitionDuration : '0.8s' }
	    };
            $( '#jms-slideshow' ).jmslideshow( $.extend( true, { jmpressOpts : jmpressOpts }, {
                autoplay	: true,
                bgColorSpeed: '0.8s',
                arrows		: true
                }));		
	});
    </script>