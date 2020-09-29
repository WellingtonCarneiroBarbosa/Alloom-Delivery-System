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
                  <!--Arrumando a visualização de dados para o usuario-->
                  <h6>

                    <strong>id:</strong> {{ $order->id }}<br>
                    <strong>Nome:</strong> {{ $order->receiver_name }}<br>
                    <strong>Telefone:</strong> {{ $order->receiver_phone }}<br>
                    <strong>Email cadastrado:</strong> {{ $order->receiver_email }}<br>
                    <strong>Endereço do receptor:</strong> {{ $order->receiver_address }}<br>
                    <!--{{ $order->confirmed_by_receiver }}<br>-->
                    <strong>Chave de acesso:</strong> {{ $order->access_key }}<br>
                    <strong>Pegar no balcão:</strong> {{ $order->pick_up_at_the_counter }}<br>
                    <!--<strong>Status</strong> {{ $order->status }}<br>-->
                    <strong>Taxa de entrega:</strong> R$ {{  $order->delivery_fee }},00<br>
                    <strong>Quantidade total:</strong> {{ $order->totalQuantity }}<br>
                    <strong>Preço total: </strong> R$ {{ $order->totalPrice }},00<br>
                    <strong>Id de franquia:</strong> {{ $order->franchise_id }}<br>
                    <strong>Criado em:</strong> {{ $order->created_at }}<br>
                    <!--<strong>Atualizado em:</strong> {{ $order->update_at }}<br>
                    <strong>Pizzas:</strong> {{ $order->pizzas }}<br>
                    <!--<strong>Id do tamanho das pizzas:</strong> {{ $order->pizza_size_id }}<br>
                    <strong>Id da borda da pizza:</strong> {{ $order->pizza_border_id }}<br>
                    <strong>Id dos sabores da pizza:</strong> {{ $order->pizza_flavors_id }}<br>
                    <strong>Quantidade:</strong> {{ $order->quantity }}<br>
                    <strong>Detalhes:</strong> {{ $order->details }}<br>
                    <strong>Preço total:</strong> {{ $order->total_price }}<br>
                    <strong>Id do pedido:</strong> {{ $order->order_id }}<br>-->

                </h6>
                </div>
              </div>
          </section>
        </div>
    </section>
</div>
@endsection
