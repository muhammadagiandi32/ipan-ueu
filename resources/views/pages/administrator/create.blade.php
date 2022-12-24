@extends('layouts.admin')

@section('content')
<div class="row gy-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::List Widget 3-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title fw-bolder text-dark">Todo</h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3">
                                    </rect>
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3">
                                    </rect>
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3">
                                    </rect>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                        data-kt-menu="true" style="">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a target name for future usage and reference"
                                    aria-label="Specify a target name for future usage and reference"></i></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Billing</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Statements</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                checked="checked" name="notifications">
                                            <!--end::Input-->
                                            <!--end::Label-->
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">Settings</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-8">
                    <!--begin::Bullet-->
                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                    <!--end::Bullet-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid mx-5">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Description-->
                    <div class="flex-grow-1">
                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Create FireStone Logo</a>
                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                    </div>
                    <!--end::Description-->
                    <span class="badge badge-light-success fs-8 fw-bolder">New</span>
                </div>
                <!--end:Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-8">
                    <!--begin::Bullet-->
                    <span class="bullet bullet-vertical h-40px bg-primary"></span>
                    <!--end::Bullet-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid mx-5">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Description-->
                    <div class="flex-grow-1">
                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Stakeholder Meeting</a>
                        <span class="text-muted fw-bold d-block">Due in 3 Days</span>
                    </div>
                    <!--end::Description-->
                    <span class="badge badge-light-primary fs-8 fw-bolder">New</span>
                </div>
                <!--end:Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-8">
                    <!--begin::Bullet-->
                    <span class="bullet bullet-vertical h-40px bg-warning"></span>
                    <!--end::Bullet-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid mx-5">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Description-->
                    <div class="flex-grow-1">
                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Scoping &amp;
                            Estimations</a>
                        <span class="text-muted fw-bold d-block">Due in 5 Days</span>
                    </div>
                    <!--end::Description-->
                    <span class="badge badge-light-warning fs-8 fw-bolder">New</span>
                </div>
                <!--end:Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-8">
                    <!--begin::Bullet-->
                    <span class="bullet bullet-vertical h-40px bg-primary"></span>
                    <!--end::Bullet-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid mx-5">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Description-->
                    <div class="flex-grow-1">
                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">KPI App Showcase</a>
                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                    </div>
                    <!--end::Description-->
                    <span class="badge badge-light-primary fs-8 fw-bolder">New</span>
                </div>
                <!--end:Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-8">
                    <!--begin::Bullet-->
                    <span class="bullet bullet-vertical h-40px bg-danger"></span>
                    <!--end::Bullet-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid mx-5">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Description-->
                    <div class="flex-grow-1">
                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Project Meeting</a>
                        <span class="text-muted fw-bold d-block">Due in 12 Days</span>
                    </div>
                    <!--end::Description-->
                    <span class="badge badge-light-danger fs-8 fw-bolder">New</span>
                </div>
                <!--end:Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center">
                    <!--begin::Bullet-->
                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                    <!--end::Bullet-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid mx-5">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Description-->
                    <div class="flex-grow-1">
                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Customers Update</a>
                        <span class="text-muted fw-bold d-block">Due in 1 week</span>
                    </div>
                    <!--end::Description-->
                    <span class="badge badge-light-success fs-8 fw-bolder">New</span>
                </div>
                <!--end:Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end:List Widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-8">
        <!--begin::Tables Widget 9-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Detail Siswa</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span>
                </h3>
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                    title="" data-bs-original-title="Click to add a user">
                    <a href="javascript:void(0)" id="createNew" class="btn btn-sm btn-light btn-active-primary"
                        data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                    transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->New Member
                    </a>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <form id="form_payment" method="POST" action="{{ url('/snaptoken') }}">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 data-table">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted">
                                    {{-- <th class="w-25px">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                data-kt-check="true" data-kt-check-target=".widget-9-check">
                                        </div>
                                    </th> --}}
                                    <th class="min-w-200px">Name</th>
                                    <th class="min-w-200px">NIS & Class </th>
                                    <th class="min-w-150px">Email & Number Phone</th>
                                    <th class="min-w-150px text-end">DOB</th>
                                    <th class="min-w-100px text-end">Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                {{-- @foreach ($data as $data)

                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input name="check[]" id="check" class="form-check-input widget-9-check"
                                                type="checkbox" value="{{ $data->total }}">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px me-5">
                                                <img src="/metronic8/demo1/assets/media/avatars/300-14.jpg" alt="">
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{
                                                    $data->nis }}</a>
                                                <span class="text-muted fw-bold text-muted d-block fs-7">{{ $data->class
                                                    }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $data->email
                                            }}</p>
                                        <span class="text-muted fw-bold text-muted d-block fs-7">{{ $data->no_phone
                                            }}</span>
                                        <input type="hidden" name="email[]" value="{{ $data->email }}">
                                        <input type="hidden" name="no_phone[]" value="{{ $data->no_phone }}">
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column w-100 me-2">
                                            <p class="text-dark fw-bolder text-hover-primary d-block fs-6 text-end">Rp.
                                                {{ number_format($data->total, 0) }}</p>
                                            <span class="text-muted fw-bold text-muted d-block fs-7 text-end">{{
                                                $data->month_bill }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                            fill="currentColor"></path>
                                                        <path opacity="0.3"
                                                            d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                            fill="currentColor"></path>
                                                        <path opacity="0.5"
                                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                            fill="currentColor"></path>
                                                        <path opacity="0.5"
                                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                        {{-- <button type="submit" class="btn btn-primary btn-sm mb-5 text-end" id="pay">Pay
                            Now</button> --}}
                    </form>
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->
    </div>
    <!--end::Col-->
</div>

<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="dataForm" name="dataForm" class="form-horizontal">
                    <input type="hidden" name="ItemId" id="ItemId">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Item Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="ItemName" name="ItemName"
                                placeholder="Enter Uom" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Item Group</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control select" id="ItemGroup" name="ItemGroup"
                                placeholder="Enter Uom" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Uom</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control select" id="UomId" name="UomId"
                                placeholder="Enter Uom" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Type Item</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control select" id="TypeItem" name="TypeItem"
                                placeholder="Enter Uom" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10 mt-3">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--
<script>
    $(document).ready(function(){
        $('form').on('submit', function(e){
            e.preventDefault();

            var selected_checkboxes = new Array();
            //add each selected checkbox value to the array

            $("#check input[type=checkbox]:checked").each(function () {
                var a =  selected_checkboxes.push(this.value);
                console.log(a);
            });
        })
    });
</script> --}}
@endsection
@section('js')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
</script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
    integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
    integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
<script type="text/javascript">
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('bill.index') }}",
            
            columns: [
                
                {data: 'name' , name:'user.name' },
                {data: 'nis' , name:'nis'  },
                {data: 'email' , name:'user.email'  },
                {data: 'dob' , name:'dob'  },

                // {data: 'user', name:'user.email'},
                // {data: 'user', name:'user.email'},
                // {data: 'user', name:'user.email'},
                // {data: 'TypeItems',   name:'TypeItems.TypeName'},
                // {data: 'Users',       name:'Users.name'},
                {data: 'action',     orderable: false, searchable: false},
            ]
        });
        console.log(table);
        $('#createNew').click(function () {
        //   console.log('kontol')
            $('#saveBtn').html("Submit");
            $('#ItemId').val('');
            $('#dataForm').trigger("reset");
            $('#modelHeading').html("Create New Master Item");
            $('#ajaxModel').modal('show');
        });

        $('body').on('click', '.editData', function () {
        var ItemsId = $(this).data('id');
        $.get("{{ route('bill.index') }}" +'/' + ItemsId +'/edit', function (data) {
            // console.log(data);
            $('#modelHeading').html("Edit Items");
            $('#saveBtn').html("Submit");
            $('#ajaxModel').modal('show');
            $('#ItemId').val(data.ItemId);
            $('#ItemName').val(data.ItemName);
            $('#ItemGroup').val(data.item_groups.ItemGroupDescriptions);
            $('#UomId').val(data.uoms.UomName);
            $('#TypeItem').val(data.type_items.TypeName);
        })
    });

        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Save');
        
            $.ajax({
            data: $('#dataForm').serialize(),
            url: "{{ route('bill.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                if(data.status == 200){
                    $('#dataForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();
                    // alert('Data saved successfully');
                    Swal.fire(
                        'Succes',
                        'Your Data Hasben Created !!',
                        'success'
                    );
                }
            
            },
            error: function (data) {
                console.log('Error:', data);
                $('#saveBtn').html('Save Changes');
                Swal.fire(
                    'Filed is Reuired',
                    'That thing is still around?',
                    'error'
                );
            }
        });
        });
        
        $('body').on('click', '.deleteData', function () {
        
            var SiteId = $(this).data("id");
            // confirm("Are You sure want to delete !");
            Swal.fire({
                title: 'Do you want to Delete?',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('bill.store') }}"+'/'+SiteId,
                        success: function (data) {
                            table.draw();
                            Swal.fire(
                                'Succes',
                                'Your Data Hasben Delete !!',
                                'success'
                            );
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                }
            });
        });
        var route = "/items-select";
        $('#ItemGroup').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    ItemGroup: query
                }, function (data) {
                    return process(data);
                    // console.log(data);
                });
            }
        });
        
        $('#UomId').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    UomId: query
                }, function (data) {
                    return process(data);
                    // console.log(data);
                });
            }
        });
        
        $('#TypeItem').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    TypeItem: query
                }, function (data) {
                    return process(data);
                    // console.log(data);
                });
            }
        });
});
</script>
@endsection