<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pinjam;
use App\Models\Buku;
use App\Models\Siswa;
use App\Models\KategoriBuku;
use Carbon\Carbon;
use Date;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123')
        ]);

        KategoriBuku::create([
            'nama_kategori' => 'Novel',
        ]);

        Siswa::create([
            'nama_siswa' => "Chairil",
            'nis' => '070999999',
        ]);

        Pinjam::create([
            'buku_id' => 1,
            'siswa_id' => 1,
            'tanggal_kembali' => Carbon::parse('2023-09-12')
        ]);

        Buku::create([
            'kategori_buku_id' => 1,
            'judul_buku' => 'Ayah Ku',
        ]);
    }
}
