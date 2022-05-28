@extends('backend.layout.master')

@section('title')
Permission Edit
@endsection

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Hi, Welcomeback!</h1>
                    <span>Edit Permission,</span>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="card">
                    <div class="body">
                        <form method="POST" action="{{route('permission.update',[$permission->id])}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-md-2 col-sm-4 col-form-label">Permission Name</label>
                                <div class="col-md-8 col-sm-8">
                                    <div class="row clearfix">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group c_form_group">
                                                <input class="form-control" type="text" value="{{$permission->name}}" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{route('permission.index')}}" class="btn btn-outline-secondary">Cancel</a>
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
