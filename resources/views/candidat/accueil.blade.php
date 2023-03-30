@extends('layouts.app1')
@section('contenu')
    {{-- START CONTENT --}}
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url(front/images/slider2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Bienvenue chez Faster,</h1>
                            <h2 class="subheading mb-4"> Le vtc local qui vous accompagne en toute sécurité </h2>
                            <h2 class="subheading mb-4"> dans tous vos trajets </h2>
                            <p><a href="#" class="btn btn-primary">View Details</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



  <section>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
        <div class="rating">
        <img src="front/images/caul.jpg" class="">
    </div>
      <br>
         <p>Activez l’application Faster.</p>
      <p>Saisissez votre destination </p>
      <p>via géolocalisation puis </p>
      <p>validez le montant estimé </p>
      <p>de votre trajet.</p>
    </div>
    <div class="col-sm-4">
        <div class="rating">
        <img src="front/images/vt2.jpg" class="">
    </div>
    <br>
      <br>
      <p>&emsp; Votre chauffeur Faster,</p>
      <p>&emsp;vous récupère et vous </p>
      <p>&emsp;dépose en toute sécurité à </p>
      <p>&emsp;la destination indiquée.</p>
    </div>
    <div class="col-sm-4">
        <div class="rating"><!--
         -->
    <br>
    <br>
    <br>
    <br>

         <a href="#5" title="Donner 5 étoiles">☆</a><!--
        --><a href="#4" title="Donner 4 étoiles">☆</a><!--
        --><a href="#3" title="Donner 3 étoiles">☆</a><!--
        --><a href="#2" title="Donner 2 étoiles">☆</a><!--
        --><a href="#1" title="Donner 1 étoile">☆</a>
    </div>
    <br>
    <br>
    <br>
      <br>
      <p></p>
      <p>Recevez votre facture et</p>
      <p>noter votre trajet ainsi que</p>
      <p>votre chauffeur.</p>
    </div>
  </div>
</div>
</section>


 <section>
<div class="container mt-5">
 <p style="font-size: 50px; font-weight: bold; color:#eeff41" >A propos de Faster </p>
  <div class="row">
    <div class="col-sm-4">
      <br>
         <p style="font-size:40px">Le meilleur choix de transport </p>
      <p>Faster est le service VTC à la demande qui</p>
      <p>vous accompagnera en toute sécurité dans  </p>
      <p>tous vos déplacements.</p>
    </div>
    <div class="col-sm-4">
        <div class="rating"> 
            </div>
       <img src="front/images/peoplem.jpg" class="padding">
    </div>
</div>
</section>








 <section>
<div class="container mt-5">
 <p style="font-size: 50px; font-weight: bold; color:#eeff41" >Faster Business</p>
  <div class="row">
         <div class="col-sm-4">
        <div class="rating"> 
            </div>
       <img src="front/images/peoplem.jpg" class="padding1">
    </div>
    <div class="pass">
      <br>
      <p style="font-size:25px">Simplifiez vos déplacements professionnels</p>
      <p style="font-size:25px">ainsi que ceux de vos collaborateurs.</p>
      <p>Nos solutions Faster Business</p>
      <p>répondent à toutes vos problématiques </p>
      <p>de mobilité.</p>
    </div>
</div>
</section>


   
    <hr>

   
    {{-- END CONTENT --}}
@endsection
