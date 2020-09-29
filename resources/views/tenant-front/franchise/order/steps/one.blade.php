@extends('layouts.tenant-front.pizza')

@section('nav-content')
    <x-welcome.nav />

@endsection

@section('footer-content')
    <x-tenant-front.footer />
@endsection


@section('main-content')
<div class="section section-padding">
    <div class="container">
        <div class="row">
            <h1>Concluir Pedido</h1>
            <div class="col-md-12">
                <div class="card">
                    <!--<div class="card-header"></div>-->

                    <div class="card-body">
                        <x-tenant-front.alert />

                        <form action="{{ route("tenant-front.franchise.order.make.step-store-1", [$franchise->tenant->url_prefix, $franchise->url_prefix]) }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="receiver_name">Nome Completo</label>
                                    <input required type="text" name="receiver_name" id="receiver_name" class="form-control" value="{{ $receiver_name ?? old("receiver_name") }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="receiver_phone">Telefone</label>
                                    <input required type="text" name="receiver_phone" id="receiver_phone" class="form-control" value="{{ $receiver_phone ?? old("receiver_phone") }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label for="receiver_email">E-mail</label>
                                    <input type="email" class="form-control" id="receiver_email" name="receiver_email" value="{{ old("receiver_email")  }}" required>
                                    <p class="cpfWarning">Usaremos esse e-mail para lhe avisar sobre seu pedido. <a target="blank" href="{{ route("welcome.privacy-policy") }}">Saiba mais.</a></p>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="access_key">CPF</label>
                                    <input type="text" class="form-control" id="access_key" name="access_key" value="{{ old("access_key")  }}" required>
                                    <p class="cpfWarning">ATENÇÃO! Seus dados estão seguros conosco. Seu CPF é necessário para garantir que somente você tenha acesso aos seus dados e é salvo com a mais alta tecnologia de criptografia disponível: bcrypt. <a target="blank" href="{{ route("welcome.privacy-policy") }}">Saiba mais.</a></p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <label for="pick_up_at_the_counter">Retirada no Balcão?</label>
                                    <input type="checkbox" onclick="ocultAddressInputs();" name="pick_up_at_the_counter" id="pick_up_at_the_counter" @if((int) old("pick_up_at_the_count") === 1) checked @endif value="{{ old("pick_up_at_the_counter" ?? 0) }}">
                                </div>
                            </div>

                            <div id="receiver_address_form">
                                <h4>Dados de Entrega</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="state">Estado</label>
                                        <input type="text" name="state" id="state" class="form-control" required value="{{ old("state") ?? $franchise->state }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="city">Cidade</label>
                                        <input type="text" name="city" id="city" class="form-control" required value="{{ old("city") ?? $franchise->city }}">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="address">Endereço</label>
                                        <input type="text" name="address" id="address" class="form-control" required placeholder="Nome da Rua + número do complemento" value={{ old('address') }}>
                                    </div>

                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <button style="float: right" type="submit" class="btn-custom primary" name="button"> Pedir  </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts-content')
    <script>
       window.addEventListener("load", function() {
            let pickUpAtTheCount = "{{ old('pick_up_at_the_counter') }}";

            console.log(pickUpAtTheCount);

            if(Number(pickUpAtTheCount) === 1) {
                document.getElementById("pick_up_at_the_counter").value = 1;
                receiver_cep.removeAttribute("required", "required");
                receiver_complement.removeAttribute("required", "required")
                return document.getElementById("receiver_address_form").style.display = "none";
            }
       });

        function ocultAddressInputs() {
            let formInputs = document.getElementById("receiver_address_form");

            let state = document.getElementById("state");
            let city = document.getElementById("city");
            let address = document.getElementById("address");
            let pick_up_at_the_counter = document.getElementById("pick_up_at_the_counter");

            if(formInputs.style.display === "none") {
                state.setAttribute("required", "required");
                city.setAttribute("required", "required");
                address.setAttribute("required", "required");
                pick_up_at_the_counter.value = false;
                return formInputs.style.display = "";
            }

            state.removeAttribute("required", "required");
            city.removeAttribute("required", "required");
            address.removeAttribute("required", "required")
            pick_up_at_the_counter.value = true;
            return formInputs.style.display = "none";
        }
    </script>
@endsection

