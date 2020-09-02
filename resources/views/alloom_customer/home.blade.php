@extends('layouts.dash')

@section('title', 'Dashboard')

@section('nav-content')
    <x-alloom-customer.nav />
@endsection

@section('top-nav-content')
    <x-alloom-customer.top-nav />
@endsection


@section('footer-content')
    <x-alloom-customer.footer />
@endsection

@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Default</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right"><a href="#" class="btn btn-sm btn-neutral">New</a> <a href="#" class="btn btn-sm btn-neutral">Filters</a></div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">URL Base</h5><span class="h2 font-weight-bold mb-0"><a href="{{ url(auth()->user()->tenant->url_prefix) }}" target="_blank">{{ url(auth()->user()->tenant->url_prefix) }}</a></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">URL Base</h5><span class="h2 font-weight-bold mb-0"><a href="{{ url(auth()->user()->tenant->url_prefix) }}" target="_blank">{{ url(auth()->user()->tenant->url_prefix) }}</a></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('main-content')
{{--
    Page content here '\-/'
--}}
@endsection


{{--

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as')  }} <strong>{{ auth()->user()->getRole() }}</strong> on alloom customer dashboard \o/
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}
