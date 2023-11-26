@extends('admin.layouts.app')
@section('title', 'Drug')

@section('css')

@endsection

@section('user.drugs.index')
active
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
                
            <div class="card-header pb-0">
                <h4 class="card-title mb-0">Drugs</h4>
                <div class="card-options">
                    <a class="card-options-collapse" href="javascript:void(0)" data-bs-toggle="card-collapse">
                        <i class="fe fe-chevron-up"></i>
                    </a>
                    <a class="card-options-remove" href="javascript:void(0)" data-bs-toggle="card-remove">
                        <i class="fe fe-x"></i>
                    </a>
                </div>
            </div>

            <form action="{{ route('user.drugs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
    
                        <div class="col-md-6 from-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="photo">Photo</label>
                                <input class="form-control" name="photo" id="photo" type="file">
                            </div>
                        </div>
    
                        <div class="col-md-6 from-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Name" rewuired>
                            </div>
                        </div>

                        <div class="col-md-6 from-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="generic">Generic <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="generic" name="generic" placeholder="Generic" required>
                            </div>
                        </div>

                        <div class="col-md-6 from-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="brand">Brand <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="brand" name="brand" placeholder="Brand" required>
                            </div>
                        </div>

                        <div class="col-md-6 from-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="quantity">Quantity <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" id="quantity" name="quantity" placeholder="Quantity" required>
                            </div>
                        </div>

                        <div class="col-md-6 from-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="exp_date">Expire date <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" id="exp_date" name="exp_date" placeholder="Expire date" required>
                            </div>
                        </div>


                        <div class="col-md-6 from-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="district">District <span class="text-danger">*</span></label>
                                <select class="form-control" name="district" id="district">
                                    <option value="">--Select--</option>
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 from-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="address">Address <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="address" name="address" placeholder="Address" required>
                            </div>
                        </div>

                        <div class="col-md-12 from-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                            </div>
                        </div>
    
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('js')
@endsection
