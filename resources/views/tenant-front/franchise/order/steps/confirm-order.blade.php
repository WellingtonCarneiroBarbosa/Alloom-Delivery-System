<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Confirme os detalhes de seu pedido antes de prosseguir</h1>
    <strong>Caso não confirmado em 5 minutos, o pedido será automaticamente cancelado</strong>

    <br>

    @if($order->receiver_address)

    <span>Endereço de Entrega: <strong>{{ $order->receiver_address }}</strong></span>

    <br>

    <span>Taxa de Entrega: <strong>{{ isset($order->delivery_fee) ? "R$ " . $order->delivery_fee : "Entrega Gratuita" }}</strong></span>

    @else
    <br>

    <span>Retirar pedido em <strong>{{ $franchise->address }}</strong></span>
    @endif

    <br>

    <span>Sub total: {{ $order->totalPrice }}</span>

    <form action="{{ route("tenant-front.franchise.order.store-order-confirmation", [
        $franchise->tenant->url_prefix, $franchise->url_prefix, $order->id
    ]) }}" method="POST">

        @csrf
        <button>Cancelar Pedido</button>
        <button>Editar Pedido</button>
        <button type="submit">Confirmar</button>
    </form>


</body>
</html>
