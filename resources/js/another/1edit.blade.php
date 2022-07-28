<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/tambahEditData.css">
    <title>Document</title>

</head>
<body>
    @foreach($member as $m)
    <form action="/database/update" method="post">
        {{csrf_field()}}
        <table cellpadding="8">
            <input type="hidden" name="id" value="{{$m->id}}">
            <tr>
                <td><label>ID MEMBER</label></td>
                <td><input type="number" name="id_member" value="{{$m->id_member}}"></td>
            </tr>
            <tr>
                <td><label>KODE MEMBER</label></td>
                <td><input type="number" name="kode_member" value="{{$m->kode_member}}" ></td>
            </tr>
            <tr>
                <td><label>NAMA MEMBER</label> </td>
                <td><input type="text" name="nama_member"  value="{{$m->nama_member}}"></td>
            </tr>
            <tr>
                <td><label>ALAMAT MEMBER</label></td>
                <td><input type="text" name="alamat_member" value="{{$m->alamat_member}}" ></td>
            </tr>
            <tr>
                <td><label>ID KOTA TINGGAL</label></td>
                <td><input type="number" name="id_kota_tinggal" value="{{$m->id_kota_tinggal}}" ></td>
            </tr>
            <tr>
                <td><label>TEMPAT LAHIR MEMBER</label></td>
                <td><input type="text" name="tempat_lahir_member" value="{{$m->tempat_lahir_member}}" ></td>
            </tr>
            <tr>
                <td><label>TGL LAHIR MEMBER</label></td>
                <td><input type="date" name="tgl_lahir_member" value="{{$m->tgl_lahir_member}}" ></td>
            </tr>
            <tr>
                <td><label>JNS KELAMIN</label></td>
                <td><label>Laki-laki</label><input type="radio" name="jns_kelamin" value="1" value="{{$m->jns_kelamin}}" >
                    <label>Perempuan</label><input type="radio" name="jns_kelamin" value="0" value="{{$m->jns_kelamin}}">
                </td>
            </tr>
            <tr>
                <td><label>TGL BERGABUNG</label></td>
                <td><input type="date" name="tgl_bergabung" value="{{$m->tgl_bergabung}}"></td>
            </tr>
            <tr>
                <td><label>FOTO MEMBER</label></td>
                <td><input type="text" name="foto_member"value="{{$m->foto_member}}" ></td>            
            </tr>         
            <tr>
                <td><label>JNS DOKUMEN</label></td>
                <td><input type="text" name="jns_dokumen" value="{{$m->jns_dokumen}}"></td>
            </tr>      
            <tr>
                <td><label>NOMOR ID DOKUMEN</label></td>
                <td><input type="number" name="nomor_id_dokumen" value="{{$m->nomor_id_dokumen}}"></td>
            </tr>
            <tr>
                <td><label>FOTO DOKUMEN</label></td>
                <td><input type="text" name="foto_dokumen" value="{{$m->foto_dokumen}}"></td>
            </tr>
            <tr>
                <td><label>ID MEMBER SPONSOR</label></td>
                <td><input type="number" name="id_member_sponsor" value="{{$m->id_member_sponsor}}"></td>
            </tr>
            <tr>
                <td><label>ID LEVEL MEMBER</label></td>
                <td><input type="number" name="id_level_member" value="{{$m->id_level_member}}"></td>
            </tr>      
            <tr>
                <td><label>ID GUDANG</label></td>
                <td><input type="number" name="id_gudang" value="{{$m->id_gudang}}"></td>
            </tr>
            <tr>
                <td><label>ID PAKET PENDAFTARAN</label></td>
                <td><input type="number" name="id_paket_pendaftaran" value="{{$m->id_paket_pendaftaran}}"></td>
            </tr>      
            <tr>
                <td><label>PAKET PENDAFTARAN</label></td>
                <td><select name="paket_pendaftaran" id="3" value="{{$m->paket_pendaftaran}}" >
                    <option value="1">Paket GIS 2020 - 600.000</option>
                    <option value="2">Paket GIS 2019 - 480.000</option>
                    <option value="3">Paket Member Lama</option>
                </select></td>
            </tr>
            <tr>
                <td><label>HARGA PAKET PENDAFTARAN</label></td>
                <td><select name="harga_paket_pendaftaran" id="3">
                    <option value="1" value="{{$m->harga_paket_pendaftaran}}">600000</option>
                    <option value="2" value="{{$m->harga_paket_pendaftaran}}">480000</option>
                    <option value="3" value="{{$m->harga_paket_pendaftaran}}">0</option>
                </select></td>
            </tr>
            <tr>
                <td><label>METODE PEMBAYARAN</label></td>
                <td><select name="metode_pembayaran" id="2">  
                    <option value="1" value="{{$m->metode_pembayaran}}">ATM</option>
                    <option value="2" value="{{$m->metode_pembayaran}}">eWallet</option>
                </select></td>
            </tr>
            <tr>
                <td><label>BUKTI PEMBAYARAN PENDAFTARAN</label></td>
                <td><input type="text"  name="bukti_pembayaran_pendaftaran" value="{{$m->bukti_pembayaran_pendaftaran}}"></td>
            </tr>
            <tr>
                <td><label>NILAI CR</label></td>
                <td><input type="number" name="nilai_cr" value="{{$m->nilai_cr}}"></td>
            </tr>
            <tr>
                <td><label>NILAI CASHBACK</label></td>
                <td><input type="number" name="nilai_cashback" value="{{$m->nilai_cashback}}"></td>
            </tr>
            <tr>
                <td><label>STATUS MEMBER</label></td>
                <td><input type="text" name="status_member" value="{{$m->status_member}}"></td>
            </tr>
            <tr>
                <td><label>NO TELP MEMBER</label></td>
                <td><input type="number" name="no_telp_member" value="{{$m->no_telp_member}}"></td>
            </tr>
            <tr>
                <td><label>EMAIL MEMBER</label></td>
                <td><input type="text" name="email_member" value="{{$m->email_member}}"></td>
            </tr>
            <tr>
                <td><label>PASSWORD MEMBER</label></td>
                <td><input type="password" name="password_member" value="{{$m->password_member}}"></td>
            </tr>
            <tr>
                <td><label>ID JABATAN MEMBER</label></td>
                <td><input type="number" name="id_jabatan_member" value="{{$m->id_jabatan_member}}"></td>
            </tr>
            <tr>
                <td><label>PUNYA ALAT</label></td>
                <td><label>Ya</label><input type="radio" name="punya_alat" value="1" value="{{$m->punya_alat}}">
                    <label>Tidak</label><input type="radio" name="punya_alat" value="0" value="{{$m->punya_alat}}"></td>
            </tr>
            <tr>
                <td><label>PUNYA NPWP</label></td>
                <td><label>Ya</label><input type="radio" name="punya_npwp" value="1" value="{{$m->punya_npwp}}">
                    <label>Tidak</label><input type="radio" name="punya_npwp" value="0" value="{{$m->punya_npwp}}"></td>
            </tr>
            <tr>
                <td><label>NAMA BANK</label></td>
                <td><input type="text" name="nama_bank" value="{{$m->nama_bank}}"></td>
            </tr>
            <tr>
                <td><label>NOMOR REKENING BANK</label></td>
                <td><input type="number" name="nomor_rekening_bank" value="{{$m->nomor_rekening_bank}}"></td>
            </tr>
            <tr>
                <td><label>KARTU MEMBER</label></td>
                <td><input type="text" name="kartu_member" value="{{$m->kartu_member}}"></td>
            </tr>
            <tr>
                <td><label>BIOGRAFI MEMBER</label></td>
                <td><input type="text" name="biografi_member" value="{{$m->biografi_member}}"></td>
            </tr>
            <tr>
                <td><label>VVIP STATUS</label></td>
                <td><input type="text" name="vvip_status" value="{{$m->vvip_status}}"></td>
            </tr>
            <tr>
                <td><label>CHECK CHA</label></td>
                <td><label></label><input type="radio" name="check_cha" value="1" value="{{$m->check_cha}}"> 
                    <label></label><input type="radio" name="check_cha" value="0" value="{{$m->check_cha}}"></td>
            </tr>
            <tr>
                <td><label>JATAH UPLOAD</label></td>
                <td><input type="text" name="jatah_upload" value="{{$m->jatah_upload}}"></td>
            </tr>
            <tr>
                <td><label>ACTIVE</label></td>
                <td><label>Ya</label><input type="radio"name="active" value="1" value="{{$m->active}}">
                    <label>Tidak</label><input type="radio" name="active" value="0" value="{{$m->active}}"></td>
            </tr>
            <tr>
                <td><label>USER CREATE</label></td>
                <td><input type="text" name="user_create" value="{{$m->user_create}}" ></td>
            </tr>
            <tr>
                <td><label>USER UPDATE</label></td>
                <td><input type="text" name="user_update" value="{{$m->user_update}}"></td>
            </tr>
            <tr>
                <td><label>BANK NAME</label></td>
                <td><input type="text" name="bank_name" value="{{$m->bank_name}}"></td>
            </tr>
            <tr>
                <td><input class="save" type="submit" value="Simpan Data" ></td>
            </tr>        
        </table>   
    </form>
    @endforeach
</body>
</html>