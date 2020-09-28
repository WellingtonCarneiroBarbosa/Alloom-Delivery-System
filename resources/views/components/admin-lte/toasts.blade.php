<script src="{{ asset('admin-lte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

@if ($errors->any())
<script>
    $(document).ready(function () {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "@foreach ($errors->all() as $error){{ $error }}@endforeach",
            footer: '<a href>Por que estou vendo isso?</a>'
        })
    });
</script>
@endif

@if(session("success"))
<script>
    $(document).ready(function () {
        Swal.fire({
            icon: 'success',
            title: 'Sucesso!',
            text: '{{ session('success') }}'
        })
    });
</script>
@endif

@if(session("error"))
<script>
    $(document).ready(function () {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session("error") }}',
            footer: '<a href>Por que estou vendo isso?</a>'
        })
    });
</script>
@endif

@if(session("warning"))
<script>
   $(document).ready(function () {
        Swal.fire({
            icon: 'warning',
            title: 'Atenção!',
            text: '{{ session("warning") }}',
            footer: '<a href>Por que estou vendo isso?</a>'
        })
    });
</script>
@endif

