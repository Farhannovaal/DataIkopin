@extends('layout.main')

@section('content')

            <h4> Data Mahasiswa Ikopin </h4>
        <div class="card">
            <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick=" window.location='{{ url('mahasiswa/add') }}'">
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
                    <label for="searchData" class="col-sm-2 col-form-label">Cari Data Mahasiswa </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm"placeholder="Input Key For Search Data.."  id="searchData" name="searchData"autofocus value="{{ $searchData }}">
                        
                </div>
                 </div>
            </form>



            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>idMahasiswa</th>
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
                        $nomor = 1 + (($mahasiswa->currentPage() -1) * $mahasiswa->perPage());
                    @endphp

                    @foreach ($mahasiswa as $data)

                      <tr>
                        {{-- <th> {{ $loop->iteration }}</th> --}}
                        <td> {{ $nomor++ }}</td>
                        <td>{{ $data->NIM }}</td>
                        <td>{{ $data->fullname }}</td>
                        <td>{{ ($data->genre =='F') ? 'Female' : 'Male' }}</td>
                        <td>{{ $data->addres }}</td>
                        <td>{{ $data->emailaddress }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>
                            <button onclick="window.location='{{ url('mahasiswa/'.$data->NIM) }}'" class="btn btn-sm btn-info"  type="button" title="Edit Data">
                                <i class="fa fa-edit"></i>
                            </button>


                            <form onsubmit ="return deleteData('{{ $data->fullname }}')" style="display: inline" action="{{ url('mahasiswa/'.$data->NIM) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                 <i class="fas fa-trash-alt "></i>
                            </button>
                            </form>
                        </td>
                      </tr>
                        
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $mahasiswa->links() }} --}}
            {!! $mahasiswa->appends(Request::except('page'))->render() !!}
            </div>
            </div>
        </div>

        <script>
            function deleteData (name){
                pesan = confirm(`Yakin data mahasiswa dengan nama ${name} ini akan dihapus?`);
                if(pesan) return true;
                else return false; 
            }
        </script>
@endsection