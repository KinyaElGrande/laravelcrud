@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New biodata</h3>
      </div>
    </div>



    <form action="{{route('biodata.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Company Name:</strong>
          <input type="text" name="company_name" class="form-control" placeholder="company name" />
        </div>
        <div class="col-md-12">
          <strong>Company Description:</strong>
          <textarea name="description" class="form-control" placeholder="Description" rows="8" cols="80"></textarea>

          <div class="col-md-12">
            <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>


@endsection
