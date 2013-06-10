$(document).ready(function() {
		    var s = document.URL;
		    if(document.URL.indexOf("project") !== -1){
                        $("#header_blog_name i").show();
		    }
		    else{
                        $("#header_blog_name i").hide();
		    }
		});