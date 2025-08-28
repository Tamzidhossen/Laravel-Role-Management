<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        role::create([
            'name' => 'admin',
            'desc' => 'Administratior'
        ]);

        role::create([
            'name' => 'editor',
            'desc' => 'Editor'
        ]);

        role::create([
            'name' => 'author',
            'desc' => 'Author'
        ]);
        
        role::create([
            'name' => 'user',
            'desc' => 'User'
        ]);
    }
}
