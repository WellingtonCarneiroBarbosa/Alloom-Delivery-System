@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Escolha uma unidade para <strong>{{ $tenant->url_prefix }}</strong></h1>
        <div class="row">
            @foreach($tenant->restaurants as $restaurant)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">Unidade: <strong>{{ $restaurant->unit_name }}</strong></div>

                    <div class="card-body">
                        <a href="{{ route('tenant-front.unit.index', [$tenant->url_prefix, $restaurant->unit_name]) }}">
                            <button class="btn btn-primary">Escolher</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
