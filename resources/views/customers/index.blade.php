@extends('main.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <a href="{{route('customers.create')}}" class="btn btn-primary mb-3">Add Customer</a>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">CUSTOMERS</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>NO</th>
                      <th>NAME</th>
                      <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if (count($customers) > 0)
                    @foreach ($customers as $customer)
                    <tr>
                        <td>{{$customer->customer_no}}</td>
                        <td>{{$customer->name}}</td>
                        <td>
                            <div class="col-md-12">
                                <form>
                                    {{-- <a href="{{route('categories.show',$category->id)}}" class="btn btn-dark">Show</a> --}}
                                    <a href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary">Edit</a>
                                </form>
                            </div>
                            {{--<div class="col-md-12">
                                <form>
                                    {{-- <a href="{{route('categories.show',$category->id)}}" class="btn btn-dark">Show</a> --}}
                                    {{--<a href="{{route('productgroups.destroy',$productgroup->id)}}" class="btn btn-danger">Delete</a>
                                </form>
                            {{--</div>--}}
                            <div class="col-md-12">
                                {{-- <a href="" class="btn btn-primary">delete</a> --}}
                                <form action="{{route('customers.destroy',$customer->id)}}" method="post" >
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
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
              </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection


@section('bottom_script')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    //   $('#example2').DataTable({
    //     "paging": true,
    //     "lengthChange": false,
    //     "searching": false,
    //     "ordering": true,
    //     "info": true,
    //     "autoWidth": false,
    //     "responsive": true,
    //   });
    });
  </script>
@endsection


