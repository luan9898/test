<?php

use Illuminate\Database\Seeder;
use PharIo\Manifest\Email;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this-> call(products::class);
        // //$this->call(diemthihs::class);
        // $this->call(Demoseeder::class);
        // $this->call(object2::class);
        $this->call(Post::class);
        $this->call(users::class);
        $this->call(user::class);
    }
}
// class diemthihs extends Seeder
// {

//     public function run()
//     {
//         // $this->call(UsersTableSeeder::class);
//         // $this-> call(users::class);
//         // $this-> call(user1::class);
//         DB::table('diemthihs')->insert([
//             array("monhoc"=>'toan', "diem"=>'9', "ghichu"=>'khoi a'),
//             array("monhoc"=>'van', "diem"=>'8', "ghichu"=>'khoi D'),
//             array("monhoc"=>'ly', "diem"=>'9', "ghichu"=>'khoi a')
//         ]);
//     }
// }
class users extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            array("email"=>'user1@gmail.com',"name"=>'user1',"username"=>'user1',"password"=>'12345'),
            array("email"=>'user2@gmail.com',"name"=>'user2',"username"=>'user2',"password"=>'12345'),
            array("email"=>'user3@gmail.com',"name"=>'user3',"username"=>'user3',"password"=>'12345'),
            array("email"=>'user4@gmail.com',"name"=>'user4',"username"=>'user4',"password"=>'12345')
        ]);
    }
}
class object2 extends Seeder
{
    public function run()
    {
        DB::table('object')->insert([
            array("name-object"=>'toan',"stc"=>'4'),
            array("name-object"=>'lap trinh c',"stc"=>'3'),
            array("name-object"=>'tin hoc co so',"stc"=>'2'),
            array("name-object"=>'tin hoc van phong',"stc"=>'2'),
            array("name-object"=>'co so du lieu',"stc"=>'3')

        ]);
    }
}
class Post extends Seeder
{
    public function run()
    {
        DB::table('post')->insert([
            array("description"=>'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',"title"=>'bong da',"username"=>'user1'),
            array("description"=>'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',"title"=>'giao thong',"username"=>'user2'),
            array("description"=>'cccccccccccccccccccccccccccccccccccccccccccccc',"title"=>'bong chuyen',"username"=>'user1'),
            array("description"=>'dddddddddddddddddddddddddddddddddddddddddddddd',"title"=>'phap luat',"username"=>'user3'),
            array("description"=>'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee',"title"=>'moi truong',"username"=>'user2')

        ]);
    }
}
class user extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([
            array("email"=>'user1@gmail.com',"name"=>'user1',"username"=>'user1'),
            array("email"=>'user2@gmail.com',"name"=>'user2',"username"=>'user2'),
            array("email"=>'user3@gmail.com',"name"=>'user3',"username"=>'user3'),
            array("email"=>'user4@gmail.com',"name"=>'user4',"username"=>'user4')
        ]);
    }
}
// class Products extends Seeder
// {
//     /**
//      * Seed the application's database.
//      *
//      * @return void
//      */
//     public function run()
//     {
        
//         factory(Products::class, 10)->create();
//     }
// }

