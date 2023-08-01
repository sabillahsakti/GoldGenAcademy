<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Front End Web',
                'price' => 5000000,
                'image' => 'cewe.jpg',
                'field_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Back End Web',
                'price' => 5000000,
                'image' => 'cewe.jpg',
                'field_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Full Stack Web Developer',
                'price' => 5000000,
                'image' => 'cewe.jpg',
                'field_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Front End Developer',
                'price' => 7000000,
                'image' => 'cewe.jpg',
                'field_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Back End Developer',
                'price' => 10000000,
                'image' => 'cewe.jpg',
                'field_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laravel',
                'price' => 3000000,
                'image' => 'cewe.jpg',
                'field_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Code Igniter',
                'price' => 3000000,
                'image' => 'cewe.jpg',
                'field_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Data Analyst',
                'price' => 5500000,
                'image' => 'cewe.jpg',
                'field_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Data Engineer',
                'price' => 5500000,
                'image' => 'cewe.jpg',
                'field_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Database Management',
                'price' => 5500000,
                'image' => 'cewe.jpg',
                'field_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($data as $item) {
            // Menyalin file gambar dari direktori sumber ke direktori penyimpanan gambar
            $imagePath = 'public/Assets/images/' . $item['image'];
            $newImagePath = 'public/images/' . $item['image'];
            Storage::copy($imagePath, $newImagePath);

            // Ganti 'products' dengan nama tabel yang sesuai
            DB::table('courses')->insert([
                'name' => $item['name'],
                'price' => $item['price'],
                'image' => 'Assets/images/' . $item['image'], // Menyimpan path relatif gambar
                'field_id' => $item['field_id'],
                'created_at' => $item['created_at'],
                'updated_at' => $item['updated_at'],
            ]);
        }
    }
}
