@extends("layouts.admin")
@section('title', 'Admin Panel')
@section("content")
    {{-- <style>
         div.dataTables_wrapper div.dataTables_paginate ul.pagination {

             display: none;
         }
     </style>--}}
    @push('header-scripts')
        @once
            <link rel="stylesheet" href="/admin-assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
            <link rel="stylesheet"
                  href="/admin-assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
            <link rel="stylesheet"
                  href="/admin-assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
        @endonce
    @endpush


    {{--    <h2 class="content-heading">DataTables Plugin</h2>--}}


    <div class="block block-rounded">


        <div class="block-header block-header-default">
            <h3 class="block-title">
                All Student <small>Table</small>

            </h3>
            <a href="/export-user" class="btn btn-danger">Export Students</a>
            <a href="/export-all-data" class="btn btn-info">Export Guest Data</a>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">

                        <form action="/payment-students" method="get">
                            <div class="row">

                                <div class="col-md-2">
                                    <input type="text" id="name" class="form-control" placeholder="Registration No"
                                           name="reg_no">
                                </div>
                                <div class="col-md-2">

                                    <input type="text" id="name" class="form-control" placeholder="Mobile Number"
                                           name="phone">

                                </div>
                                <div class="col-md-2">

                                    <input type="date" id="name" class="form-control" placeholder="Date"
                                           name="date">

                                </div>
                                <div class="col-md-2">

                                    <select class="form-select"
                                            name="program_name">

                                        <option value="">Program name: *</option>
                                        <option value="এইচএসসি">এইচএসসি</option>
                                        <option value="অনার্স">অনার্স</option>
                                        <option value="ডিগ্রি পাস">ডিগ্রি পাস</option>
                                        <option value="মাস্টর্স">মাস্টর্স</option>
                                    </select>

                                </div>

                                <div class="col-md-2">

                                    <input type="text" class="form-control" name="session"
                                           placeholder="সেশন: ">

                                </div>
                                <div class="col-md-2">

                                    <select class="form-select"
                                            name="passing_year">

                                        <option value="">পাশের সাল: *</option>
                                        <option value="২০২২">২০২২</option>
                                        <option value="২০২১">২০২১</option>
                                        <option value="২০২০">২০২০</option>
                                        <option value="২০১৯">২০১৯</option>
                                        <option value="২০১৮">২০১৮</option>
                                        <option value="২০১৭">২০১৭</option>
                                        <option value="২০১৬">২০১৬</option>
                                        <option value="২০১৫">২০১৫</option>
                                        <option value="২০১৪">২০১৪</option>
                                        <option value="২০১৩">২০১৩</option>
                                        <option value="২০১২">২০১২</option>
                                        <option value="২০১১">২০১১</option>
                                        <option value="২০১০">২০১০</option>
                                        <option value="২০০৯">২০০৯</option>
                                        <option value="২০০৮">২০০৮</option>
                                        <option value="২০০৭">২০০৭</option>
                                        <option value="২০০৬">২০০৬</option>
                                        <option value="২০০৫">২০০৫</option>
                                        <option value="২০০৪">২০০৪</option>
                                        <option value="২০০৩">২০০৩</option>
                                        <option value="২০০২">২০০২</option>
                                        <option value="২০০১">২০০১</option>
                                        <option value="২০০০">২০০০</option>
                                        <option value="১৯৯৯">১৯৯৯</option>
                                        <option value="১৯৯৮">১৯৯৮</option>
                                        <option value="১৯৯৭">১৯৯৭</option>
                                        <option value="১৯৯৬">১৯৯৬</option>
                                        <option value="১৯৯৫">১৯৯৫</option>
                                        <option value="৯৯৪">১৯৯৪</option>
                                        <option value="১৯৯৪">১৯৯৩</option>
                                        <option value="১৯৯২">১৯৯২</option>
                                        <option value="১৯৯১">১৯৯১</option>
                                        <option value="১৯৯০">১৯৯০</option>
                                        <option value="১৯৮৯">১৯৮৯</option>
                                        <option value="১৯৮৮">১৯৮৮</option>
                                        <option value="১৯৮৭">১৯৮৭</option>
                                        <option value="১৯৮৬">১৯৮৬</option>
                                        <option value="১৯৮৫">১৯৮৫</option>
                                        <option value="১৯৮৪">১৯৮৪</option>
                                        <option value="১৯৮৩">১৯৮৩</option>
                                        <option value="১৯৮২">১৯৮২</option>
                                        <option value="১৯৮১">১৯৮১</option>
                                        <option value="১৯৮০">১৯৮০</option>
                                        <option value="১৯৭৯">১৯৭৯</option>
                                        <option value="১৯৭৮">১৯৭৮</option>
                                        <option value="১৯৭৭">১৯৭৭</option>
                                        <option value="১৯৭৬">১৯৭৬</option>
                                        <option value="১৯৭৫">১৯৭৫</option>
                                        <option value="১৯৭৪">১৯৭৪</option>
                                        <option value="১৯৭৩">১৯৭৩</option>
                                        <option value="১৯৭২">১৯৭২</option>
                                        <option value="১৯৭১">১৯৭১</option>
                                        <option value="১৯৭০">১৯৭০</option>
                                        <option value="১৯৬৯">১৯৬৯</option>
                                        <option value="১৯৬৮">১৯৬৮</option>
                                        <option value="১৯৬৭">১৯৬৭</option>
                                        <option value="১৯৬৬">১৯৬৬</option>
                                        <option value="১৯৬৫">১৯৬৫</option>
                                        <option value="১৯৬৪">১৯৬৪</option>


                                    </select>

                                </div>

                                <div class="col-md-2 mt-2">
                                    <button type="submit" class="btn btn-success" id="edit-btn">Search</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="block-content block-content-full">

            <div class="row">

                <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table
                    class="table table-bordered table-striped table-responsive {{--table-vcenter js-dataTable-buttons dataTable no-footer--}}"
                    {{--id="DataTables_Table_1"--}}>
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Reg No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Details</th>
                        <th>Academic</th>
                        <th>Profession</th>
                        <th>Guest</th>
                        <th>Gift</th>
                        <th>Time</th>
                        <th>Payment</th>
                        <th class="d-none d-sm-table-cell">Payment Status</th>
                        <th class="d-none d-sm-table-cell">Invitation Letter</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php $i = 1 ?>
                    @foreach($result as $item)
                        <tr>
                            <td class="text-center">{{$i++}}</td>
                            <td class="font-w600">{{$item->registration_id}}
                                @if(count($item->payments)> 0)
                                    @foreach($item->payments as $payment)

                                        Tran ID: {{$payment->tran_id}}
                                        Tk: {{$payment->amount}}
                                    @endforeach
                                @endif<br>
                                Guest: {{count($item->guests)}}
                            </td>
                            <td class="font-w600">{{$item->name}} <br> <a href="{{$item->profile_pic}}" download="">Image
                                    Download</a></td>
                            <td class="font-w600">{{$item->phone}}</td>
                            <td class="font-w600">{{$item->email}}</td>
                            <td class="font-w600"><!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#DetailsModalLong{{$item->id}}">
                                    Details
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="DetailsModalLong{{$item->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="DetailsModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="DetailsModalLongTitle">Student Details</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-bordered table-striped table-vcenter">
                                                    <tr>
                                                        <th>Registration ID</th>
                                                        <td>{{$item->registration_id}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Name</th>
                                                        <td>{{$item->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Phone</th>
                                                        <td>{{$item->phone}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>{{$item->email}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td>{{$item->address}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Zila</th>
                                                        <td>{{$item->zila}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nationality</th>
                                                        <td>{{$item->nationality}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Gender</th>
                                                        <td>{{$item->gender}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Father name</th>
                                                        <td>{{$item->father_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Mother name</th>
                                                        <td>{{$item->mother_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>NID No</th>
                                                        <td>{{$item->nid_no}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Education Year</th>
                                                        <td>{{$item->education_year}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>T-shirt size</th>
                                                        <td>{{$item->t_shirt_size}}</td>
                                                    </tr>

                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="font-w600"><!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#QualificationModalLong{{$item->id}}">
                                    Academic
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="QualificationModalLong{{$item->id}}" tabindex="-1"
                                     role="dialog"
                                     aria-labelledby="QualificationModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="QualificationModalLongTitle">Academic
                                                    Qualification</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @if($item->academicQualification != null)
                                                    <table class="table table-bordered table-striped table-vcenter">
                                                        <tr>
                                                            <th>কোর্সের নাম</th>
                                                            <td>{{$item->academicQualification->program_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th> বিভাগ / বিষয়</th>
                                                            <td>{{$item->academicQualification->department}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>সেশন</th>
                                                            <td>{{$item->academicQualification->session}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>পাশের সাল</th>
                                                            <td>{{$item->academicQualification->passing_year}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>রোল নং</th>
                                                            <td>{{$item->academicQualification->roll_no}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th> রেজিস্ট্রেশন নং:</th>
                                                            <td>{{$item->academicQualification->reg_no}}</td>
                                                        </tr>


                                                    </table>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="font-w600"><!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#professionModalLong{{$item->id}}">
                                    Profession
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="professionModalLong{{$item->id}}" tabindex="-1"
                                     role="dialog"
                                     aria-labelledby="professionModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="QualificationModalLongTitle">Profession</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @if($item->profession != null)
                                                    <table class="table table-bordered table-striped table-vcenter">
                                                        <tr>
                                                            <th>পেশা</th>
                                                            <td>{{$item->profession->profession}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th> পদবি</th>
                                                            <td>{{$item->profession->designation}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>প্রতিষ্ঠানের নাম</th>
                                                            <td>{{$item->profession->institute_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>অন্যান্য ক্ষেত্রে ইন্ডাস্ট্রি</th>
                                                            <td>{{$item->profession->industry}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>কর্মক্ষেত্রের ফোন</th>
                                                            <td>{{$item->profession->office_phone}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th> কর্মক্ষেত্রের ঠিকানা</th>
                                                            <td>{{$item->profession->office_address}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th> কর্মক্ষেত্রের ইমেইল</th>
                                                            <td>{{$item->profession->office_email}}</td>
                                                        </tr>


                                                    </table>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="font-w600"><!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#guestModalLong{{$item->id}}">
                                    Guest
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="guestModalLong{{$item->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="guestModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="QualificationModalLongTitle">Guest</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @if(count($item->guests)>0)
                                                    @foreach($item->guests as $guest)

                                                        <table class="table table-bordered table-striped table-vcenter">
                                                            <tr>
                                                                <th>পারিবারিক সদস্যের নাম</th>
                                                                <td>{{$guest->guest_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th> সম্পর্ক</th>
                                                                <td>{{$guest->relation}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>বয়স</th>
                                                                <td>{{$guest->age}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>লিঙ্গ</th>
                                                                <td>{{$guest->gender}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Guest Type</th>
                                                                <td>

                                                                    @if($guest->guest_type == 1)
                                                                        Extra
                                                                    @else
                                                                        Non Extra
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Guest Verified</th>
                                                                <td>

                                                                    @if($guest->is_verified == 1)
                                                                        Yes
                                                                    @else
                                                                        No
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    @endforeach
                                                @else
                                                    <span class="text-danger">No Guest</span>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="font-w600"><!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#giftModalLong{{$item->id}}">
                                    Gift
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="giftModalLong{{$item->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="giftModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="QualificationModalLongTitle">Gift</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @if($item->gift != null)
                                                    <table class="table table-bordered table-striped table-vcenter">
                                                        <tr>
                                                            <th>ডেলিভারির মাধ্যম</th>
                                                            <td>{{$item->gift->delivery_type}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Address</th>
                                                            <td>
                                                                @if($item->gift->address != null)
                                                                    {{$item->gift->address}}
                                                                @else
                                                                    Venue
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        {{-- @if($item->gift->delivery_type == "বর্তমান ঠিকানা")
                                                             <tr>
                                                                 <th> ঠিকানা</th>
                                                                 <td>{{$item->gift->relation}}</td>
                                                             </tr>
                                                         @endif--}}

                                                    </table>
                                                @endif

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="font-w600"><!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#paymentModalLong{{$item->id}}">
                                    Payment
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="paymentModalLong{{$item->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="giftModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="QualificationModalLongTitle">Payment</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @if(count($item->payments)>0)
                                                    @foreach($item->payments as $payment)

                                                        <table class="table table-bordered table-striped table-vcenter">
                                                            <tr>
                                                                <th>Transaction Id</th>
                                                                <td>{{$payment->tran_id}}</td>
                                                            </tr>

                                                            <tr>
                                                                <th> TK</th>
                                                                <td>{{$payment->amount}}</td>
                                                            </tr>


                                                        </table>
                                                    @endforeach
                                                @else
                                                    <span class="text-danger">Not Payment </span>
                                                @endif

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>


                            <td class="d-none d-sm-table-cell">
                                {{getDateFormat($item->created_at)}}

                            </td>

                            <td class="d-none d-sm-table-cell">

                                @if($item->is_payment==1)
                                    <span class="badge bg-primary">Yes  </span>
                                @else
                                    <span class="badge bg-danger">No  </span>
                                @endif

                            </td>

                            <td>

                                <!-- <img src="{{$item->profile_pic}}"  class="img-thumbnail" width="75" /> -->

                                <a href="/pdf/{{$item->registration_id}}.pdf" download>Download</a>
                                @if(file_exists( public_path().'/pdf/guest_'.$item->registration_id.'.pdf' ))
                                    Extra Guest
                                    <a href="/pdf/guest_{{$item->registration_id}}.pdf" download>Download</a>
                                @endif


                                <a href="/admin-student-edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                                <a href="/admin-student-new-ticket/{{$item->id}}" class="btn btn-danger mt-1"
                                   onclick="return confirm('Are you sure you want to generate new Ticket?');">New Ticket
                                    Download</a>

                            </td>

                        </tr>
                    @endforeach


                    <div class="nav">
                        {{ $result->appends(request()->query())->links("pagination::bootstrap-4") }}
                    </div>

                    </tbody>
                </table>
            </div>
        </div>


    </div>





    @push('footer-scripts')
        @once
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
