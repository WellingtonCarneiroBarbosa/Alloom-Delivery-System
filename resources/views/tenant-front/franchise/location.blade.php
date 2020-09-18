@extends('layouts.tenant-front.pizza')

@section('title', 'localização')

@section('nav-content')
    <x-tenant_front.nav type='black' :franchise='$franchise'/>
@endsection

@section('footer-content')
    <x-tenant-front.footer />
@endsection


@section('main-content')

<section class="section">
    <div class="container">

  <!-- Contact Start -->
  <div class="contact-wrapper">

    <div class="ct-contact-map-wrapper">
      <div id="contactPageMap" class="ct-contact-map"></div>
      <a href="https://maps.google.com/?q=51.5,-0.09" target="_blank" class="btn-custom shadow-none">View in Google Maps</a>
    </div>

    <div class="">
      <div class="section section-padding">
        <div class="container">

          <div class="contact-info">

            <div class="row">
              <div class="col-xl-6">
                <div class="ct-info-box">
                  <i class="flaticon-location"></i>
                  <h5>Nosso endereço</h5>
                  <span>Rua Lupionópolis 592</span>
                  <span>Curitiba PR</span>
                  <span> (41) 3265-9866 </span>
                  <span> pizza@gmail.com </span>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="ct-info-box">
                  <i class="flaticon-online-booking"></i>
                  <h5>Horários de atendimento</h5>
                  <span><span>Seg</span> 18:00 - 00:00</span>
                  <span><span>Ter</span> 18:00 - 00:00</span>
                  <span><span>Qua</span> 18:00 - 00:00</span>
                  <span><span>Qui</span> 18:00 - 00:00</span>
                  <span><span>Sex</span> 18:00 - 00:00</span>
                  <span><span>Sáb</span> 18:00 - 00:00</span>
                  <span><span>Dom</span> 18:00 - 00:00</span>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
      <div class="section pt-0">
        <div class="container">
        </div>
      </div>
    </div>

  </div>
  <!-- Contact End -->
    </div>
  </section>  <!-- Cart End -->
<!-- Header Start -->
@endsection
