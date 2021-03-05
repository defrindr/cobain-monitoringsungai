<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Master;
use Illuminate\Http\Request;

class IndexController extends Controller {
    public function index(){
        $model = Master::first();
        return view('blog.index', [
            "article" => [],
            "popular" => [],
            "model" => $model
        ]);
    }

    public function detail($slug){
    }
}