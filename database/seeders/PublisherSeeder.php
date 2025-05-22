<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishers = [
            [
                'name' => 'Gramedia Pustaka Utama',
                'address' => 'Jl. Palmerah Barat 29-37, Jakarta',
                'phone' => '021-53650110'
            ],
            [
                'name' => 'Erlangga',
                'address' => 'Jl. H. Baping Raya No. 100, Jakarta',
                'phone' => '021-8717006'
            ],
            [
                'name' => 'Mizan Pustaka',
                'address' => 'Jl. Cinambo No. 135, Bandung',
                'phone' => '022-7834310'
            ],
            [
                'name' => 'Bentang Pustaka',
                'address' => 'Jl. Pesanggrahan No. 8, Yogyakarta',
                'phone' => '0274-515912'
            ],
            [
                'name' => 'Penerbit Andi',
                'address' => 'Jl. Beo No. 38-40, Yogyakarta',
                'phone' => '0274-561881'
            ]
        ];

        foreach ($publishers as $publisher) {
            Publisher::create($publisher);
        }
    }
}
