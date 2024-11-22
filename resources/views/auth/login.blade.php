<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Crete Round' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
<div class="container justify-content-center d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="card" style="width: 950px; border-radius: 2em; height: 510px;box-shadow: 0px 0px 10px 3px grey;">
            <div class="row no-gutters">
                <div class="col-sm-5 ">
                    <img class="card-img  d-none d-md-block" style="border-top-left-radius: 2em; border-bottom-left-radius: 2em;" src="../images/reg3.jpg" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-7">
                    <div class="card-body pt-4">
                        <h1> Travel Agency<span class="orange">.</span></h1>
                        <p class="head">Connectez-vous à votre compte</p>
                        <form action="{{ route('login') }}" method="POST">
                        @csrf
                            <div class="mb-3 w-50">
                              <label for="email" class="form-label">Email:</label>
                              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Adresse Email" name="email" value="{{ old('email') }}">
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                            </div>
                            <div class="mb-3 w-50">
                              <label for="password" class="form-label">Mot de Passe:</label>
                              <input type="password" class="form-control @error('password') is-invalid @enderror" id="pwd" placeholder="Mot de Passe" name="password">
                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                            </div>
                            <div class="form-check mb-3">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                              </label>
                            </div>
                            <button type="submit" class="btn btn-dark w-50">Connexion</button>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-pwd d-inline-block ps-2">mot de passe oublié?</a>
                            @endif
                            <p class="login-card-footer-text pt-3" style="font-size: 15px;">Vous n'avez pas de compte ? <a href="{{ route('register') }}" class="text-reset" style="font-size: 15px;">Register here</a></p>
                            <nav class="login-card-footer-nav pb-2">
                              <a href="#!" >Terms of use.</a>
                              <a href="#!" >Privacy policy</a>
                            </nav>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>