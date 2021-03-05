<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Log;
use DataTables;
use Illuminate\Http\Request;
use Str;
class LogController extends Controller
{
    public $route;

    public function __construct()
    {
        $this->route = Str::kebab('log');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Master::get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $inputCsrf = "<input type='hidden' name='_token' value='" . csrf_token() . "'>";
                    $method = "<input type='hidden' name='_method' value='delete'>";

                    $btnShow = '<a href="' . route("{$this->route}.show", $row) . '" class="edit btn btn-warning btn-sm mr-2 mt-1">Show</a>';
                    $btnEdit = '<a href="' . route("{$this->route}.edit", $row) . '" class="edit btn btn-success btn-sm mr-2 mt-1">Edit</a>';
                    $btnDelete = "<form action='" . route("{$this->route}.destroy", $row) . "' method='post' onclick='return confirm(\"Are you sure to execute this action ?\") ' class='d-inline-block'> $inputCsrf $method <button class='delete btn btn-danger btn-sm mr-2 mt-1'>Delete</button></form>";

                    $template = "$btnEdit";
                    return $template;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view("content.{$this->route}.index", [
            'route' => $this->route,
        ]);
    }
}
