<?php $segment_1 = "work";?>
<?php $segment_2 = "project";?>
<?php $project_title = "Won-G";?>
<?php $project_url = "www.won-g.com";?>
<?php include('../../inc/head.php');?>
<?php include('../../inc/html_head.php');?>

<div class="project row">


	<div class="offset_4 project_info">
		<div class="grid_4 alpha">
			<h1><?php echo "$project_title";?></h1>
			<ul>
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
	<img src="/images/projects/wong/wong_01.jpg" alt="Won-G">
</div>

<div class="grid_6 sidekick">
	<img src="/images/projects/wong/wong_02.jpg" alt="Won-G">
</div>

<div class="grid_6 sidekick">
	<img src="/images/projects/wong/wong_03.jpg" alt="Won-G">
</div>

<div class="grid_12 superhero">
	<img src="/images/projects/wong/wong_04.jpg" alt="Won-G">
</div>


</div>


<?php include('../../inc/projects.php');?>
<?php include('../../inc/footer.php');?>