@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" />
@section('css')
<link rel="stylesheet" href="{{asset('css/destination.css')}}">
@endsection
@section('content')
<section class="pt-md-5 mt-md-5"> 
    <div class="container">
      <h2 class="text-center" style="margin-bottom: 35px;" >Nos meilleurs Hôtels en Tunisie</h2> 
      <p class="text-muted text-center fs-6" style="margin-bottom: 35px;">Réservez maintenant votre hôtel en temps réel</p>
      <div class="row">
          <div class="col-lg-12">
              <div class="tab" role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Offre à saisir tout de suite</a></li>
                      <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Hôtels recommandés</a></li>
                      <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Top ventes</a></li>
                      <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab">Testés et validés pour vous</a></li>
                      <li role="presentation"><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab">Séjours de noces</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content tabs">
                      <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <div class="container mt-4 d-flex justify-content-center">
                          <div class="row ">
                            @foreach($des as $dess)
                              <div class="col-md-4 border-right">
                                  <div class="card h-100 hotel-list-item">
                                      <div class="first bg-white p-4 card-img-top"> <img src="/images/{{$dess->image}}" class="card-img-top img-fluid lazyloaded" />
                                        <div class="card-body">
                                          <h3 class="text-capitalize pt-">                      
                                            <a href="#" target="_blank" class="text-dark" title="{{$dess->titre}} ">{{$dess->titre}} </a>
                                            <small class=" rating d-inline-block">
                                              <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                            </small>
                                          </h3>
                                          <p class="card-text">{{$dess->location}}</p>
                                          @if($dess->offre>0)
                                          <p class="card-text text-success ">Promo -- {{$dess->offre}}%</p>
                                          @endif
                                        </div>
                                        <div class="card-footer  border-0 bg-transparent">
                                          <div class="d-flex justify-content-between mt-2">
                                            <div class="align-self-center">
                                              <div class="fs-6"> à partir de</div>
                                              <span class="fs-4 font-weight-600"> @if($dess->offre>0) {{$dess->prix-($dess->prix*20/100)}} @else {{$dess->prix}} @endif<sup>TND</sup></span> 
                                            </div>
                                            <div  class="">
                                              <a class="btn btn-primary" target="_blank" href="#" title="Traveltodo Village Africa Jade Thalasso ">Voir l'offre</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              @endforeach
                          </div>
                      </div>
                    </div>
                      <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <div class="container mt-4 d-flex justify-content-center">
                          <div class="row ">
                              <div class="col-md-4 border-right">
                                  <div class="card h-100 hotel-list-item">
                                      <div class="first bg-white p-4 card-img-top"> <img src="../images/p4.jpg" style="height: 225px;"class="card-img-top img-fluid lazyloaded" />
                                        <div class="card-body">
                                          <h3 class="text-capitalize pt-">                      
                                            <a href="#" target="_blank" class="text-dark" title="Traveltodo Village Africa Jade Thalasso ">Traveltodo Village Africa Jade Thalasso </a>
                                            <small class=" rating d-inline-block">
                                              <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                            </small>
                                          </h3>
                                          <p class="card-text">Korba - Tunisie</p>
                                          <p class="card-text text-success accroche">Promo Octobre -- Soirée le 30-10</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent">
                                          <div class="d-flex justify-content-between mb-2">
                                            <div class="align-self-center">
                                              <div class="fs-6"> à partir de</div>
                                              <span class="fs-4 font-weight-600"> 79<sup>TND</sup></span> 
                                            </div>
                                            <div  class="">
                                              <a class="btn btn-primary" target="_blank" href="#" title="Traveltodo Village Africa Jade Thalasso ">Voir l'offre</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4 border-right">
                                  <div class="card h-100 hotel-list-item">
                                      <div class=" second bg-white p-4  card-img-top"> <img src="../images/p5.jpg" style="height: 225px;"class="card-img-top img-fluid lazyloaded" />
                                        <div class="card-body">
                                          <h3 class="text-capitalize">                      
                                            <a href="#" target="_blank" class="text-dark" title="Le Royal Hammamet">Vincci Marillia</a>
                                            <small class=" rating d-inline-block">
                                              <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                            </small>
                                          </h3>
                                          <p class="card-text">Hammamet - Tunisie</p>
                                          <p class="card-text text-success ">Promo Octobre avec 1er Enfant -6ans gratuit</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent">
                                          <div class="d-flex justify-content-between mb-2">
                                            <div class="align-self-center">
                                              <div class="fs-6"> à partir de</div>
                                              <span class="fs-4 font-weight-600"> 86<sup>TND</sup></span> 
                                            </div>
                                            <div  class="align-self-center">
                                              <a class="btn btn-primary" target="_blank" href="#" title="Le Royal Hammamet">Voir l'offre</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="card h-100 hotel-list-item">
                                      <div class=" third bg-white p-4 card-img-top"> <img src="../images/p6.jpg" style="height: 225px;"class="card-img-top img-fluid lazyloaded" />
                                        <div class="card-body">
                                          <h3 class="text-capitalize">                      
                                            <a href="#" target="_blank" class="text-dark" title="Occidental Marco Polo">Djerba Plaza Thalasso & Spa</a>
                                            <small class=" rating d-inline-block">
                                              <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                            </small>
                                          </h3>
                                          <p class="card-text">Djerba - Tunisie</p>
                                          <p class="card-text text-success ">Certificat D'excellence 2021 de Tripadvisor/Promo Enfant -8ans gratuit</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent">
                                          <div class="d-flex justify-content-between mb-2">
                                            <div class="align-self-center">
                                              <div class="fs-6"> à partir de</div>
                                              <span class="fs-4 font-weight-600"> 90<sup>TND</sup></span> 
                                            </div>
                                            <div  class="align-self-center">
                                              <a class="btn btn-primary" target="_blank" href="#" title="Occidental Marco Polo">Voir l'offre</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                      <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <div class="container mt-4 d-flex justify-content-center">
                          <div class="row ">
                              <div class="col-md-4 border-right">
                                  <div class="card h-100 hotel-list-item">
                                      <div class="first bg-white p-4 card-img-top"> <img src="../images/p7.jpg"style="height: 225px;" class="card-img-top img-fluid lazyloaded" />
                                        <div class="card-body">
                                          <h3 class="text-capitalize pt-">                      
                                            <a href="#" target="_blank" class="text-dark" title="Traveltodo Village Africa Jade Thalasso ">Djerba Plazza Thalasso & Spa</a>
                                            <small class=" rating d-inline-block">
                                              <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                            </small>
                                          </h3>
                                          <p class="card-text">Djerba - Tunisie</p>
                                          <p class="card-text text-success accroche">Hotel recommandé / Bien noté</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent">
                                          <div class="d-flex justify-content-between mb-2">
                                            <div class="align-self-center">
                                              <div class="fs-6"> à partir de</div>
                                              <span class="fs-4 font-weight-600"> 90<sup>TND</sup></span> 
                                            </div>
                                            <div  class="">
                                              <a class="btn btn-primary" target="_blank" href="#" title="Traveltodo Village Africa Jade Thalasso ">Voir l'offre</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4 border-right">
                                  <div class="card h-100 hotel-list-item">
                                      <div class=" second bg-white p-4  card-img-top"> <img src="../images/p8.jpg"style="height: 225px;" class="card-img-top img-fluid lazyloaded" />
                                        <div class="card-body">
                                          <h3 class="text-capitalize">                      
                                            <a href="#" target="_blank" class="text-dark" title="Le Royal Hammamet">Movenpick Resor & Marine SPA</a>
                                            <small class=" rating d-inline-block">
                                              <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                            </small>
                                          </h3>
                                          <p class="card-text">Sousse - Tunisie</p>
                                          <p class="card-text text-success ">Hotel recommandé / Bien noté / Luxe</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent">
                                          <div class="d-flex justify-content-between mb-2">
                                            <div class="align-self-center">
                                              <div class="fs-6"> à partir de</div>
                                              <span class="fs-4 font-weight-600"> 135<sup>TND</sup></span> 
                                            </div>
                                            <div  class="align-self-center">
                                              <a class="btn btn-primary" target="_blank" href="#" title="Le Royal Hammamet">Voir l'offre</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="card h-100 hotel-list-item">
                                      <div class=" third bg-white p-4 card-img-top"> <img src="../images/p9.jpg" style="height: 225px;"class="card-img-top img-fluid lazyloaded" />
                                        <div class="card-body">
                                          <h3 class="text-capitalize">                      
                                            <a href="#" target="_blank" class="text-dark" title="Occidental Marco Polo">Royal Thalassa Moanstir</a>
                                            <small class=" rating d-inline-block">
                                              <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                            </small>
                                          </h3>
                                          <p class="card-text">Monastir - Tunisie</p>
                                          <p class="card-text text-success ">Promo Octobre</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent">
                                          <div class="d-flex justify-content-between mb-2">
                                            <div class="align-self-center">
                                              <div class="fs-6"> à partir de</div>
                                              <span class="fs-4 font-weight-600"> 99<sup>TND</sup></span> 
                                            </div>
                                            <div  class="align-self-center">
                                              <a class="btn btn-primary" target="_blank" href="#" title="Occidental Marco Polo">Voir l'offre</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                      <div role="tabpanel" class="tab-pane fade" id="Section4">
                        <div class="container mt-4 d-flex justify-content-center">
                          <div class="row ">
                              <div class="col-md-4 border-right">
                                  <div class="card h-100 hotel-list-item">
                                      <div class="first bg-white p-4 card-img-top"> <img src="../images/p10.jpg"style="height: 225px;" class="card-img-top img-fluid lazyloaded" />
                                        <div class="card-body">
                                          <h3 class="text-capitalize pt-">                      
                                            <a href="#" target="_blank" class="text-dark" title="Traveltodo Village Africa Jade Thalasso ">Concorde Green Park Palace </a>
                                            <small class=" rating d-inline-block">
                                              <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                            </small>
                                          </h3>
                                          <p class="card-text">Sousse - Tunisie</p>
                                          <p class="card-text text-success">Hotel accepte les réservations familiales</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent">
                                          <div class="d-flex justify-content-between mb-2">
                                            <div class="align-self-center">
                                              <div class="fs-6"> à partir de</div>
                                              <span class="fs-4 font-weight-600"> 140<sup>TND</sup></span> 
                                            </div>
                                            <div  class="">
                                              <a class="btn btn-primary" target="_blank" href="#" title="Traveltodo Village Africa Jade Thalasso ">Voir l'offre</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4 border-right">
                                  <div class="card h-100 hotel-list-item">
                                      <div class=" second bg-white p-4  card-img-top"> <img src="../images/p11.jpg" style="height: 225px;" class="card-img-top img-fluid lazyloaded" />
                                        <div class="card-body">
                                          <h3 class="text-capitalize">                      
                                            <a href="#" target="_blank" class="text-dark" title="Le Royal Hammamet">Dar Ismail Tabarka</a>
                                            <small class=" rating d-inline-block">
                                              <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                            </small>
                                          </h3>
                                          <p class="card-text">Tabarka - Tunisie</p>
                                          <p class="card-text text-success">Enfant -4ans gratuit</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent">
                                          <div class="d-flex justify-content-between mb-2">
                                            <div class="align-self-center">
                                              <div class="fs-6"> à partir de</div>
                                              <span class="fs-4 font-weight-600"> 87<sup>TND</sup></span> 
                                            </div>
                                            <div  class="align-self-center">
                                              <a class="btn btn-primary" target="_blank" href="#" title="Le Royal Hammamet">Voir l'offre</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="card h-100 hotel-list-item">
                                      <div class=" third bg-white p-4 card-img-top"> <img src="../images/p12.jpg" style="height: 225px;"class="card-img-top img-fluid lazyloaded" />
                                        <div class="card-body">
                                          <h3 class="text-capitalize">                      
                                            <a href="#" target="_blank" class="text-dark" title="Occidental Marco Polo">Sousse Palace</a>
                                            <small class=" rating d-inline-block">
                                              <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                            </small>
                                          </h3>
                                          <p class="card-text">Sousse - Tunisie</p>
                                          <p class="card-text text-success">Luse/Enf -4ans gratuit</p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent">
                                          <div class="d-flex justify-content-between mb-2">
                                            <div class="align-self-center">
                                              <div class="fs-6"> à partir de</div>
                                              <span class="fs-4 font-weight-600"> 90<sup>TND</sup></span> 
                                            </div>
                                            <div  class="align-self-center">
                                              <a class="btn btn-primary" target="_blank" href="#" title="Occidental Marco Polo">Voir l'offre</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section5">
                      <div class="container mt-4 d-flex justify-content-center">
                        <div class="row ">
                            <div class="col-md-4 border-right h-100">
                                <div class="card h-100 hotel-list-item">
                                    <div class="first bg-white p-4 card-img-top"> <img src="../images/p13.jpg" style="height: 225px;"class="card-img-top img-fluid lazyloaded" />
                                      <div class="card-body">
                                        <h3 class="text-capitalize pt-">                      
                                          <a href="#" target="_blank" class="text-dark" title="Traveltodo Village Africa Jade Thalasso ">Royal Thalassa Monastir</a>
                                          <small class=" rating d-inline-block">
                                            <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                          </small>
                                        </h3>
                                        <p class="card-text">Monastir - Tunisie</p>
                                        <p class="card-text text-success">Promo Octobre</p>
                                      </div>
                                      <div class="card-footer border-0 bg-transparent">
                                        <div class="d-flex justify-content-between mb-2">
                                          <div class="align-self-center">
                                            <div class="fs-6"> à partir de</div>
                                            <span class="fs-4 font-weight-600"> 99<sup>TND</sup></span> 
                                          </div>
                                          <div  class="">
                                            <a class="btn btn-primary" target="_blank" href="#" title="Traveltodo Village Africa Jade Thalasso ">Voir l'offre</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-right">
                                <div class="card h-100 hotel-list-item">
                                    <div class=" second bg-white p-4  card-img-top"> <img src="../images/p14.jpg"style="height: 225px;" class=" card-img-top img-fluid lazyloaded" />
                                      <div class="card-body">
                                        <h3 class="text-capitalize">                      
                                          <a href="#" target="_blank" class="text-dark" title="Le Royal Hammamet">Movenpick Resort & Marine SPA</a>
                                          <small class=" rating d-inline-block">
                                            <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                          </small>
                                        </h3>
                                        <p class="card-text">Sousse- Tunisie</p>
                                        <p class="card-text text-success">Enf -7ans gratuit/Luxe/N'accepte pas 3 Adultes dans la même chambre/Burkini interdit dans toutes les piscines de l’hôtel</p>
                                      </div>
                                      <div class="card-footer border-0 bg-transparent">
                                        <div class="d-flex justify-content-between mb-2">
                                          <div class="align-self-center">
                                            <div class="fs-6"> à partir de</div>
                                            <span class="fs-4 font-weight-600">135<sup>TND</sup></span> 
                                          </div>
                                          <div  class="align-self-center">
                                            <a class="btn btn-primary" target="_blank" href="#" title="Le Royal Hammamet">Voir l'offre</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 hotel-list-item">
                                    <div class=" third bg-white p-4 card-img-top"> <img src="../images/p15.jpg" style="height: 225px;"class="card-img-top img-fluid lazyloaded" />
                                      <div class="card-body">
                                        <h3 class="text-capitalize">                      
                                          <a href="#" target="_blank" class="text-dark" title="Occidental Marco Polo">Concorde Green Park Palace</a>
                                          <small class=" rating d-inline-block">
                                            <i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i><i class="fa fa-star fa-xs"></i> 
                                          </small>
                                        </h3>
                                        <p class="card-text">Sousse - Tunisie</p>
                                        <p class="card-text text-success">Hotel accepte les réservations familiales</p>
                                      </div>
                                      <div class="card-footer border-0 bg-transparent">
                                        <div class="d-flex justify-content-between mb-2">
                                          <div class="align-self-center">
                                            <div class="fs-6"> à partir de</div>
                                            <span class="fs-4 font-weight-600"> 77<sup>TND</sup></span> 
                                          </div>
                                          <div  class="align-self-center">
                                            <a class="btn btn-primary" target="_blank" href="#" title="Occidental Marco Polo">Voir l'offre</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  </div>
                  </div>
              </div>
          </div>
  </section>
@endsection