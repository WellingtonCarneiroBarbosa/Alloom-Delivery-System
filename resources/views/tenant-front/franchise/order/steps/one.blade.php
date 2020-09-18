@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Concluir Pedido</div>

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
                                <div class="col-md-12 mt-2">
                                    <label for="pick_up_at_the_count">Retirada no Balcão?</label>
                                    <input type="checkbox" onclick="ocultAddressInputs();" name="pick_up_at_the_count" id="pick_up_at_the_count" @if((int) old("pick_up_at_the_count") === 1) checked @endif value="{{ old("pick_up_at_the_count" ?? 0) }}">
                                </div>
                            </div>

                            <div class="row" id="receiver_address_form">
                                <div class="col-md-6 mt-2">
                                    <label for="receiver_cep">CEP</label>
                                    <input required type="text" name="receiver_cep" id="receiver_cep" class="form-control" value="{{ $receiver_cep ?? old("receiver_cep") }}">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="receiver_complement">Complemento</label>
                                    <input required type="text" name="receiver_complement" id="receiver_complement" class="form-control" value="{{ $receiver_complement ?? old("receiver_complement") }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <button type="submit" class="btn btn-primary float-right">Pedir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts-content')
    <script>
       window.addEventListener("load", function() {
            let pickUpAtTheCount = "{{ old('pick_up_at_the_count') }}";

            console.log(pickUpAtTheCount);

            if(Number(pickUpAtTheCount) === 1) {
                document.getElementById("pick_up_at_the_count").value = 1;
                receiver_cep.removeAttribute("required", "required");
                receiver_complement.removeAttribute("required", "required")
                return document.getElementById("receiver_address_form").style.display = "none";
            }
       });

        function ocultAddressInputs() {
            let formInputs = document.getElementById("receiver_address_form");

            let receiver_cep = document.getElementById("receiver_cep");
            let receiver_complement = document.getElementById("receiver_complement");

            if(formInputs.style.display === "none") {
                document.getElementById("pick_up_at_the_count").value = 0;
                receiver_cep.setAttribute("required", "required");
                receiver_complement.setAttribute("required", "required");
                return formInputs.style.display = "";
            }

            document.getElementById("pick_up_at_the_count").value = 1;
            receiver_cep.removeAttribute("required", "required");
            receiver_complement.removeAttribute("required", "required")
            return formInputs.style.display = "none";
        }
    </script>
@endsection
