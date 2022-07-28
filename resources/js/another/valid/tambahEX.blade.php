@extends('layouts.app')
 
@section('content')
 
 
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Member</div>
 
                <div class="card-body">
                    <form method="POST" action="/database/store">
                        @csrf
 
                        <div class="form-group">
                            <label>ID MEMBER</label>
                            <input type="text" class="form-control" name="id" required="req"//value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>KODE MEMBER</label>
                            <input type="email" //class="form-control" name="kode" required="req"//value="{{ old('email') }}">
                        </div>
                        <!-- <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="dob" value="{{ old('dob') }}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" cols="30" rows="10" value="{{ old('address') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                        </div> -->
                        <input type="submit" value="simpan data">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection