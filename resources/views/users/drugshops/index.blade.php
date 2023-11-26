@extends('admin.layouts.app')
@section('title', 'Drugs')

@section('css')

@endsection

@section('user.drugs.index')
active
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-md-flex d-sm-block">
                    <div class="form-group d-flex mb-0">
                        <h5>Drugs</h5>
                    </div>
                    <div class="flex-grow-1 text-end">
                        <a class="btn btn-primary" href="{{ route('user.drugs.create') }}"> 
                            Add New
                        </a>
                    </div>
                </div>
            </div> 
            <div class="card-body">
                <div class="table-responsive table-hover">
                    <table class="table" id="basic-1">
                        <thead>
                            <tr class="border-bottom-primary">
                                <th scope="col">Id</th>
                                <th scope="col">SKU</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Generic</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Expire date</th>
                                <th scope="col">District</th>
                                <th scope="col">Address</th>
                                {{-- <th scope="col">Status</th> --}}
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            @foreach ($drugs as $drug )
                                <tr>
    
                                    <td scope="row">
                                        {{ $drug->id }}
                                    </td>

                                    <td scope="row">
                                        {{ $drug->sku }}
                                    </td>
    
                                    <td>
                                        @if ($drug->photo)
                                            <img src="{{ asset($drug->photo) }}" alt="avater" width="50px" height="50px">
                                        @else
                                            <span class="text-danger" >N/A</span>
                                        @endif
                                    </td>
                                        
                                    <td>
                                       {{ $drug->name }}
                                    </td>
                                    
                                    <td>
                                        {{ $drug->generic }}
                                    </td>
    
                                    <td>
                                        {{ $drug->brand }}
                                    </td>
    
                                    <td>
                                        {{ $drug->quantity }}
                                    </td>
    
                                    <td>
                                        {{ \Carbon\Carbon::parse($drug->exp_date)->format('d-m-Y') }}
                                    </td>

                                    <td>
                                        @if ($drug->district)
                                            {{ $drug->district->name }}
                                        @endif
                                    </td>

                                    <td>
                                        {{ $drug->address }}
                                    </td>

                                    {{-- <td>
                                        @if ($drug->status == 0)
                                            <span class="badge badge-danger">Inactive</span>
                                        @else
                                            <span class="badge badge-success">Active</span>
                                            
                                        @endif
                                    </td> --}}
    
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#order_{{ $drug->id }}">Place Order</button>
                                        </div>
                                    </td>
                                </tr>
    
                                <div class="modal fade" id="order_{{ $drug->id }}" tabindex="-1" role="dialog" aria-labelledby="qnt_update" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Order</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('admin.drug-shops.order', $drug->id) }}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="form-label" for="quantity">Quantity <span class="text-danger">*</span></label>
                                                        <input type="number" class="form-control" name="quantity" value="{{ $drug->quantity }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" type="submit">Request Order</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- <div class="card-body">
            {{ $drugs->render() }}
        </div> --}}


    </div>
</div>
@endsection


@section('js')

<script src="{{ asset('admin_dashboard/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin_dashboard/assets/js/datatable/datatables/datatable.custom.js') }}"></script>

<script>
    $(document).ready(function () {
        $('.sweet-6').click(function (e) { 
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-danger',
                    cancelButton: 'btn btn-primary'
                },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {

                    var success = true;
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    
                    $.ajax({
                        type: "delete",
                        url: "{{ route('user.drugs.destroy',':id') }}".replace(':id', $(this).attr('data-id')),
                        dataType: "dataType",

                        statusCode: {
                            202: function (response) {
                                // Handle the 202 status code as success
                                swalWithBootstrapButtons.fire({

                                    title: 'Accepted!',
                                    text: JSON.parse(response.responseText).success || 'The request has been accepted for processing.',
                                    icon: 'success',
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                    
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            },
                        },

                        error: function (response) {
                            
                            swalWithBootstrapButtons.fire(
                                'Error!',
                                JSON.parse(response.responseText).error || 'Something went wrong!',
                                'error'
                            );
                        }
                    });
                } 
            })
                        
        });
    });
</script>

@endsection
