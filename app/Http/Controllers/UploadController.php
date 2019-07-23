<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UploadController extends Controller
{
    public function index(){
        return view('DemoUpload');
    }
    public function Upload(Request $request){
        $file = $request->filesTest;

        $file->move('upload', $file->getClientOriginalName());
        //hàm sẽ trả về đường dẫn mới của file trên server
    }
}

?>