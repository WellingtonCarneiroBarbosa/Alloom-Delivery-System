@if ($errors->any())
<script>
    $(document).ready(function () {
        $(document).Toasts('create', {
            class: 'bg-danger',
            title: 'Oops',
            body: "<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>"
        });
    });
</script>
@endif

@if(session("success"))
<script>
    $(document).ready(function () {
        $(document).Toasts('create', {
            class: 'bg-success',
            title: 'Sucesso',
            body: "{{ session('success') }}"
        });
    });
</script>
@endif

@if(session("error"))
<script>
    $(document).ready(function () {
        $(document).Toasts('create', {
            class: 'bg-danger',
            title: 'Oops',
            body: "{{ session('error') }}"
        });
    });
</script>
@endif

@if(session("warning"))
<script>
   $(document).ready(function () {
        $(document).Toasts('create', {
            class: 'bg-warning',
            title: 'Cuidado',
            body: "{{ session('warning') }}"
        });
    });
</script>
@endif

