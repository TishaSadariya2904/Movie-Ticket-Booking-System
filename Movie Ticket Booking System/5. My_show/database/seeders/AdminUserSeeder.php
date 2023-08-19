<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = AdminUser::create([
            'AdminName' => 'admin',
            'AdminEmailId' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
