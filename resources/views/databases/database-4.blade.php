@extends('layouts.basic')

    @section('head')
    <title>Database | Member 4</title>
    <link rel="stylesheet" href="/css/database/tabel.css">
    @endsection

    @section('body')
        <div class="row justify-content-center">
            <div class="col-auto">
                <h1 class="mt-4" >Database Member</h1>
                <a class="btn btn-primary btn-sm" href="/database/tambah-data"><i class="bi bi-pencil-square me-2"></i>Add Data</a>
                <table class="mt-3">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>INACTIVE</th>
                            <th>FIRST CONTRACT</th>
                            <th>END CONTRACT</th>
                            <th>NPWP</th>
                            <th>OPTION</th>
                        </tr>
                    </thead>
                @foreach($member as $m)
                    <tbody>
                        <tr>
                            <td>{{$loop -> iteration}}</td>
                            <td>{{$m -> inactive}}</td>
                            <td>{{$m -> firstcontract}}</td>
                            <td>{{$m -> endcontract}}</td>
                            <td>{{$m -> npwp}}</td>
                            <td>
                                <a class="btn btn-warning text-light btn-sm" href="/database/edit-data/{{$m -> id}}"><i class="bi bi-pencil-fill me-2"></i>Edit</a>
                                <a class="btn btn-danger btn-sm" href="/database/hapus-data/{{$m -> id}}"><i class="bi bi-trash me-2"></i>Delete</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
                </table>
                <nav aria-label="...">
                <ul class="pagination pagination-sm mt-3">
                        <li class="page-item"><a class="page-link" href="/database-3">Previous</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="/database-4">4</a></li>
                        <li class="page-item"><a class="page-link" href="/database-5">5</a></li>
                        <li class="page-item"><a class="page-link" href="/database-6">6</a></li>
                        <li class="page-item"><a class="page-link" href="/database-5">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    @endsection
