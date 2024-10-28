@extends('main.layout')

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Add Product Group</h3>
    </div>
    <div class="card-body">
        <form action="{{route('productgroups.store')}}" method="post" enctype="multipart/form-data">
            @csrf
      <div class="form-group">
        <label>Code</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-child"></i></span>
          </div>
          <input name="code" type="text" class="form-control @error('code')
          is-invalid
            @enderror" value="{{old('code')}}">
            @error('code')
            <div class="alert alert-danger mt-2 ">
            {{$message}}
                </div>
            @enderror
        </div>
        <!-- /.input group -->

        <label>Description</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-child"></i></span>
          </div>
          <input name="description" type="text" class="form-control @error('description')
          is-invalid
            @enderror" value="{{old('description')}}">
            @error('description')
            <div class="alert alert-danger mt-2 ">
            {{$message}}
                </div>
            @enderror
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->


      <button type="submit" class="btn btn-primary mt-3">SUBMIT</button>
    </form>

    </div>
    <!-- /.card-body -->
  </div>

@endsection


@section('bottom_script')
<script>

</script>
@endsection


