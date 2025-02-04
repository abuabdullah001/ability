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
                    <h5 class="m-0 text-dark">ALL Payment Request</h5>
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
                            <h3 class="card-title"> <i class="fa fa-users"></i> - Payment Request</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Payment Method</th>
                                        <th>Transaction ID</th>
                                        <th>Transaction Image</th>
                                        <th>Amount</th>
                                        <th>Note</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                  <tbody>
                                     @foreach ($payments as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->user->name }}</td>
                                        <td>{{ $value->payment_method }}</td>
                                        <td>{{ $value->tx_id }}</td>
                                        <td>
                                            @if($value->tx_image)
                                                <img src="{{ asset('uploads/' . $value->tx_image) }}" alt="Transaction Image" height="80px" width="80px">
                                            @else
                                                No Image
                                            @endif
                                        </td>                                        
                                        <td>{{ $value->amount}}</td>
                                        <td>{{ $value->note }}</td>
                                        <td>
                                            {{ $date = $value->created_at->format('d/m/Y') }}
                                        </td>
                                        <td>
                                            @if($value->status == "Pending")
                                                <a href="{{ route('payment.status.update', $value->id) }}" class="btn btn-danger">Pending</a>
                                            @else
                                                <a href="" class="btn btn-success">{{ $value->status }}</a>
                                            @endif
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
