@extends('admin.masterTemplate')
@section('menu-name')
ALL Training
@endsection
@section('main-content')
<style>
    .tablestyle3 {
        margin: 0;
        padding: 0;
        line-height: 0;
        font-size: 9px;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">All Partners</h5>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <hr class="style18">
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="card-title"> <i class="fa fa-users"></i> All Partners</h3>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('partner.create')}}" class="btn btn-success float-right"> <i
                                            class="fa fa-plus"></i> ADD Partner</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($partners as $key => $value)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{!! Str::limit($value->description, 200) !!}</td>
                                        <td>
                                          <img src="{{asset($value->image)}}" alt="" style="height: 120px">
                                        </td>

                                        <td>
                                            {{-- <a href="{{ route('partner.edit', $value->id) }}" class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('partner.delete', $value->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a> --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection