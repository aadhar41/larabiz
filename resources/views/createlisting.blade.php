@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing</div>

                <div class="card-body">
                    {{ Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) }}
						{{ Form::bsText('name','',['placeholder' => 'Company Name']) }}
						{{ Form::bsText('email','',['placeholder' => 'Company Email']) }}
						{{ Form::bsText('website','',['placeholder' => 'Company Website']) }}
						{{ Form::bsText('phone','',['placeholder' => 'Company Phone']) }}
						{{ Form::bsText('address','',['placeholder' => 'Company Address']) }}
						{{ Form::bsTextArea('bio','',['placeholder' => 'Company Bio']) }}
						{{ Form::bsSubmit('submit',['class'=>'btn btn-primary']) }}
					{{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection