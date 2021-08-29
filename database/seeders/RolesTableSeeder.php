<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id'    => 1,
                'title' => 'ผู้จัดการ',
            ],
            [
                'id'    => 2,
                'title' => 'ฝ่ายนำสินค้าเข้า',
            ],
            [
                'id'    => 3,
                'title' => 'ฝ่ายนำสินค้าออก',
            ],
            [
                'id'    => 4,
                'title' => 'ฝ่ายดำเนินกับฝ่ายผลิต',
            ],
            [
                'id'    => 5,
                'title' => 'ฝ่ายจัดการคลังสินค้า',
            ],
            
        ]);

        
    }
}
