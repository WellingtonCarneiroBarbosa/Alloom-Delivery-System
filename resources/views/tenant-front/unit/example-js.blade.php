@extends("layouts.app")

@section('scripts-content')
    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function (){
            let url = "{{ route('tenant-front.unit.api.flavors', [$unit->tenant->url_prefix, $unit->unit_url_prefix]) }}";

            $.ajax({
                url: url,
                cache: false,
                success: function(response, code){
                    console.log(response, code);
                },

                error: function (e) {
                    alert("something went wrong. Open console debugger");
                    console.log(e);
                }
            });

        });
    </script>
@endsection
