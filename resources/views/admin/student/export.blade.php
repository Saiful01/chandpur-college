@extends("layouts.admin")
@section('title', 'Admin Panel')
@section("content")

    @push('header-scripts')
        @once
            <link rel="stylesheet" href="/admin-assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
            <link rel="stylesheet"
                  href="/admin-assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
            <link rel="stylesheet"
                  href="/admin-assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
        @endonce
    @endpush


    {{--    <h2 class="content-heading">Writeup Table</h2>--}}


    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Guest Info Table <small> Export</small>
            </h3>
        </div>

        <div class="block-content block-content-full">

            <div class="row">

                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons dataTable no-footer"
                       id="DataTables_Table_1">
                    <thead>
                    <tr>

                        <th>Reg No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Guest Name</th>
                        <th>Relation</th>
                        <th>Age</th>
                        <th>gender</th>
                        {{--<th>t-shirt size</th>--}}
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i = 1 ?>
                    @foreach($result as $item)
                        <tr>

                            <td>{{ $item->registration_id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->guest_name }}</td>
                            <td>{{ $item->relation }}</td>
                            <td>{{ $item->age }}</td>
                            <td>{{ $item->gender }}</td>
                           {{-- <td>{{ $item->tshirt_size }}</td>--}}
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>


    </div>





    @push('footer-scripts')
        @once
            <!--Start JS for This Page-->
            <script src="/admin-assets/js/lib/jquery.min.js"></script>
            <script src="/admin-assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="/admin-assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
            <script src="/admin-assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
            <script src="/admin-assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
            <script src="/admin-assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
            <script src="/admin-assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
            <script src="/admin-assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
            <script src="/admin-assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
            <script src="/admin-assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
            <script src="/admin-assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
            <script src="/admin-assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>
            <script src="/admin-assets/js/pages/be_tables_datatables.min.js"></script>
            <!--End JS for This Page-->

        @endonce
    @endpush

@endsection
