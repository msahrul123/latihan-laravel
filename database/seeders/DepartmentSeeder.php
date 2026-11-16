<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(['name'=> 'Sistem Informatika']);
        Department::create(['name'=> 'Teknik Informatika']);
        Department::create(['name'=> 'Teknologi Informasi']);
        Department::create(['name'=> 'Sistem Pendidikan Teknologi Informasi']);
        Department::create(['name'=> 'Bisnis Digital']);
    }
}
