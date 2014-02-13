<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <?php $i=0;?>
    <div class="row">
        <?php foreach($banners as $banner):?>
        <?php 
            if($i==4){
                $i=0;
                echo '</div><div class="row">';
            };
        ?>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            
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
            <?php $i++;?>
        </div><!-- /.col-lg-4 -->
        
        

	<?php endforeach;?>
        
        
        
        
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
</div><!-- /.container -->



