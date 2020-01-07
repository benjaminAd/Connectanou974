@extends('layout')
@section('title')
    <title>Recherche d'annonce</title>
@endsection
@section('link')
    <link rel="stylesheet" href="./css/style_Contact.css"/>
@endsection
            
@section('body')
@include('navbar')
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <div class="border border-light p-5 divConnect needs-validation" >
            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h1 mb-4 text-center">Recherchez des Projets</p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="">
                    <hr>
                <form action="{{ route('recherche.search')}}" method="POST" onsubmit="search(event)" id="searchForm">

                        {{csrf_field()}}

                        <div class="form-group">
                            <input type="text" class="form-control" id="words">
                        </div>
                        <button type="submit" class="btn btn-danger mb-5" style="display: block; margin : auto;">Rechercher</button>
                    </form>
                    <p>Si vous êtes intéréssé par un projet, contactez l'équipe de Connectanou.</p>
                    @foreach ($RechercheAnnonce as $Recherche )
                        <div class="card mb-2 mt-3 " style="width: 36rem;">
                            {{-- <img src="..." class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                                {{-- On récupere le titre  --}}
                                <h5 class="card-title">{{$Recherche->titre_projet}}</h5>
                                <p class="card-text">{{$Recherche->desc_projet}}<br/>{{$Recherche->date_butoir_projet}}</p>
                                {{-- <a href="#" class="btn btn-primary">Plus de Détails</a> --}}
                            </div>
                        </div>
                    @endforeach
                   
                    <hr>
                     <div class="d-flex justify-content-center mt-3">
                        {{$RechercheAnnonce->links()}}
                    </div>
                </div>
            </div> 
            </form>
            </div>
        </div>
    </div>
        {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}
   @include('footer')
@endsection
@section('script')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        function search(event){
            // on désactive le comportement par défaut du bouton 
            // event.preventDefault();
            // et on veut récupérer la valeur entrée dans 'input'
            const words = document.querySelector('#words').value
            
            // passer la valeur indiqué dans notre formulaire dans la requete ajax avec la bibliothèque AXIOS

            // on récupére url de la recherche dans une constante
            // afin de rendre la recherche dynamique et paré à d'éventuelles changement
            const url = document.querySelector('#searchForm').getAttribute('action')
            // `${url}`nous permet de passer la valeur de l'action 
            axios.post( `${url}`, {
                'words': words,
                
            }).then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });


        }
    </script>
@endsection