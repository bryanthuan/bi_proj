@extends('main')

@section('title','Import Data Wizard')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Import Your Data</h1>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-12">
        @if (Session::has('success'))
            <div class="alert alert-success fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="fa fa-times"></i>
                </button>
                <strong>Congratulation!</strong> {{Session::get('success')}}
            </div>
        @endif

            {!! Form::open(['route' => 'import.store', 'method' => 'post','files'=>true]) !!}
            	{!! Form::file('file', ['class' => 'form-control']) !!}
            
            {!! Form::submit('Submit', ['class' => 'btn btn-primary ']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection