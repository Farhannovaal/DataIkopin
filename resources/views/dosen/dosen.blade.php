@extends('layout.main')

@section('content')

            <h4> Data Dosen Ikopin </h4>
        <div class="card">
            <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick=" window.location='{{ url('dosen/add') }}'">
                <i class="fas fa-solid fa-plus fa-1x"></i> Add New Data
            </button>
            </div>
            <div class="card-body">
                @if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> {{ session('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif
            <form method="GET">
                <div class="row mb-3">
                    <label for="searchData" class="col-sm-2 col-form-label">Cari Data dosen </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm"placeholder="Input Key For Search Data.."  id="searchData" name="searchData"autofocus value="{{ $searchData }}">
                        
                </div>
                 </div>
            </form>



            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>noDosen</th>
                        <th>FullName</th>
                        <th>Genre</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>#</th>
                    </tr> 
                </thead>

                <tbody>
                    @php
                        $nomor = 1 + (($dosen->currentPage() -1) * $dosen->perPage());
                    @endphp

                    @foreach ($dosen as $data2)

                      <tr>
                        {{-- <th> {{ $loop->iteration }}</th> --}}
                        <td> {{ $nomor++ }}</td>
                        <td>{{ $data2->noDosen }}</td>
                        <td>{{ $data2->fullname }}</td>
                        <td>{{ ($data2->genre =='F') ? 'Female' : 'Male' }}</td>
                        <td>{{ $data2->addres }}</td>
                        <td>{{ $data2->emailaddress }}</td>
                        <td>{{ $data2->phone }}</td>
                        <td>
                            <button onclick="window.location='{{ url('dosen/'.$data2->noDosen) }}'" class="btn btn-sm btn-info"  type="button" title="Edit data2">
                                <i class="fa fa-edit"></i>
                            </button>


                            <form onsubmit ="return deletedata2('{{ $data2->fullname }}')" style="display: inline" action="{{ url('dosen/'.$data2->noDosen) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Hapus data2" class="btn btn-danger btn-sm">
                                 <i class="fas fa-trash-alt "></i>
                            </button>
                            </form>
                        </td>
                      </tr>
                        
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $dosen->links() }} --}}
            {!! $dosen->appends(Request::except('page'))->render() !!}
            </div>
            </div>
        </div>

        <script>
            function deletedata2 (name){
                pesan = confirm(`Yakin data2 dosen dengan nama ${name} ini akan dihapus?`);
                if(pesan) return true;
                else return false; 
            }
        </script>
@endsection