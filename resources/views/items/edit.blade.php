@extends('main.layout')

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Update kategori</h3>
    </div>
    <div class="card-body">
        <form action="{{route('items.update',$item->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="form-group">
        <label>No</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-child"></i></span>
          </div>
          <input name="no" type="text" class="form-control @error('no')
          is-invalid
            @enderror" value="{{old('no', $item->no)}}">
            @error('no')
            <div class="alert alert-danger mt-2 ">
            {{$message}}
                </div>
            @enderror
        </div>
        <!-- /.input group -->

        <label>Product Group</label>

        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-child"></i></span>
            </div>
            {{-- <input name="name" type="text" class="form-control @error('name') --}}
            <select class="form-control select2 @error('product_group_id') is-invalid @enderror "
            name="product_group_id" id="product_group_id" >
            @foreach ($productgroups as $productgroup)
                @if (old('product_group_id') == $productgroup->id)
                    <option value="{{ $productgroup->id }}" selected>{{ $productgroup->description }}

                    @else
                    <option value="{{ $productgroup->id }}">{{ $productgroup->description }}
                @endif
                </option>
            @endforeach
        </select>
              @error('product_group_id')
            <div class="alert alert-danger mt-2 ">
              {{$message}}
                  </div>
              @enderror
            </div>
        <!-- /.input group -->

        <div class="form-group">
            <label>Description</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-child"></i></span>
          </div>
          <input name="description" type="text" class="form-control @error('description')
          is-invalid
            @enderror" value="{{old('description', $item->description)}}">
            @error('description')
            <div class="alert alert-danger mt-2 ">
            {{$message}}
                </div>
            @enderror
        </div>
        <!-- /.input group -->

            <div class="form-group">
                <label>UOM</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-child"></i></span>
                  </div>
                  <input name="uom" type="text" class="form-control @error('uom')
                  is-invalid
                    @enderror" value="{{old('uom', $item->uom)}}">
                    @error('uom')
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


