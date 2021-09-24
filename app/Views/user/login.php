<?=$this->extend('layouts/master');?>
<?= $this->section('body-content');?>

    <!-- content start -->
    <div class="post-project">
        <div class="bg-top"></div>
        <div class="warpper">
            <!-- container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <form action="http://trucker247.com/createSignin" method="POST" id="form-login" class="form-horizontal box panel panel-default">
                             <input type="hidden" name="_token" value="TJbw5YbeVtCkkO8zmjhstQp035NNFdW6nOA0Knuq"> 
                            <h3 class="panel-heading">Already registered?</h3>
                            <div class="form_content panel-body clearfix">
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <label for="passwd">Password</label>
                                        <input type="password" class="form-control" id="passwd" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <button class="btn btn btn-theme-2 rounded"><i class="fa fa-lock left"></i> Sign in</button>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="mf-link"><i class="ti-user"></i>Haven't An Account?<a href="<?= base_url('usersignup');?>"> Sign Up</a></div>
                                  <!--   <div class="mf-forget"><a href="#"><i class="ti-help"></i>Forget Password</a></div> -->
                                </div>
                            </div>
                        </form>
                        <!--end form -->
                    </div>
                </div>
            </div> <!-- end container -->
        </div><!-- end warpper -->
        <div class="bg-bottom"></div>
    </div>


     <!-- content end -->

<?= $this->endSection();?>