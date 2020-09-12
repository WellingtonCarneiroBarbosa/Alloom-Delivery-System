@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Concluir Pedido</div>

                    <div class="card-body">
                        <form action="{{ url('/') }}" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="billing_name">Nome</label>
                                    <input type="text" name="billing_name" id="billing_name" class="form-control" value="{{ $billing_name ?? old("billing_name") }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="billing_phone">Telefone</label>
                                    <input type="text" name="billing_phone" id="billing_phone" class="form-control" value="{{ $billing_phone ?? old("billing_phone") }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label for="pick_up_at_the_count">Retirada no Balcão?</label>
                                    <input type="checkbox" onclick="ocultAddressInputs();" name="pick_up_at_the_count" id="pick_up_at_the_count" @if(old("pick_up_at_the_count")) checked @endif>
                                </div>
                            </div>

                            <div class="row" id="billing_address_form">
                                <div class="col-md-6 mt-2">
                                    <label for="billing_cep">CEP</label>
                                    <input type="text" name="billing_cep" id="billing_cep" class="form-control" value="{{ $billing_cep ?? old("billing_cep") }}">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="billing_complement">Complemento</label>
                                    <input type="text" name="billing_complement" id="billing_complement" class="form-control" value="{{ $billing_complement ?? old("billing_complement") }}">
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
        function ocultAddressInputs() {
            let formInputs = document.getElementById("billing_address_form").style;

            if(formInputs.display === "none") {
                return formInputs.display = "";
            }

            return formInputs.display = "none";
        }
    </script>
@endsection
