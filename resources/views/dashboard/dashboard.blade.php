<x-app-layout>
    <x-slot:title>
        Dashboard - Siriwardana Mobile
        </x-slot>

        <x-slot:styles>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
            <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.css') }}">
            </x-slot>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            Start creating your amazing application!
                        </div>
                        <div class="card-footer">
                            Footer
                        </div>
                    </div>
                </div>
            </div>

            <x-slot:scripts>
                <script src="{{asset('assets/plugins/jquery/jquery.js')}}"></script>
                <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
                <script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
                </x-slot>
</x-app-layout>