<?php 
include 'includes/header.php';
?> 

	
	
				<div>
					<h1>Yep some things will go here soon.</h1>
					<a href="http://codepen.io/mush_el/" target="_blank">Codepen</a>
						
					<h2>Soundcloud stuff</h2>
					<a href="https://soundcloud.com/dj-nice-rack/">dj Nice Rack on soundcloud.com</a>
	
				</div>
			</div>
				
		</div>	
		
<?php 
include 'includes/footer.php';
?>			
		
	<script src="includes/MooTools-Core-1.6.0.js"></script>
	<script type="text/javascript">
	$("myElement").addEvent("click", function(){
  var SM = new SimpleModal();
      SM.show({
        "model":"modal-ajax",
        "title":"Image title",
        "param":{
          "url":"http://url-file.jpg",
          "onRequestComplete": function(){ }
        }
      });
});

	
	</script>
	
	</body>
	
</html>

