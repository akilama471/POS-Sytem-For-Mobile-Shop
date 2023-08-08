<x-app-layout>
    <x-slot:title>
        {{$title}} - Siriwardana Mobile
        </x-slot>

        <x-slot:styles>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
            <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.css') }}">
            </x-slot>

            <x-slot:sectiontitle>
                {{$title}}
                </x-slot>

                <div class="row">
                    <div class="col-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Find Invoice</h3>
                            </div>
                            <form>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="invoiceNumberInput">Invoice Number</label>
                                        <input type="text" class="form-control" id="invoiceNumberInput" placeholder="Enter Invoice Number">
                                    </div>

                                    <div class="form-group">
                                        <label for="customerNameInput">Customer Name</label>
                                        <select id="customerNameInput" class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="ImeiNumberInput">IMEI Number</label>
                                        <input type="text" class="form-control" id="ImeiNumberInput" placeholder="Enter IMEI Number">
                                    </div>

                                    <div class="form-group">
                                        <label for="categoryNameInput">Product Category</label>
                                        <select id="categoryNameInput" class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="productNameInput">Product</label>
                                        <select id="productNameInput" class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="itemCodeInput">Item Code</label>
                                        <input type="text" class="form-control" id="itemCodeInput" placeholder="Enter Item Code">
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Date From:</label>
                                                <div class="input-group date" id="invoiceFromDateCtrl" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#invoiceFromDateCtrl" />
                                                    <div class="input-group-append" data-target="#invoiceFromDateCtrl" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Date To:</label>
                                                <div class="input-group date" id="invoiceToDateCtrl" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#invoiceToDateCtrl" />
                                                    <div class="input-group-append" data-target="#invoiceToDateCtrl" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Finde Invoice</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-8">
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <label>INVOICE ID : SW2306000139</label>
                                        </br>
                                        <label>DATE : 2023-01-01</label>
                                        </br>
                                        <label>TOTAL AMOUNT : Rs.5000.00</label>
                                        </br>
                                        <label>SALE PERSON : MASHUSANKA</label>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <label>CASHIER : AKILA</label>
                                            </br>
                                            <label>CUSTOMER : CASH CUSTOMER</label>
                                            </br>
                                            <label></label>
                                            </br>
                                            <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse">SHOW DETAILS</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body"></div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                </div>

                <x-slot:scripts>
                    <script src="{{asset('assets/plugins/jquery/jquery.js')}}"></script>
                    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
                    <script src="{{asset('assets/plugins/moment/moment.min.js') }}"></script>
                    <script src="{{asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
                    <script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
                    <script src="{{asset('assets/dist/js/adminlte.js')}}"></script>

                    <script>
                        $(function() {
                            $('#customerNameInput').select2();
                            $('#categoryNameInput').select2();
                            $('#productNameInput').select2();

                            $('#invoiceFromDateCtrl').datetimepicker({
                                format: 'L'
                            });

                            $('#invoiceToDateCtrl').datetimepicker({
                                format: 'L'
                            });

                        });


                        $("li.nav-item").find("a").removeClass("active");
                        $("#{{$slug}}").addClass("active");
                    </script>
                    </x-slot>

</x-app-layout>