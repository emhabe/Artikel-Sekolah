<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Artikel;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin Dhea',
                'email' => 'dhea@gmail.com',
                'password' => bcrypt('admin12345'),
                'role' => 'admin',
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Admin Desy',
                'email' => 'desy@gmail.com',
                'password' => bcrypt('admin12345'),
                'role' => 'admin',
                'remember_token' => Str::random(60),
            ]
        ];
        User::insert($data);

        $siu = [
            [
                'nama' => 'Event',
            ],
            [
                'nama' => 'RPL',
            ],
            [
                'nama' => 'TKJ',
            ],
            [
                'nama' => 'TOI',
            ],
            [
                'nama' => 'TEI',
            ],
            [
                'nama' => 'TKR',
            ],
            [
                'nama' => 'TBSM',
            ],
        ];
        Kategori::insert($siu);

        $artikel = [
            [
                'judul' => 'Web RadarPgriKu',
                'kategori_id' => '1',
                'status' => '1',
                'detail_singkat' => 'Web RadarPgriKu adalah web yang dikembangkan oleh 3 siswa SMK PGRI SINGOSARI',
                'deskripsi' => 'Web RadarPgriKu adalah web tentang artikel,berita,dan acara dari siswa/siswi SMK PGRI SINGOSARI',
                'foto' => 'logo.png',
                'created_at' =>  Carbon::now(),

            ], [
                'judul' => 'Web RadarPgriKu',
                'kategori_id' => '1',
                'status' => '1',
                'detail_singkat' => 'Web RadarPgriKu adalah web yang dikembangkan oleh 3 siswa SMK PGRI SINGOSARI',
                'deskripsi' => 'Web RadarPgriKu adalah web tentang artikel,berita,dan acara dari siswa/siswi SMK PGRI SINGOSARI',
                'foto' => 'logo.png',
                'created_at' =>  Carbon::now(),

            ],
            [
                'judul' => 'Web RadarPgriKu',
                'kategori_id' => '1',
                'status' => '1',
                'detail_singkat' => 'Web RadarPgriKu adalah web yang dikembangkan oleh 3 siswa SMK PGRI SINGOSARI',
                'deskripsi' => 'Web RadarPgriKu adalah web tentang artikel,berita,dan acara dari siswa/siswi SMK PGRI SINGOSARI',
                'foto' => 'logo.png',

                'created_at' =>  Carbon::now(),

            ]
        ];


        Artikel::insert($artikel);
    }
}
