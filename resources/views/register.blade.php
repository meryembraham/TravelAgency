<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Crete Round' rel='stylesheet'>
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">



<div class="container justify-content-center d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="card" style="width: 950px; border-radius: 2em; height: 510px; box-shadow: 0px 0px 10px 3px grey;">
            <div class="row no-gutters">
                <div class="col-sm-5 ">
                    <img class="card-img h-100 d-none d-md-block" style="border-top-left-radius: 2em; border-bottom-left-radius: 2em;" src="../images/reg3.jpg" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-7">
                    <div class="card-body pt-4">
                     <h1> Travel Agency<span class="orange">.</span></h1><br><br>
                        <p class="head">S'inscrire</p>
                        <form action="{{route('register')}}" method="POST">
                        @csrf
                          <div class="mb-1 w-50">
                            <label style="position: absolute;color: #222;top: 26%;right: 54%;" for="name" class="form-label"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Nom " class="form-control @error('name') is-invalid @enderror input" value="{{ old('name') }}"/>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                          </div>
                          <div class="mb-1 w-50">
                            <label style="position: absolute;color: #222;top: 34%;right: 54%;" for="email" class="form-label"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control  @error('email') is-invalid @enderror input" value="{{ old('email') }}"/>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                          </div>
                          <div class="mb-1 w-50">
                            <label style="position: absolute;color: #222;top: 41%;right: 54%;" for="password" class="form-label"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Your Password " class="form-control @error('password') is-invalid @enderror input" />
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                          </div>
                          <div class="mb-1 w-50">
                            <label style="position: absolute;color: #222;top: 49%;right: 54%;" for="password-confirm" class="form-label"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password_confirmation" id="password-confirm" placeholder="Your Password " class="form-control input" />
                          </div>
                          <input style="display: inline !important;width: unset !important;" type="checkbox" name="agree-term" id="agree-term" class="agree-term mt-2" />
<label style="top: 57%;left: 47%;" for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte toutes les déclarations des  <a href="#" class="term-service">Conditions d'utilisation</a></label>
</div>                     
                          <button type="submit" class="btn btn-dark ms-3" style="width: 256.08px;">S'inscrire</button>
                        
                          <a href="#!" class="forgot-pwd d-inline-block ps-2 " style="font-size: 13px;">je suis déja membre</a>
                          
                          <nav class="login-card-footer-nav pt-3 ps-3">
                            <a href="#!" >Terms of use.</a>
                            <a href="#!" >Privacy policy</a>
                          </nav>
                        </form>
                </div>
            </div>
        </div>
    </div>
