<?php

namespace Database\Seeders;

use App\Models\Staf;
use App\Models\User;
use App\Models\prodi;
use App\Models\bidang;
use App\Models\presma;
use App\Models\tingkat;
use App\Models\fakultas;
use App\Models\Mahasiswa;
use App\Models\predikat;
use App\Models\presma_users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        fakultas::create([
            'fakultas' => 'fkultas teknik'
        ]);
        fakultas::create([
            'fakultas' => 'fkultas agama islam'
        ]);
        fakultas::create([
            'fakultas' => 'fkultas kesehatan'
        ]);
        fakultas::create([
            'fakultas' => 'fkultas soshum'
        ]);


        prodi::create([
            'fakultas_id' => 1,
            'prodi' => 'teknik informatika'
        ]);
        prodi::create([
            'fakultas_id' => 1,
            'prodi' => 'Sistem informasi'
        ]);
        prodi::create([
            'fakultas_id' => 1,
            'prodi' => 'Teknik Informasi'
        ]);
        prodi::create([
            'fakultas_id' => 1,
            'prodi' => 'Rekayasa Perangkat Lunak'
        ]);
        prodi::create([
            'fakultas_id' => 1,
            'prodi' => 'Teknik Elektro'
        ]);

        User::create([
            'username' => 'staff',
            'password' => bcrypt('staf1234'),
            'role' => 'staf'
        ]);
        user::create([
            'username' => '1821400088',
            'password' => bcrypt('password'),
            'remember_token' => 'Y1qh0OhJg6',
            'role' => 'mahasiswa'
        ]);
        user::create([
            'username' => '1821400099',
            'password' => bcrypt('password'),
            'remember_token' => 'Y1qh0OhJg6',
            'role' => 'mahasiswa'
        ]);
        user::create([
            'username' => '1821400077',
            'password' => bcrypt('password'),
            'remember_token' => 'Y1qh0OhJg6',
            'role' => 'mahasiswa'
        ]);
        user::create([
            'username' => '1821400066',
            'password' => bcrypt('password'),
            'remember_token' => 'Y1qh0OhJg6',
            'role' => 'mahasiswa'
        ]);
        Staf::create([
            'user_id' => 1,
            'nama' => 'Subairi',
            'jenis kelamin' => 'laki-laki',
            'email' => 'subairi123@gmail.com',
            'image' => 'subairi.jpg',
            'email_verified_at' => '2022-04-29 14:03:50'
        ]);
        Mahasiswa::create([
            'prodi_id' => '1',
            'user_id' => 2,
            'nim' => '1821400088',
            'nama' => 'avin abdurrohim',
            'jenis kelamin' => 'laki-laki',
            'email' => 'avinabdurrohim1709@gmail.com',
            'angkatan' => '2018',
            'image' => 'avin.jpg',
            'email_verified_at' => '2022-04-29 14:03:50'
        ]);
        Mahasiswa::create([
            'prodi_id' => '2',
            'user_id' => 3,
            'nim' => '1821400099',
            'nama' => 'fitriana',
            'jenis kelamin' => 'perempuan',
            'email' => 'fitriana1709@gmail.com',
            'angkatan' => '2018',
            'image' => 'fitriana.jpg',
            'email_verified_at' => '2022-04-29 14:03:50',
        ]);

        Mahasiswa::create([
            'prodi_id' => '1',
            'user_id' => 4,
            'nim' => '1821400077',
            'nama' => 'doni salmanan',
            'jenis kelamin' => 'laki-laki',
            'email' => 'donisalmanan09@gmail.com',
            'angkatan' => '2018',
            'image' => 'doni.jpg',
            'email_verified_at' => '2022-04-29 14:03:50'
        ]);
        Mahasiswa::create([
            'prodi_id' => '1',
            'user_id' => 5,
            'nim' => '1821400066',
            'nama' => 'salman alfarisi',
            'jenis kelamin' => 'laki-laki',
            'email' => 'salmanalfarisi12@gmail.com',
            'angkatan' => '2018',
            'image' => 'salman.jpg',
            'email_verified_at' => '2022-04-29 14:03:50'
        ]);

        tingkat::create([
            'tingkat' => 'Kabupaten'
        ]);
        tingkat::create([
            'tingkat' => 'Provinsi'
        ]);
        tingkat::create([
            'tingkat' => 'Nasional'
        ]);
        tingkat::create([
            'tingkat' => 'Internasional'
        ]);


        bidang::create([
            'bidang' => 'Teknology'
        ]);
        bidang::create([
            'bidang' => 'Multimedia'
        ]);
        bidang::create([
            'bidang' => 'Bahasa'
        ]);
        bidang::create([
            'bidang' => 'Olahraga'
        ]);
        bidang::create([
            'bidang' => 'Seni'
        ]);

        predikat::create([
            'predikat' => 'Juara I'
        ]);
        predikat::create([
            'predikat' => 'Juara II'
        ]);
        predikat::create([
            'predikat' => 'Juara III'
        ]);

        presma::create([
            'tingkat_id' => 1,
            'bidang_id' => 1,
            'predikat_id' => 1,
            'nama_kegiatan' => 'lomba design grafis',
            'tanggal' => '2022-05-19 18:36:23',
            'pembimbing' => 'pak kamil mail',
            'penyelenggara' => 'its surabaya',
            'akademik' => true,
            'tempat' => 'sunan ampel surabaya',
            'jumlah_peserta' => '256',
            'jumlah_perguruan_tinggi' => '256',
            'jumlah_negara' => '2',
            'deskripsi_kegiatan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'link' => 'https://presma.uny.ac.id/prestasi-presma.html?id=g0syXs6ivpAfvR%2BWvCQNc%2F%2B%2BYXBmEZbMs6dB4Z18faw%3D',
        ]);
        presma::create([
            'tingkat_id' => 2,
            'bidang_id' => 2,
            'predikat_id' => 1,
            'nama_kegiatan' => 'lomba web design',
            'tanggal' => '2022-05-19 18:36:23',
            'pembimbing' => 'pak kamil mail',
            'penyelenggara' => 'its surabaya',
            'akademik' => true,
            'tempat' => 'sunan ampel surabaya',
            'jumlah_peserta' => '256',
            'jumlah_perguruan_tinggi' => '256',
            'jumlah_negara' => '3',
            'deskripsi_kegiatan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'link' => 'https://presma.uny.ac.id/prestasi-presma.html?id=g0syXs6ivpAfvR%2BWvCQNc%2F%2B%2BYXBmEZbMs6dB4Z18faw%3D',
        ]);
        presma::create([
            'tingkat_id' => 1,
            'bidang_id' => 1,
            'predikat_id' => 3,
            'nama_kegiatan' => 'lomba web programing',
            'tanggal' => '2022-05-19 18:36:23',
            'pembimbing' => 'pak kamil mail',
            'penyelenggara' => 'its surabaya',
            'akademik' => true,
            'tempat' => 'sunan ampel surabaya',
            'jumlah_peserta' => '256',
            'jumlah_perguruan_tinggi' => '256',
            'jumlah_negara' => '4',
            'deskripsi_kegiatan' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'link' => 'https://presma.uny.ac.id/prestasi-presma.html?id=g0syXs6ivpAfvR%2BWvCQNc%2F%2B%2BYXBmEZbMs6dB4Z18faw%3D',
        ]);





        //     presma_users::create([
        //         'user_id' => 1,
        //         'presma_id' => 1
        //     ]);
    }
}
