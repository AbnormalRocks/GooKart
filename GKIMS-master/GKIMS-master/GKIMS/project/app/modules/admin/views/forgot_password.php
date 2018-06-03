<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo site_name();?>| Forgot Password </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   
 <?php

        echo link_admin_css(
                array(
                     'bootstrap/css/bootstrap.min.css',
                    'dist/css/AdminLTE.min.css',
                   	'plugins/iCheck/square/blue.css'
                         
                )
        );
        
?>  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
	
		   <a href="#"><b>globkart Inventory Management </b></a>
		   
		 
		  
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Fill all the Details..</p>
		<?php if($this->session->flashdata('message') !='') { ?>
							<div class="alert alert-success">
						<?php echo $this->session->flashdata('message');?>
									<i class="fa fa-times pull-right alert-dismiss" data-dismiss="alert"></i>
							</div>
		<?php } ?> 
       <!-- <form action="../../index2.html" method="post">-->
		<?php echo form_open('admin/auth/forgot_pass_reset', array('class' => 'form')); ?>
      
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Enter email id previously given by User" name="email" value="<?php echo set_value('email'); ?>"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span style="color:red;"><?php echo form_error('email'); ?></span>
		</div>
          <div class="row">
            <div class="col-xs-4">
              <a href="<?php echo base_url('admin/auth');?>" class="btn btn-primary btn-block btn-flat">Back</a>
            </div><!-- /.col -->
			  <div class="col-xs-4">
			
              
            </div><!-- /.col -->
            <div class="col-xs-4">
			
             <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
            </div><!-- /.col -->
          </div>
        <?php echo form_close(); ?>	

      

       <!-- <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>-->

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
	<?php echo link_admin_js(
                array(
                   
                    'plugins/jQuery/jQuery-2.1.4.min.js',
                    'bootstrap/js/bootstrap.min.js',
                    'plugins/iCheck/icheck.min.js'
                    
                  
					
					)
					);
	?>
    
   
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
