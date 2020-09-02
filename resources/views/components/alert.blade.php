@if ($errors->any())
    <div class="alert alert-warning" role="alert">
        <span class="alert-icon"><i class="fas fa-warning"></i></span>
        <span class="alert-text"><strong>Ops...</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </span>
    </div>
@endif

@if(session('error'))
<div class="alert alert-danger" role="alert">
    <span class="alert-icon"><i class="fas fa-thumbs-down"></i></span>
    <span class="alert-text"><strong>Ops...</strong><span class="ml-2">{{ session('error') }}</span></span>
</div>
@endif

@if(session('success'))
<div class="alert alert-success" role="alert">
    <span class="alert-icon"><i class="fas fa-thumbs-up"></i></span>
    <span class="alert-text"><strong>Sucesso!</strong><span class="ml-2">{{ session('success') }}</span></span>
</div>
@endif


