@extends('layouts.app')

@section('content')
<a href="/" class="btn btn-danger ms-4 my-4"><i class="bi bi-arrow-left me-1"></i>Back</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="mb-3">
                    {{ __('You are logged in!') }}
                </div>

                    <table class="table table-bordered table-light">
                        <tr>
                            <th>No</th>
                            <th>Admin List</th>
                            <th>Created at</th>
                        </tr>
                        @foreach ($account as $item)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $item -> name }}</td>
                            <td>{{ $item -> created_at }}</td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="/member" class="btn btn-primary float-end"><i class="bi bi-eye me-1"></i>See a Member</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
