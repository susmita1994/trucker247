<!DOCTYPE html>
<!-- saved from url=(0027)http://trucker247.com/login -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('public/login_files/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('public/login_files/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?= base_urll('public/login_files/Ionicons/css/ionicons.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('public/login_files/dist/css/AdminLTE.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('public/login_files/plugins/iCheck/square/blue.css');?>" rel="stylesheet"> 
    <link href="<?= base_url('public/login_files/dist/css/skins/_all-skins.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="<?= base_url('public/login_files/datatables.net-bs/css/dataTables.bootstrap.min.css');?>" rel="stylesheet"> 
    <link rel="stylesheet" href="<?= base_url('public/login_filesplugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
    <link rel="stylesheet" href=<?= base_url('public/login_files/dist/css/skins/_all-skins.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/login_files/css/jquery.dataTables.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/login_files/css/buttons.dataTables.min.css');?>">
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
</style><style>
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
</style>
</head>