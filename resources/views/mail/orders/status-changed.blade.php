@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => route("tenant-front.franchise.index", [
            $franchise->tenant->url_prefix, $franchise->url_prefix
        ])])
            {{ $franchise->tenant->corporative_name }} <br> {{ $franchise->name }}
        @endcomponent
    @endslot

    {{-- Body --}}
    <h1>Olá!</h1>
    <p>{{ $message }}</p>
    @component("mail::button", ["url" => route("tenant-front.franchise.order.details", [
        $franchise->tenant->url_prefix, $franchise->url_prefix, $order->id
    ])])
        Visualizar Detalhes
    @endcomponent
    <p>Agradecemos por realizar mais um pedido com a gente!</p>
    <div><strong>Abraços,</strong><br>{{ $franchise->tenant->corporative_name . ", " . $franchise->name }}</div>

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ $franchise->tenant->corporative_name }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
