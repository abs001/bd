<?php $this->load->view('Home/Head');?>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">Blood Clinic</h1>
            </div>
            <h3>Welcome to BloodClinic.org</h3>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" id="loginForm" method="post">
                <div class="form-group">
                    <input name="email" type="email" id="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input name="password" type="password" id="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <div class="login_error">
                    <h5>Login failed | Check your username or password</h5>
                </div>
                <?php 
                    if(isset($_SESSION['message'])){?>
                        <div class="message"><h5><?php echo $_SESSION['message'];?></h5></div>
                <?php   } ?>
                <a href="#"><small>Forgot password?</small></a>
            </form>
            <p class="m-t"> <small><strong>BloodClinic.org</strong> developed by <strong>UIT-Softwares</strong> &copy; <?php echo date('Y');?></small> </p>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- AJAX Controlled login -->
    <script>
        $(".login_error").hide();
        $("#email").focus(function(){
            $(".login_error").hide();
        });
        $("#password").focus(function(){
            $(".login_error").hide();
        });
        $("#loginForm").submit(function() {
            var data = $("#loginForm").serialize();
            $.ajax({
                url: "<?php echo base_url()?>index.php/Admin/loginCheck",
                data: data,
                type: "POST",
               success: function(data) {
                  if(data=='success'){
                    $(location).attr('href',"<?php echo base_url();?>");
                  }
                  else if(data=='failed'){
                    console.log("error");
                    $(".login_error").show();
                  }
                },
               error:function(data){
                 $(".login_error").html("<h5>Error while login</h5>");  
                 $(".login_error").show();
                }     
            });
            return false;
        });
    </script>
</body>
</html>
