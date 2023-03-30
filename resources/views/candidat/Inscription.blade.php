@extends('layouts.app1')
@section('contenu')
    {{-- START CONTENT --}}


 <section>
<div class="container mt-5">
 <p style="font-size: 30px; font-weight: bold; color:#eeff41" >A propos de Faster </p>
  <div class="row">
    <div class="col-sm-4">
      <br>
         <p style="font-size:20px">Le meilleur choix de transport </p>
         <p style="font-size:20px">pour une agréable journée. </p>
      <p>Faster est le service VTC à la demande qui</p>
      <p>vous accompagnera en toute sécurité dans  </p>
      <p>tous vos déplacements  locaux.</p>
      <br>
      <p>Via l’application FASTER vous pourrez</p>
      <p>commander votre chauffeur et vous déplacer</p>
      <p>vers la destination de votre choix en indiquant</p>
      <p>simplement la géolocalisation de votre</p>
      <p>destination finale.</p>
    </div>
    <div class="col-sm-4">
        <div class="rating"> 
            </div>
       <img src="front/images/peoplem.jpg" class="padding">
    </div>
</div>
</section>








 <section>
<div class="container mt-5"  style="background-image: url('front/images/m.jpg');">
 <p style="font-size: 20px; font-weight: bold; color:#eeff41" >PASSAGERS</p>
  <div class="row">
         <div class="col-sm-4">

  <p style="font-size:20px; color:#eeff41">FASTER prend soin de ses passagers</p> 
      <p style="font-size:25px; color:#FFFFFF">Faster est le service VTC à la demande qui </p>
      <p style="font-size:25px ; color:#FFFFFF">vous accompagnera en toute sécurité dans </p>
      <p style=" font-size:25px ; color:#FFFFFF">tous vos déplacements locaux. </p>
  
  <button style="background-color: yellow; font-weight: bold;   color: black; padding: 10px 50px; border-radius: 5px;">Inscription</button>

</div>
</section>

 <section>
<div class="container mt-5">
 <p style="font-size: 40px; font-weight: bold; color:#eeff41" >Comment ça marche ?</p>
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


   
    <hr>

   
    {{-- END CONTENT --}}
@endsection
