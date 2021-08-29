<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id'    => 1,
                'title' => 'จัดการพนักงาน',
            ],
            [
                'id'    => 2,
                'title' => 'แดชบอร์ด',
            ],
            [
                'id'    => 3,
                'title' => 'สินค้า',
            ],
            [
                'id'    => 4,
                'title' => 'นำเข้าสินค้า',
            ],
            [
                'id'    => 5,
                'title' => 'นำออกสินค้า',
            ],
            [
                'id'    => 6,
                'title' => 'คืนสินค้า',
            ],
            [
                'id'    => 7,
                'title' => 'ตรวจสอบคลัง',
            ],
            [
                'id'    => 8,
                'title' => 'รายงาน',
            ],
            
        ]);

        
    }
}
