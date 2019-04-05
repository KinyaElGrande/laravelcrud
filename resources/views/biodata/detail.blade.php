@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Details of a company</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Company name:</strong> {{$biodata->company_name}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Desc:</strong> {{$biodata->description}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>


@endsection
