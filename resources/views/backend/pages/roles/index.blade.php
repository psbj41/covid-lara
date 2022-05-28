@extends('backend.layout.master')

@section('title')
All Roles
@endsection

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Hi, Welcomeback!</h1>
                    <span>All Roles List | </span>
                    <span>
                        <a class="btn btn-primary" href="{{route('role.create')}}">Create</a>
                    </span>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('assign.permission',[$item->id])}}">
                                            <span class="badge badge-link">Assign Permission</span>
                                        </a>
                                        <a href="{{route('role.edit',[$item->id])}}">
                                            <span class="badge badge-success">Edit</span>
                                        </a>
                                        <form action="{{ route('role.destroy',[$item->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="border: none; background:none; outline:none"><span class="badge badge-danger">Delete</span></button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
