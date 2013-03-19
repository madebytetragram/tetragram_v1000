<?php $segment_1 = "work";?>
<?php $segment_2 = "project";?>
<?php $project_title = "Forma Archtects";?>
<?php $project_url = "www.forma-arc.com";?>
<?php include('../../inc/head.php');?>
<?php include('../../inc/html_head.php');?>

<div class="project row">


	<div class="offset_4 project_info">
		<div class="grid_4 alpha">
			<h1><?php echo "$project_title";?></h1>
			<ul>
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
	<img src="/images/projects/forma/forma_01.jpg" alt="Forma">
</div>

<div class="grid_6 sidekick">
	<img src="/images/projects/forma/forma_04.jpg" alt="Forma">
</div>


<div class="grid_6 sidekick">
	<img src="/images/projects/forma/forma_02.jpg" alt="Forma">
</div>

<div class="grid_6 sidekick">
	<img src="/images/projects/forma/forma_03.jpg" alt="Forma">
</div>


</div>


<?php include('../../inc/projects.php');?>
<?php include('../../inc/footer.php');?>