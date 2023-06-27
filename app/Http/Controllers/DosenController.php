<?php

namespace App\Http\Controllers;
use App\Models\dosen;
use App\Http\Requests\StoredosenRequest;
use App\Http\Requests\UpdatedosenRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class DosenController extends Controller
{
 
    public function index(Request $request)
    {
        $searchData = $request->query('searchData');
        if(!empty($searchData)){
            $dataDosen = dosen::where('dosen.noDosen', 'like','%' .$searchData. '%')
            ->orWhere('dosen.fullname', 'like','%'.$searchData.'%')
            ->paginate(10)->onEachSide(2)->fragment('std');
        }else{
            $dataDosen = dosen::paginate(10)->onEachSide(2)->fragment('std');
        }
        return view('dosen.dosen')-> with([
            'dosen' => $dataDosen,
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
    public function store(StoredosenRequest $request)
    {
        $validate = $request->validated();

        $dosen = new dosen;
        $dosen->noDosen =$request->noDosen;
        $dosen->fullname =$request->txtFullname;
        $dosen->gender =$request->txtgender;
        $dosen->address =$request->txtaddress;
        $dosen->emailaddress =$request->txtemail;
        $dosen->phone =$request->txtphone;
        $dosen->save();

        return redirect('dosen')->with('msg','Penambahan Data Dosen Berhasil');

    }

    /**
     * Display the specified resource.
     */
    public function show(dosen $dosen)
    {
        
      $idDosen = $dosen['noDosen'];
      $data2 = $dosen->find($idDosen);
      return view('dosen.formEdit') -> with([
        'noDosen' => $idDosen,
        'txtFullname' => $data2->fullname,
        'txtaddress' => $data2->address,
        'txtemail'=> $data2->emailaddress,
        'txtphone'=>$data2 ->phone,
        'txtgender'=>$data2 ->gender
      ]);


    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedosenRequest $request, dosen $dosen)
    {
      $idDosen = $dosen['noDosen'];
      $data2 = $dosen->find($idDosen);
      $data2->fullname =$request->txtFullname;
      $data2->gender =$request->txtgender;
      $data2->address =$request->txtaddress;
      $data2->emailaddress =$request->txtemail;
      $data2->phone =$request->txtphone;
      $data2->save();

      return redirect('dosen')->with('msg','Data Dosen '.$data2->fullname.' Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dosen $dosen)
    {
        $idDosen = $dosen['noDosen'];
      $data2 = $dosen->find($idDosen);
      $data2->delete();
      return redirect('dosen')->with('msg','Data Dosen   '.$data2->fullname.' Berhasil Di Hapus');
    }
}
