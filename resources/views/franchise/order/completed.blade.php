@extends("layouts.admin-lte.app")

@section("title")
    Pedidos Concluídos
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
              <li class="breadcrumb-item active">Concluídos</li>
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
                  <h3 class="card-title">Pedidos Concluídos - {{ $quantityCompletedOrders }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if($quantityCompletedOrders >= 1)
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Sub-Total</th>
                            <th>Pedido Realizado Em</th>
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
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        @if(! $order->pick_up_at_the_counter)
                                        <form action="{{ route("franchise.dash.order.change-status.delivering", [$order->id]) }}" method="post">
                                            @csrf
                                            @method("PATCH")

                                            <button class="link" type="submit">Marcar como à caminho</button>
                                        </form>
                                        @else
                                        <form action="{{ route("franchise.dash.order.change-status.delivered", [$order->id]) }}" method="post">
                                            @csrf
                                            @method("PATCH")

                                            <button class="link" type="submit">Marcar como entregue</button>
                                        </form>
                                        @endif
                                    | <a target="blank" href="{{ route("franchise.dash.order.show", [$order->id]) }}">Visualizar</a></td>
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
                                <th>Pedido Realizado Em</th>
                                <th>Ação</th>
                            </tr>
                            </tfoot>

                            {{ $orders->links() }}
                        </table>
                    @else
                    <h3>Nenhum pedido concluído no momento.</h3>
                    @endif
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

@section('scripts-content')
{{-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('f5fb5c17616fc23275f4', {
      cluster: 'mt1'
    });

    let channelName = 'franchise-channel-' + "{{ auth()->user()->franchise->id }}";
    let eventName = 'new-order-' + "{{ auth()->user()->franchise->id }}";

    var channel = pusher.subscribe(channelName);
    channel.bind(eventName, function(data) {
        //TODO: contatenar pedido na lista de pedidos pendentes
        alert(JSON.stringify(data));
    });
  </script> --}}
@endsection
