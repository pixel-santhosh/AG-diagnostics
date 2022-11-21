@extends('layouts.admin')

@section('admin_title') Home @endsection

@section('admin_content') 
    <div class="p-1 mb-3">
        <div class="mb-1 lead"><strong>Welcome  <b class="text-gradient">{{ Sentinel::getUser()->name }}</b></strong></div>
        <span><b class="text-dark">Role :</b> <span class="badge bg-gradient">{{ Sentinel::getUser()->roles[0]->name }}</span></span>
    </div>
    <div class="card custom table-card">
        <div class="card-header">
            <div class="card-title">
                Profile
            </div>
            
        </div>
        <div class="card-body"> 
            {!! Form::open(['route' => 'brochures.store','class'=>'needs-validation','novalidate',  'id' => 'brochures_form', 'method'=> 'post', 'files' => true]) !!}
                @csrf
                <br>
                <div class="row mb-3">
                    <label class="col-2 text-end col-form-label">Name *</label>
                    <div class="col-10">
                        <input type="text" class="form-control" autocomplete="off" name="name" value="{{ $data->name }}" required>

                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-2 text-end col-form-label">Email *</label>
                    <div class="col-10">
                        <input type="email" class="form-control" autocomplete="off" name="email" value="{{ $data->email }}" required>
                       
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-2 text-end col-form-label">Password *</label>
                    <div class="col-10">
                        <input type="password" class="form-control" value="{{ $data->password }}" autocomplete="off" required>
                    </div>
                </div>
                
                
               
            {!! Form::close() !!}
        </div>
    </div>
  
@endsection
 
@section('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
  
@endsection