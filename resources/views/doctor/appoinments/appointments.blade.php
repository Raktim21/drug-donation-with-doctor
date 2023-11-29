@extends('admin.layouts.app')
@section('title', 'Appointments')

@section('css')

@endsection

@section('user.doctor.appointment.list')
active
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-md-flex d-sm-block">
                    <div class="form-group d-flex mb-0">
                        <h5>Appointments</h5>
                    </div>
                </div>
            </div> 
            <div class="card-body">
                <div class="table-responsive table-hover">
                    <table class="table" id="basic-1">
                        <thead>
                            <tr class="border-bottom-primary">
                                {{-- <th scope="col">Id</th> --}}
                                <th scope="col">Date</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Query</th>
                                <th scope="col">File</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            @foreach ($appointments as $appointment )
                                <tr>
    
                                    {{-- <td scope="row">
                                        {{ $appointment->id }}
                                    </th> --}}

                                    <td>
                                        {{ \Carbon\Carbon::parse($appointment->created_at)->format('d M, Y') }}
                                    </td>

                                    <td>
                                        {{ $appointment->patient->name }}
                                    </td>

                                    <td>
                                        {{ $appointment->patient->email }}
                                    </td>

                                    <td>
                                        @if ($appointment->patient->phone)
                                            {{ $appointment->patient->phone }}
                                        @else
                                            <span class="text-danger">N/A</span>
                                        @endif
                                    </td>


                                    <td>
                                        <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#query_view_{{ $appointment->id }}">View</button>
                                        
                                    </td>

                                    <td>
                                        @if ($appointment->file)
                                            <a class="btn btn-primary btn-sm" href="{{ asset($appointment->file) }}" download>Download</a>
                                        @else
                                            <span class="badge badge-danger">N/A</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($appointment->status == 0)
                                            <span class="badge badge-warning">Pending</span>
                                        @else
                                            <span class="badge badge-success">Resolved</span>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            @if ($appointment->status == 0)
                                                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#prescribe{{ $appointment->id }}">Prescribe</button>
                                            @endif
                                        </div>
                                    </td>
    
                                </tr>

                                <div class="modal fade" id="query_view_{{ $appointment->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="appointment{{ $appointment->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Patient Query</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $appointment->description }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal fade" id="prescribe{{ $appointment->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="prescribe{{ $appointment->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Prescription</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <form action="{{ route('doctor.appointments.prescribe', $appointment->id) }}" class="" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <textarea name="resolve" id="" cols="30" rows="10" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Save</button>
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
    </div>
</div>
@endsection


@section('js')

<script src="{{ asset('admin_dashboard/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin_dashboard/assets/js/datatable/datatables/datatable.custom.js') }}"></script>

@endsection
