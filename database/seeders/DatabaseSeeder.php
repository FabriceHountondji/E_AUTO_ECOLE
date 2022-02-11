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
    public function run()
    {

        $this->call(TypePermisTableSeeder::class);
        $this->call( CategoryTestTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TestTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(QuestionsTestsSeeder::class);
        $this->call(AnswerTableSeeder::class);
        $this->call(AnswersQuestionsSeeder::class);


    }
}
