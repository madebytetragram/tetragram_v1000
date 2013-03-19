<?php $segment_1 = "work";?>
<?php $segment_2 = "project";?>
<?php $project_title = "Marmol Radziner";?>
<?php $project_url = "www.marmol-radziner.com";?>
<?php include('../../inc/head.php');?>
<?php include('../../inc/html_head.php');?>

<div class="project row">


	<div class="offset_4 project_info">
		<div class="grid_4 alpha">
			<h1><?php echo "$project_title";?></h1>
			<ul>
				<li>Design</li>
				<li>E-commerce</li>
				<li>Front End Development</li>
				<li>CMS Development</li>
			</ul>
		</div>
		<div class="grid_4">
			<a href="http://<?php echo "$project_url";?>" target="blank"><?php echo "$project_url";?></a><br>
			<a href="http://www.marmolradzinerprefab.com" target="blank">www.marmolradzinerprefab.com</a><br>
			<a href="http://www.marmolradzinerfurniture.com/" target="blank">www.marmolradzinerfurniture.com</a><br>
			<a href="http://www.marmolradzinerjewelry.com/" target="blank">www.marmolradzinerjewelry.com</a><br>
		</div>
		<div class="clearfix"></div>
	</div>

<div class="grid_12 superhero">
	<img src="/images/projects/mra/mra_01.jpg" alt="Marmol Radziner">
</div>

<div class="grid_6">
	<img src="/images/projects/mra/mrp_01.jpg" alt="Marmol Radziner">
</div>

<div class="grid_6">
	<img src="/images/projects/mra/mrf_01.jpg" alt="Marmol Radziner">
</div>


</div>


<?php include('../../inc/projects.php');?>
<?php include('../../inc/footer.php');?>