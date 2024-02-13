<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

//LOAD MODELS
use App\Models\DtBuku;
use App\Models\TmKategoriBuku;
//LOAD HELPER
use Tanggal;
use Konversi;

class ImportDataBukuClass implements ToCollection, WithCalculatedFormulas
{
    /**
     * @param Collection $rows
     * @return MsHdCashflow
     */

    public  $insert;
    public  $edit;
    public  $gagal;
    public  $listgagal;

    public function __construct(){
        $this->Tanggal = new Tanggal();
        $this->Konversi = new Konversi();
    }

    public function collection(Collection $rows)
    {
        $trDt = [];
        $this->insert = 0;
        $this->edit = 0; 
        $this->gagal = 0; 
        $this->listgagal = "";

        foreach ($rows as $idx => $row) {
            if ($idx > 0) {
                //DECLARE REQUEST
                $no=isset($row[0])?($row[0]):'';
                $kode=isset($row[1])?($row[1]):'';
                $nama=isset($row[2])?($row[2]):'';
                $kategori=isset($row[3])?($row[3]):'';
                $harga_satuan=isset($row[4])?($row[4]):'';
                $harga_jual=isset($row[5])?($row[5]):'';
                $satuan=isset($row[6])?($row[6]):'';
                $tgl_produksi=isset($row[7])?($row[7]):'';
                $tgl_expired=isset($row[8])?($row[8]):'';

                //COSTUM REQUEST
                if($tgl_produksi){
                    $tgl_produksi=$this->Tanggal->tanggalDatabase($tgl_produksi);
                }else{
                    $tgl_produksi=null;
                }
                if($tgl_expired){
                    $tgl_expired=$this->Tanggal->tanggalDatabase($tgl_expired);
                }else{
                    $tgl_expired=null;
                }
                if($harga_satuan){
                    $harga_satuan=$this->Konversi->numberonly($harga_satuan);
                }else{
                    $harga_satuan=null;
                }
                if($harga_satuan){
                    $harga_jual=$this->Konversi->numberonly($harga_jual);
                }else{
                    $harga_jual=null;
                }
                $dbKategoriBarang = TmKategoriBarang::where('nama', '=',''.$kategori.'')->first();
                $kategori_id=$dbKategoriBarang->id??'';
      
                //READY REQUEST
                $trDt[$idx]['kode    '] = $kode;
                $trDt[$idx]['nama'] = $nama;
                $trDt[$idx]['kategori_id'] = $kategori_id;
                $trDt[$idx]['harga_satuan'] = $harga_satuan;
                $trDt[$idx]['harga_jual'] = $harga_jual;
                $trDt[$idx]['satuan'] = $satuan;
                $trDt[$idx]['tgl_produksi'] = $tgl_produksi;
                $trDt[$idx]['tgl_expired'] = $tgl_expired;

                $data = DtBarang::where('kode', '=',''.$trDt[$idx]['kode'].'')->first();
                if ($data) {//UPDATE DATA
                    $data->updated_us   = auth()->user()->id;
                    $data->kode         = $trDt[$idx]['kode'];
                    $data->nama         = $trDt[$idx]['nama'];
                    $data->kategori_id  = $trDt[$idx]['kategori_id'];
                    $data->harga_satuan = $trDt[$idx]['harga_satuan'];
                    $data->harga_jual   = $trDt[$idx]['harga_jual'];
                    $data->satuan       = $trDt[$idx]['satuan'];
                    $data->tgl_produksi = $trDt[$idx]['tgl_produksi'];
                    $data->tgl_expired  = $trDt[$idx]['tgl_expired'];
                    // SAVE THE DATA
                    if ($data->save()) {
                        // SUCCESS
                        ++$this->edit;
                    }
                } else {//INSERT DATA
                    if($trDt[$idx]['kode']){
                        $data =  new DtBarang();
                        $data->created_us   = auth()->user()->id;
                        $data->updated_us   = auth()->user()->id;
                        $data->kode         = $trDt[$idx]['kode'];
                        $data->nama         = $trDt[$idx]['nama'];
                        $data->kategori_id  = $trDt[$idx]['kategori_id'];
                        $data->harga_satuan = $trDt[$idx]['harga_satuan'];
                        $data->harga_jual   = $trDt[$idx]['harga_jual'];
                        $data->satuan       = $trDt[$idx]['satuan'];
                        $data->tgl_produksi = $trDt[$idx]['tgl_produksi'];
                        $data->tgl_expired  = $trDt[$idx]['tgl_expired'];
                        $data->status       = 1;
                        // SAVE THE DATA
                        if ($data->save()) {
                            // SUCCESS
                            ++$this->insert;
                        }
                    }else{
                        // FAILED
                        ++$this->gagal;
                        $this->listgagal.="(".$trDt[$idx]['kode']." - ".$trDt[$idx]['nama']."),<br>";
                    }
                }
            }
        }
    }


}
