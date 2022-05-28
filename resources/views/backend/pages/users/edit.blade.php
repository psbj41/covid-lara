@extends('backend.layout.master')

@section('title')
User Edit
@endsection

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Hi, Welcomeback!</h1>
                    <span>JustDo Add User,</span>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                    <div
                        class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                        <div class="border-right pr-4 mr-4 mb-2 mb-xl-0 hidden-xs">
                            <p class="text-muted mb-1">Patients</p>
                            <h5 class="mb-0">214</h5>
                        </div>
                        <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                            <p class="text-muted mb-1">Doctors</p>
                            <h5 class="mb-0">206</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="card">
                    <div class="body">
                        <form method="POST" action="{{route('user.update',[$user->id])}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-md-2 col-sm-4 col-form-label">Basic Information</label>
                                <div class="col-md-8 col-sm-8">
                                    <div class="row clearfix">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group c_form_group">
                                                <label>Full Name <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" value="{{$user->name}}" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group c_form_group">
                                                <label>Enter Your Email <span class="text-danger">*</span></label>
                                                <input class="form-control" type="email" value="{{$user->email}}" name="email" placeholder="Enter here">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group c_form_group">
                                                <label>Select Role <span class="text-danger">*</span></label>
                                                <select class="form-control" type="text" value="" name="role_id">
                                                    @foreach ($role as $item)
                                                        <option value="{{$item->id}}" @if ($item->id === $user->role_id) selected @endif>{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{route('user.index')}}" class="btn btn-outline-secondary">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
