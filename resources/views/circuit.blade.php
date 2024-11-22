@extends('layouts.app')

@section('css')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Changa|El+Messiri|Lemonada&display=swap" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Crete Round' rel='stylesheet'>
  <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Zen+Kaku+Gothic+Antique:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Zen+Kaku+Gothic+Antique:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/circuit.css')}}">
@endsection




@section('content')
<section style="margin-top:0 !important;padding-top:0 !important" class="pt-md-5 mt-md-5"> 
    <div class="container h-100 p-5 border-top-3" style="width: 1100px;">
        <table>
            <tr style="background-color:#ff7a00;"></tr>
        </table>
        <nav aria-label="breadcrumb" style="margin-top: 10px;">
        <ol class="breadcrumb" >
          <li class="breadcrumb-item active "  aria-current="page"> <a href="#" style="color:#747474; text-decoration: none;">ACUEIL</a></li>
          <li class="breadcrumb-item active" style="color:#ff7a00 ;" aria-current="page">CIRCUIT , ESCAPADE & ACTIVITÉ</li>
        </ol>
      </nav>
       <h2 style="text-align:center;">CIRCUIT , ESCAPADE & ACTIVITÉ</h2>
       @foreach($cat as $onecat)
        <table style="border:0;width:960;cellspacing:0 ;cellpadding:0;background-color: #FFFFFF;">
        <tbody>
        <tr>
        <td class="tpl_titre_orange" style="align:left;valign:middle;width:960px;height:53px;">
        <h3 style="font-size:26px; margin:12px 0 6px;padding: 1px;padding-left: 5px;color: #FFFFFF;"><i class="fas fa-hotel pe-2"></i>{{$onecat->categorie}}</h3>
        </td>
        </tr>
        </tbody>
        </table>
        <div class="row d-flex align-md-content-center justify-content-around">
        @foreach($cir as $onecir)
        @if($onecir->categorie==$onecat->categorie)
            <div class="col-md-2 col-sm-12 d-flex align-md-content-center">
            <div class="card" style="margin-left: -62px;;margin-right: -18px">
                <img class="card-img-top" src="images/{{$onecir->image}}" alt="Card image" style="height:205px;">
                <div class="card-body pt-1" style="height: 71.25px;">
                  
                  <p> <b> {{$onecir->titre}}</b></p>
                </div>
                <img src="basbloc.jpg" alt="">
                <div class="card-img-overlay">
                <a href="#"><button class="btn bt1" type="button" style="background:#ed7b01; opacity: 1;"><b>{{$onecir->prix}} DT / pax</b> </button></a>
                 </div>
            </div>
            </div>
            @endif
        @endforeach
        </div>
        @endforeach







    </section>
    @endsection