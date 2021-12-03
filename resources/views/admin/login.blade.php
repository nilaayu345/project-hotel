<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
    <style>
      body {
          background: lightblue
      }
   </style>
  </head>
  <body class="text-center">
      <form class="form-signin" method="POST" action="{{ route('login')}}">
        {{ csrf_field() }}
          <h1 class="h3 mb-3 font-weight-normal">Login</h1>
          <label for="inputEmail" class="sr-only">Email Address</label>
          <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <div class="checkbox mb-2">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
      </form>
  </body>
</html>