<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to  <?= base_url() ?></title>

	</style>
</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="container">

<div class="row">
<div class="col-sm-12">

<h1> Welcome to <?= base_url() ?> </h1>

<?php 
if ( strpos($this->session->token, 'invalid') !== false || empty($this->session->token))   { ?> 
</h2>You are currently not signed in.  </h2>

Please sign in here.  <a class="btn btn-success" href="/app/login">Log in</a><br><br>

If you would like to register an account <a class="btn btn-info" href="/app/register">Register</a>

<?php } else  {?>
<br><br>
<h2>Welcome <?= $firstname ?> </h2>
<a class="btn btn-warning" href="/app/getuserinfo">Get User Info</a><br><br>
<a class="btn btn-danger" href="/app/logout">Log out</a><br><br>
<?  } ?> 
<br><br>

Validate SSO by going to another site that has this implemented. You should be logged in, on both sides when you are logged in, and logged out of both sites when you are logged out.<br><br>

<b> Currently have 3 Sites running</b>
<ul>
  <li><a href="http://www.rekous.com">http://www.rekous.com</a></li>
  <li><a href="http://www.prekl.com">http://www.prekl.com</a></li>
  <li><a href="http://www.rekous.net">http://www.rekous.net</a></li>
</ul>

<b>SSO Authentication Server: </b> Running at http://161.35.178.32:8888

<br><br>

Some endpoints to see if you registered a user: <br>
http://161.35.178.32:8888/users   - shows list of users available <br>
http://161.35.178.32:8888/tokens  - current available of tokens that have been created (logged in) <br>


</div>
</div>
</div>

</body>
</html>
