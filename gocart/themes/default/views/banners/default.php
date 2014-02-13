
<div id="carousel_<?php echo $id;?>" class="carousel slide">
	<!-- Carousel items -->
	<div class="carousel-inner">
		<?php
		$active_banner	= 'active ';
		foreach($banners as $banner):?>
            
                        <div class="<?php echo $active_banner;?>item">
                            <img class="col-xs-12 col-md-6" alt="First slide" src="<?php echo base_url('uploads/'.$banner->image);?>">
                            <div class="carousel-caption col-md-6">
                                <h1><?php echo $banner->name;?></h1>
                                <?php echo $banner->content;?>
                                <p>
                                    <?php
                                    if($banner->link)
                                    {
					$target=false;
					if($banner->new_window)
					{
						$target=' target="_blank"';
					}
                                        ?>
                                            <a role="button" href="<?php echo $banner->link; ?>" <?php echo $target; ?> class="btn btn-lg btn-primary">APPLY NOW<img alt="icon" src="<?php echo SITE_URL;?>stuff/img/img-button-apply.png"></a>
                                        <?php
					//echo '<a href="'.$banner->link.'"'.$target.'>'.$banner_image.'</a>';
                                    }
                                    ?>
                                    <!--<a role="button" href="#" class="btn btn-lg btn-primary">APPLY NOW<img alt="icon" src="img/img-button-apply.png"></a>-->
                                </p>
                            </div>
                        </div>
            
<!--			<div class="<?php echo $active_banner;?>item">
				<?php
						
				$banner_image	= '<img src="'.base_url('uploads/'.$banner->image).'" />';
				if($banner->link)
				{
					$target=false;
					if($banner->new_window)
					{
						$target=' target="_blank"';
					}
					echo '<a href="'.$banner->link.'"'.$target.'>'.$banner_image.'</a>';
				}
				else
				{
					echo $banner_image;
				}
				?>

				<?php if($banner->name): ?>
					<div class="carousel-caption">
						<h4><?php echo $banner->name ?></h4>
					</div>
				<?php endif; ?>
					
			</div>-->
		<?php 
		$active_banner = false;
		endforeach;?>
	</div>

	<?php
	//don't display the arrows if there is only one banner
	if(count($banners) > 1):?>
	<!-- Carousel nav -->
	<a class="carousel-control left" href="#carousel_<?php echo $id;?>" data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#carousel_<?php echo $id;?>" data-slide="next">&rsaquo;</a>
	<?php endif;?>
</div>

<script type="text/javascript">
$('#carousel_<?php echo $id;?>').carousel({
	interval: 5000
});
</script>