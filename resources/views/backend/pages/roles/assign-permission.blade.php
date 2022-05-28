@extends('backend.layout.master')

@section('title')
Assign Permission
@endsection

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Hi, Welcomeback!</h1>
                    <span>JustDo Assign Permission,</span>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="card">
                    <div class="body">
                        <form method="POST" action="{{ route('assign.permission.store',[$role->id])}}">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-2 col-sm-4 col-form-label">Role Name</label>
                                <div class="col-md-8 col-sm-8">
                                    @foreach ($permissions as $item)
                                    <div class="form-check form-switch mb-3" dir="ltr" style="font-size: 20px">
                                        <input type="checkbox" class="form-check-input" id="permission[{{$item->id}}]"
                                            name="permission[]" value="{{$item->id}}"
                                            @if($role->hasPermissionTo($item->id)) checked @endif>
                                        <label class="form-check"
                                            for="permission[{{$item->id}}]">{{ strtoupper($item->name) }}</label>
                                    </div>
                                    @endforeach
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{route('role.index')}}" class="btn btn-outline-secondary">Cancel</a>
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
