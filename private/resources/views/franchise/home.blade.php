@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Franchise Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado como {{ auth()->user()->getRole() }} da unidade {{ auth()->user()->franchise->name }} da {{ auth()->user()->franchise->tenant->corporative_name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
