<?php

//include_once __DIR__ . '/index.html.php';
include_once __DIR__ . '/../includes/session_start.php';

?>
<!DOCTYPE html>
<html>

<head>
	<title>ibuy Auctions</title>
	<link rel="stylesheet" href="/ibuy.css" />
</head>

<body>

<?php if (isset($_SESSION['id'])): ?>
         <ul class='navhead'>
		 <li  class="login"><a href="dashboard.php" class="login">Dashboard</a></li> 

			 <li class="login"><a href="/" class="login">Home</a></li>
          <li  class="login"><a href="logout.php" class="login">Logout</a></li>
		</ul>
		<?php elseif(isset($_SESSION['loggedin'])): ?>
			<ul class='navhead'>
		 <li  class="login"><a href="admin_dashboard.php" class="login">Dashboard</a></li> 

			 <li class="login"><a href="/" class="login">Home</a></li>
          <li  class="login"><a href="logout.php" class="login">Logout</a></li>
		</ul>
        <?php else: ?>
		<ul class="navhead">
		<li class="login"><a href="index.php" class="login">Home</a></li>
			<li class="login"><a href="register.php" class="login">Register</a></li>
          <li  class="login"><a href="login.php" class="login">Login</a></li>
		</ul>
		
        <?php endif; ?>
<header>
		<h1><span class="i">i</span><span class="b">b</span><span class="u">u</span><span class="y">y</span></h1>

		<form action="#">
			<input type="text" name="search" placeholder="Search for anytloginnput" type="submit" name="submit" value="Search" />
		</form>
	</header>