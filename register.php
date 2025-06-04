<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .register-box {
      max-width: 500px;
      margin: 60px auto;
      padding: 30px;
      border-radius: 10px;
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #0d6efd;
    }
  </style>
</head>
<body>

  <div class="register-box">
    <h2 class="text-center mb-4">Create an Account</h2>
    <form action="register_process.php" method="post">
      <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" name="fullname" class="form-control" id="fullname" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required>
      </div>
      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" id="confirm_password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Register</button>
      <p class="text-center mt-3">Already have an account? <a href="login.html">Login here</a></p>
    </form>
  </div>

</body>
</html>
