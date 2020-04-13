<?php

use Illuminate\Database\Seeder;
use App\AppointmentService;

class AppointmentServiceTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $as = [
            [
                'appointment_id'       => 1,
                'service_id'           => 1,
            ],
            [
                'appointment_id'       => 2,
                'service_id'           => 1,
            ],
            [
                'appointment_id'       => 3,
                'service_id'           => 1,
            ],            [
                'appointment_id'       => 4,
                'service_id'           => 2,
            ],            [
                'appointment_id'       => 5,
                'service_id'           => 2,
            ],            [
                'appointment_id'       => 6,
                'service_id'           => 2,
            ],            [
                'appointment_id'       => 7,
                'service_id'           => 3,
            ],            [
                'appointment_id'       => 8,
                'service_id'           => 1,
            ],            [
                'appointment_id'       => 9,
                'service_id'           => 1,
            ],            [
                'appointment_id'       => 10,
                'service_id'           => 3,
            ],
        ];

        AppointmentService::insert($as);
    }
}
