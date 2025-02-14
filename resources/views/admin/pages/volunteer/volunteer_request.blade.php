@extends('admin.masterTemplate')

@section('menu-name')
ALL USERS
@endsection
@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">ALL Volunteer</h5>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <hr class="style18">

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-12">
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h3 class="card-title"> <i class="fa fa-users"></i> All Members</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                         <th>SL</th>
                                        <th>Name</th>
                                        <th>Number</th>
                                        <th>Email</th>
                                        <th>Nid </th>
                                        <th>Term</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                  <tbody>
                                     @foreach ($volunteerTerm as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->volunteer->name }}</td>
                                        <td>{{ $value->volunteer->phone }}</td>
                                        <td>{{ $value->volunteer->email }}</td>
                                        <td>{{ $value->volunteer->nid_number }}</td>
                                        <td>{{ $value->term }}</td>
                                        <td>{{ $value->volunteer->city }}</td>
                                        <td>
                                            @if($value->status == "Pending")
                                                <a href="{{ route('volunteer.status.update', $value->id) }}" class="btn btn-danger">Pending</a>
                                            @else
                                                <a href="" class="btn btn-success">{{ $value->status }}</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('show_volunteer/'.$value->id) }}" class="btn btn-xs btn-info"><i class="fas fa-desktop"></i></a>
                                            <a href="" class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a>
                                            <a href="{{ url('generate-pdf/'.$value->id) }}" class="btn btn-xs btn-info">Print</i></a>

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection
