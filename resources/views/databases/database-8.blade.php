@extends('layouts.basic')

    @section('head')
    <title>Database | Member 8</title>
    <link rel="stylesheet" href="/css/database/tabel.css">
    @endsection

    @section('body')
        <div class="row justify-content-center">
            <div class="col-auto">
                <h1 class="mt-5" >Database Member</h1>
                <a class="btn btn-primary btn-sm" href="/database/tambah-data"><i class="bi bi-pencil-square me-2"></i>Add Data</a>
                <table class="mt-3">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>USER ID</th>
                            <th>PRODUCT ID</th>
                            <th>KTP PHOTO</th>
                            <th>ACCOUNT NO</th>
                            <th>BANK NAME</th>
                            <th>OPTION</th>
                        </tr>
                    </thead>
                @foreach($member as $m)
                    <tbody>
                        <tr>
                            <td>{{$loop -> iteration}}</td>
                            <td>{{$m -> userid}}</td>
                            <td>{{$m -> productid}}</td>
                            <td><img width="50px" src="{{ asset('/image/ktpphoto/'.$m->ktpphoto) }}"></td>
                            <td>{{$m -> accountno}}</td>
                            <td>{{$m -> bankname}}</td>
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
                    <li class="page-item"><a class="page-link" href="/database-7">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="/database-7">7</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="/database-8">8</a></li>
                    <li class="page-item disabled"><a class="page-link" href="/database-9">9</a></li>
                    <li class="page-item disabled"><a class="page-link" href="/database-9">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    @endsection
