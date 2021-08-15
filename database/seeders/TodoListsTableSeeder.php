<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TodoList;

class TodoListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TodoList::factory()->count(2)->create();
        // $param = [
        //     'content' => 'hasiru'
        // ];
        // DB::table('todo_lists')->insert($param);
        // $param = [
        //     'content' => 'aruku'
        // ];
        // DB::table('todo_lists')->insert($param);
    }
}
