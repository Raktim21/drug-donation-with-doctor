@extends('admin.layouts.app')
@section('title', 'Doctors')

@section('css')

@endsection

@section('user.doctor.index')
active
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-md-flex d-sm-block">
                    <div class="form-group d-flex mb-0">
                        <h5>Doctors</h5>
                    </div>
                </div>
            </div> 
            <div class="card-body">
                <div class="table-responsive table-hover">
                    <table class="table" id="basic-1">
                        <thead>
                            <tr class="border-bottom-primary">
                                <th scope="col">Id</th>
                                <th scope="col">Avater</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Hospital</th>
                                <th scope="col">Speciality</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            @foreach ($doctors as $doctor )
                                <tr>
    
                                    <td scope="row">
                                        {{ $doctor->id }}
                                    </th>

                                    <td>
                                        @if ($doctor->avater)
                                            <img src="{{ asset($doctor->avater) }}" alt="avater" width="50px" height="50px">
                                        @else
                                            <img src="{{ asset('uploads/admin/avater/demo_avater.png') }}" alt="avater" width="50px" height="50px">
                                        @endif
                                    </td>

                                    <td>
                                        {{ $doctor->name }}
                                    </td>

                                    <td>
                                        {{ $doctor->email }}
                                    </td>

                                    <td>
                                        @if ($doctor->phone)
                                            {{ $doctor->phone }}
                                        @else
                                            <span class="text-danger">N/A</span>
                                        @endif
                                    </td>

                                    <td>
                                        {{ $doctor->doctors->desigation ?? '' }}
                                    </td>

                                    <td>
                                        {{ $doctor->doctors->hospital ?? '' }}
                                    </td>

                                    <td>
                                        {{ $doctor->doctors->specialty ?? '' }}
                                    </td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#appointment{{ $doctor->id }}">Appointment</button>
                                        </div>
                                    </td>
    
                                </tr>

                                <div class="modal fade" id="appointment{{ $doctor->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="appointment{{ $doctor->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Make an appointmrnt</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('user.doctor.appointment', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">Dscription <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="description" id="description" cols="30" rows="10" required></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label" for="name">File</label>
                                                        <input type="file" class="form-control" name="file">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
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
