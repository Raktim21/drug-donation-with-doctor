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
                        <h5>My Orders</h5>
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
                                {{-- <th scope="col">Image</th> --}}
                                <th scope="col">Name</th>
                                {{-- <th scope="col">Generic</th>
                                <th scope="col">Brand</th> --}}
                                <th scope="col">Quantity</th>
                                <th scope="col">Expire date</th>
                                <th scope="col">District</th>
                                <th scope="col">Address</th>
                                <th scope="col">Seller name</th>
                                <th scope="col">Seller Phone</th>
                                {{-- <th scope="col">Status</th> --}}
                                {{-- <th scope="col">Status</th> --}}
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            @foreach ($orders as $order )
                                <tr>
    
                                    <td scope="row">
                                        {{ $order->id }}
                                    </td>

                                    <td scope="row">
                                        {{ $order->drug->sku }}
                                    </td>
    
                                    {{-- <td>
                                        @if ($order->drug->photo)
                                            <img src="{{ asset($order->drug->photo) }}" alt="avater" width="50px" height="50px">
                                        @else
                                            <span class="text-danger" >N/A</span>
                                        @endif
                                    </td> --}}
                                        
                                    {{-- <td>
                                       {{ $order->drug->name }}
                                    </td>
                                    
                                    <td>
                                        {{ $order->drug->generic }}
                                    </td> --}}
    
                                    <td>
                                        {{ $order->drug->brand }}
                                    </td>
    
                                    <td>
                                        {{ $order->quantity }}
                                    </td>
    
                                    <td>
                                        {{ \Carbon\Carbon::parse($order->drug->exp_date)->format('d-m-Y') }}
                                    </td>

                                    <td>
                                        @if ($order->drug->district)
                                            {{ $order->drug->district->name }}
                                        @endif
                                    </td>

                                    <td>
                                        {{ $order->drug->address }}
                                    </td>

                                    <td>
                                        {{ $order->seller->name }}
                                    </td>

                                    <td>
                                        {{ $order->seller->phone }}
                                    </td>
                                    

                                    {{-- <td>
                                        @if ($order->status == 0)
                                            <span class="badge badge-warning">Pending</span>
                                        @else
                                            <span class="badge badge-success">Active</span>
                                        @endif
                                    </td> --}}

                                    {{-- <td>
                                        @if ($order->status == 0)
                                            <span class="badge badge-danger">Inactive</span>
                                        @else
                                            <span class="badge badge-success">Active</span>
                                            
                                        @endif
                                    </td> --}}
    
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button class="
                                            
                                            @if ($order->status == 0)
                                                btn btn-danger sweet-6
                                            @elseif($order->status == 1)
                                                btn btn-success 
                                            @elseif($order->status == 2)
                                                btn btn-info 
                                            @endif" data-id="{{ $order->id }}" type="button">

                                                @if ($order->status == 0)
                                                    Cancel
                                                @elseif($order->status == 1)
                                                    Complete
                                                @elseif($order->status == 2)
                                                    Approved
                                                @endif
                                            </button>
                                        </div>
                                    </td>
                                </tr>
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
                        url: "{{ route('admin.drug-shops.my-order-cancel',':id') }}".replace(':id', $(this).attr('data-id')),
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
