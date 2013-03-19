<?php $segment_1 = "work";?>
<?php $segment_2 = "project";?>
<?php $project_title = "Peter Svenson Photography";?>
<?php $project_url = "www.petersvenson.com";?>
<?php include('../../inc/head.php');?>
<?php include('../../inc/html_head.php');?>

<div class="project row">


	<div class="offset_4 project_info">
		<div class="grid_4 alpha">
			<h1><?php echo "$project_title";?></h1>
			<ul>
				<li>Design</li>
				<li>Development</li>
			</ul>
		</div>
		<div class="grid_4">
			<a href="http://<?php echo "$project_url";?>" target="blank"><?php echo "$project_url";?></a>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="grid_12"> 
		<ul class="bxslider">
			<li><img src="/images/projects/svenson/ps_01.jpg"alt="Peter Svenson Photography"></li>
			<li><img src="/images/projects/svenson/ps_02.jpg"alt="Peter Svenson Photography"></li>
			<li><img src="/images/projects/svenson/ps_03.jpg"alt="Peter Svenson Photography"></li>
			<li><img src="/images/projects/svenson/ps_04.jpg"alt="Peter Svenson Photography"></li>
			<li><img src="/images/projects/svenson/ps_05.jpg"alt="Peter Svenson Photography"></li>
		</ul>
	</div>


</div>


<?php include('../../inc/projects.php');?>
<?php include('../../inc/footer.php');?>