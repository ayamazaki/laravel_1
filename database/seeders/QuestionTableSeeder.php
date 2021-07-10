<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'chapter'=>1,
            'section'=>1,
            'number'=>1,
            'question'=>'IPAの特徴は、何が多いことか',
            'answer'=>'ホップ',
            'commentary'=>'IPAはIndian pale Aleの略称。防腐効果を狙ってたくさんホップを入れたことが始まり。',
            'option1'=>'ホップ',
            'option2'=>'小麦',
            'option3'=>'大麦',
        ];
        DB::table('question')->insert($param);

        $param=[
            'chapter'=>1,
            'section'=>1,
            'number'=>2,
            'question'=>'エールとラガーのどちらが上面発酵？',
            'answer'=>'エール',
            'commentary'=>'エールが上面発酵でラガーが下面発酵。日本で流通しているビールのほとんどどはラガー。',
            'option1'=>'エール',
            'option2'=>'ラガー',
            'option3'=>'どちらでもない',
        ];
        DB::table('question')->insert($param);

        $param=[
            'chapter'=>2,
            'section'=>1,
            'number'=>1,
            'question'=>'IPAの特徴は、何が多いことか',
            'answer'=>'ホップ',
            'commentary'=>'IPAはIndian pale Aleの略称。防腐効果を狙ってたくさんホップを入れたことが始まり。',
            'option1'=>'ホップ',
            'option2'=>'小麦',
            'option3'=>'大麦',
        ];
        DB::table('question')->insert($param);

        $param=[
            'chapter'=>3,
            'section'=>1,
            'number'=>1,
            'question'=>'エールとラガーのどちらが上面発酵？',
            'answer'=>'エール',
            'commentary'=>'エールが上面発酵でラガーが下面発酵。日本で流通しているビールのほとんどどはラガー。',
            'option1'=>'エール',
            'option2'=>'ラガー',
            'option3'=>'どちらでもない',
        ];
        DB::table('question')->insert($param);


        $param=[
            'chapter'=>4,
            'section'=>1,
            'number'=>1,
            'question'=>'エールとラガーのどちらが上面発酵？',
            'answer'=>'エール',
            'commentary'=>'エールが上面発酵でラガーが下面発酵。日本で流通しているビールのほとんどどはラガー。',
            'option1'=>'エール',
            'option2'=>'ラガー',
            'option3'=>'どちらでもない',
        ];
        DB::table('question')->insert($param);
        
    }
}
