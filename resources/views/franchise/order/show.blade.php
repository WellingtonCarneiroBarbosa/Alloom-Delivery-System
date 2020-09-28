@extends("layouts.admin-lte.app")

@section("title")
    Visualizar Pedido
@endsection

@section("nav-content")
    <x-franchise.nav />
@endsection

@section("sidebar-content")
    <x-franchise.sidebar />
@endsection

@section("footer-content")
    <x-franchise.footer />
@endsection

@section("main-content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pedidos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Pedidos</li>
              <li class="breadcrumb-item">Pedido</li>
              <li class="breadcrumb-item active">Visualizar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
          <!-- MAIN col -->
          <section class="col-lg-12 connectedSortable">

              <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Visualizar Pedido - {{ $order->id }}</h3>
                </div>

                <div class="card-body">
                    {{ $order }}
                </div>
              </div>
          </section>
        </div>
    </section>
</div>
@endsection
