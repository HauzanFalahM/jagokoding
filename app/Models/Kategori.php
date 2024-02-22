<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = ['kategori','jenis'];

    public function barang()
    {
        return $this->hasMany(Barang::class);
        
    }
    

    public static function getKategoriAll()
    {
        return DB::table('kategori')
            ->select('kategori.id', 'kategori','jenis', DB::raw('ketKategorik(jenis) as keterangan'))
            ->get(); // Add this line to execute the query and retrieve the data
    }
    
    public static function katShowAll(){
        return DB::table('kategori')
                ->join('barang','kategori.id','=','barang.kategori_id')
                ->select('kategori.id','kategori',DB::raw('ketKategorik(jenis) as ketKategorik'),
                         'barang.merk');
                // ->pagination(1);
                // ->get();

    }

    public static function showKategoriById($id){
        return DB::table('kategori')
                ->join('barang','kategori.id','=','barang.kategori_id')
                ->select('barang.id','kategori.kategori',DB::raw('ketKategorik(jenis.kategori) as ketKategorik'),
                         'barang.merk','barang.seri','barang.spesifikasi','barang.stok')
                ->get();

    }
}
