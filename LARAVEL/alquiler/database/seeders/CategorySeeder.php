<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'DEPAFAMILIAR',
            'slug'=>'depafamiliar',
            'amount'=>'depauniversitario'
        ]);
        Category::create([
            'name'=>'DEPAUNIVERSITARIO',
            'slug'=>'depauniversitario',
            'amount'=>'depauniversitario'
        ]);
        Category::create([
            'name'=>'DEPADUO',
            'slug'=>'depaduo',
            'amount'=>'depauniversitario'
        ]);
        Category::create([
            'name'=>'DEPAVIP',
            'slug'=>'depavip',
            'amount'=>'depauniversitario'
        ]);

    }
}
