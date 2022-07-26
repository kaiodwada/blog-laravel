<?php

namespace Database\Seeders;

use App\Models\Editor;
use Illuminate\Database\Seeder;

class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Editor::factory(10)->create();
    }
}
