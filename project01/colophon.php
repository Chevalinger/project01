
	<?php 
	//Add the name of the page to the title
	$currentPage = "Colophon";
	//Include the topPart file.	
	include "inc/topPart.inc"; 
	?>

	<!--Add the navigation to our page using PHP includes -->
     <?php include "inc/nav.inc.php"; ?>


		<h2>About the Project</h2>
	

		<section>
			<article>

					<h3>Member Tasks</h3>
						<ul class="collection tasks">
						    <li class="collection-item avatar indigo lighten-3">
						     <i class="material-icons circle blue">store</i>
						     <span class="title">Alizah Barker</span>
						     <h5>Architect</h5>
						     <ul class = "mem-tasks">
						      	<li>Chose Framework</li>
						      	<li>Created Repository</li>
						      	<li>Design Elements</li>
						      	<li>Mobile Friendliness</li>
						      	<li>Framework Elements</li>
						      	<li>General Help</li>
						    </ul>

						      
						    </li>
						    <li class="collection-item avatar indigo lighten-3">
						      <i class="material-icons circle orange">http</i>
						      <span class="title">Chadrick Frederick</span>
						    <h5>Content Master and Designer</h5>
						    <ul class = "mem-tasks">
						      	<li>Chose Topic: Sports</li>
						      	<li>Structured Content</li>
						      	<li>Sections organization</li>
						      	<li>PHP Includes</li>
						    </ul>
						     
						    </li>
						    <li class="collection-item avatar indigo lighten-3">
						      <i class="material-icons circle green">mode_edit</i>
						      <span class="title">Daniel Gomez</span>
						    <h5>CSS Artist</h5>
						    <ul class = "mem-tasks">
						      	<li>Overrode Materialize</li>
						      	<li>Selected Elements to Edit</li>
						      	<li>Customed Website</li>
						      	<li>Organization of CSS File</li>
						    </ul>
						      
						    </li>
						    <li class="collection-item avatar indigo lighten-3">
						      <i class="material-icons circle red">view_quilt</i>
						      <span class="title">Mariana Flores Kim</span>
						    <h5>Framework Wrangler</h5>
						    <ul class = "mem-tasks">
						      	<li>Created New Classes</li>
						      	<li>Edited and Cleaned Code</li>
						      	<li>Applied Decisions</li>
						      	<li>Navigation Bar Extra Effects</li>
						      	<li>Footer Look</li>
						      	<li>Edited Colophon</li>
						    </ul>
						      
						    </li>
						    <li class="collection-item avatar indigo lighten-3">
						    <i class="material-icons circle purple">view_carousel</i>
						    <span class="title">Jacob Margolis</span>
						    <h5>JavaScript Coder</h5>
						    <ul class = "mem-tasks">
						      	<li>Designed Carousel</li>
						      	<li>Mobile Compatibility</li>
						      	<li>Other Functionalities</li>
						      	<li>To-do List for Team</li>
						      	<li>General Help</li>
						    </ul>
						      
						    </li>
						 </ul>
          

					<h3>Technologies Used</h3>
							<ul class="tech-used">
							<li>Git repository hosting service: Github</li>
							<li>CSS Framework: Materialize v0.97.7</li>
							<li>HTML5</li>
							<li>CSS3</li>
							<li>JavaScript</li>
							<li>PHP</li>
							</ul>
		
					<h3>Content Sources</h3>
						<p>All content was taken from Wikipedia</p>
						<p>Code content was taken from the Materialize site</p>

		
			</article>
		</section>

		<?php include "inc/footer.inc"; ?>

	</div><!-- .container -->

		<!-- Site information was collected from wikipedia at https://en.wikipedia.org/-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
        <script src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/carousel.js"></script>
        <script type="text/javascript" src="js/mobile-nav.js"></script>
	</body>
</html>
