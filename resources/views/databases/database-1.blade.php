@extends('layouts.basic')
    @section('head')
    <title>Database | Member 1</title>
    <link rel="stylesheet" href="/css/database/tabel.css">
    @endsection

    @section('body')
    <a href="/member" class="btn btn-danger ms-4 my-4"><i class="bi bi-arrow-left me-2"></i>Back</a>
        <div class="row justify-content-center">
            <div class="col-auto">
                <h1>Database Member</h1>
                <a class="btn btn-primary btn-sm" href="/database/tambah-data"><i class="bi bi-pencil-square me-2"></i>Add Data</a>
                <table class="mt-3">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>MEMBER ID</th>
                            <th>MEMBER CODE</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>OPTION</th>
                        </tr>
                    </thead>
                @foreach($member as $m)
                    <tbody>
                        <tr>
                            <td>{{$loop -> iteration}}</td>
                            <td>{{$m -> memberid}}</td>
                            <td>{{$m -> membercode}}</td>
                            <td>{{$m -> firstname}}</td>
                            <td>{{$m -> lastname}}</td>
                            <td>
                                <a class="btn btn-warning text-light btn-sm" href="/database/edit-data/{{$m -> id}}"><i class="bi bi-pencil-fill me-2"></i>Edit</a>
                                <a class="btn btn-danger btn-sm" href="/database/hapus-data/{{$m -> id}}"><i class="bi bi-trash me-2"></i>Delete</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
                </table>
            <nav aria-label="...">
                <ul class="pagination mt-3">
                    <li class="page-item disabled"><a class="page-link">Previous</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="/database-1">1</a></li>
                    <li class="page-item"><a class="page-link" href="/database-2">2</a></li>
                    <li class="page-item"><a class="page-link" href="/database-3">3</a></li>
                    <li class="page-item"><a class="page-link" href="/database-2">Next</a></li>
                </ul>
            </nav>
            
            </div>
        </div>
    @endsection
