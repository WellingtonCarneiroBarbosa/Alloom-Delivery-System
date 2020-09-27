@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Confirmar CPF</div>

                <div class="card-body">
                    <x-tenant-front.alert />

                    <form action="{{ route("tenant-front.franchise.order.confirm-access-key.confirm", [
                        $franchise->tenant->url_prefix, $franchise->url_prefix, $order_id
                    ]) }}" method="POST">

                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <label for="access-key">Confirme seu CPF para prosseguir</label>
                                <input type="text" class="form-control" name="access-key" id="access-key">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <button type="submit" class="btn btn-primary float-right">Confirmar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
