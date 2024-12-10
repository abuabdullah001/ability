@extends('admin.masterTemplate')

@section('menu-name')
    Edit Expense
@endsection

@section('main-content')
<style>
    .form-group label {
        font-weight: bold;
    }
</style>
@php
    $events = App\Models\Event::all();
@endphp
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">Edit Expense</h5>
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
                            <h3 class="card-title"> <i class="fa fa-edit"></i> Edit Expense</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('event_support.update', $eventSupport->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="event_id">Choose Category</label>
                                    <select name="type" id="category" class="form-control" required>
                                        <option value="">Select Category</option>
                                        <option value="project">project</option>
                                        <option value="champaign">champaign</option>
                                        <option value="event">Event</option>
                                    </select>
                                </div>
                                <div class="form-group" id='category2'>

                                </div>

                                <div class="form-group">
                                    <label for="amount"> Amount</label>

                                    <input type="number" step="0.01" name="amount" id="amount" class="form-control" value="{{ old('amount', $eventSupport->amount) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="note">Note</label>
                                    <textarea name="note" id="note" class="form-control" rows="4">{{ old('note', $eventSupport->note) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Update Expense</button>
                                    <a href="{{ route('event_support.index') }}" class="btn btn-secondary">back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function() {
        $('#category').change(function() {
            var category = $(this).val();



            $.ajax({
                url: "{{ route('fetch.events') }}",
                method: "GET",
                data: {
                    category: category
                },
                success: function(response) {
                    $('#category2').html(response);

                },
                error: function() {
                    alert('Failed to load events.');
                }
            });
        });
    });
</script>
@endsection
