<?php 
include 'includes/header.php';
?> 

	<body>
		<div class="content">
			<div>
				<nav>
					<p>
						<a href="/index.php">Home</a>
					</p>
					<p>
						<a href="/contact.php">Contact</a>
					</p>
				</nav>
	
				<div>
					<h1>Yep some things will go here soon.</h1>
					<a href="http://codepen.io/mush_el/" target="_blank">Codepen</a>
						
					<h2>Soundcloud stuff</h2>
					<a href="https://soundcloud.com/dj-nice-rack/">dj Nice Rack on soundcloud.com</a>
	
				</div>
			</div>
				
			
		
			<footer>
				<ul>
					<li>&copy; Copyright by Michelle Currier</li>
					<li>For booking <a href="mailto:mush_el@yahoo.com">email me</a>!</li>
				</ul>
				
			</footer>
		</div>
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

