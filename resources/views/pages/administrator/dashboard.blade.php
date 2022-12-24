@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
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
            ajax: "{{ route('student.index') }}",
            columns: [
                
                {data: 'ItemName'},
                {data: 'ItemGroups',  name:'ItemGroups.ItemGroupDescriptions'},
                {data: 'Uoms',        name:'Uoms.UomName'},
                {data: 'TypeItems',   name:'TypeItems.TypeName'},
                {data: 'Users',       name:'Users.name'},
                {data: 'action',     orderable: false, searchable: false},
            ]
        });
        // console.log(table);
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
        $.get("{{ route('student.index') }}" +'/' + ItemsId +'/edit', function (data) {
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
            url: "{{ route('student.store') }}",
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
                        url: "{{ route('student.store') }}"+'/'+SiteId,
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