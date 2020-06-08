<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Welcome to  <?= base_url() ?></title>

</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div id="container">
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">   

<div class="col-3"></div>

   <div class="col-6">
  <div id="logreg-forms">
            Registration Form            
            <form action="http://161.35.178.32:8888/adduser" class="form-signup" method="post">

                <input type="text" name="username" id="user-name" class="form-control" placeholder="Username" required="" autofocus="">
                <input type="password" name="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="">
                <input type="text" name="firstname"  class="form-control" placeholder="FirstName" required="" autofocus="">
                <input type="text" name="lastname"  class="form-control" placeholder="LastName" required="" autofocus="">
                <input type="text" name="location"  class="form-control" placeholder="Location" required="" autofocus="">
                <input type="hidden" name="url" value="<?= base_url() ?>app/login">

                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
            </form>
            <br>
            
    </div>


   <div class="col-3"></div>

</div>

</body>
</html>
