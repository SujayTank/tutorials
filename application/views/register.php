<?php 
    require('includes/header.php');
?>
    <!-- LOGIN -->
    <section id="login-content" class="login-content">
        <div class="awe-parallax bg-login-content"></div>
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="row">
     
                <!-- FORM -->
                <div class="col-lg-4 pull-right">
                    <div class="form-login">
                        <form action="<?=base_url()?>admin/store" method="POST">
                            <h2 class="text-uppercase">sign up</h2>
                
							<div class="form-datebirth">
								<?php echo form_input([
									'placeholder'=>'First name','name'=>'firstname','value'=>set_value('firstname')]);
									echo form_error('firstname','<div class="text-danger">','</div>');
								?>
							</div>
							<div class="form-datebirth">
								<?php echo form_input([
									'placeholder'=>'Last name','name'=>'lastname','value'=>set_value('lastname')]);
									echo form_error('lastname','<div class="text-danger">','</div>');
								?>
                            </div>
							
                            <div class="form-datebirth">
								<?php echo form_input([
									'placeholder'=>'Username','name'=>'uname','value'=>set_value('uname')]);
									echo form_error('uname','<div class="text-danger">','</div>');
								?>
                            </div>
                            <div class="form-email">
								<?php echo form_input([
									'placeholder'=>'Email','name'=>'email','value'=>set_value('email')]);
									echo form_error('email','<div class="text-danger">','</div>');
								?>
                            </div>
                            <div class="form-password">
								<?php echo form_password([
									'placeholder'=>'Password','name'=>'password','value'=>set_value('password')]);
									echo form_error('password','<div class="text-danger">','</div>');
								?>
                            </div>
							<div class="form-password">
								<?php echo form_password([
									'placeholder'=>'Re-Password','name'=>'rePassword','value'=>set_value('rePassword')]);
									echo form_error('rePassword','<div class="text-danger">','</div>');
								?>
                            </div>
                            
                            <div class="form-submit-1">
                                <input type="submit" value="Register" class="mc-btn btn-style-1">
                            </div>
                            <div class="link">
                                <a href="<?=base_url()?>home/login">
                                    <i class="icon md-arrow-right"></i>Already have account ? Log in
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END / FORM -->
    
                <div class="image">
                    <img src="<?=base_url()?>assets/images/homeslider/img-thumb.png" alt="">
                </div>
    
            </div>
        </div>
    </section>
    <!-- END / LOGIN -->
    
            
<?php 
    require('includes/footer.php');
?>
