@extends('layout.main')

@section('content')
        <h3> Form New  Data Mahasiswa </h3>
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-sm btn-warning" onclick=" window.location='{{ url('mahasiswa') }}'">
                    Back to main
                </button>
            </div>
            <div class="card-body">
                @if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> {{ session('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif
                    <form action="{{ url('mahasiswa') }}" method="post">
                        @csrf
                        <form>
                         <div class="row mb-3">
                            <label for="txtNIM" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm @error('txtNIM')is-invalid @enderror" id="txtNIM" name="txtNIM" value="{{ old('txtNIM') }}">
                            @error('txtNIM')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                         </div>
                        <div class="row mb-3">
                        <label for="txtFullname" class="col-sm-2 col-form-label">Fullname</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm @error('txtFullname')is-invalid @enderror" id="txtFullname" name="txtFullname" value="{{ old('txtFullname') }}">
                            @error('txtFullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                        <div class="row mb-3">
                            <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-4">
                            <select name="txtgender" id="txtgender" class="form-select form-select-sm @error('txtgender')is-invalid @enderror">
                                @error('txtgender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <option value="" selected>--Pilih Gender--</option>
                                <option value="M" {{ (old('txtgender') == 'M') ? 'selected' : '' }}> Male </option>
                                <option value="F" {{ (old('txtgender') == 'F') ? 'selected' : '' }}> Female </option>
                            </select>
                        </div>
                    </div>
                        <div class="row mb-3">
                            <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea  name="txtaddress" id="txtaddress" cols="30" rows="5" class="form-control @error('txtaddress')is-invalid @enderror" value="{{ old('txtaddress') }}">    </textarea>
                                    @error('txtaddress')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            
                            </div>
                        </div>
                            <div class="row mb-3">
                                <label for="txtemail" class="col-sm-2 col-form-label">email</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm @error('txtemail')is-invalid @enderror" id="txtemail" name="txtemail" value="{{ old('txtemail') }}">
                                    @error('txtemail')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                                <div class="row mb-3">
                                    <label for="txtphone" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm @error('txtphone')is-invalid @enderror" id="txtphone" name="txtphone" value="{{ old('txtphone') }}">
                                        @error('txtphone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-sm btn-success"> Save </button>
                                </div>
                            </div>
                    </form>
            </div>
        </div>
@endsection