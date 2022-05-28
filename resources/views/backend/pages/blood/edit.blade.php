@extends('backend.layout.master')

@section('title')
Blood Donation Edit
@endsection

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <!-- Page header section  -->
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h1>Hi, Welcomeback!</h1>
                    <span>Edit Blood Donation Status,</span>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="card">
                    <div class="body">
                        <form method="POST" action="{{route('blood.update',[$blood->id])}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-md-2 col-sm-4 col-form-label">Blood Donation Status</label>
                                <div class="col-md-8 col-sm-8">
                                    <div class="row clearfix">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group c_form_group">
                                                <select class="form-control" type="text" name="status">
                                                    <option value="complete" @if ($blood->status == 'complete') selected @endif>Complete</option>
                                                    <option value="incomplete" @if ($blood->status == 'incomplete') selected @endif>Incomplete</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{route('blood.index')}}" class="btn btn-outline-secondary">Cancel</a>
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
