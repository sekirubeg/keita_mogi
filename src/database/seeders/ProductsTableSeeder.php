<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'name' => '腕時計',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'price' => 15000,
            'condition' => '良好',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Armani+Mens+Clock.jpg',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'HDD',
            'description' => '高速で信頼性の高いハードディスク',
            'price' => 5000,
            'condition' => '目立った傷や汚れなし',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '玉ねぎ3束',
            'description' => '新鮮な玉ねぎ3束のセット',
            'price' => 300,
            'condition' => 'やや傷や汚れあり',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '革靴',
            'description' => 'クラシックなデザインの革靴',
            'price' => 4000,
            'condition' => '状態が悪い',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ノートPC',
            'description' => '高性能なノートパソコン',
            'price' => 45000,
            'condition' => '良好',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'マイク',
            'description' => '高音質のレコーディング用マイク',
            'price' => 8000,
            'condition' => '目立った傷や汚れなし',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ショルダーバッグ',
            'description' => 'おしゃれなショルダーバッグ',
            'price' => 3500,
            'condition' => 'やや傷や汚れあり',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'タンブラー',
            'description' => '使いやすいタンブラー',
            'price' => 500,
            'condition' => '状態が悪い',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Tumbler+souvenir.jpg',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'コーヒーミル',
            'description' => '手動のコーヒーミル',
            'price' => 4000,
            'condition' => '良好',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'メイクセット',
            'description' => '便利なメイクアップセット',
            'price' => 2500,
            'condition' => '目立った傷や汚れなし',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/%E5%A4%96%E5%87%BA%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%95%E3%82%9A%E3%82%BB%E3%83%83%E3%83%88.jpg',
        ];
        DB::table('products')->insert($param);
    }
}
