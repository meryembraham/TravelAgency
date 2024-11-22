@extends('layouts.app')
@section('css')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/adminpanel.css')}}">

@endsection
@section('content')
<div class="tm-container-outer bg-overlay">
            <div class="container bg-overlay">
            <div class="row text-center">
             <h1 style="padding-top: 100px;">LET'S BEGIN<h1>
             
                <p class="subtitle">
                    Nous vous aidons à choisir le meilleur.
                </p>
                 
                <a href="#form" class="btn btn-info btn-circle btn-lg"><img src="images/angle-down-solid.svg" alt=""></a>


        </div>
        <div class="row tm-banner-row" id="tm-section-search">

            <form action="{{url('/ajoute-des')}}" method="POST" enctype="multipart/form-data" class="tm-search-form tm-section-pad-2" id="form">
            @csrf    
            <div class="form-row tm-search-form-row">                                
                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                        <label for="titre">Titre:</label>
                        <input name="titre" type="text" class="form-control @error('titre') is-invalid @enderror" id="inputCity" placeholder="Tapez titre...">
                        @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                        <label for="image">Image:</label>
                        <input name="image" type="file" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                    </div>
                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                        <label for="location">Location:</label>
                        <input name="location" type="text" class="form-control @error('location') is-invalid @enderror" id="inputCity" placeholder="Tapez Location">
                        @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                    </div>
                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                        <label for="offre">Offre:</label>
                        <input name="offre" type="number" class="form-control @error('offre') is-invalid @enderror" id="inputCity" placeholder="Tapez offre(%)">
                        @error('offre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                        <label for="inputCity">Prix:</label>
                        <input name="prix" type="number" step="0.01" class="form-control @error('prix') is-invalid @enderror" id="inputCity" placeholder="Tapez prix...">
                        @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                    </div>
                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                        <label for="btnSubmit">&nbsp;</label>
                        <button type="submit" class="btn btn-primary tm-btn tm-btn-search text-uppercase" id="btnSubmit">Ajoute</button>
                    </div>
                </div>                              
            </form>   
            </div> 
    </div>
    </div>
    <section class="p-5 container-outer bg-color">            
        <div class="container">
            <div class="row">
                <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
                    <h2 class="text-uppercase mb-4">VOTRE <strong> VOYAGE</strong> EST NOTRE PRIORITÉ</h2>
                    <p class="mb-4">Travel Agency, votre Agence de Voyage en Tunisie en Ligne vous propose des Promotions sur vos Voyages et Séjours en Tunisie et dans le Monde avec les Meilleurs Prix et Services.</p>
                    <a href="#" class="text-uppercase btn-primary tm-btn" style="text-decoration: none;">Continue explore</a>                              
                </div>
            </div>
        </div>            
    </section>
    @endsection