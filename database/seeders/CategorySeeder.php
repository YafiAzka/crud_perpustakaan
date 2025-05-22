<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Novel',
                'description' => 'Kumpulan buku novel fiksi dan non-fiksi'
            ],
            [
                'name' => 'Pendidikan',
                'description' => 'Buku-buku pelajaran dan pendidikan'
            ],
            [
                'name' => 'Teknologi',
                'description' => 'Buku tentang teknologi dan komputer'
            ],
            [
                'name' => 'Sejarah',
                'description' => 'Buku-buku sejarah dan biografi'
            ],
            [
                'name' => 'Sains',
                'description' => 'Buku tentang sains dan pengetahuan umum'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
