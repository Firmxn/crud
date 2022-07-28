@extends('layouts.basic')

@section('head')
    <title>Member | Database</title>
@endsection

@section('body')
<a href="/home" class="btn btn-danger ms-4 my-4"><i class="bi bi-arrow-left me-1"></i>Back</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Member List</div>
        
                <div class="card-body mt-4">
                    {{-- <p>Members are listed!</p>  --}}
                    <table class="table table-bordered table-light">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th colspan="2">Member List</th>
                                <th>Member ID</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($member as $m)
                            <tr>
                                <td>{{ $loop -> iteration }}</td>
                                    <td colspan="2">{{ $m -> firstname }}&nbsp;{{ $m -> lastname }}</td>
                                    <td>{{ $m -> memberid }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="/database-1" class="btn btn-primary float-end"><i class="bi bi-eye me-1"></i>See a Database</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
