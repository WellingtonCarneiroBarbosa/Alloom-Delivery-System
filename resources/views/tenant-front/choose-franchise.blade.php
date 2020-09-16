@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Escolha uma unidade para <strong>{{ $tenant->url_prefix }}</strong></h1>
        <div class="row">
            @foreach($tenant->franchises as $franchise)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">Unidade: <strong>{{ $franchise->name }}</strong></div>

                    <div class="card-body">
                        <a href="{{ route('tenant-front.franchise.index', [$tenant->url_prefix, $franchise->url_prefix]) }}">
                            <button class="btn btn-primary">Escolher</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
