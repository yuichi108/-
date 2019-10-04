<?php
use Illuminate\Database\Seeder;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category_name' => '占い師'],
            ['category_name' => '霊能者'],
            ['category_name' => '狩人'],
            ['category_name' => '市民'],
            ['category_name' => '狂人'],
            ['category_name' => '人狼']
        ]);
    }
}
