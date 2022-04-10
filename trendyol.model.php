<?
class trendyolexcelmodel{
    public $barkod;
    public $model_kodu;
    public $marka;
    public $kategori;
    public $para_birimi;
    public $urun_adi;
    public $urun_aciklamasi;
    public $piyasa_satis_fiyati_kdv_dahil_;
    public $trendyol_da_satilacak_fiyat_kdv_dahil_;
    public $urun_stok_adedi;
    public $stok_kodu;
    public $kdv_orani;
    public $desi;
    public $gorsel_linki;
    public $sevkiyat_suresi;
    public $beden;
    public $renk;
    public $boy_olcu;
    public $kol_tipi;
    public $materyal;
    public $yaka;
    public $desen;
    public $model;
    public $boy;
    public $kalip;
    public $kapama;
    public $kol_boyu;
    public $kumas_tipi;
    public $stil;
    public $cep;
    public $kalinlik;
    public $yas_grubu;
    public $cinsiyet;
    public $astar;
    public $urun_tipi;
    public $kumas_iplik;
    public $teknik;
    public $urun_detayi;
    public $koleksiyon;

    function __construct($value)
    {
      $i=0;
        foreach ($value as $key => $valuec) {
            $this->{$this->idToVar($i++)}=$valuec;
        }  
        
    }
    function idToVar($id){
        $a[0] = "barkod";
        $a[1] = "model_kodu";
        $a[2] = "marka";
        $a[3] = "kategori";
        $a[4] = "para_birimi";
        $a[5] = "urun_adi";
        $a[6] = "urun_aciklamasi";
        $a[7] = "piyasa_satis_fiyati_kdv_dahil_";
        $a[8] = "trendyol_da_satilacak_fiyat_kdv_dahil_";
        $a[9] = "urun_stok_adedi";
        $a[10] = "stok_kodu";
        $a[11] = "kdv_orani";
        $a[12] = "desi";
        $a[13] = "gorsel_linki";
        $a[14] = "sevkiyat_suresi";
        $a[15] = "beden";
        $a[16] = "renk";
        $a[17] = "boy_olcu";
        $a[18] = "kol_tipi";
        $a[19] = "materyal";
        $a[20] = "yaka";
        $a[21] = "desen";
        $a[22] = "model";
        $a[23] = "boy";
        $a[24] = "kalip";
        $a[25] = "kapama";
        $a[26] = "kol_boyu";
        $a[27] = "kumas_tipi";
        $a[28] = "stil";
        $a[29] = "cep";
        $a[30] = "kalinlik";
        $a[31] = "yas_grubu";
        $a[32] = "cinsiyet";
        $a[33] = "astar";
        $a[34] = "urun_tipi";
        $a[35] = "kumas_iplik";
        $a[36] = "teknik";
        $a[37] = "urun_detayi";
        $a[38] = "koleksiyon";
        return $a[$id];
    }
}

 