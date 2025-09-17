<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
// カテゴリを作成
    $this->call(CategorySeeder::class);
// 問い合わせを35件作成
    \App\Models\Contact::factory()->count(35)->create();
    }


}
