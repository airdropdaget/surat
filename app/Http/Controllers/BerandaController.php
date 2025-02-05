<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
use Carbon;
class BerandaController extends Controller
{ 
    public function index ()
    {
        return view ('layout.app');
    }
    public function permasalahan ()
    {
    	$item = DB::table('surat')->get();
    	return view ('permasalahan.tables_permasalahan',['surat' => $item]);
    }
    public function user (){
    	$user = DB::table('users')->get();
        return view ('permasalahan.tables_user',['users' => $user]);
    }
    public function history (){
    	$item = DB::table('kasus')->get();
        return view ('permasalahan.tables_history',['kasus' => $item]);
    }
    public function show($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih
    $pegawai = DB::table('history')->where('id_kasus',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('permasalahan.show',['history' => $pegawai]);
    }
    public function charts (){
    	return view('permasalahan.charts');
    }
    public function ubah_password (){
    	return view('permasalahan.ubah_password');
    }
    public function logout (){
    	return view('permasalahan.logout');
    }
    public function forms (){
    	$pengolah = DB::table('pengolah')->get();
    	return view ('permasalahan.forms',['pengolah' => $pengolah]);
    }
    public function simpan(Request $request) {
        // Masukkan data ke dalam tabel surat
        DB::table('surat')->insert([
            'id' => $request->id,
            'pemohon' => $request->pemohon,
            'no' => $request->no,
            'tgl' => $request->tgl,
            'link' => $request->link,
            'agenda' => $request->agenda,
            'pengolah' => $request->pengolah
        ]);
    
        // Definisikan variabel yang digunakan untuk pesan
        $nomorPengolah = $request->pengolah_dropdown; // Ubah sesuai dengan nama penelaah yang sebenarnya
        $nomor = $request->no;
        $link = $request->link;
        $pengolah =$request->pengolah;
    
        // Inisialisasi cURL
        $curl = curl_init();
    
        // Pengaturan opsi cURL
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $nomorPengolah,
                'message' => "Hallo $pengolah, ada surat baru nih nomor $nomor, ini link dokumennya ya $link"
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: VKzQmQqAY9CvrzanDeTn'
            ),
        ));
    
        // Eksekusi cURL dan simpan respons
        $response = curl_exec($curl);
    
    
        // Tutup sesi cURL
        curl_close($curl);
    
        // Redirect ke halaman forms
        return redirect('/forms');
    }
    
    // method untuk edit data pegawai
	public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('kasus')->where('id_kasus',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('permasalahan.forms_edit',['kasus' => $pegawai]);
	}
    public function update(Request $request){
        DB::table('kasus')->where('id_kasus', $request->id)->update([
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kasus' => $request->kasus,
            'ringkasan' => $request->ringkasan,
            'tindak' => $request->tindak,
            'hambatan' => $request->hambatan,
            'pic' => $request->pic,
            'pembuat' => $request->pembuat,
            'tanggal' => Carbon\Carbon::now(),
            'updates' => Carbon\Carbon::now()
        ]);

        DB::table('history')->insert([
            'id_kasus' => $request->id,
            'history' => $request->ringkasan,
            'history2' => $request->tindak,
            'history3' => $request->hambatan,
            'rubah' => Carbon\Carbon::now()
        ]);
        return redirect ('/permasalahan');
    }
    public function detail($id){
        $detail = DB::table('kasus')->where('id_kasus',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('permasalahan.forms_detail',['kasus' => $detail]);
      
    }  
    
}