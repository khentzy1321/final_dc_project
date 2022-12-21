@extends('base')

@section('content')

@section('title', 'Log in')
<body>
    <div class="container col-md-4 offset-md-4">

        @if (session('message'))
        <div id="messagee" class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        @if (session('error'))
        <div id="messagee" class="alert alert-danger text-center">{{ session('error') }}</div>
        @endif
        <div class="card shadow mb-5 rounded border border-dark mt-5">
            <div class="card-body rounded" style="background-color: #d9f9ff;" id="card-bodyy">
                <h2 class="text-center mb-4" style="color:#bdc7c9; font-size: 25px;">Log In</h2>
                <form action="{{ '/' }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" required="">
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-5 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required="">
                        <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunction()"><i class="fa fa-eye"></i></span>
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <a href="{{ '/register' }}" class="text-blue">Sign up for an account?</a>
                        </div>
                        <div class="form-group text-center mt-4 mr-4">
                            <button class="btn btn-outline-success" id="actionBtn" type="submit"><img src="https://cdn-icons-png.flaticon.com/512/3580/3580148.png" width="20" height="20" class="rounded"> Login</button>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>
@endsection

<style>
#basic-addon1 {
    width: 40px;
    text-align: center;
}

</style>

<script>
    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
