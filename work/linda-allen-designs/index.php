<?php $segment_1 = "work";?>
<?php $segment_2 = "project";?>
<?php $project_title = "Linda Allen Designs";?>
<?php $project_url = "www.lindaallendesigns.com";?>
<?php include('../../inc/head.php');?>
<?php include('../../inc/html_head.php');?>

<div class="project row">


	<div class="offset_4 project_info">
		<div class="grid_4 alpha">
			<h1><?php echo "$project_title";?></h1>
			<ul>
				<li>Art Direction</li>
				<li>Design / Responsive Design</li>
				<li>Development</li>
			</ul>
		</div>
		<div class="grid_4">
			<a href="http://<?php echo "$project_url";?>" target="blank"><?php echo "$project_url";?></a>
		</div>
		<div class="clearfix"></div>
	</div>


</div>


<?php include('../../inc/projects.php');?>
<?php include('../../inc/footer.php');?>