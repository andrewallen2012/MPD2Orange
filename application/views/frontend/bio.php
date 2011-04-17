<div id="content" class="container_16" style="background: #fff;">
	<div id="bio_title" class="grid_8 push_2">
		<?php if(isset($alum_data)) : ?>
		<div class="grid_8">
			<h2><?php echo "$alum_data->FirstName $alum_data->LastName's Bio Page";?></h2>

		</div>
		<div class="grid_4">
			<?php if(isset($alum_data)) : ?>
			<img src="<?php echo "$alum_data->ImageURL";?>" alt="<?php echo "$alum_data->FirstName $alum_data->LastName" ?>" />
			<h2><?php else : echo "Image not found!";?></h2>
			<?php endif; ?>
			
			<a href="<?php echo "$alum_data->facebook"; ?>"><img src="<?php echo base_url()."images/facebooklogo.png"; ?>", alt="Facebook"/></a>
			<a href="<?php echo "$alum_data->twitter"; ?>"><img src="<?php echo base_url()."images/twitter_logo.jpg"; ?>", alt="Twitter"/></a>
			<a href="<?php echo "$alum_data->linkedin"; ?>"><img src="<?php echo base_url()."images/linkedIn_logo.gif"; ?>", alt="LinkedIn"/></a>
		</div>
		
		<div class = "grid_8">
		<p><?php echo "$alum_data->info";?></p>
		
		</div>
		
		<h2><?php else : echo "Alumni not found!";?></h2>
		<?php endif; ?>
	</div>

</div>
