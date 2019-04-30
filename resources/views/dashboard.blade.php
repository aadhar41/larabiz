@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-outline-success" title="">Add Listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h3>Your Listings</h3>
                    @if (count($listings))
                        <table class="table table-striped">
                            <caption>Listings for currently loggedIn User.</caption>
                            <thead>
                                <tr>
                                    <th>Company</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td><a href="/listings/{{$listing->id}}/edit" class="btn btn-outline-primary float-right" title="">Edit</a></td>
                                    <td>
                                        {{ Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => '', 'onsubmit' => 'return confirm("Are you sure??")']) }}
                                            {{ FORM::hidden('_method','DELETE') }}
                                            {{ Form::bsSubmit('Delete',['class'=>'btn btn-outline-danger float-left']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
