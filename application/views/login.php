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
                <div class="col-xs-12 col-lg-4 pull-right">
                    <div class="form-login">
						<form action="<?=base_url()?>admin/dashboard" method="POST">
                            <h2 class="text-uppercase">sign in</h2>
                            <div class="form-email">
								<?php echo form_input([
									'placeholder'=>'Username','name'=>'uname','value'=>set_value('uname')]);
									echo form_error('uname','<div class="text-danger">','</div>');
								?>
							</div>

                            <div class="form-password">
								<?php echo form_password([
									'placeholder'=>'Password','name'=>'password','value'=>set_value('password')]);
									echo form_error('password','<div class="text-danger">','</div>');
								?>
							</div>

                            <div class="form-check">
                                <input type="checkbox" id="check">
                                <label for="check">
                                <i class="icon md-check-2"></i>
                                Remember me</label>
                                <a href="#">Forget password?</a>
							</div>

                            <div class="form-submit-1">
                                <input type="submit" value="Sign In" class="mc-btn btn-style-1">
                            </div>
                            <div class="link">
                                <a href="<?=base_url()?>home/register">
                                    <i class="icon md-arrow-right"></i>Don’t have account yet ? Join Us
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
