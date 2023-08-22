<?php

namespace Database\Seeders;

use App\Models\employee;
use App\Models\product;
use App\Models\spko;
use App\Models\spko_item;

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
        // \App\Models\User::factory(10)->create();
        employee::create([
            'nama' => 'Ahmad Husaini',
            'rank' => 'Operator',
            'gender' => 'L',
        ]);
        employee::create([
            'nama' => 'Maya Sofa Nata',
            'rank' => 'Operator',
            'gender' => 'P',
        ]);
        employee::create([
            'nama' => 'Rizal Ardyansah Bintoro',
            'rank' => 'Operator',
            'gender' => 'L',
        ]);
        product::create([
            'id_product' => '247',
            'sub_category' => 'CALP1',
            'serial_no' => '10043',
            'description' => 'Cincin Anak Laki Putus 1 gr-10043-20K',
            'carat' => '20K-875',
        ]);
        product::create([
            'id_product' => '260',
            'sub_category' => 'LT1',
            'serial_no' => '10237',
            'description' => 'Liontin 1 gr-10237-17K',
            'carat' => '17K-750',
        ]);
        product::create([
            'id_product' => '246',
            'sub_category' => 'CWTMT',
            'serial_no' => '10152',
            'description' => 'Cincin Wanita Mata -10152-16K',
            'carat' => '16K-700',
        ]);
        product::create([
            'id_product' => '2232',
            'sub_category' => 'GPMA2',
            'serial_no' => '10125',
            'description' => 'Gelang Pipa Mata Anak 2 gr-10125',
            'carat' => '08K-375P',
        ]);
        product::create([
            'id_product' => '2470',
            'sub_category' => 'KCCBM2',
            'serial_no' => '10047',
            'description' => 'Kepala Cor Cincin Bangkok Metro 2 gr-10152',
            'carat' => '20K-875',
        ]);
    }
}
