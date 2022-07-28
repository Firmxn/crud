@extends('layouts.basic')

    @section('head')
    <title>Edit Data Member</title>
    @endsection

    @section('body')
    <div>
        <a href="/database-1" class="btn btn-danger ms-4 mt-4"><i class="bi bi-arrow-left me-1"></i>Back</a>
    </div>
    <div class="col-lg-8 mx-auto my-5">	
        <div class="card card-primary card-outline  ">
            <div class="card-header">
                <h3 class="text-center">Create Data Pegawai</h3>
            </div>
            <div class="card-body">
                @foreach($member as $m)
                <form action="/database/update" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div>
                        <input type="hidden" name="id" value="{{ $m -> id }}">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="memberid" class="form-control @error('memberid') is-invalid @enderror" value="{{ $m->memberid }}" placeholder="Member Id">
                        @error('memberid')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="membercode" class="form-control @error('membercode') is-invalid @enderror" value="{{ $m->membercode }}" placeholder="Member Code">
                        @error('membercode')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" value="{{ $m->firstname }}" placeholder="First Name">
                        @error('firstname')
                            <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ $m->lastname }}" placeholder="Last Name">
                        @error('lastname')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="businessunitid" class="form-control @error('businessunitid') is-invalid @enderror" value="{{ $m->businessunitid }}" placeholder="Business Unit Id">
                        @error('businessunitid')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $m->address }}" placeholder="Address">
                        @error('address')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select name="city" class="form-control @error('city') is-invalid @enderror">
                            <option disabled selected hidden>Select a City...</option>
                            <option value="Batam" @if($m->city == 'Batam')selected @endif>Batam</option>
                            <option value="Bintan" @if($m->city == 'Bintan')selected @endif>Bintan</option>
                            <option value="Karimun" @if($m->city == 'Karimun')selected @endif>Karimun</option>
                            <option value="Kepulauan Anambas" @if($m->city == 'Kepulauan Anambas')selected @endif>Kepulauan Anambas</option>
                            <option value="Lingga" @if($m->city == 'Lingga')selected @endif>Lingga</option>
                            <option value="Natuna" @if($m->city == 'Natuna')selected @endif>Natuna</option>
                            <option value="Tanjung Pinang" @if($m->city == 'Tanjung Pinang')selected @endif>Tanjung Pinang</option>
                        </select>
                        @error('city')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select name="a_state" class="form-control @error('a_state') is-invalid @enderror" >
                            <option disabled selected hidden>Select a State...</option>
                            <option value="Indonesia"  @if($m->a_state == 'Indonesia')selected @endif>Indonesia</option>
                        </select>
                        @error('a_state')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="postcode" class="form-control @error('postcode') is-invalid @enderror" value="{{ $m->postcode }}" placeholder="Post Code">
                        @error('postcode')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select name="country" class="form-control @error('country') is-invalid @enderror">
                            <option disabled selected hidden>Select a Country...</option>
                            <option value="Indonesia" @if($m->country == 'Indonesia')selected @endif>Indonesia</option>
                        </select>
                        @error('country')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $m->phone }}" placeholder="Phone">
                        @error('phone')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text"" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $m->email }}" placeholder="email">
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <div class="form-control @error('inactive') is-invalid @enderror"><label class="me-3">Inactive</label>
                            <input type="radio" name="inactive" class="form-check-input" value="1" @if($m->inactive == '1')checked @endif>True</label>
                            <input type="radio" name="inactive" class="form-check-input" value="0" @if($m->inactive == '0')checked @endif>False</label>
                        </div>
                        @error('inactive')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">First Contract</label>
                        <input type="date" name="firstcontract" class="form-control @error('firstcontract') is-invalid @enderror" value="{{ $m->firstcontract }}">
                        @error('firstcontract')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">End Contract</label>
                        <input type="date" name="endcontract" class="form-control @error('endcontract') is-invalid @enderror" value="{{ $m->endcontract }}">
                        @error('endcontract')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="npwp" class="form-control @error('npwp') is-invalid @enderror" value="{{ $m->npwp }}" placeholder="NPWP">
                        @error('npwp')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select name="membertype" class="form-control @error('membertype') is-invalid @enderror">
                            <option disabled selected hidden>Select a Member Type...</option>
                            <option value="Member" @if($m->membertype == 'Member')selected @endif>Member</option>
                            <option value="Non-Member" @if($m->membertype == 'Non-Member')selected @endif>Non-Member</option>
                        </select>
                        @error('membertype')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ $m->username }}" placeholder="Username">
                        @error('username')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="idcardnumber" class="form-control @error('idcardnumber') is-invalid @enderror" value="{{ $m->idcardnumber }}" placeholder="ID Card Number">
                        @error('idcardnumber')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="sponsorid" class="form-control @error('sponsorid') is-invalid @enderror" value="{{ $m->sponsorid }}" placeholder="Sponsor ID">
                        @error('sponsorid')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-control @error('memstatus') is-invalid @enderror" name="memstatus">
                            <option disabled selected hidden>Select a Member Status...</option>
                            <option value="Confirmed" @if($m->memstatus == 'Confirmed')selected @endif>Confirmed</option>
                            <option value="Not-Confirmed" @if($m->memstatus == 'Not-Confirmed')selected @endif>Not-Confirmed</option>
                        </select>
                        @error('memstatus')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Confirmation Date</label>
                        <input type="date" name="confirmationdate" class="form-control @error('confirmationdate') is-invalid @enderror" value="{{ $m->confirmationdate }}">
                        @error('confirmationdate')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Expired Date</label>
                        <input type="date" name="expireddate" class="form-control @error('expireddate') is-invalid @enderror" value="{{ $m->expireddate }}">
                        @error('expireddate')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Avatar Photo</label>
                        <img class="avatarphoto-preview img-fluid mb-3 ms-3 col-sm-3">
                        <input type="file" name="avatarphoto" id="avatarphoto" onchange="previewAvatarphoto()" class="form-control @error('avatarphoto') is-invalid @enderror" value="{{ $m->avatarphoto }}">
                        @error('avatarphoto')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Last Login</label>
                        <input type="date" name="lastlogin" class="form-control @error('lastlogin') is-invalid @enderror" value="{{ $m->lastlogin }}">
                        @error('lastlogin')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="refreshtoken" class="form-control @error('refreshtoken') is-invalid @enderror" value="{{ $m->refreshtoken }}" placeholder="Refresh Token">
                        @error('refreshtoken')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Birthdate</label>
                        <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" value="{{ $m->birthdate }}">
                        @error('birthdate')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="userid" class="form-control @error('userid') is-invalid @enderror" value="{{ $m->userid }}" placeholder="User ID">
                        @error('userid')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">Image Signature</label>
                        <img class="imgsignature-preview img-fluid mb-3 ms-3 col-sm-3">
                        <input type="file" name="imgsignature" id="imgsignature" onchange="previewImgsignature()" class="form-control @error('imgsignature') is-invalid @enderror" value="{{ $m->imgsignature }}">                        
                        @error('imgsignature')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="productid" class="form-control @error('productid') is-invalid @enderror" value="{{ $m->productid }}" placeholder="Product ID">
                        @error('productid')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label ms-3">KTP Photo</label>
                        <img class="ktpphoto-preview img-fluid mb-3 ms-3 col-sm-3">
                        <input type="file" name="ktpphoto" id="ktpphoto" onchange="previewKtpphoto()" class="form-control @error('ktpphoto') is-invalid @enderror" value="{{ $m->ktpphoto }}">
                        @error('ktpphoto')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="accountno" class="form-control @error('accountno') is-invalid @enderror" value="{{ $m->accountno }}" placeholder="Account No">
                        @error('accountno')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select name="bankname" class="form-control @error('bankname') is-invalid @enderror">
                            <option disabled selected hidden>Select a Bank Name...</option>
                            <option value="Bank BCA" @if($m->bankname == 'Bank BCA')selected @endif>Bank BCA</option>
                            <option value="Bank BII" @if($m->bankname == 'Bank BII')selected @endif>Bank BII</option>
                            <option value="Bank BJB" @if($m->bankname == 'Bank BJB')selected @endif>Bank BJB</option>
                            <option value="Bank BNI" @if($m->bankname == 'Bank BNI')selected @endif>Bank BNI</option>
                            <option value="Bank BRI" @if($m->bankname == 'Bank BRI')selected @endif>Bank BRI</option>
                            <option value="Bank Mandiri" @if($m->bankname == 'Bank Mandiri')selected @endif>Bank Mandiri</option>
                        </select>
                        @error('bankname')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- savebutton -->
                    <input class="btn btn-primary mb-4" type="submit" value="Simpan Data" >
                </form>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        function previewAvatarphoto(){
            const avatarphoto = document.querySelector('#avatarphoto');
            const avatarPreview = document.querySelector('.avatarphoto-preview');

            avatarPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(avatarphoto.files[0]);

            oFReader.onload = function(oFREvent) {
                avatarPreview.src = oFREvent.target.result;
            }
        }
        function previewImgsignature(){
            const imgsignature = document.querySelector('#imgsignature');
            const imgPreview = document.querySelector('.imgsignature-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(imgsignature.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
        function previewKtpphoto(){
            const ktpphoto = document.querySelector('#ktpphoto');
            const ktpPreview = document.querySelector('.ktpphoto-preview');

            ktpPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(ktpphoto.files[0]);

            oFReader.onload = function(oFREvent){
                ktpPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection