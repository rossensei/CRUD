@extends('base')

@section('content')
    <style>
        .form-group{
            width: 300px;
        }

        .card {
            width: 40vw;
            margin-top: 80px;
        }
        h2 {
            margin-top: 25px;
            margin-left: 50px;
            font-weight: 900;
        }
    </style>
<div class="card shadow mx-auto">
        <h2>Add New Store</h2>
        <div class="row mx-auto my-3 d-flex justify-content-center">
            {!! Form::open(['url'=>'/stores', 'method'=>'post']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Store Name')}}
                    {{Form::text('name',null,['class'=>'form-control'])}}
                </div>
                <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('name')}}</div>
                <div class="form-group">
                    {{Form::label('location')}}
                    {{Form::text('location',null,['class'=>'form-control'])}}
                </div>
                <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('location')}}</div>
                <div class="form-group">
                    {{Form::label('owner', 'Store Owner')}}
                    {{Form::text('owner',null,['class'=>'form-control'])}}
                </div>
                <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('owner')}}</div>
                <div class="form-group">
                    {{Form::label('net_worth', 'Net Worth')}}
                    {{Form::number('net_worth',null,['class'=>'form-control'])}}
                </div>
                <div class="text-danger rounded text-center mt-1" style="background-color: #ffabab;">{{$errors->first('net_worth')}}</div>
                <div class="form-group d-flex justify-content-between">
                <a href="/stores" class="btn btn-outline-dark mt-3">
                    Cancel
                </a>
                <button class="btn btn-outline-dark mt-3" type="submit">
                    Create Store
                </button>
                </div>
            {!! Form::close() !!}
        </div>
        
    </div>
@endsection