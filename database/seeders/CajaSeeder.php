<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CajaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cajas')->insert(
            [
                'caja' => 'General',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );

        DB::table('cajas')->insert(
            [
                'caja' => 'Secundaria',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            );
    }
}
