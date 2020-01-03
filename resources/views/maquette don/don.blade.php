@extends('layout')
@section('title')
    <title>Contact</title> 
@endsection
@section('link')
  <link rel="stylesheet" href="./css/style_Contact.css" />
@endsection
@section('body')
@include('navbar')
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect needs-validation" action="#" novalidate>
          {{-- <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo" /> --}}
            <p class="h4 mb-4 text-center">Faites votre B.A.</p>
            <iframe id="haWidget" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/connectanou/formulaires/1/widget" style="width:100%;height:750px;border:none;" onload="window.scroll(0, this.offsetTop)">
            </iframe>


            <iframe id="haWidget" allowtransparency="true" src="https://www.helloasso.com/associations/connectanou/formulaires/1/widget-bouton" style="width:100%;height:70px;border:none;">
            </iframe>
            {{-- <div style="width:100%;text-align:center;">
                Propulsé par 
                <a href="https://www.helloasso.com" rel="nofollow">HelloAsso</a>
            </div> --}}
            
        </form> 
    </div>
    @include('footer')
@endsection 
