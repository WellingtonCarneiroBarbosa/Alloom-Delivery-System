@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Carrinho</div>

                <div class="card-body">
                    @if(session("pizza_cart"))
                        {{ dd(session("pizza_cart")) }}
                    @else
                        <h1>Seu carrinho está vazio</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
