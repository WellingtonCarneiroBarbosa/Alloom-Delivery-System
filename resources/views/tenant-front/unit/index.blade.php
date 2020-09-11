@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Restaurante: {{ $unit->tenant->url_prefix }}</h1>
        <h1>Unidade: {{ $unit->unit_name }}</h1>
        <h1>Pizzas</h1>
        <div class="row">
            @foreach($unit->pizzaFlavors as $flavor)
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-header">Categoria: <strong>{{ $flavor->flavors->label->name }}</strong></div>

                        <div class="card-body">
                            <strong> {{ $flavor->flavors->name }}</strong>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <h1>Tamanhos Disponíveis</h1>
        <div class="row">
            @foreach($unit->pizzaSizes as $size)
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-header"><strong>{{  $size->sizes->name  }}</strong></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
