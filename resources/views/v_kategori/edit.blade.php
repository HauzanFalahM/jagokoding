@extends('layouts.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('kategori.update', $rsetkategori->id) }}" method="POST" enctype="multipart/form-data">                    
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Kategori</label>
                                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{ $rsetkategori->kategori }}" placeholder="Masukkan Kategori barang">
                            
                                <!-- error message untuk kategori -->
                                @error('merk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jenis</label>
                         
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="kategori" value="M" {{ ($rsetkategori->jenis=='M')? "checked" : "" }}>
                                    <label class="form-check-label" for="kategori">
                                      M
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="kategori" value="A" {{ ($rsetkategori->jenis=='A')? "checked" : "" }}>
                                    <label class="form-check-label" for="kategori">
                                      A
                                    </label>
                                  </div>       
                                  <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis" id="kategori" value="BHP" {{ ($rsetkategori->jenis=='BHP')? "checked" : "" }}>
                                        <label class="form-check-label" for="kategori">
                                            BHP
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis" id="kategori" value="BTHP" {{ ($rsetkategori->jenis=='BTHP')? "checked" : "" }}>
                                        <label class="form-check-label" for="kategori">
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
