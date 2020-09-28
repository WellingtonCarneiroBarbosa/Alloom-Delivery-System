@extends("layouts.admin-lte.app")

@section("title")
    Início
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
              <li class="breadcrumb-item active">Pendentes</li>
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
                  <h3 class="card-title">Pedidos Pendentes - {{ $quantityPendingOrders }}</h3>

                  <h3 class="card-title float-right">Pedidos Em Andamento - {{ $quantityInProgressOrders }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Endereço</th>
                      <th>Sub-Total</th>
                      <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->receiver_name }}</td>
                            <td>
                                @if(! $order->pick_up_at_the_counter)
                                {{ $order->receiver_address }}
                                @else
                                Pedido para retirada
                                @endif
                            </td>
                            <td>R$ {{ $order->totalPrice }}</td>
                            <td>Marcar como em andamento | Cancelar</td>
                        </tr>
                        @endforeach
                    <tr>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Sub-Total</th>
                        <th>Ação</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </section>
          <!-- /.MAIN col -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
@endsection
