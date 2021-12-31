<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<form method="post" action="{{ route('login') }}">
    @csrf
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="name" class="form-control p_input">
  </div>
  <div class="form-group">
    <label>Password *</label>
    <input type="password" name="password" class="form-control p_input">
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
  </div>

  <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
</form>
 
</body>
</html>