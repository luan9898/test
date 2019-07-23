<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Page extends Model
{
    //chon tat ca tu bang va tra lai
    public static function getuserData($id=null){
        $value=DB::table('user')->orderBy('id','asc')->get();
        return $value;
    }
    //insertData-kiem tra xem user da ton tai trong bang user hay chua.neu chua thi tra ve insertid neu k tra ve 0
    public static function insertData($data){
        $value=DB::table('user')->where('username', $data['username'])->get();
        if ($value->count() == 0){
            $insertid=DB::table('user')->insertGetId($data);
            return $insertid;
        }else{
            return 0;
        }
    }
    public static function updateData($id,$data){
        DB::table('user')->where('id',$id)->update($data);
    }
    
    public static function deleteData($id){
        DB::table('user')->where('id',$id)->delete();
    }
}

