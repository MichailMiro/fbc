<div class="row">
	<?php $j=1; ?>
        <?php foreach($banners as $banner):?>
        <?php if($j==1){ ?>
                <div class="col-md-offset-1 col-sm-offset-1 col-xs-4 col-sm-2 col-md-2 col-lg-2 text-center">
        <?php }else{?>
                <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 text-center">
        <?php }?>    
            <div class="center">
                <img src="<?php echo base_url('uploads/'.$banner->image); ?>"  alt="programs-ico"/>
            </div>
            <a class="link-anchor" href="#small-customers_<?php echo $j;?>"><?php echo $banner->name;?><br><b class="caret"></b></a>
        </div><!-- /.col-lg-3 -->
        <?php $j++;?>
	<?php endforeach;?>
</div>
