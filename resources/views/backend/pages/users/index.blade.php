@extends('backend.layout.master')

@section('title')
All Users
@endsection

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Hi, Welcomeback!</h1>
                    <span>All Users List | </span>
                    <span>
                        <a class="btn btn-primary" href="{{route('user.create')}}">Create</a>
                    </span>
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
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{ strtoupper($item->roles[0]->name) }}</td>
                                    <td class="d-flex">
                                        <a href="{{route('user.edit',[$item->id])}}">
                                            <span class="badge badge-success">Edit</span>
                                        </a>
                                        <form action="{{ route('user.destroy',[$item->id]) }}" method="POST">
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
