<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Java Developer'],
            ['name' => 'Software Engineer'],
            ['name' => 'Software QA Engineer'],
            ['name' => 'PHP Developer'],
            ['name' => '.NET Developer'],
            ['name' => 'Web Developer'],
            ['name' => 'Database Admin/Dev'],
            // Tambahkan data sesuai kebutuhan
        ];

        // Ganti 'table_name' dengan nama tabel yang sesuai
        DB::table('fields')->insert($data);
    }
}
