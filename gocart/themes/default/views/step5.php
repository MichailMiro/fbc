
<?php //echo  $page->content; ?>

<div class="container">
    <h2><?php echo  $page->title; ?></h2>
    <p>
        <?php echo  $page->content; ?>
    </p>
</div>

<?php if(isset($children_pages) && $children_pages){?>
    <?php $i=1;?>
    <?php foreach($children_pages as $children_page){
        switch($children_page->template){
            case '1':$this->banners->show_collection(3, 8, '8_box_row'); 
                     break;
            case '2':$this->banners->show_collection(4, 3, '3_box_row_steps'); 
                     break;
            case '3':echo   '<div class="container">
                                <h2>'.$children_page->title.'</h2>
                                '.$children_page->content.'
                            </div>';
                     break;
            case '4':echo   '<div class="container">
                                <h3>'.$children_page->title.'</h3>
                                '.$children_page->content.'
                            </div>';
                            $this->banners->show_collection(5, 4, '4_box_row');
                     break;
            case '5':echo '<hr>
                        <div class="container">
                        <h3 id="small-business_'.$i.'"><img class="float" src="'.base_url('uploads/'.$children_page->image).'" alt="programs-ico" /> '.$children_page->title.'</h3>
                        <br>
                        <p>
                            '.$children_page->content.' 
                        </p>
                        <p class="text-center"><a class="btn btn-lg btn-primary" href="#" role="button">GET STARTED</a></p>
                    </div>';
                    $i++;
                    break;
            case '6':echo   '<div class="container">
                                <h3>'.$children_page->title.'</h3>
                                '.$children_page->content.'
                            </div>';
                            $this->banners->show_collection(6, 5, '5_box_row');
                     break;
            case '7':echo '<hr>
                        <div class="container">
                        <h3 id="small-customers_'.$i.'"><img class="float" src="'.base_url('uploads/'.$children_page->image).'" alt="programs-ico" /> '.$children_page->title.'</h3>
                        <br>
                        <p>
                            '.$children_page->content.' 
                        </p>
                        <p class="text-center"><a class="btn btn-lg btn-primary" href="#" role="button">GET STARTED</a></p>
                    </div>';
                    $i++;
                    break;
            case '8':echo   '<div class="container">
                                <h3>'.$children_page->title.'</h3>
                                '.$children_page->content.'
                            </div>';
                     break;   
            case '9':$this->banners->show_collection(7, 3, '3_box_row_about');
                    echo   '<div class="container">
                                '.$children_page->content.'
                            </div>';
                     break;  
            case '10':
                    echo   '<div class="container">
                                <h3>'.$children_page->title.'</h3>
                                '.$children_page->content.'
                                <form class="form-horizontal" role="form" action="'.SITE_URL.'cart/form_action/'.$children_page->link.'" enctype="multipart/form-data" method="post">
                                    <input type="hidden" name="job_title" value="'.$children_page->title.'">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="name" class="form-control" id="inputName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">E-mail</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="email" class="form-control" id="inputPassword3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile" class="col-sm-3 control-label">File input</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="images" class="form-control file-input" id="exampeleInputFile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class=" col-sm-offset-3 col-sm-10">
                                            <button type="submit" class="btn btn-primary">SEND</button>
                                        </div>
                                    </div>
                                </form>    
                            </div>';
                     break;  
             case '11':
                    echo   '<div class="container">
                                <img class=" img-responsive" src="'.base_url('uploads/'.$children_page->image).'" alt="map"/>
                                <br>
                                <div class="row">
                                    <img class="float" style="margin-top: 15px;" src="'.SITE_URL.'stuff/img/map-icon.jpg" alt="map-icon">
                                    <address class="float">
                                        <h3>'
                                        .$children_page->content.
                                        '</h3>
                                    </address>
                                </div>
                            </div>';
                     break;     
        }
        
    }?>
<?php } ?>
