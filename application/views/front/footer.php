<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?> 
    <!-- ******FOOTER****** --> 
    <div class="footer-top">
     <div class="row">
          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                  <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                  Uvaya
              </div>
              <div class="panel-body">
                 Basic panel example
              </div>
            </div>
          </div>
          <div class="col-md-3">
              <div class="panel panel-default">
              <div class="panel-heading">
                  <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                  Fakultas
              </div>
              <div class="panel-body">
                 <ul>
                     <li>Fakultas Ilmu dan Keguruan</li>
                 </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3">
              <div class="panel panel-default">
              <div class="panel-heading">
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  Kemahasiswaan
              </div>
              <div class="panel-body">
                 Basic panel example
              </div>
            </div>
          </div>
          <div class="col-md-3">
              <div class="panel panel-default">
              <div class="panel-heading">
                  <span class="glyphicon glyphicon-task" aria-hidden="true"></span>
                  Fasilitas
              </div>
              <div class="panel-body">
                 Basic panel example
              </div>
            </div>
          </div>
     </div>
    </div>
   
    <footer class="footer">
        <div class="container text-center">
                <small class="copyright">copyright &copy; Universitas Achmad Yani Banjarmasin</small>
                <small class="copyright pull-right"><a href="<?php echo base_url();?>login"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login Admin</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-datetimepicker.id.js"></script>  
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/sticky/cbpAnimatedHeader.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/sticky/classie.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/sticky/modernizr.custom.js"></script>
   
            <script type="text/javascript">
            //Slide show
             $(window).load(function() {
                $('#slider').nivoSlider();
             });

        </script>            
</body>
</html> 