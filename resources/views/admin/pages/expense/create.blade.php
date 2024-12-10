@extends('admin.masterTemplate')

@section('menu-name')
    Add Expense
@endsection

@section('main-content')
<style>
    .form-group label {
        font-weight: bold;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">Add Expense</h5>
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
                        <div class="alert alert-success">{{ session()->get('success') }}</div>
                    @endif

                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h3 class="card-title"> <i class="fa fa-plus"></i> Add Expense</h3>
                        </div>
@php
    $events = App\Models\Event::all();
@endphp
                        <div class="card-body">
                            <form action="{{ route('event_support.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="event_id">Event</label>
                                    <select name="event_id" id="event_id" class="form-control" required>
                                        <option value="">Select Event</option>
                                        @foreach ($events as $event)
                                            <option value="{{ $event->id }}">{{ $event->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="number" step="0.01" name="amount" id="amount" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="note">Note</label>
                                    <textarea name="note" id="note" class="form-control" rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Save Expense</button>
                                    <a href="{{ route('event_support.index') }}" class="btn btn-secondary">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
