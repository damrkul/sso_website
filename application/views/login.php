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
        <form action="http://161.35.178.32:8888/authenticate" class="form-signin" method="post">
            <p style="text-align:center"> Please Sign in  </p>
            <input name="username" type="username" id="username" class="form-control" placeholder="username" required="" autofocus="">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <input type="hidden" name="url" value="<?= base_url() ?>">
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            </form>
            
            <br>
            
    </div>

   <div class="col-3"></div>


</div>
</div>
<center></b>Default Account:</b><br>  
        <b>Username:</b> jrankin <br>
        <b>Password:</b> jpass<br>
<br><br><br>
You can add your own account by going here: <a href="<?= base_url() ?>/app/register">Register</a>
</center>
</body>
</html>
