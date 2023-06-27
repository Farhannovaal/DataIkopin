<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;
use App\Http\Requests\StoremahasiswaRequest;
use App\Http\Requests\UpdatemahasiswaRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
 
    public function index(Request $request)
    {
        $searchData = $request->query('searchData');
        if(!empty($searchData)){
            $dataMahasiswa = mahasiswa::where('mahasiswa.NIM', 'like','%' .$searchData. '%')
            ->orWhere('mahasiswa.fullname', 'like','%'.$searchData.'%')
            ->paginate(10)->onEachSide(2)->fragment('std');
        }else{
            $dataMahasiswa = mahasiswa::paginate(10)->onEachSide(2)->fragment('std');
        }
        return view('mahasiswa.data')-> with([
            'mahasiswa' => $dataMahasiswa,
            'searchData' => $searchData
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremahasiswaRequest $request)
    {
        $validate = $request->validated();

        $mahasiswa = new mahasiswa;
        $mahasiswa->NIM =$request->txtNIM;
        $mahasiswa->fullname =$request->txtFullname;
        $mahasiswa->gender =$request->txtgender;
        $mahasiswa->addres =$request->txtaddress;
        $mahasiswa->emailaddress =$request->txtemail;
        $mahasiswa->phone =$request->txtphone;
        $mahasiswa->save();

        return redirect('mahasiswa')->with('msg','Penambahan Data Mahasiswa Berhasil');

    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
        
      $idmhs = $mahasiswa['NIM'];
      $data = $mahasiswa->find($idmhs);
      return view('mahasiswa.formedit') -> with([
        'txtNIM' => $idmhs,
        'txtFullname' => $data->fullname,
        'txtaddress' => $data->addres,
        'txtemail'=> $data->emailaddress,
        'txtphone'=>$data ->phone,
        'txtgender'=>$data ->gender
      ]);


    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemahasiswaRequest $request, mahasiswa $mahasiswa)
    {
      $idmhs = $mahasiswa['NIM'];
      $data = $mahasiswa->find($idmhs);
      $data->fullname =$request->txtFullname;
      $data->gender =$request->txtgender;
      $data->addres =$request->txtaddress;
      $data->emailaddress =$request->txtemail;
      $data->phone =$request->txtphone;
      $data->save();

      return redirect('mahasiswa')->with('msg','Data Mahasiswa '.$data->fullname.' Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        $idmhs = $mahasiswa['NIM'];
      $data = $mahasiswa->find($idmhs);
      $data->delete();
      return redirect('mahasiswa')->with('msg','Data Mahasiswa '.$data->fullname.' Berhasil Di Hapus');
    }
}
