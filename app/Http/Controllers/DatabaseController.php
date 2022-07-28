<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function member(){
        $member = DB::table('member')->get();
        return view('databases/member', ['member'=>$member]);
    }
    public function database_1()
    {
        $member = DB::table('member')->get();
        return view('databases/database-1',['member'=>$member]);
    }
    public function database_2()
    {
        $member = DB::table('member')->get();
        return view('databases/database-2', ['member'=>$member]);
    }
    public function database_3()
    {
        $member = DB::table('member')->get();
        return view('databases/database-3', ['member'=>$member]);
    }
    public function database_4()
    {
        $member = DB::table('member')->get();
        return view('databases/database-4', ['member'=>$member]);
    }
    public function database_5()
    {
        $member = DB::table('member')->get();
        return view('databases/database-5', ['member'=>$member]);
    }
    public function database_6()
    {
        $member = DB::table('member')->get();
        return view('databases/database-6', ['member'=>$member]);
    }
    public function database_7()
    {
        $member = DB::table('member')->get();
        return view('databases/database-7', ['member'=>$member]);
    }
    public function database_8()
    {
        $member = DB::table('member')->get();
        return view('databases/database-8', ['member'=>$member]);
    }


    public function add()
    {
        return view('option/add');
    }
    public function store(Request $req)
    {
        $this->validate($req, 
        [
            'memberid'=>'required|alpha_num|min:7|max:8|unique:member',
            'membercode'=>'required|numeric|digits_between:9,10|unique:member',
            'firstname'=>'required|alpha|min:3',
            'lastname'=>'required|alpha|min:3',
            'businessunitid'=>'required|alpha_num|min:8|max:9|unique:member',
            'address'=>'required|min:10',
            'city'=>'required',
            'a_state'=>'required',
            'postcode'=>'required|numeric|digits_between:5,6',
            'country'=>'required',
            'phone'=>'required|numeric|digits_between:11,13|unique:member',
            'email'=>'required|email',
            'inactive'=>'required',
            'firstcontract'=>'required',
            'endcontract'=>'required',
            'npwp'=>'required|numeric|digits_between:15,16|unique:member',
            'membertype'=>'required',
            'username'=>'required|alpha_num|min:5|max:10|unique:member',
            'idcardnumber'=>'required|numeric|digits_between:15,16|unique:member',
            'sponsorid'=>'required|alpha_num|min:7|max:8|unique:member',
            'memstatus'=>'required',
            'confirmationdate'=>'required',
            'expireddate'=>'required',
            'avatarphoto'=>'required|image|mimes:jpeg,png,jpg|file|max:2048',
            'lastlogin'=>'required',
            'refreshtoken'=>'required|alpha_num|min:8|max:10|unique:member',
            'birthdate'=>'required',
            'userid'=>'required|alpha_num|min:5|max:6|unique:member',
            'imgsignature'=>'required|image|mimes:jpeg,png,jpg|file|max:2048',
            'productid'=>'required|alpha_num|min:7|max:8|unique:member',
            'ktpphoto'=>'required|image|mimes:jpeg,png,jpg|file|max:2048',
            'accountno'=>'required|numeric|digits_between:10,15|unique:member',
            'bankname'=>'required'
        ]);

        $ava = $req->file('avatarphoto');
		$avaname = $ava->getClientOriginalName();
		$folder = 'image/avatarphoto';
		$ava->move($folder,$avaname);
        
        $sign = $req->file('imgsignature');
		$signname = $sign->getClientOriginalName();
		$folder = 'image/imgsignature';
		$sign->move($folder,$signname);
        
        $ktp = $req->file('ktpphoto');
		$ktpname = $ktp->getClientOriginalName();
		$folder = 'image/ktpphoto';
		$ktp->move($folder,$ktpname);
        
        DB::table('member')->insert
        ([
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
            'inactive' => $req -> inactive,
            'firstcontract' => $req -> firstcontract,
            'endcontract' => $req -> endcontract,
            'npwp' => $req -> npwp,
            'membertype' => $req -> membertype,
            'username' => $req -> username,
            'idcardnumber' => $req -> idcardnumber,
            'sponsorid' => $req -> sponsorid,
            'memstatus' => $req -> memstatus,
            'confirmationdate' => $req -> confirmationdate,
            'expireddate' => $req -> expireddate,
            //ava
            'avatarphoto' => $avaname,
            'lastlogin' => $req -> lastlogin,
            'refreshtoken' => $req -> refreshtoken,
            'birthdate' => $req -> birthdate,
            'userid' => $req -> userid,
            //sign
            'imgsignature' => $signname,
            'productid' => $req -> productid,
            //ktp
            'ktpphoto' => $ktpname,
            'accountno' => $req -> accountno,
            'bankname' => $req -> bankname
        ]);
        return redirect('/database-1');
    }

    public function edit($id)
    {
        $member = DB::table('member')->where('id',$id)->get();
        return view('option/edit',['member'=>$member]);
    }
    public function update(Request $req)
    {
        $this->validate($req, 
        [
            'memberid'=>'required|alpha_num|min:7|max:8',
            'membercode'=>'required|numeric|digits_between:9,10',
            'firstname'=>'required|alpha|min:3',
            'lastname'=>'required|alpha|min:3',
            'businessunitid'=>'required|alpha_num|min:8|max:9',
            'address'=>'required|min:10',
            'city'=>'required',
            'a_state'=>'required',
            'postcode'=>'required|numeric|digits_between:5,6',
            'country'=>'required',
            'phone'=>'required|numeric|digits_between:11,13',
            'email'=>'required|email',
            'inactive'=>'required',
            'firstcontract'=>'required',
            'endcontract'=>'required',
            'npwp'=>'required|numeric|digits_between:15,16',
            'membertype'=>'required',
            'username'=>'required|alpha_num|min:5|max:10',
            'idcardnumber'=>'required|numeric|digits_between:15,16',
            'sponsorid'=>'required|alpha_num|min:7|max:8',
            'memstatus'=>'required',
            'confirmationdate'=>'required',
            'expireddate'=>'required',
            'avatarphoto'=>'required|image|mimes:jpeg,png,jpg|file|max:2048',
            'lastlogin'=>'required',
            'refreshtoken'=>'required|alpha_num|min:8|max:10',
            'birthdate'=>'required',
            'userid'=>'required|alpha_num|min:5|max:6',
            'imgsignature'=>'required|image|mimes:jpeg,png,jpg|file|max:2048',
            'productid'=>'required|alpha_num|min:7|max:8',
            'ktpphoto'=>'required|image|mimes:jpeg,png,jpg|file|max:2048',
            'accountno'=>'required|numeric|digits_between:10,15',
            'bankname'=>'required'
            ]);

        $ava = $req->file('avatarphoto');
        $avaname = $ava->getClientOriginalName();
        $folder = 'image/avatarphoto';
        $ava->move($folder,$avaname);
        
        $sign = $req->file('imgsignature');
        $signname = $sign->getClientOriginalName();
        $folder = 'image/imgsignature';
        $sign->move($folder,$signname);

        $ktp = $req->file('ktpphoto');
        $ktpname = $ktp->getClientOriginalName();
        $folder = 'image/ktpphoto';
        $ktp->move($folder,$ktpname);
        
        DB::table('member')->where('id',$req->id)->update
        ([
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
            'inactive' => $req -> inactive,
            'firstcontract' => $req -> firstcontract,
            'endcontract' => $req -> endcontract,
            'npwp' => $req -> npwp,
            'membertype' => $req -> membertype,
            'username' => $req -> username,
            'idcardnumber' => $req -> idcardnumber,
            'sponsorid' => $req -> sponsorid,
            'memstatus' => $req -> memstatus,
            'confirmationdate' => $req -> confirmationdate,
            'expireddate' => $req -> expireddate,
            //ava
            'avatarphoto' => $avaname,
            'lastlogin' => $req -> lastlogin,
            'refreshtoken' => $req -> refreshtoken,
            'birthdate' => $req -> birthdate,
            'userid' => $req -> userid,
            //sign
            'imgsignature' => $signname,
            'productid' => $req -> productid,
            //ktp
            'ktpphoto' => $ktpname,
            'accountno' => $req -> accountno,
            'bankname' => $req -> bankname
        ]);
        return redirect('/database-1');
    }

    public function delete($id){
        DB::table('member')->where('id',$id)->delete();
        return redirect()->back();           
    }
}
