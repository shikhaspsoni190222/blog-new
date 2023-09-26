<?php

namespace Database\Seeders;

use App\Models\Enquiry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $model=new Enquiry();
        $model->message="xyzwwwkjkw";
        $model->name="Shikha";
        $model->email="abc@gmail.com";
        $model->save();

        
    }
}
