<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    //index-loadindex view
    public function index(){
        return view('indexx');
    }
    //getUsers-this method is used to handle AJAX request.fetch records and callong getuserData() method
    public function getUsers(){
        $userData['data']= Page::getuserData();
        echo json_encode($userData);
        exit;
    } 
    //insert record
    public function addUsers(Request $request){
        $name=$request->input('name');
        $username=$request->input('username');
        $email=$request->input('email');
        if ($name !='' && $username !='' && $email !=''){
            $data=array('name'=>$name,"email"=>$email,"username"=>$username);
            //call insertData()method of Page model
            $value=Page::insertData($data);
            if ($value){
                echo $value;
            }
            else echo 0;
        }
        else {
            echo 'Fill all fields.';
        }
        exit;
    } 
    //update record 
    public function updateUsers(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $id=$request->input('id');
        if ($name != '' && $email != '')
        {
            $data=array('name'=>$name,"email"=>$email);
            //call updateData() method of Page model 
            Page::updateData($id,$data);
            echo 'update successfully';
        }else{
            echo 'Fill all fields';
        }
        exit;
    }
    //delete record
    public function deleteUsers($id=0){
        Page::deleteData($id);
        echo 'delete successfully';
        exit;
    }
}
