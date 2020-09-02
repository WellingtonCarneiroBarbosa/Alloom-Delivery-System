@if ($errors->any())
    <div class="alert alert-warning alert-dismissible" role="alert">
        <span class="alert-icon"><i class="fas fa-warning"></i></span>
        <span class="alert-text"><strong>Ops...</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <span class="alert-icon"><i class="fas fa-thumbs-down"></i></span>
    <span class="alert-text"><strong>Ops...</strong><span class="ml-2">{{ session('error') }}</span></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <span class="alert-icon"><i class="fas fa-thumbs-up"></i></span>
    <span class="alert-text"><strong>Sucesso!</strong><span class="ml-2">{{ session('success') }}</span></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


