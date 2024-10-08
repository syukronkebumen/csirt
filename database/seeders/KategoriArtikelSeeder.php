<?php

namespace Database\Seeders;

use App\Models\KategoriArtikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriArtikel::create([
            'nama' => 'Peringatan Keamanan'
        ]);

        KategoriArtikel::create([
            'nama' => 'Web Programming'
        ]);

        KategoriArtikel::create([
            'nama' => 'Tips dan Trik'
        ]);
    }
}
