<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //    public $fillable = ['name','description','price'];
        DB::table('products')->insert([
            'name' => 'GHANYA Bantal Guling Sintesis',
            'category_id' => 1,
            'Description' => 'Kondisi baru, Berat satuan 500-700 Gram,
                              Bahan yang sangat-sangat lembut Nyaman dan tidak licin saat di gabungkan dengan sarung bantal.',
            'Price' => 'Rp. 30.000',
            'image' => 'BarbatosImage/Ghanya.jpg'
        ]
        );//1

        DB::table('products')->insert([
            'name' => 'Bantal Kepala Silicon',
            'category_id' => 1,
            'Description' => 'Kondisi baru, Berat satuan 1000 Gram,
                              Bahan yang sangat-sangat lembut Nyaman dan tidak licin saat di gabungkan dengan sarung bantal.',
            'Price' => 'Rp. 35.000',
            'image' => 'BarbatosImage/Bantal Kepala Silicon.jpg'
        ]
        );//2


        DB::table('products')->insert([
            'name' => 'Vablo bantal lumbar cushion memory foam',
            'category_id' => 1,
            'Description' => 'Ukuran (P x L)cm : 60 x 30 CM
                              Bahan Cover : Microtex
                              Warna Cover : Hitam
                              Motif : Kotak - Kotak',
            'Price' => 'Rp. 45.000',
            'image' => 'BarbatosImage/vablo.png'
        ]
        );//3

        DB::table('products')->insert([
            'name' => 'Aroma Karsa',
            'category_id' => 2,
            'Description' => 'Spesifikasi Produk :
                              Kover: 13,5 x 20cm
                              Format: 13,5 x 20 cm
                              Jumlah halaman: 724 halaman
                              Jenis Kertas Isi: Bookpaper 55gr
                              Jenis Kertas Sampul: Art carton 260 gr',
            'Price' => 'Rp. 150.000',
            'image' => 'BarbatosImage/Aroma Karsa.jpg'
        ]
        );

        DB::table('products')->insert([
            'name' => 'Rapijali Dee Lestari',
            'category_id' => 2,
            'Description' => 'Informasi Produk :
                              Kover: softcover
                              Format: 13,5 x 20 cm
                              Jumlah halaman: 368
                              Jenis Kertas Isi: Bookpaper 55 gr
                              Jenis Kertas Sampul: Art Carton 230 gr
                              ISBN 9786022917724',
            'Price' => 'Rp. 65.000',
            'image' => 'BarbatosImage/Rapijali Dee Lestari.jpg'
        ]
        );

        DB::table('products')->insert([
            'name' => 'BUKU 1984 - GEORGE ORWELL',
            'category_id' => 2,
            'Description' => 'Spesifikasi Produk:
                              Kover: softcover
                              Format: 14 x 20,8 cm
                              Jumlah halaman: 408
                              Jenis Kertas Isi: Bookpaper 55 gr
                              Jenis Kertas Sampul: Art Carton 230 gr',
            'Price' => 'Rp. 60.000',
            'image' => 'BarbatosImage/BUKU 1984 - GEORGE ORWELL.jpg'
        ]
        );

        DB::table('products')->insert([
            'name' => 'Fantech VENOM II WGC2 Wireless Mouse Gaming Rechargeable - Hitam',
            'category_id' => 3,
            'Description' => 'STABLE WIRELESS CONNECTION 2.4GHZ
            Fantech Venom II WGC2 telah menggunakan teknologi 2.4ghz wireless yang mendukung penggunaan hingga 10 meter.',
            'Price' => 'Rp. 150.000',
            'image' => 'BarbatosImage/Fantech VENOM II WGC2 Wireless Mouse Gaming Rechargeable - Hitam.jpg'
        ]
        );

        DB::table('products')->insert([
            'name' => 'SSD Samsung 870 EVO 500GB - SSD Internal 2.5" 3D Nand SATA III',
            'category_id' => 3,
            'Description' => 'General Feature :
            FORM FACTOR : 2.5 inch
            compatible with SATA 3 Gb/s & SATA 1.5 Gb/s interface
            DIMENSION (WxHxD) : 100 X 69.85 X 6.8 (mm)
            WEIGHT : 500GB: Apporx. 45.0g',
            'Price' => 'Rp. 720.000',
            'image' => 'BarbatosImage/SSD Samsung 870 EVO 500GB.jpg'
        ]
        );

        DB::table('products')->insert([
            'name' => 'Logitech F310 Gamepad [FS]',
            'category_id' => 3,
            'Description' => 'Kondisi Baru, Berat Satuan 1 kg, Jaminan perangkat keras terbatas 3 tahun
            Tolong simpan dan sertakan kemasan dan nota. Untuk komplain seperti salah barang dan cacat fisik, tolong menyertakan video unboxing.',
            'Price' => 'Rp. 5.000',
            'image' => 'BarbatosImage/Logitech F310 Gamepad [FS].jpg'
        ]
        );

        DB::table('products')->insert([
            'name' => 'Kipas Angin Dinding NAGOYA (Wall Fan) Baling Besi 18',
            'category_id' => 3,
            'Description' => 'Spesifikasi Lainnya
                              Kode Produk: NG-18WF
                              Daya listrik 60 watt
                              Tegangan: 220 Volt / 50 Hz
                              Ukuran Baling: 18” / 45cm
                              Berat Barang: 8.61 kg',
            'Price' => 'Rp. 40.000',
            'image' => 'BarbatosImage/Kipas Angin Dinding NAGOYA.jpg'
        ]
        );



    }
}
