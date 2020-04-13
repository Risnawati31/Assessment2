<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = [
            [
                'id'             => 1,
                'name'           => 'Bimbingan Akademik',
                'created_at'     => '2020-04-10 12:08:28',
                'updated_at'     => '2020-04-10 12:08:28',
            ],
            [
                'id'             => 2,
                'name'           => 'Bimbingan Skripsi',
                'created_at'     => '2020-04-10 12:08:28',
                'updated_at'     => '2020-04-10 12:08:28',
            ],
            [
                'id'             => 3,
                'name'           => 'Bimbingan Magang',
                'created_at'     => '2020-04-10 12:08:28',
                'updated_at'     => '2020-04-10 12:08:28',
            ],
            [
                'id'             => 4,
                'name'           => 'Konseling Lainnya',
                'created_at'     => '2020-04-10 12:08:28',
                'updated_at'     => '2020-04-10 12:08:28',
            ],
        ];

        App\Service::insert($service);
    }
}
