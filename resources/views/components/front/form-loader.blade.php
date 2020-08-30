@section('head-content')
    <link rel="stylesheet" href="{{ asset('css/form-loader.css') }}">
@endsection

@section('script-content')
    <script>
        /**
         *  Loader script
         *
         */
        $(document).ready(function() {
            /**
             * If has any submit
             *
             */
            $(".form-loader").on("submit", function() {
                /**
                 * upload the page loader
                 *
                 */
                $("#pageloader").fadeIn();

                /**
                 * block more submits
                 *
                 */
                $("button[type='submit']").attr('disabled', true)
            });
        });
    </script>
@endsection

<div id="pageloader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
</div>
