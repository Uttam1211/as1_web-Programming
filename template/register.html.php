<?php
include_once __DIR__ . '/layout.html.php';
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
      <h1>Register</h1>
      <hr />
      
      <form action="register.php" method="post">
        <div class="form-row form-group">
          <div class="col">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name"  required />
          </div>
          <div class="col">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name"  required />
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email"  required />
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="username" name="username"  required />
        </div>
        
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" required />
        </div>
            <div class="col">
              <button type="submit" name="submit" >Register</button>
            </div>
          </div>
        </div>
      </form>
      <a href="/" class="btn btn-block btn-secondary">Return to Homepage</a>
    </div>
  </div>

  <?php include_once __DIR__.'/footer.html.php'; ?>