<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Login Form</title>
    <link rel="stylesheet" href="../../resources/css/login.css">
  </head>
  <body>
    <form class="box" action="{{ route('admin.login')}}" method="post">
      @csrf
      <h1>Login</h1>
        @if(session()->has('error'))
          <p style="color:red">{{session()->get('error')}}</p>
        @endif
      <label class="form-label">Email</label>
      <input type="email" name="email" placeholder="nhập email vào đây" value="{{ old('email') }}">
        @if($errors->has('email'))
          <p style="color:red">{{$errors->first('email')}}</p>
        @endif
      <label class="form-label">Password</label>
      <input type="password" name="password" placeholder="nhập pass vào đây" value="{{ old('password') }}">
          @if($errors->has('password'))
            <p style="color:red">{{$errors->first('password')}}</p>
          @endif
      <input type="submit" name="" value="Login">
    </form>
  </body>
</html>