@extends('admin.layouts.app')
@section('title', 'User Create')

@section('css')

@endsection

@section('admin.admin.index')
active
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
                
            <div class="card-header pb-0">
                <h4 class="card-title mb-0">Create User</h4>
                <div class="card-options">
                    <a class="card-options-collapse" href="javascript:void(0)" data-bs-toggle="card-collapse">
                        <i class="fe fe-chevron-up"></i>
                    </a>
                    <a class="card-options-remove" href="javascript:void(0)" data-bs-toggle="card-remove">
                        <i class="fe fe-x"></i>
                    </a>
                </div>
            </div>

            <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row" >
    
                        <div class="col-md-6 form-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="avater">Avater</label>
                                <input class="form-control" name="avater" id="avater" type="file">
                            </div>
                        </div>
    
                        <div class="col-md-6 form-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Name">
                            </div>
                        </div>
    
                        <div class="col-md-6 form-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Email">
                            </div>
                        </div>
    
                        <div class="col-md-6 form-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="phone" >Phone</label>
                                <input class="form-control" id="phone" name="phone" type="phone" placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="password" >Password</label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                            </div>
                        </div>


                        <div class="col-md-6 form-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="password_confirmation" >Confirm Password</label>
                                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <div class="mb-6">
                                <label class="form-label" for="roles" >Roles</label>
                                <select class="form-control" name="roles" id="roles" required>
                                    <option value="">--Select--</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div id="add_body">

                        </div>
    
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit">Create user</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('js')

<script>
    $(document).ready(function () {
        $('#roles').change(function (e) { 
            e.preventDefault();
            
            if ($(this).val() == 3) {
                var content =   `<div class="col-md-6 form-group mb-3">
                                    <div class="mb-6">
                                        <label class="form-label" for="specialty">Specialty</label>
                                        <input class="form-control" id="specialty" name="specialty" type="text" placeholder="Specialty" rewuired>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 form-group mb-3">
                                    <div class="mb-6">
                                        <label class="form-label" for="hospital">Hospital</label>
                                        <input class="form-control" id="hospital" name="hospital" type="text" placeholder="Hospital" rewuired>
                                    </div>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <div class="mb-6">
                                        <label class="form-label" for="desigation">Desigation</label>
                                        <input class="form-control" id="desigation" name="desigation" type="text" placeholder="Desigation" rewuired>
                                    </div>
                                </div>`


                $('#add_body').append(content);
            }else{
                $('#add_body').empty();
            }
        });
    });
</script>
@endsection
