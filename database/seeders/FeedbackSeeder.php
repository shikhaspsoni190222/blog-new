<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=5;$i++){
        $model=new Feedback();
        $model->name="Shikha".$i;
        $model->mobile="8090328810";
        $model->feedback="good";
        $model->rating="1 to 10";
        $model->save();


        }
        
    }
}
