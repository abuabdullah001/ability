
@extends('admin.masterTemplate')

@section('main-content')
@php
    $volunteer = App\Models\Volunteer::all();
    $volunteerRequest = App\Models\VolunteerTerm::where('status', 'pending')->get();
    $donation = App\Models\Order::all();
    $sponsor = App\Models\Doante::all();
    $event = App\Models\Event::all();
    $project = App\Models\Project::all();
    $champagin = App\Models\champaign::all();
    $expense = App\Models\Expense::sum('amount');
    $today = Carbon\Carbon::now();
    $todayTransaction = App\Models\Order::whereDate('created_at', $today)->get();
@endphp

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">DASHBOARD</h5>
                </div>
            </div>
        </div>
        <hr class="style18">
    </div>

    @if(Auth::user()->type == 1)
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Volunteer Section -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1 d-flex justify-content-center align-items-center" style="height: 70px; width: 70px;">
                            <i class="fas fa-user-friends fa-lg"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Volunteer</span>
                            <span class="info-box-number">{{ $volunteer->count() }}</span>
                        </div>
                    </div>
                </div>
                <!-- Volunteer Request Section -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1 d-flex justify-content-center align-items-center" style="height: 70px; width: 70px;">
                            <i class="fas fa-user-plus fa-lg"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Volunteer Request</span>
                            <span class="info-box-number">{{ $volunteerRequest->count() }}</span>
                        </div>
                    </div>
                </div>
                <!-- Total Donation Section -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1 d-flex justify-content-center align-items-center" style="height: 70px; width: 70px;">
                            <i class="fas fa-donate fa-lg"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Donation</span>
                            <span class="info-box-number">{{ $donation->sum('amount') }} Tk</span>
                        </div>
                    </div>
                </div>
                <!-- Total Expense Section -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1 d-flex justify-content-center align-items-center" style="height: 70px; width: 70px;">
                            <i class="fas fa-money-bill-alt fa-lg"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Expense</span>
                            <span class="info-box-number">{{ $expense }} Tk</span>
                        </div>
                    </div>
                </div>
                <!-- Today's Donation Section -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1 d-flex justify-content-center align-items-center" style="height: 70px; width: 70px;">
                            <i class="fas fa-calendar-check fa-lg"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Today's Donation</span>
                            <span class="info-box-number">{{ $todayTransaction->sum('amount') }} Tk</span>
                        </div>
                    </div>
                </div>
                <!-- Total Sponsor Section -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-fuchsia elevation-1 d-flex justify-content-center align-items-center" style="height: 70px; width: 70px;">
                            <i class="fas fa-gift fa-lg"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Sponsor</span>
                            <span class="info-box-number">{{ $sponsor->count() }}</span>
                        </div>
                    </div>
                </div>
                <!-- Total Event Section -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-fuchsia elevation-1 d-flex justify-content-center align-items-center" style="height: 70px; width: 70px;">
                            <i class="fas fa-calendar-alt fa-lg"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Event</span>
                            <span class="info-box-number">{{ $event->count() }}</span>
                        </div>
                    </div>
                </div>
                <!-- Total Project Section -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-fuchsia elevation-1 d-flex justify-content-center align-items-center" style="height: 70px; width: 70px;">
                            <i class="fas fa-briefcase fa-lg"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Project</span>
                            <span class="info-box-number">{{ $project->count() }}</span>
                        </div>
                    </div>
                </div>
                <!-- Total Campaign Section -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-fuchsia elevation-1 d-flex justify-content-center align-items-center" style="height: 70px; width: 70px;">
                            <i class="fas fa-cogs fa-lg"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Campaign</span>
                            <span class="info-box-number">{{ $champagin->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>
@endsection
