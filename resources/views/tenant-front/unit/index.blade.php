@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pizzas</h1>
        <div class="row">
            @foreach($unit_flavors as $flavor)
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
    </div>
@endsection
