<?=$this->extend('layouts/master');?>
<?= $this->section('body-content');?>
<div class="post-project">
    <div class="bg-top"></div>
    <div class="warpper">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <form action="<?=base_url('registration');?>" method="POST" id="form-account-creation" class="form-horizontal box panel panel-default">
                        <input type="hidden" name="_token" value="TJbw5YbeVtCkkO8zmjhstQp035NNFdW6nOA0Knuq">  
                        <h3 class="panel-heading">Create an account</h3>
                        <div class="form_content panel-body clearfix">
                            <div class="form-group required">
                                <div class="col-lg-12">
                                    <label for="firstname">First name <sup>*</sup></label>
                                    <input type="text" class="form-control" id="firstname" name="fname">
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-lg-12">
                                    <label for="lastname">Last Name <sup>*</sup></label>
                                    <input type="text" class="form-control" id="lastname" name="lname">
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-lg-12">
                                    <label for="email">Email address <sup>*</sup></label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-lg-12">
                                    <label for="passwd">Password <sup>*</sup></label>
                                    <input type="password" class="form-control" id="passwd" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button class="btn btn btn-theme-2 rounded">Register</button>
                                    <p class="pull-right required"><span><sup>*</sup>Required field</span></p>
                                </div>
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
<?= $this->endSection();?>