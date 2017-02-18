
<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
//    public function run()
//    {
//        // $this->call(UsersTableSeeder::class);
//    }
    
    public function run() { $csvFile = 'resources/assets/GazeData/fri01pm0205_tutorial_1_003 Gaze-Left.csv';

    $areas = Excel::load($csvFile, function ($reader) {
        return $reader->ignoreEmpty()->toArray();
    })->get();

    foreach ($areas as $area) {

        $area = $area->all();
            DB::table('books')->insert($area);
        }

}
}
