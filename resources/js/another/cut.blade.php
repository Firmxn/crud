                <!-- post data -->
<div>
                'id_member'=>$req->id_member,
                'kode_member'=>$req->kode_member,                       
                'nama_member'=>$req->nama_member,
                'alamat_member'=>$req->alamat_member,
                'id_kota_tinggal'=>$req->id_kota_tinggal,
                'tempat_lahir_member'=>$req->tempat_lahir_member,
                'tgl_lahir_member'=>$req->tgl_lahir_member,
                'jns_kelamin'=>$req->jns_kelamin,
                'tgl_bergabung'=>$req->tgl_bergabung,
                'foto_member'=>$req->foto_member,
                'jns_dokumen'=>$req->jns_dokumen,
                'nomor_id_dokumen'=>$req->nomor_id_dokumen,
                'foto_dokumen'=>$req->foto_dokumen,
                'id_member_sponsor'=>$req->id_member_sponsor,
                'id_level_member'=>$req->id_level_member,
                'id_gudang'=>$req->id_gudang,
                'id_paket_pendaftaran'=>$req->id_paket_pendaftaran,
                'paket_pendaftaran'=>$req->paket_pendaftaran,
                'harga_paket_pendaftaran'=>$req->harga_paket_pendaftaran,
                'metode_pembayaran'=>$req->metode_pembayaran,
                'bukti_pembayaran_pendaftaran'=>$req-> bukti_pembayaran_pendaftaran,
                'nilai_cr'=>$req-> nilai_cr,
                'nilai_cashback'=>$req-> nilai_cashback,
                'status_member'=>$req-> status_member,
                'no_telp_member'=>$req-> no_telp_member,
                'email_member'=>$req-> email_member,
                'password_member'=>$req-> password_member,
                'id_jabatan_member'=>$req-> id_jabatan_member,
                'punya_alat'=>$req-> punya_alat,
                'punya_npwp'=>$req-> punya_npwp,
                'id_bank'=>$req-> id_bank,
                'nama_bank'=>$req-> nama_bank,
                'nomor_rekening_bank'=>$req-> nomor_rekening_bank,
                'kartu_member'=>$req-> kartu_member,
                'biografi_member'=>$req-> biografi_member,
                'vvip_status'=>$req->vvip_status,
                'check_cha'=>$req->check_cha,
                'jatah_upload'=>$req->jatah_upload,
                'active'=>$req->active,
                'user_create'=>$req->user_create,
                'time_update'=>$req->time_create,
                'time_create'=>$req->time_create,
                'time_create'=>$req->time_create,
                'user_update'=>$req->time_update,
                'bank_name'=>$req->bank_name,
</div>

                <!-- migrate -->
<div>
                $table->enum('paket_pendaftaran',['Paket GIS 2020 - 600.000','Paket GIS 2019 - 480.000','Paket member lama'])->nullable();
            $table->enum('harga_paket_pendaftaran',['600000','480000','0'])->nullable();
            $table->enum('metode_pembayaran',['ATM','eWallet'])->nullable();
            $table->string('bukti_pembayaran_pendaftaran')->nullable();
            $table->integer('nilai_cr')->nullable();
            $table->integer('nilai_cashback')->nullable();
            $table->integer('status_member')->nullable();//td
            $table->integer('no_telp_member')->nullable();
            $table->string('email_member')->nullable();
            $table->string('password_member')->nullable();//td
            $table->integer('id_jabatan_member')->nullable();
            $table->boolean('punya_alat')->nullable();
            $table->boolean('punya_npwp')->nullable();
            $table->integer('id_bank')->nullable();
            $table->string('nama_bank')->nullable();
            $table->integer('nomor_rekening_bank')->nullable();//td
            $table->string('kartu_member')->nullable();
            $table->string('biografi_member')->nullable();
            $table->string('vvip_status')->nullable();
            $table->boolean('check_cha')->nullable();
            $table->integer('jatah_upload')->nullable();
            $table->boolean('active')->nullable();
            $table->integer('user_create')->nullable();
            $table->dateTime('time_create')->nullable();
            $table->dateTime('time_update')->nullable();
            $table->integer('user_update')->nullable();
            $table->string('bank_name')->nullable();
</div>
<div>            
            <!-- error -->
            @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br/>
                            @endforeach
                        </div>
                    @endif

                    <!-- create data -->
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Tanggal Lahir Member</label>
                        <input type="date" name="tgl_lahir_member" class="form-control" placeholder="Tanggal Lahir Member">
                    </div>
                    <!-- <div class="form-group mb-3">
                        <input type="text" name="jns_kelamin" class="form-control" placeholder="Jenis Kelamin">
                    </div> -->
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Jenis Kelamin</label>
                        <div class="form-control">
                            <div class="form-check form-check-inline ms-3">
                                <input class="form-check-input" type="radio" name="jns_kelamin" value="Laki-laki">
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jns_kelamin" value="Perempuan">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Tanggal Bergabung</label>
                        <input type="date" name="tgl_bergabung" class="form-control" placeholder="Tanggal Bergabung">
                    </div>
    
                    <div class="fileUpload mb-3 btn btn-primary mb-4">
                        <span>Upload</span>
                        <input name="foto_member" id="foto_member" type="file" class="upload" />
                    </div>
                    <img class="img-preview img-fluid">
                    <input name="foto_member" id="foto_member" type="text" placeholder="Foto Member Name" onchange="previewImage()" >
                    <!-- <div class="mb-3">
                        <label for="foto_member" class="form-label">Foto Member</label>
                        <input type="file" id="foto_member" class="form-control" name="foto_member">
                    </div> -->

                    <div class="form-group mb-3">
                        <input type="text" name="jns_dokumen" class="form-control" placeholder="Jenis Dokumen">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="nomor_id_dokumen" class="form-control" placeholder="Nomor Id Dokumen">
                    </div>

                    <div class="fileUpload mb-3 btn btn-primary mb-4">
                        <span>Upload</span>
                        <input name="foto_dokumen" id="uploadBtn" type="file" class="upload" />
                    </div>
                    <input name="foto_dokumen" id="uploadFile" placeholder="Foto Dokumen Name"/>

                    <div class="form-group mb-3">
                        <input type="text" name="id_member_sponsor" class="form-control" placeholder="Id Member Sponsor">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="id_level_member" class="form-control" placeholder="Id Level Member">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="id_gudang" class="form-control" placeholder="Id Gudang">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="id_paket_pendaftaran" class="form-control" placeholder="Id Paket Pendaftaran">
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control" name="paket_pendaftaran" id="3" >
                            <option disabled selected hidden>Pilih Paket Pendaftaran...</option>
                            <option value="1">Paket GIS 2020</option>
                            <option value="2">Paket GIS 2019</option>
                            <option value="3">Paket Member Lama</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control" name="harga_paket_pendaftaran" id="3" >
                            <option disabled selected hidden>Pilih Harga Paket Pendaftaran...</option>
                            <option value="1">600.000</option>
                            <option value="2">480.000</option>
                            <option value="3">0</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control" name="metode_pembayaran" id="2">
                            <option disabled selected hidden>Pilih metode pembayaran...</option>    
                            <option value="1">ATM</option>
                            <option value="2">eWallet</option>
                        </select>
                    </div>

                    <div class="fileUpload mb-3 btn btn-primary mb-4">
                        <span>Upload</span>
                        <input name="bukti_pembayaran_pendaftaran" id="uploadBtn" type="file" class="upload" />
                    </div>
                    <input name="bukti_pembayaran_dokumen" id="uploadFile" placeholder="Bukti Pembayaran"/>

                    <div class="form-group mb-3">
                        <input type="text" name="nilai_cr" class="form-control" placeholder="Nilai CR">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="nilai_cashback" class="form-control" placeholder="Nilai Cashback">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="status_member" class="form-control" placeholder="Status Member">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="no_telp_member" class="form-control" placeholder="No Telpon Member">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="email_member" class="form-control" placeholder="Email Member">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="password_member" class="form-control" placeholder="Password Member">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="id_jabatan_member" class="form-control" placeholder="Id Jabatan Member">
                    </div>

                    <div class="form-group mb-3">
                        <fieldset class="form-control">Punya Alat
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="punya_alat" value="1">
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="punya_alat" value="0">
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-group mb-3">
                        <fieldset class="form-control">Punya NPWP
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="punya_alat" value="1">
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="punya_alat" value="0">
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </fieldset>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="id_bank" class="form-control" placeholder="Id Bank">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="nomor_rekening_bank" class="form-control" placeholder="Nomor Rekening Bank">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="kartu_member" class="form-control" placeholder="Kartu Member">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="biografi_member" class="form-control" placeholder="Biografi Member">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="vvip_status" class="form-control" placeholder="VVIP Status">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="check_cha" class="form-control" placeholder="Check Cha">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="jatah_upload" class="form-control" placeholder="Jatah Upload">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="active" class="form-control" placeholder="Active">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="user_create" class="form-control" placeholder="User Create">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Time Create</label>
                        <input type="date" name="time_create" class="form-control" placeholder="Time Create">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Time Update</label>
                        <input type="date" name="time_update" class="form-control" placeholder="Time Update">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="user_update" class="form-control" placeholder="User Update">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="bank_name" class="form-control" placeholder="Bank Name">
                    </div>
</div>
<div>
    
    <!-- //previewFail -->
    <script>
        function previewImage()
        {
            const image = document.querySelector('#foto_member');
            const imgPreview = document.querySelector('.img-preview');

            imagePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result
            }
        }
        
    </script>
</div>


<!-- store -->
DB::table('member')->insert([
            'memberid'=>$req->memberid,
            'membercode'=>$req->membercode,                       
            'firstname'=>$req->firstname,
            'lastname'=>$req->lastname,
            'businessunitid'=>$req->businessunitid,

            'address'=>$req->address,
            'city'=>$req->city,

            'a_state' => $req -> a_state,
            'postcode' => $req -> postcode,

            'country' => $req -> country,
            'phone' => $req -> phone,

            'email' => $req -> email,
            'website' => $req -> website,
            'salutation' => $req -> salutation,
            'contact' => $req -> contact,
            'remarks' => $req -> remarks,
            
            'inactive' => $req -> inactive,
            'opadd' => $req -> opadd,
            'pcadd' => $req -> pcadd,
            'luadd' => $req -> luadd,
            'opedit' => $req -> opedit,
            'pcedit' => $req -> pcedit,
            'luedit' => $req -> luedit,
            'dlt' => $req -> dlt,
            'firstcontract' => $req -> firstcontract,
            'endcontract' => $req -> endcontract,
            'npwp' => $req -> npwp,
            'membertype' => $req -> membertype,
            'username' => $req -> username,
            'pwd' => $req -> pwd,
            'idcardnumber' => $req -> idcardnumber,
            'sponsorid' => $req -> sponsorid,
            'memstatus' => $req -> memstatus,
            'confirmationdate' => $req -> confirmationdate,
            'expireddate' => $req -> expireddate,
            'avatarphoto' => $req -> avatarphoto,
            'posisi' => $req -> posisi,
            'quittingdate' => $req -> quittingdate,
            'smssentdate' => $req -> smssentdate,
            'lockedby_memberid' => $req -> lockedby_memberid,
            'lastlogin' => $req -> lastlogin,
            'refreshtoken' => $req -> refreshtoken,
            'rememberme' => $req -> rememberme,
            'isright' => $req -> isright,
            'childno' => $req -> childno,
            'birthdate' => $req -> birthdate,
            'userid' => $req -> userid,
            'imgsignature' => $req -> imgsignature,
            'productid' => $req -> productid,
            'ktpphoto' => $req -> ktpphoto,
            'accountno' => $req -> accountno,
            'bankname' => $req -> bankname,
            'bankbranch' => $req -> bankbranch,
        ]);
<div>
            <!-- file -->
            // $file = $req -> file('foto_member');
        //     $tujuan_upload = 'image';
        //     $file->move($tujuan_upload,$file->getClientOriginalName());
            

        <!-- message -->
        The membercode must be a number.
        The memberid field is required.
        The memberid must be at least 7 characters.
</div>



        <!-- validate -->
        $this->validate($req, [
            'memberid'=>'required|alpha_num',
            'membercode'=>'required|numeric',
            'firstname'=>'reqired|alpha',
            'lastname'=>'required|alpha',
            'businessunitid'=>'required|alpha_num',

            'address'=>'required|alpha_num',
            'city'=>'required',

            'a_state'=>'required',
            'postcode'=>'required|numeric',

            'country'=>'required',
            'phone'=>'required|numeric',

            'email'=>'required|email',
            'website'=>'required|alpha',
            'salutation'=>'required|alpha',
            'contact'=>'required|numeric',
            'remarks'=>'required|numeric',

            'inactive'=>'required',
            'opadd'=>'required|alpha',
            'pcadd'=>'required|alpha',
            'luadd'=>'required',
            'opedit'=>'required|alpha',
            'pcedit'=>'required|alpha',
            'luedit'=>'required',
            'dlt'=>'required',
            'firstcontract'=>'required',
            'endcontract'=>'required',
            'npwp'=>'required|numeric',
            'membertype'=>'required',
            'username'=>'required|alpha_num',
            'pwd'=>'required|alpha',
            'idcardnumber'=>'required|numeric',
            'sponsorid'=>'required|alpha_num',
            'memstatus'=>'required',
            'confirmationdate'=>'required',
            'expireddate'=>'required',
            'avatarphoto'=>'required|alpha',
            'position'=>'required|alpha',
            'quittingdate'=>'required',
            'smssentdate'=>'required',
            'lockedby_memberid'=>'required',
            'lastlogin'=>'required',
            'refreshtoken'=>'required|alpha',
            'rememberme'=>'required',
            'isright'=>'required',
            'childno'=>'required|alpha',
            'birthdate'=>'required',
            'userid'=>'required|alpha_num',
            'imgsignature'=>'required|alpha',
            'productid'=>'required|alpha_num',
            'ktpphoto'=>'required|alpha',
            'accountno'=>'required|numeric',
            'bankname'=>'required',
            'bankbranch'=>'required|alpha'
        ], $message);




        
                    <div class="form-group mb-3">
                        <input type="text" name="membercode" class="form-control @error('lastname') is-invalid @enderror @error('membercode') is-invalid @enderror" value="{{ old('membercode') }}" placeholder="Member Code">
                        @error('membercode')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}" placeholder="First Name">
                        @error('firstname')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}" placeholder="Last Name">
                        @error('lastname')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="businessunitid" class="form-control @error('businessunitid') is-invalid @enderror" value="{{ old('businessunitid') }}" placeholder="Business Unit Id">
                        @error('businessunitid')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" placeholder="Address">
                        @error('address')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <select class="form-control @error('city') is-invalid @enderror" name="city" id="3" >
                            <option disabled selected hidden>Select a City...</option>
                            <option>Jakarta</option>
                            <option>Bandung</option>
                            <option>Batam</option>
                        </select>
                        @error('city')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control @error('a_state') is-invalid @enderror" name="a_state" id="1" >
                            <option disabled selected hidden>Select a State...</option>
                            <option>Indonesia</option>
                        </select>
                        @error('a_state')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="postcode" class="form-control @error('postcode') is-invalid @enderror" value="{{ old('postcode') }}" placeholder="Post Code">
                        @error('postcode')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <select class="form-control @error('country') is-invalid @enderror" name="country" id="1" >
                            <option disabled selected hidden>Select a Country...</option>
                            <option>Indonesia</option>
                        </select>
                        @error('country')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Phone">
                        @error('phone')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="text"" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="email">
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text"" name="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('email') }}" placeholder="website">
                        @error('website')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text"" name="salutation" class="form-control @error('salutation') is-invalid @enderror" value="{{ old('email') }}" placeholder="salutation">
                        @error('salutation')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text"" name="contact" class="form-control @error('contact') is-invalid @enderror" value="{{ old('email') }}" placeholder="contact">
                        @error('contact')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text"" name="email" class="form-control @error('remarks') is-invalid @enderror" value="{{ old('email') }}" placeholder="remarks">
                        @error('remarks')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <fieldset class="form-control @error('inactive') is-invalid @enderror">Inactive
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inactive" value="T">
                                <label class="form-check-label">True</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inactive" value="F">
                                <label class="form-check-label">False</label>
                            </div>
                        </fieldset>
                        @error('inactive')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="opadd" class="form-control @error('opadd') is-invalid @enderror" placeholder="Opadd">
                        @error('opadd')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="pcadd" class="form-control @error('pcadd') is-invalid @enderror" placeholder="Pcadd">
                        @error('pcadd')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Lu Add</label>
                        <input type="date" name="luadd" class="form-control @error('luadd') is-invalid @enderror" placeholder="Luadd">
                        @error('luadd')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="opedit" class="form-control @error('opedit') is-invalid @enderror" placeholder="Opedit">
                        @error('opedit')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="pcedit" class="form-control @error('pcedit') is-invalid @enderror" placeholder="Pcedit">
                        @error('pcedit')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3"></label>
                        <input type="date" name="luedit" class="form-control @error('luedit') is-invalid @enderror" placeholder="Luedit">
                        @error('luedit')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <fieldset class="form-control @error('dlt') is-invalid @enderror">DLT
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dlt" value="T">
                                <label class="form-check-label">True</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="dlt" value="F">
                                <label class="form-check-label">False</label>
                            </div>
                        </fieldset>
                        @error('businessunitid')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">First Contract</label>
                        <input type="date" name="firstcontract" class="form-control @error('firstcontract') is-invalid @enderror" value="{{ old('firstcontract') }}">
                        @error('firstcontract)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">End Contract</label>
                        <input type="date" name="endcontract" class="form-control @error('endcontract') is-invalid @enderror" value="{{ old('endcontract') }}">
                        @error('endcontract')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="npwp" class="form-control @error('npwp') is-invalid @enderror" value="{{ old('npwp') }}" placeholder="NPWP">
                        @error('npwp)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control @error('membertype') is-invalid @enderror" name="membertype" id="2">
                            <option disabled selected hidden>Select a Member Type...</option>
                            <option>MEMBER</option>
                            <option>NON-MEMBER</option>
                        </select>
                        @error('membertype)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username">
                        @error('username')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="pwd" class="form-control @error('pwd') is-invalid @enderror" value="{{ old('pwd') }}" placeholder="PWD">
                        @error('pwd')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="idcardnumber" class="form-control @error('idcardnumber') is-invalid @enderror" value="{{ old('idcardnumber') }}" placeholder="ID Card Number">
                        @error('idcardnumber')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="sponsorid" class="form-control @error('sponsorid') is-invalid @enderror" value="{{ old('sponsorid') }}" placeholder="Sponsor ID">
                        @error('sponsorid)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control @error('memstatus') is-invalid @enderror" name="memstatus" id="2">
                            <option disabled selected hidden>Select a Member Status...</option>
                            <option>CONFIRMED</option>
                            <option>NOT-CONFIRMED</option>
                        </select>
                        @error('memstatus)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Confirmation Date</label>
                        <input type="date" name="confirmationdate" class="form-control @error('confirmationdate') is-invalid @enderror" value="{{ old('confirmationdate') }}">
                        @error('confirmationdate')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Expired Date</label>
                        <input type="date" name="expireddate" class="form-control @error('expireddate') is-invalid @enderror" value="{{ old('expireddate') }}">
                        @error('expireddate')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Avatar Photo</label>
                        <input type="file" name="avatarphoto" class="form-control @error('avatarphoto') is-invalid @enderror" value="{{ old('avatarphoto') }}">
                        @error('avatarphoto')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}" placeholder="Position">
                        @error('position)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Quitting Date</label>
                        <input type="date" name="quittingdate" class="form-control @error('quittingdate') is-invalid @enderror" value="{{ old('quittingdate') }}">
                        @error('quittingdate)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">SMS Sent Date</label>
                        <input type="date" name="smssentdate" class="form-control @error('smssentdate') is-invalid @enderror" value="{{ old('smssentdate') }}">
                        @error('smssentdate)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control @error('lockedby_memberid') is-invalid @enderror" name="lockedby_memberid" id="2">
                            <option disabled selected hidden>Select a Locked by Member ID...</option>
                            <option>LOCKED</option>
                            <option>UNLLOCKED</option>
                        </select>
                        @error('lockedby_memberid)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Last Login</label>
                        <input type="date" name="lastlogin" class="form-control @error('lastlogin') is-invalid @enderror" value="{{ old('lastlogin') }}">
                        @error('lastlogin')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="refreshtoken" class="form-control @error('refreshtoken') is-invalid @enderror" value="{{ old('refreshtoken') }}" placeholder="Refresh Token">
                        @error('refreshtoken')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control @error('rememberme') is-invalid @enderror" name="rememberme" id="2">
                            <option disabled selected hidden>Select a Remember Me...</option>
                            <option>REMEMBER</option>
                            <option>DO NOT REMEMBER</option>
                        </select>
                        @error('rememberme')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <fieldset class="form-control @error('isright') is-invalid @enderror">Is Right
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="isright" value="T">
                                <label class="form-check-label">True</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="isright" value="F">
                                <label class="form-check-label">False</label>
                            </div>
                        </fieldset>
                        @error('isright)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="childno" class="form-control @error('childno') is-invalid @enderror" value="{{ old('childno') }}" placeholder="Child No">
                        @error('childno)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Birthdate</label>
                        <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" value="{{ old('birthdate') }}">
                        @error('birthdate)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="userid" class="form-control @error('userid') is-invalid @enderror" value="{{ old('userid') }}" placeholder="User ID">
                        @error('userid')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="imgsignature" class="form-control @error('imgsignature') is-invalid @enderror" value="{{ old('imgsignature') }}" placeholder="IMG Signature">
                        @error('imgsignature)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="productid" class="form-control @error('productid') is-invalid @enderror" value="{{ old('productid') }}" placeholder="Product ID">
                        @error('productid')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="ktpphoto" class="form-control @error('ktpphoto') is-invalid @enderror" value="{{ old('ktpphoto') }}" placeholder="KTP Photo">
                        @error('ktpphoto')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="accountno" class="form-control @error('accountno') is-invalid @enderror" value="{{ old('accountno') }}" placeholder="Account No">
                        @error('accountno')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control @error('bankname') is-invalid @enderror" name="bankname" id="6">
                            <option disabled selected hidden>Select a Bank Name...</option>
                            <option>BANK BRI</option>
                            <option>BANK BJB</option>
                            <option>BANK BCA</option>
                            <option>BANK MANDIRI</option>
                            <option>BANK BNI</option>
                            <option>BANK BII</option>
                        </select>
                        @error('bankname)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="bankbranch" class="form-control @error('bankbranch') is-invalid @enderror" value="{{ old('bankbranch') }}" placeholder="Bank Branch">
                        @error('bankbranch)
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>