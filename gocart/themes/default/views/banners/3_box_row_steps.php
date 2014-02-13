<div class="container marketing">
    <?php $i=0;?>
    <!-- Three columns of text below the carousel -->
    <div class="row">
        <?php foreach($banners as $banner):?>
        <?php if($i==0){?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 center products-step_1">
        <?php }elseif($i==1){?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 center products-step_2">    
        <?php }elseif($i==2){ ?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 center products-step_3">    
        <?php }?>
             <?php if($i!=2){?>   
                <img class="arrow-step" src="img/arrow-step.png"/>
             <?php }?>   
            <h3><?php echo $banner->name; ?></h3>
            <p class="text-center">
            <?php echo $banner->content; ?>
            </p>    
            
        </div>
        
	<?php endforeach;?>
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
</div><!-- /.container -->