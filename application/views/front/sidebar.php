<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?> 
<div class="secondary col-md-4 col-sm-12 col-xs-12">
                
             <aside class="maps-location aside section">
                    <div class="panel panel-default">
                        <div class="panel-body">
                           <div class="input-group">
                                <input type="text" class="form-control" placeholder="Masukan Pencarian...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Cari</button>
                            </span>
                            </div><!-- /input-group -->
                        </div>
                    </div>
                </aside><!--//section-->   
            <?php 
            	$this->load->view('front/sidebar-sambutan');
            	$this->load->view('front/sidebar-internal');
            	$this->load->view('front/sidebar-external');
            	$this->load->view('front/sidebar-calender');
            	$this->load->view('front/sidebar-newsleader');
             ?>
             
                 <aside class="maps-location aside section">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                            <b>Lokasi Uvaya</b>
                        </div>
                        <div class="panel-body">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.509928187281!2d114.61384370018355!3d-3.34524675142953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x544414efc07e0af%3A0x81ae8099281dcdcf!2sUVAYA!5e0!3m2!1sen!2sid!4v1436371032247" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </aside><!--//section-->
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->