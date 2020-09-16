@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Concluir Pedido</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session("success"))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{{ session("success") }}</li>
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route("tenant-front.unit.order.add-billing-data-and-make-order", [$unit->tenant->url_prefix, $unit->unit_url_prefix]) }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="billing_name">Nome Completo</label>
                                    <input required type="text" name="billing_name" id="billing_name" class="form-control" value="{{ $billing_name ?? old("billing_name") }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="billing_phone">Telefone</label>
                                    <input required type="text" name="billing_phone" id="billing_phone" class="form-control" value="{{ $billing_phone ?? old("billing_phone") }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label for="pick_up_at_the_count">Retirada no Balcão?</label>
                                    <input type="checkbox" onclick="ocultAddressInputs();" name="pick_up_at_the_count" id="pick_up_at_the_count" @if((int) old("pick_up_at_the_count") === 1) checked @endif value="{{ old("pick_up_at_the_count" ?? 0) }}">
                                </div>
                            </div>

                            <div class="row" id="billing_address_form">
                                <div class="col-md-6 mt-2">
                                    <label for="billing_cep">CEP</label>
                                    <input required type="text" name="billing_cep" id="billing_cep" class="form-control" value="{{ $billing_cep ?? old("billing_cep") }}">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="billing_complement">Complemento</label>
                                    <input required type="text" name="billing_complement" id="billing_complement" class="form-control" value="{{ $billing_complement ?? old("billing_complement") }}">
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
                billing_cep.removeAttribute("required", "required");
                billing_complement.removeAttribute("required", "required")
                return document.getElementById("billing_address_form").style.display = "none";
            }
       });

        function ocultAddressInputs() {
            let formInputs = document.getElementById("billing_address_form");

            let billing_cep = document.getElementById("billing_cep");
            let billing_complement = document.getElementById("billing_complement");

            if(formInputs.style.display === "none") {
                document.getElementById("pick_up_at_the_count").value = 0;
                billing_cep.setAttribute("required", "required");
                billing_complement.setAttribute("required", "required");
                return formInputs.style.display = "";
            }

            document.getElementById("pick_up_at_the_count").value = 1;
            billing_cep.removeAttribute("required", "required");
            billing_complement.removeAttribute("required", "required")
            return formInputs.style.display = "none";
        }
    </script>
@endsection
