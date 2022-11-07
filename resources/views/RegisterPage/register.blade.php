
@include('RegisterPage.head')
<body class="hold-transition register-page">
<div class="register-box">
<div class="register-logo">
<a href="../../index2.html"><b>Admin</b>LTE</a>
<div class="card">
    <div class="card-body register-card-body">
      @if ($errors->any())
            <div class="alert alert-danger">
              <strong>Whoops!</strong> Inputan Kamu Ada Yang Salah<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
          </div>
      @endif
</div>
<div class="card">
<div class="card-body register-card-body">
<p class="login-box-msg">Register a new membership</p>
<form action="/RegisterPost" method="post">
    @csrf
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Full name" name="name">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="email" class="form-control" placeholder="Email" name="email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Password" name="password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Register</button>
</div>

</div>
</form>
<a href="/" class="text-center">I already have a membership</a>
</div>

</div>
</div>
@include('RegisterPage.script')


