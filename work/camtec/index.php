<?php $segment_1 = "work";?>
<?php $segment_2 = "project";?>
<?php $project_title = "Camtec Motion Picture Rental";?>
<?php $project_url = "www.camtec.tv";?>
<?php include('../../inc/head.php');?>
<?php include('../../inc/html_head.php');?>

<div class="project row">


	<div class="offset_4 project_info">
		<div class="grid_4 alpha">
			<h1><?php echo "$project_title";?></h1>
			<ul>
				<li>Branding</li>
				<li>Art Direction</li>
				<li>Design / Responsive Design</li>
				<li>CMS Development</li>
			</ul>
		</div>
		<div class="grid_4">
			<a href="http://<?php echo "$project_url";?>" target="blank"><?php echo "$project_url";?></a>
		</div>
		<div class="clearfix"></div>
	</div>

<div class="grid_12 superhero">
	<img src="/images/projects/camtec/camtec_01.jpg" alt="Camtec">
</div>

<div class="grid_6 sidekick">
	<img src="/images/projects/camtec/camtec_02.jpg" alt="Camtec">
</div>

<div class="grid_6 sidekick">
	<img src="/images/projects/camtec/camtec_04.jpg" alt="Camtec">
</div>

<div class="grid_12 superhero">
	<img src="/images/projects/camtec/camtec_03.jpg" alt="Camtec">
</div>


</div>


<?php include('../../inc/projects.php');?>
<?php include('../../inc/footer.php');?>