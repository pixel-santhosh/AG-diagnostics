@extends('admin.master.layout')

@section('admin_master_content')
<style>
    .btn-light:hover {
    color: #fff;
    background-color: var(--primary2);
    border-color: var(--primary3);
    }
</style>
    <div class="card custom">
        <div class="card-header">
            <div class="card-title">
                Edit  Country 
            </div>
            <a href="{{ route('country.index') }}" class="btn btn-primary ms-3">
                <i class="fa fa-list me-2" aria-hidden="true"></i>
                Country  List
            </a>
        </div>
        <div class="card-body"> 
            {!! Form::model($country,['route' => ['country.store', $country->id],  'class'=>'needs-validation','novalidate','id' => 'country_edit_form', 'method'=> 'post','files' => true]) !!}
                @csrf
                @include('admin.master.country.form')
                <div class="row ">
                    <div class="col-10 offset-2">
                        <a href="{{ route('country.index') }}" class="btn btn-light">Back</a>
                        <button type="submit" class="btn btn-primary fw-bold">Save</button>
                    </div>
                </div> 
            {!! Form::close() !!}
        </div>
    </div>
@endsection 