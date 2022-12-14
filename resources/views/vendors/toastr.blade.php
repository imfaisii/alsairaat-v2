@push('extended-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
@endpush

@push('extended-js')
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script>
        function makeToastr(type, heading = "Notification", message) {
            toastr[type](
                message,
                heading, {
                    closeButton: true,
                    tapToDismiss: false,
                    progressBar: true,
                }
            );
        }
    </script>
@endpush
