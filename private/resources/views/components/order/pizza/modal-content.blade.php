
@php
    $flavors = [];

    foreach ($size->flavors as $flavorPrice) {
        array_push($flavors, $flavorPrice->flavor->label);
    }
@endphp

<div class="">
    <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close">
        <span></span>
        <span></span>
      </button>
</div>
<form action="{{ route("tenant-front.franchise.cart.pizza.add", [$franchise->tenant->url_prefix, $franchise->url_prefix]) }}" method="POST">
    @csrf
    <input type="hidden" name="pizza_size_id" value="{{ $size->id }}">

    <div class="modal-body">
        <div class="customize-meta">
            <h4 class="customize-title">{{ $size->name }} <span class="custom-primary">A partir de R$ {{ $size->price }}</span> </h4>
            <p>
                {{ $size->description }}
            </p>
            <p>{{ $size->slices }} fatias</p>
        </div>
        <div class="customize-variations">
            <div class="customize-size-wrapper">
                <h5>Quantidade de sabores máxima: {{ $size->max_flavors }} </h5>
                {{--
                <div class="customize-size active">
                1
                </div>
                <div class="customize-size">
                2
                </div>
                <div class="customize-size">
                3
                </div>
                --}}
            </div>
            <div class="row">
                <!-- Variation End -->
                <!-- Variation Start -->
                <div class="col-lg-4 col-12">
                <div class="customize-variation-wrapper">
                    <i class="flaticon-pizza-slice"></i>
                    <h5>Borda</h5>
                    @foreach ($size->borders as $borderPrice)
                        <div class="customize-variation-item" data-price="4.00">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="pizzaBorder[{{ $borderPrice->id }}]" name="pizza_border_id" class="custom-control-input" value="{{ $borderPrice->pizza_border_id }}">
                                <label class="custom-control-label" title="{{ $borderPrice->border->description }}" for="pizzaBorder[{{ $borderPrice->id }}]">{{ $borderPrice->border->name }}</label>
                            </div>
                            <span>R$ {{ $borderPrice->price }}</span>

                        </div>
                    @endforeach
                    <div class="customize-variation-item" data-price="4.00">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="traditionalBorder" name="pizza_border_id" value="" checked class="custom-control-input">
                            <label class="custom-control-label" title="Borda tradicional sem recheio especial" for="traditionalBorder">Tradicional</label>
                        </div>
                        <span>R$ 0,00</span>
                    </div>
                </div>
                </div>
                <!-- Variation End -->
                <!-- Variation Start -->
                @foreach ($flavors as $flavorLabel)
                <div class="col-lg-4 col-12">
                    <div class="customize-variation-wrapper">
                        <i class="flaticon-pizza-and-cutted-slice"></i>
                        <h5>{{ $flavorLabel->name }}</h5>
                        @foreach ($size->flavors as $flavorPrice)
                            @if($flavorPrice->flavor->label_id === $flavorLabel->id)
                                <div class="customize-variation-item" data-price="2.00">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="pizza_flavors_id[]" id="pizzaFlavor[{{ $flavorPrice->id }}]" value="{{ $flavorPrice->pizza_flavor_id }}">
                                        <label class="custom-control-label" for="pizzaFlavor[{{ $flavorPrice->id }}]">{{ $flavorPrice->flavor->name }}</label>
                                    </div>
                                    <span>R$ {{ $flavorPrice->price }}</span>
                                </div>
                                <p class="descriptionTaste">{{ $flavorPrice->flavor->description }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
                @endforeach

                <!-- Variation End -->
            </div>
            <textarea class='textAreaStyled' name="details" placeholder='Observações'></textarea>
        </div>
        <div class="customize-controls">
            <div class="qty">
                <span class="qty-subtract"><i class="fas fa-minus"></i></span>
                <input type="text" name="quantity" value="1">
                <span class="qty-add"><i class="fas fa-plus"></i></span>
            </div>
            <div class="customize-total" data-price="13.99">
                {{--
                Aq vc faz uns javascript brabo dae
                --}}
                <h5>Preço Total: <span class="final-price custom-primary"><span>R$</span> 13,99 </span> </h5>
            </div>
        </div>
        <button type="submit" class="btn-custom btn-block"> Adicionar ao carrinho</button>
    </div>
</form>
