@extends('layouts.welcome.app')

@section('title', 'Alloom')

@section('nav-content')
  <x-welcome.nav-black />
@endsection

@section('footer-content')
  <x-welcome.footer />
@endsection

@section('main-content')


<!-- Icons Start -->
<div class="section">
  <div class="container">
    <div class="section-title-wrap section-header text-center">
      <h5 class="custom-primary">Nós podemos crescer juntos</h5>
      <h2 class="title">Temos muito a oferecer</h2>
      <p class="subtitle">
        Temos muitas funcionalidades que irão ajudar o seu negócio a decolar, temos funcionalidades como controle de caixa e pedidos, delivery e balcão.
      </p>
    </div>

    <div class="row infographics-2">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="ct-infographic-item">
          <i class="flaticon-online-booking"></i>
          <h4>Sistema para pedidos</h4>
          <p>There are many variations of passages of Lorem Ipsum available</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="ct-infographic-item">
          <i class="flaticon-calories"></i>
          <h4>Elegante e responsivo</h4>
          <p>There are many variations of passages of Lorem Ipsum available</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="ct-infographic-item">
          <i class="flaticon-delivery-man"></i>
          <h4>Controle de caixa</h4>
          <p>There are many variations of passages of Lorem Ipsum available</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="ct-infographic-item">
          <i class="flaticon-food-tray"></i>
          <h4>Acessível</h4>
          <p>There are many variations of passages of Lorem Ipsum available</p>
        </div>
      </div>
    </div>


  </div>
</div>
<!-- Icons End -->





@endsection

