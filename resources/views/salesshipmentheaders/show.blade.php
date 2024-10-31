@extends('main.layout')

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">View Sales Shipment</h3>
    </div>
    <div class="card-body">
        <form action="{{route('salesshipmentheaders.show',$salesshipmentheaders->id)}}">
        @csrf
        @method('PUT')
      <div class="form-group">
        <label>Sales Shipment No</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-child"></i></span>
          </div>
          <input name="no" type="text" class="form-control @error('no')
          is-invalid
            @enderror" value="{{old('no', $salesshipmentheaders->no)}}">
            @error('no')
            <div class="alert alert-danger mt-2 ">
            {{$message}}
                </div>
            @enderror
        </div>
        <!-- /.input group -->

        <label>Date</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-child"></i></span>
          </div>
          <input name="posting_date" type="text" class="form-control @error('posting_date')
          is-invalid
            @enderror" value="{{old('posting_date', $salesshipmentheaders->posting_date)}}">
            @error('posting_date')
            <div class="alert alert-danger mt-2 ">
            {{$message}}
                </div>
            @enderror
        </div>
        <!-- /.input group -->

        <label>Customer No</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-child"></i></span>
          </div>
          <input name="customer_no" type="text" class="form-control @error('customer_no')
          is-invalid
            @enderror" value="{{old('customer_no', $salesshipmentheaders->customer_no)}}">
            @error('customer_no')
            <div class="alert alert-danger mt-2 ">
            {{$message}}
                </div>
            @enderror
        </div>
        <!-- /.input group -->

        <label>Customer Name</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-child"></i></span>
          </div>
          <input name="customer_name" type="text" class="form-control @error('customer_name')
          is-invalid
            @enderror" value="{{old('customer_name', $salesshipmentheaders->customer_name)}}">
            @error('customer_name')
            <div class="alert alert-danger mt-2 ">
            {{$message}}
                </div>
            @enderror
        </div>
        <!-- /.input group -->

        <label>Customer Address</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-child"></i></span>
          </div>
          <input name="customer_address" type="text" class="form-control @error('customer_address')
          is-invalid
            @enderror" value="{{old('customer_address', $salesshipmentheaders->customer_address)}}">
            @error('customer_address')
            <div class="alert alert-danger mt-2 ">
            {{$message}}
                </div>
            @enderror
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->

      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ITEM NO</th>
            <th>DESCRIPTION</th>
            <th>QUANTITY</th>
            <th>UOM</th>
          </tr>
          </thead>
          <tbody>

          @if (count($salesshipmentlines) > 0)
          @foreach ($salesshipmentlines as $salesshipmentline)
          <tr>
              <td>{{$salesshipmentline->item_no}}</td>
              <td>{{$salesshipmentline->description}}</td>
              <td>{{$salesshipmentline->quantity}}</td>
              <td>{{$salesshipmentline->uom}}</td>
          </tr>
          @endforeach
      @else
          <tr>
              <td>NO DATA</td>
          </tr>
      @endif
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <a href="{{route('salesshipmentheaders.index')}}" class="btn btn-primary">Back</a>
    </div>
  <!-- /.card -->
    </form>
    </div>
    <!-- /.card-body -->
  </div>

@endsection


@section('bottom_script')
<script>

</script>
@endsection


