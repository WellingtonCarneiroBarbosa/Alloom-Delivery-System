@extends('layouts.welcome.app')

@section('title', 'Alloom')

@section('nav-content')
  <x-welcome.nav />
@endsection

@section('footer-content')
  <x-welcome.footer />
@endsection

@section('main-content')

<!-- Banner Start -->
<div class="banner banner-2">
  <div class="banner-slider-2">
    <div class="banner-item">
      <div class="banner-bg bg-cover" style="background-image: url('{{asset('pizza-slices/assets/img/banner/1.jpg')}}')"></div>
      <div class="banner-inner">
        <div class="banner-text">
          <h1 class="title">Crie Sua Presença Digital</h1>
          <h4>Soluções inteligentes para Pizzarias</h4>
          <p class="subtitle">
            Receba e gerencie pedidos em escala. Estatísticas de todas suas filiais em um único lugar. Isso é: Alloom Delivery.
          </p>
        </div>
        <a href="#" class="btn-custom primary">Saiba Mais</a>
      </div>
      <!--<img src="{{asset('pizza-slices/assets/img/veg/12.png')}}" alt="bg">-->
    </div>
  </div>
</div>
<!-- Banner End -->

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



<!-- Offer start -->
<div class="section light-bg">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6 mb-lg-30">
        <img src="{{asset('pizza-slices/assets/img/misc/delivery.svg')}}" alt="img">
      </div>
      <div class="col-lg-6">
        <div class="banner-inner">
          <div class="banner-text">

            <h2>O MELHOR SISTEMA DE DELIVERY!</h2>
            <p class="subtitle">
              Muito mais que um design bonito, um sistema inteligente pensado totalmente para nossos clientes.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Offer End -->

<!-- Offer start -->
<div class="section light-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="banner-inner">
          <div class="banner-text">

            <h2>IRÁ AGREGAR AO SEU NEGÓCIO</h2>
            <p class="subtitle">
              Oferecemos ferramentas que agregam em seu negócio
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-lg-30">
        <img src="{{asset('pizza-slices/assets/img/misc/growup.svg')}}" alt="img">
      </div>


    </div>
  </div>
</div>
<!-- Offer End -->


<!-- Offer start -->
<div class="section light-bg">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6 mb-lg-30">
          <img src="{{asset('pizza-slices/assets/img/misc/design.svg')}}" alt="img">
        </div>
        <div class="col-lg-6">
          <div class="banner-inner">
            <div class="banner-text">

              <h2>O MELHOR SISTEMA DE DELIVERY!</h2>
              <p class="subtitle">
                Muito mais que um design bonito, um sistema inteligente pensado totalmente para nossos clientes.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Offer End -->


<!-- Newsletter start -->
<section class="section bg-center bg-cover dark-overlay" style="background-image:url('{{asset('pizza-slices/assets/img/bg/1.jpg')}}')">
  <div class="container">

    <div class="ct-newsletter">

      <div class="section-title-wrap section-header">
        <h2 class="title">Podemos entrar em contato?</h2>
      </div>
      <form method="post">
        <input type="text" class="form-control" placeholder="Seu Nome Completo" value=""><br>
        <input type="text" class="form-control" placeholder="Seu Whatsapp" value=""><br>
        <input type="text" class="form-control" placeholder="Nome da sua empresa" value=""><br>
        <input type="email" class="form-control" placeholder="Seu melhor e-mail" value=""><br>
        <button type="submit" class="btn-custom primary" name="button"> Enviar <i class="far fa-paper-plane"></i> </button>
      </form>

    </div>

  </div>
</section>
<!-- Newsletter End -->

@endsection

