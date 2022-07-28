@extends('layouts.basic')

@section('head')
<title>Tambah Data</title>
<!-- <link rel="stylesheet" type="text/css" href="/css/tambahEditData.css"> -->
@endsection

@include('template.navbar')
@section('body')
<div class="row">
    <div class="container">
        <div class="db">
            <h1 class="text-center my-5">Tambah Data</h1>
            <a href="/database"  class="back">Kembali</a>
            <br>
            <br>

            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

            <form action="/database/store" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <table cellpadding="8">
                    <div class="form-group">
                        <td><label>ID MEMBER</label></td>
                        <td><input class="form-control" type="number" name="id_member" ></td>
                    </div>
                    <tr>
                        <td><label>KODE MEMBER</label></td>
                        <td><input class="form-control" type="number" name="kode_member" ></td>
                    </tr>
                    <tr>
                        <td><label>NAMA MEMBER</label> </td>
                        <td><input class="form-control" type="text" name="nama_member" value="{{ old('nama_member') }}"></td>
                    </tr>
                    <tr>
                        <td><label>ALAMAT MEMBER</label></td>
                        <td><input class="form-control" type="text" name="alamat_member" value="{{ old('alamat_member') }}"></td>
                    </tr>
                    <tr>
                        <td><label>ID KOTA TINGGAL</label></td>
                        <td><input class="form-control"type="number" name="id_kota_tinggal"></td>
                    </tr>
                    <tr>
                        <td><label>TEMPAT LAHIR MEMBER</label></td>
                        <td><input class="form-control"type="text" name="tempat_lahir_member"></td>
                    </tr>
                    <tr>
                        <td><label>TGL LAHIR MEMBER</label></td>
                        <td><input class="form-control"type="date" name="tgl_lahir_member" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label>JNS KELAMIN</label></td>
                        <td><label class="form-check-label">Laki-laki</label><input class="form-check-input" type="radio" name="jns_kelamin" value="1">
                            <label class="form-check-label">Perempuan</label><input class="form-check-input" type="radio" name="jns_kelamin" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td><label>TGL BERGABUNG</label></td>
                        <td><input type="date" name="tgl_bergabung" ></td>
                    </tr>
                    <tr>
                        <td><label>FOTO MEMBER</label></td>
                        <td><input type="file" name="foto_member" class="file"></td> 
                    </tr>         
                    <tr>
                        <td><label>JNS DOKUMEN</label></td>
                        <td><input type="text" name="jns_dokumen" ></td>
                    </tr>      
                    <tr>
                        <td><label>NOMOR ID DOKUMEN</label></td>
                        <td><input type="number" name="nomor_id_dokumen" ></td>
                    </tr>
                    <tr>
                        <td><label>FOTO DOKUMEN</label></td>
                        <td><input type="file" name="foto_dokumen" class="file"></td>
                    </tr>
                    <tr>
                        <td><label>ID MEMBER SPONSOR</label></td>
                        <td><input type="number" name="id_member_sponsor" ></td>
                    </tr>
                    <tr>
                        <td><label>ID LEVEL MEMBER</label></td>
                        <td><input type="number" name="id_level_member" ></td>
        
                    </tr>      
                    <tr>
                        <td><label>ID GUDANG</label></td>
                        <td><input type="number" name="id_gudang" ></td>
                    </tr>
                    <tr>
                        <td><label>ID PAKET PENDAFTARAN</label></td>
                        <td><input type="number" name="id_paket_pendaftaran" ></td>
        
                    </tr>      
                    <tr>
                        <td><label>PAKET PENDAFTARAN</label></td>
                        <td><select name="paket_pendaftaran" id="3">
                            <option value="" disabled selected hidden>Pilih paket...</option>        
                            <option value="1">Paket GIS 2020 - 600.000</option>
                            <option value="2">Paket GIS 2019 - 480.000</option>
                            <option value="3">Paket Member Lama</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label>HARGA PAKET PENDAFTARAN</label></td>
                        <td><select name="harga_paket_pendaftaran" id="3">
                            <option value="" disabled selected hidden>Pilih harga paket...</option>
                            <option value="1">600000</option>
                            <option value="2">480000</option>
                            <option value="3">0</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label>METODE PEMBAYARAN</label></td>
                        <td><select name="metode_pembayaran" id="2">
                            <option value="" disabled selected hidden>Pilih metode pembayaran...</option>    
                            <option value="1">ATM</option>
                            <option value="2">eWallet</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label>BUKTI PEMBAYARAN PENDAFTARAN</label></td>
                        <td><input type="text"  name="bukti_pembayaran_pendaftaran"></td>
                    </tr>
                    <tr>
                        <td><label>NILAI CR</label></td>
                        <td><input type="number" name="nilai_cr" ></td>
                    </tr>
                    <tr>
                        <td><label>NILAI CASHBACK</label></td>
                        <td><input type="number" name="nilai_cashback" ></td>
                    </tr>
                    <tr>
                        <td><label>STATUS MEMBER</label></td>
                        <td><input type="text" name="status_member" ></td>
                    </tr>
                    <tr>
                        <td><label>NO TELP MEMBER</label></td>
                        <td><input type="number" name="no_telp_member" ></td>
                    </tr>
                    <tr>
                        <td><label>EMAIL MEMBER</label></td>
                        <td><input type="text" name="email_member" ></td>
                    </tr>
                    <tr>
                        <td><label>PASSWORD MEMBER</label></td>
                        <td><input type="password" name="password_member" ></td>
                    </tr>
                    <tr>
                        <td><label>ID JABATAN MEMBER</label></td>
                        <td><input type="number" name="id_jabatan_member" ></td>
                    </tr>
                    <tr>
                        <td><label>PUNYA ALAT</label></td>
                        <td><label>Ya</label><input type="radio" name="punya_alat" value="1">
                            <label>Tidak</label><input type="radio" name="punya_alat" value="0"></td>
                    </tr>
                    <tr>
                        <td><label>PUNYA NPWP</label></td>
                        <td><label>Ya</label><input type="radio" name="punya_npwp" value="1">
                            <label>Tidak</label><input type="radio" name="punya_npwp" value="0"></td>
                    </tr>
                    <tr>
                        <td><label>NAMA BANK</label></td>
                        <td><input type="text" name="nama_bank" ></td>
                    </tr>
                    <tr>
                        <td><label>NOMOR REKENING BANK</label></td>
                        <td><input type="number" name="nomor_rekening_bank" ></td>
                    </tr>
                    <tr>
                        <td><label>KARTU MEMBER</label></td>
                        <td><input type="text" name="kartu_member" ></td>
                    </tr>
                    <tr>
                        <td><label>BIOGRAFI MEMBER</label></td>
                        <td><input type="text" name="biografi_member" ></td>
                    </tr>
                    <tr>
                        <td><label>VVIP STATUS</label></td>
                        <td><input type="text" name="vvip_status" ></td>
                    </tr>
                    <tr>
                        <td><label>CHECK CHA</label></td>
                        <td><label>Ya</label><input type="radio" name="check_cha" value="1">
                            <label>Tidak</label><input type="radio" name="check_cha" value="0"></td>
                    </tr>
                    <tr>
                        <td><label>JATAH UPLOAD</label></td>
                        <td><input type="text" name="jatah_upload" ></td>
                    </tr>
                    <tr>
                        <td><label>ACTIVE</label></td>
                        <td><label>Ya</label><input type="radio"name="active" value="1">
                            <label>Tidak</label><input type="radio" name="active" value="0"></td>
                    </tr>
                    <tr>
                        <td><label>USER CREATE</label></td>
                        <td><input type="number" name="user_create" ></td>
                    </tr>
                    <tr>
                        <td><label>USER UPDATE</label></td>
                        <td><input type="number" name="user_update" ></td>
                    </tr>
                    <tr>
                        <td><label>BANK NAME</label></td>
                        <td><input type="text" name="bank_name" ></td>
                    </tr>
                    <tr>
                        <td><input class="save" type="submit" value="Simpan Data" ></td>
                    </tr>        
                </table>   
            </form>
        </div>
    </div>
</div>    
@endsection
