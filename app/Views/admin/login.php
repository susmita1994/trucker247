<html>
   <head>
       <title>Admin login</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style type="text/css">
		.login-box{
			width: 360px;
    		background: aliceblue;
    		padding: 15px;
    		border-radius: 4px;
    		text-align: center;
   			 margin: 4% auto;
		}

		.login-logo{
			font-size: 35px;
    		text-align: center;
    		margin-bottom: 10px;
    		font-weight: 300;
		}
		.login-box-body{
			padding: 20px;
    		border-top: 0;
    		color: #666;
		}
		.has-feedback {
   			 position: relative;
		}
		.form-group {
   		 	margin-bottom: 15px;
		}
		*{
    		box-sizing: border-box;
		}

		.login-box-msg{
			margin: 0;
    		text-align: center;
    		padding: 4px 0px 0px 0px;
		}
    </style>
   </head> 
<body class="hold-transition login-page" style="background: url(&#39;<?= base_url('public/logo/1860x1050-R2A8182.jpg');?>&#39;);background-size: cover;background-repeat: no-repeat;">
    <div class="login-box">
        <div class="login-logo">
            <h2>Sign in</h2><h3>to start your session</h3>
        </div>
    <!-- /.login-logo -->
        <div class="login-box-body">
            <!--<p class="login-box-msg">Sign in to start your session</p>-->
            <form method="POST" action="<?= site_url('login');?>">
                <input type="hidden" name="_token" value="S7IMHRHVGmOF6zwDMG7G2Uyql9qZIznNLs0PpMOi"> 
                <div class="form-group has-feedback">
                    <input id="email" type="email" class="form-control" name="email" value="" required="" autofocus="" placeholder="Enter Email Address">
                </div>

                <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control" name="password" required="" placeholder="Enter Your Password">
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            Sign In
                        </button> 
                        <p class="login-box-msg"><a href="http://trucker247.com/login#">Forgot Password?</a></p> 
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>