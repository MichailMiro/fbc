<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <?php foreach($banners as $banner):?>
        
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            
            <div class="center">
                <img src="<?php echo base_url('uploads/'.$banner->image);?>" class="img-circle img-border" />
            </div>
            <h3><?php echo $banner->name; ?></h3>
            <?php echo $banner->content; ?>
            <?php 
                if($banner->link != '')
		{
			$target	= false;
			if($banner->new_window)
			{
				$target = 'target="_blank"';
			} ?>
                        <p><a class="more" href="<?php echo $banner->link;?>" <?php echo $target;?> role="button">more...</a></p>
                        <?php
			//echo '<a href="'.$banner->link.'" '.$target.' >'.$box_image.'</a>';
		}
            ?>
            
        </div><!-- /.col-lg-4 -->
        
        
<!--	<div class="span4">
		<?php
		
		$box_image	= '<img class="responsiveImage" src="'.base_url('uploads/'.$banner->image).'" />';
		if($banner->link != '')
		{
			$target	= false;
			if($banner->new_window)
			{
				$target = 'target="_blank"';
			}
			echo '<a href="'.$banner->link.'" '.$target.' >'.$box_image.'</a>';
		}
		else
		{
			echo $box_image;
		}
		?>
	</div>-->
	<?php endforeach;?>
        
        
        
        
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
</div><!-- /.container -->



<!--<div class="row">
	<?php foreach($banners as $banner):?>
	<div class="span4">
		<?php
		
		$box_image	= '<img class="responsiveImage" src="'.base_url('uploads/'.$banner->image).'" />';
		if($banner->link != '')
		{
			$target	= false;
			if($banner->new_window)
			{
				$target = 'target="_blank"';
			}
			echo '<a href="'.$banner->link.'" '.$target.' >'.$box_image.'</a>';
		}
		else
		{
			echo $box_image;
		}
		?>
	</div>
	<?php endforeach;?>
</div>-->