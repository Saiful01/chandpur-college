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
                Writeup <small>Table</small>


                <button type="button" class="btn btn-alt-primary float-end" data-bs-toggle="modal"
                        data-bs-target="#modalCreate">
                    <i class="fa fa-plus"></i> New
                </button>
                @include('admin.category.create')


            </h3>
        </div>

        <div class="block-content block-content-full">

            <div class="row">

                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons dataTable no-footer"
                       id="DataTables_Table_1">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>name</th>
                        <th>course</th>
                        <th>subject</th>
                        <th>batch</th>
                        <th>email</th>
                        <th>mobile</th>
                        <th>Image</th>
                        <th>passport</th>

                        <th>writeup</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i = 1 ?>
                    @foreach($data as $item)
                        <tr>
                            <td class="text-center">{{$i++}}</td>
                            <td class="font-w600">{{$item->name}}</td>
                            <td class="font-w600">{{$item->course}}</td>
                            <td class="font-w600">{{$item->subject}}</td>
                            <td class="font-w600">{{$item->batch}}</td>
                            <td class="font-w600">{{$item->email}}</td>
                            <td class="font-w600">{{$item->mobile}}</td>


                            <td>
                                @if($item->pictures!=null)

                                        <?php
                                        $pictures = json_decode($item->pictures, true);

                                        ?>
                                    @foreach($pictures as $picture)
                                        <img src="{{$picture}}" alt="" width="100px">
                                    @endforeach

                                @endif
                            </td>
                            <td class="font-w600">
                                @if($item->passport!=null)

                                    <a href="{{$item->passport}}" download="">Download</a>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal{{$item->id}}">Details
                                </button>

                                <div class="modal" id="modal{{$item->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="modal{{$item->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="block block-rounded shadow-none mb-0">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Writeup</h3>
                                                    <div class="block-options">
                                                        <button type="button" class="btn-block-option"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="block-content fs-sm">

                                                    {!! $item->writeup !!}
                                                </div>
                                                <div
                                                    class="block-content block-content-full block-content-sm text-end border-top">
                                                    <button type="button" class="btn btn-alt-secondary"
                                                            data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-alt-primary"
                                                            data-bs-dismiss="modal">
                                                        Done
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>

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
