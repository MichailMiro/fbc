<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <?php foreach($banners as $banner):?>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="center">
                            <img src="<?php echo base_url('uploads/'.$banner->image);?>" class="img-circle img-border" />
                        </div>
                        <h3><?php echo $banner->name; ?></h3>
                    </div><!-- /.col-lg-4 -->
        <?php endforeach;?>
        
        
        
        
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
</div><!-- /.container -->
