<?php $segment_1 = "work";?>
<?php $segment_2 = "project";?>
<?php $project_title = "Sovage Fashion";?>
<?php $project_url = "www.sovagefashion.com";?>
<?php include('../../inc/head.php');?>
<?php include('../../inc/html_head.php');?>

<div class="project row">


	<div class="offset_4 project_info">
		<div class="grid_4 alpha">
			<h1><?php echo "$project_title";?></h1>
			<ul>
				<li>Art Direction</li>
				<li>Design</li>
				<li>CMS Development</li>
			</ul>
		</div>
		<div class="grid_4">
			<a href="http://<?php echo "$project_url";?>" target="blank"><?php echo "$project_url";?></a>
		</div>
		<div class="clearfix"></div>
	</div>

<div class="grid_12 superhero">
	<img src="/images/projects/sovage/sovage_01.jpg" alt="Sovage Fashion">
</div>

<div class="grid_6 sidekick">
	<img src="/images/projects/sovage/sovage_02.jpg" alt="Sovage Fashion">
</div>

<div class="grid_6 sidekick">
	<img src="/images/projects/sovage/sovage_03.jpg" alt="Sovage Fashion">
</div>

</div>


<?php include('../../inc/projects.php');?>
<?php include('../../inc/footer.php');?>