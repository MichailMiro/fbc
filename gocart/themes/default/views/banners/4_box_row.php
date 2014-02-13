<div class="row">
	<?php $j=1; ?>
        <?php foreach($banners as $banner):?>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 text-center">
            <div class="center">
                <img src="<?php echo base_url('uploads/'.$banner->image); ?>"  alt="programs-ico"/>
            </div>
            <a class="link-anchor" href="#small-business_<?php echo $j;?>"><?php echo $banner->name;?><br><b class="caret"></b></a>
        </div><!-- /.col-lg-3 -->
        <?php $j++;?>
	<?php endforeach;?>
</div>
