<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run()
  {
    Model::unguard();
//    $this->call('ArtiTableSeeder');
  $this->call('PageTableSeeder');
    }
  
}
//
//class ArtiTableSeeder extends Seeder
//{
//  public function run()
//  {
//    App\Arti::truncate();
//    factory(App\Arti::class, 20)->create();
//  }
//}



