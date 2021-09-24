<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://trucker247.com/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://trucker247.com/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://trucker247.com/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="http://trucker247.com/dist/css/AdminLTE.min.css" rel="stylesheet">
    <link href="http://trucker247.com/plugins/iCheck/square/blue.css" rel="stylesheet"> 
    <link href="http://trucker247.com/dist/css/skins/_all-skins.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="http://trucker247.com/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="http://trucker247.com/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="http://trucker247.com/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" type="text/css" href="http://trucker247.com/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="http://trucker247.com/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>

<style>
.container1 {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}

.container1 img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container1 img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
 /* background-color: #555;*/
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  border-radius: 50px;
  width: 100px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 0px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 40px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style><title>Enlist Truck</title>
<style type="text/css">
  p {
    margin: 0 0 0px;
  }
  .table-row{
cursor:pointer;
}

</style>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="http://trucker247.com/dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TR</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Trucker247</b> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="bi bi-list"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="bi bi-person-circle"></i>
              <span class="hidden-xs">SuperAdmin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url('public/logo/1630353390_2904logo.png');?>" class="img-circle" alt="User Image">            


                <p>
                  Trucker247
                    <!--Vansh Logistics Pvt. Ltd.-->
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                             
                  
                  <a href="http://trucker247.com/admin/profile" class="btn btn-default btn-flat">Profile</a>

                                  </div>
                <div class="pull-right">
                   <a class="btn btn-default btn-flat" href="http://trucker247.com/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Sign out
                                    </a>
                   <form id="logout-form" action="http://trucker247.com/logout" method="POST" style="display: none;">
                    <?= csrf_field() ?>                                    
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div> 

    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('public/logo/1630353390_2904logo.png');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>SuperAdmin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
         
       
        <!-- 
        <li class="treeview">
           <a href="#">
            <i class="glyphicon glyphicon-credit-card"></i>
            <span>OLD Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
            <li><a href="http://trucker247.com/admin/oldreports"><i class="fa fa-circle-o"></i>OLD TDS Reports</a></li>
            <li><a href="http://trucker247.com/admin/oldsalesreports"><i class="fa fa-circle-o"></i>OLD Sales Reports</a></li>
            <li><a href="http://trucker247.com/admin/oldpurchasereports"><i class="fa fa-circle-o"></i>OLD Purchase Reports</a></li>
          </ul>
        </li>
      -->
             
        

         <li class="treeview">
           <a href="#">
            <i class="bi bi-download"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://trucker247.com/admin/reports/tds"><i class="fa fa-circle-o"></i>TDS Reports</a></li>
            <li><a href="http://trucker247.com/admin/reports/purchase"><i class="fa fa-circle-o"></i>Purchase Report</a></li>
            <li><a href="http://trucker247.com/admin/reports/sales"><i class="fa fa-circle-o"></i>Sales Report</a></li>
             <li><a href="http://trucker247.com/admin/reports/bills"><i class="fa fa-circle-o"></i>Bill Submission</a></li>
             <li><a href="http://trucker247.com/admin/reports/customer_not_billed"><i class="fa fa-circle-o"></i>Customer Not Billed</a></li>
             <li><a href="http://trucker247.com/admin/reports/customer_out_billed"><i class="fa fa-circle-o"></i>Customer Out Standing</a></li>
          </ul>
        </li>

        <li class="treeview">
           <a href="#">
            <i class="bi bi-person-fill"></i>
            <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
            <li><a href="http://trucker247.com/admin/user/index"><i class="fa fa-circle-o"></i>Add User</a></li>
            <li><a href="http://trucker247.com/admin/user/view"><i class="fa fa-circle-o"></i>View User</a></li>
          </ul>
        </li>

         <li><a href="http://trucker247.com/admin/banner/index"><i class="bi bi-pencil-square"></i>Banner</a></li>
         <li><a href="http://trucker247.com/admin/truckerbroker/index"><i class="bi bi-pencil-square"></i>Trucker247 Broker</a></li>

         <li class="treeview">
           <a href="#">
            <i class="bi bi-pencil-square"></i>
            <span>Vehicle Driver</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
            <li><a href="http://trucker247.com/admin/vehicledriver/add"><i class="fa fa-circle-o"></i>Add</a></li>
            <li><a href="http://trucker247.com/admin/vehicledriver/index"><i class="fa fa-circle-o"></i>View</a></li>
          </ul>
        </li>


         <li class="treeview">
           <a href="#">
            <i class="bi bi-pencil-square"></i>
            <span>Services </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
            <li><a href="http://trucker247.com/admin/webservices/add"><i class="fa fa-circle-o"></i>Add</a></li>
            <li><a href="http://trucker247.com/admin/webservices/index"><i class="fa fa-circle-o"></i>View</a></li>
          </ul>
        </li>

        <li class="treeview">
           <a href="#">
            <i class="bi bi-pencil-square"></i>
            <span>Plans </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
            <li><a href="http://trucker247.com/admin/plans/add"><i class="fa fa-circle-o"></i>Add</a></li>
            <li><a href="http://trucker247.com/admin/plans/index"><i class="fa fa-circle-o"></i>View</a></li>
          </ul>
        </li>

        <li class="treeview">
           <a href="#">
            <i class="bi bi-pencil-square"></i>
            <span>Advantage  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
            <li><a href="http://trucker247.com/admin/advantage/add"><i class="fa fa-circle-o"></i>Add</a></li>
            <li><a href="http://trucker247.com/admin/advantage/index"><i class="fa fa-circle-o"></i>View</a></li>
          </ul>
        </li>

          <li class="treeview">
           <a href="#">
            <i class="bi bi-pencil-square"></i>
            <span>Testimonial  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
              <li><a href="http://trucker247.com/admin/testimonial/add"><i class="fa fa-circle-o"></i>Add</a></li>
              <li><a href="http://trucker247.com/admin/testimonial/index"><i class="fa fa-circle-o"></i>View</a></li>
            </ul>
          </li>

        <li><a href="http://trucker247.com/admin/webaboutus/index"><i class="bi bi-pencil-square"></i>About Us</a></li>
        <li><a href="http://trucker247.com/admin/contactus/index"><i class="bi bi-pencil-square"></i>Contact Us</a></li>

        <li><a href="http://trucker247.com/admin/enquiry/index"><i class="bi bi-pencil-square"></i>Enquiry</a></li>
      </ul>

     
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
<script>
function validateForm() {
  var x = document.forms["myForm"]["owner_id"].value;
  if (x == "") {
    alert("Please Select Vehicle Again");
    return false;
  }
}
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<button class="open-button btn btn-primary" onclick="openForm()">Message </button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
   
    <label for="msg"><b>Message</b></label>

 <ul disabled style="height:250px;width:280px; overflow:scroll" id="chatmessages"> 
          <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Ankit maurya <small> 03:54:am</small><p style="color: #3666BB">  hello </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Ankit maurya <small> 03:55:am</small><p style="color: #3666BB">  1254 </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Ankit maurya <small> 03:57:am</small><p style="color: #3666BB">  sds </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Ankit maurya <small> 03:59:am</small><p style="color: #3666BB">  dfdf </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Ankit maurya <small> 03:59:am</small><p style="color: #3666BB">  ssssddddddddddddd </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Ankit maurya <small> 04:00:am</small><p style="color: #3666BB">  sdsd </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>VANSH <small> 04:00:am</small><p style="color: #3666BB">  dgd </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Ankit maurya <small> 04:02:am</small><p style="color: #3666BB">  sdfd </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Ankit maurya <small> 04:05:am</small><p style="color: #3666BB">  hello </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Ankit maurya <small> 04:05:am</small><p style="color: #3666BB">  how are you </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>VANSH <small> 04:06:am</small><p style="color: #3666BB">  i'm fine </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>VANSH <small> 11:07:am</small><p style="color: #3666BB">  hii..... </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Ankit maurya <small> 07:23:am</small><p style="color: #3666BB">  hello admin </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>VANSH <small> 09:38:am</small><p style="color: #3666BB">  hi </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>VANSH <small> 10:24:am</small><p style="color: #3666BB">  good morning </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Ankit maurya <small> 10:29:am</small><p style="color: #3666BB">  good morning </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>VANSH <small> 10:30:am</small><p style="color: #3666BB">  Time Ago Implementation ... It takes the timestamp as input and subtracts it with the current timestamp. Then it compares the remaining date with a predefined set ... </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Test transport <small> 04:15:am</small><p style="color: #3666BB">  ok bye </p></span>
                    </div>
                </div> 
                       </li>
     
           <li style="list-style-type: none;">
               

                <div class="row">
                    <div class="col-md-12">
                        <img style='float:left;width:30px;height:30px; margin-right:10px;' src="http://maplenestinc.ca/ecommercesport/assets/uploads/user_profiles/default-user-img.jpg" />
                       <span>Test transport <small> 04:29:am</small><p style="color: #3666BB">  how are you </p></span>
                    </div>
                </div> 
                       </li>
     
 </ul>

    <textarea placeholder="Type message.." name="msg" id="messages" required></textarea>

    <a type="submit" onclick="myFunction()" class="btn Send">Send</a>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script type="text/javascript">
 function myFunction() {
 
  var messages = $('#messages').val();  
 
      if(messages != ""){ 
         $.ajax({
           type:"GET",
           url:"http://trucker247.com/admin/message/chat/api?messages="+messages,
           success:function(res){  
           $('#messages').val('');    
           // alert(res);  
                    $('#chatmessages').html(res);

           /* if(res.length !== 0){
                document.getElementById("myDIV").style.display = "block";
                $("#bodytype").empty();
                $("#bodytype").append('<option value="">Select Type</option>');
                $.each(res,function(key,value){
                    $("#bodytype").append('<option value="'+key+'">'+value+'</option>');
                });           
            
            }
            else
            {
              document.getElementById("myDIV").style.display = "none"; 
            }
            */

           }
        });
    
    } 


}
   
</script>



<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

    <script src="http://trucker247.com/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="http://trucker247.com/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="http://trucker247.com/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="http://trucker247.com/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="http://trucker247.com/dist/js/adminlte.min.js"></script>
    <script src="http://trucker247.com/dist/js/demo.js"></script>
    <script src="http://trucker247.com/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="http://trucker247.com/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> <!--   
    <script type="text/javascript" src="http://trucker247.com/js/jquery-3.3.1.js"></script> -->
  <script type="text/javascript" src="http://trucker247.com/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="http://trucker247.com/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="http://trucker247.com/js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="http://trucker247.com/js/jszip.min.js"></script>
  <script type="text/javascript" src="http://trucker247.com/js/pdfmake.min.js"></script>
  <script type="text/javascript" src="http://trucker247.com/js/vfs_fonts.js"></script>
  <script type="text/javascript" src="http://trucker247.com/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="http://trucker247.com/js/buttons.print.min.js"></script>
  <script type="text/javascript" src="http://trucker247.com/js/buttons.colVis.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 5 ]
                }
            },
            'colvis'
        ]
    } );
} );
  </script> 
  </body>
</html><script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script type="text/javascript">
  //set button id on click to hide first modal
$("#signin").on( "click", function() {
        $('#myModal1').modal('hide');  
});
//trigger next modal
$("#signin").on( "click", function() {
        $('#myModal2').modal('show');  
});
</script>

<script>
  $(document).ready(function() {
      });
</script>

<!-- Driver Details-->
<script type="text/javascript">
    $('#vehicle').change(function(){
    var vehicle = $(this).val();    
    if(vehicle){
        $.ajax({
           type:"GET",
           url:"http://trucker247.com/admin/enlist/truck/api?vehicle="+vehicle,
           success:function(result){
                   document.getElementById("drivermobile").value =result["mobile"];
                   document.getElementById("owner_id").value =result["owner_id"];
                   document.getElementById("driver").value =result["name"];
            }
        });
    }     
   });
</script>





<script type="text/javascript">
  document.getElementById('dt').max = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
</script>