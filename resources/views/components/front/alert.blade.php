@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ops..</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
