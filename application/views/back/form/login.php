<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?> 
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                     <img class="profile-image img-responsive pull-left" src="assets/images/logouvaya.png" width="50px" height="50px" alt="Sambutan rektor" />
                        <h3 class="panel-title"><b>Login Admin</b></h3>
                        <div class="panel-subtitle">Universitas Achmad Yani Banjarmasin</div>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Masukan username" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Masukan password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="<?php echo base_url();?>dashboard" class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>