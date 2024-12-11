@extends('admin.masterTemplate')

@section('menu-name')
    Reference
@endsection

@section('main-content')
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1 class="h3">{{ ('All Account') }}</h1>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between ">
        <!-- Account Table Section -->
        <div class="col-md-7 m">
            <div class="card">
                <div class="card-body">
                    <table class="table aiz-table mb-0">
                        <thead>
                            <tr>
                                <th data-breakpoints="lg">#</th>
                                <th>{{ ('Account Code') }}</th>
                                <th>{{ ('Name') }}</th>
                                <th>{{ ('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $key => $account)
                                <tr>
                                    <td>{{ $key + 1 + ($accounts->currentPage() - 1) * $accounts->perPage() }}</td>
                                    <td>{{ $account->accountCode }}</td>
                                    <td>{{ $account->account_name }}</td>
                                    <td class="text-right">
                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                            href="{{ route('account.edit', ['id' => $account->id, 'lang' => env('DEFAULT_LANGUAGE')]) }}"
                                            title="{{ ('Edit') }}">
                                            <i class="las la-edit"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                            data-href="{{ route('account.destroy', $account->id) }}"
                                            title="{{ ('Delete') }}">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="aiz-pagination">
                        {{ $accounts->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Add New Account Form Section -->
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ ('Add New Account') }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('account.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="accountCode" class="form-label">{{ 'Account Code' }} *</label>
                            <span class="bg-green p-2" style="font-weight: bold">{{ $accountCode }}</span>
                            <input type="hidden" name="accountCode" class="form-control" value="{{ $accountCode }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="account_name">{{ 'Name' }} *</label>
                            <input type="text" placeholder="{{ 'Enter Account Name' }}" name="account_name" class="form-control" required>
                        </div>

                        <div class="form-group mb-3 text-right">
                            <button type="submit" class="btn btn-primary">{{ 'Save' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
