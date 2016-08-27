<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?> 
 <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <!--Slideshow section-->
               <?php $this->load->view('front/content-slide'); ?>
                <!--//Slideshow section-->

                <!--Content News-->
                <?php $this->load->view('front/content-news'); ?>
                <!--Content News-->

                
            </div><!--//primary-->