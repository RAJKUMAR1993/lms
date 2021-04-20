<?php $d  = &get_instance();  ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
      <title>LMS - Admin Dashboard</title>
      <!-- General CSS Files -->
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/css/app.min.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/bundles/bootstrap-social/bootstrap-social.css">
      <!-- Template CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/css/components.css">
      <!-- Custom style CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/css/custom.css">
      <link href="<?php echo base_url() ?>adminasstes/pnotify/pnotify.custom.min.css" rel="stylesheet" type="text/css" />
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>adminasstes/images/favicon.ico" />
   </head>
   <body>
      <div class="loader"></div>
      <div class="alert alert-success" style="display:none" id="smsg"></div>
       <div class="alert alert-danger" style="display:none" id="emsg"></div>
      <div id="app">
         <section class="section">
            <div class="container mt-5">
               <div class="row">
                  <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                     <div class="card card-primary">
                        <div class="card-header">
						   <div class="row clearfix">
							   <div class="col-md-6">
								   <img src="<?php echo base_url() ?>adminasstes/images/logo/logo@2x.png" class="img-fluid" alt="" /> <br/>
							   </div>
							   <div class="col-md-6">
								   <h4>Login</h4>
							   </div>
						   </div>
                        </div>
                        <div class="card-body">
                           <form method="POST" action="<?php echo base_url() ?>admin/access" class="needs-validation" novalidate="">
                              <div class="form-group">
                                 <label for="email">Email</label>
                                 <input id="email" type="email" class="form-control" name="email" tabindex="1" autofocus>
                                 <div class="invalid-feedback">
                                    Please fill in your email
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                    <div class="float-right">
                                       <a href="auth-forgot-password.html" class="text-small">
                                       Forgot Password?
                                       </a>
                                    </div>
                                 </div>
                                 <input id="password" type="password" class="form-control" name="password" tabindex="2">
                                 <div class="invalid-feedback">
                                    please fill in your password
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" value="1" class="custom-control-input" tabindex="3" id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                 Login
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <!-- General JS Scripts -->
      <script src="<?php echo base_url() ?>adminasstes/js/app.min.js"></script>
      <!-- JS Libraies -->
      <!-- Page Specific JS File -->
      <!-- Template JS File -->
      <script src="<?php echo base_url() ?>adminasstes/js/scripts.js"></script>
      <!-- Custom JS File -->
      <script src="<?php echo base_url() ?>adminasstes/js/custom.js"></script>
      <script src="<?php echo base_url() ?>adminasstes/pnotify/pnotify.custom.min.js"></script>
   </body>
</html>
<script type="text/javascript">

<?php    
if($d->session->flashdata("msg")){
?>
    
$(function(){

new PNotify({
    title: '<?php echo $d->session->flashdata("title");?>',
    text: '<?php echo $d->session->flashdata("msg");?>',
    type:'<?php echo $d->session->flashdata("type");?>',
    animate: {
        animate: true,
        in_class: 'bounceInDown',
        out_class: 'fadeOut'
    }
});     
});

<?php
    }
    ?>
</script>