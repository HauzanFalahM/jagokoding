@extends('layouts.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">                    
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Kategori</label>
                                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{ old('kategori') }}" placeholder="Masukkan kategori barang">
                            
                                <!-- error message untuk merk -->
                                @error('merk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                           <div class="form-group">
                                <label class="font-weight-bold">Jenis</label>
                         
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis" value="M">
                                    <label class="form-check-label" for="jenis">
                                      M
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis" value="A">
                                    <label class="form-check-label" for="jenis">
                                      A
                                    </label>
                                  </div>       
                                  <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis" id="jenis" value="BHP">
                                        <label class="form-check-label" for="jenis">
                                            BHP
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis" id="jenis" value="BTHP">
                                        <label class="form-check-label" for="jenis">
                                            BTHP
                                        </label>
                                    </div>                         

                                <!-- error message untuk spesifikasi -->
                                @error('kategori')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                                                        
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>

 

            </div>
        </div>
    </div>
@endsection
