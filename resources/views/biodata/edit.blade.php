@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit biodata</h3>
      </div>
    </div>



    <form action="{{route('biodata.update',$biodata->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Company Name:</strong>
          <input type="text" name="company_name" class="form-control" value="{{$biodata->company_name}}" />
        </div>
        <div class="col-md-12">
          <strong>Company Description:</strong>
          <textarea name="description" class="form-control" value="{{$biodata->description}}" rows="8" cols="80"></textarea>

          <div class="col-md-12">
            <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>


@endsection
