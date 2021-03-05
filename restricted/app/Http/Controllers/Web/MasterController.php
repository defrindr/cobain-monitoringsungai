<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Master;
use DataTables;
use Illuminate\Http\Request;
use Str;
class MasterController extends Controller
{
    public $route;

    public function __construct()
    {
        $this->route = Str::kebab('master');
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("content.{$this->route}.create", [
            "model" => [],
            'route' => $this->route,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \abort(404);
        $request->validate([
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $master = new Master;

        $master->latitude = $request->latitude;
        $master->longitude = $request->longitude;

        try {
            $master->save();
        } catch (\Throwable $e) {
            return redirect()->route("{$this->route}.create")->with([
                'success' => false,
                'message' => 'Maaf, Telah terjadi kesalahan.',
            ]);
        }

        return redirect()->route("{$this->route}.index")->with([
            'success' => true,
            'message' => 'Data berhasil ditambahkan',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        return view("content.{$this->route}.show", [
            "model" => $master,
            "route" => $this->route,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        return view("content.{$this->route}.edit", [
            "model" => $master,
            'route' => $this->route,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master $master)
    {
        $request->validate([
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $master->latitude = $request->latitude;
        $master->longitude = $request->longitude;

        try {
            $master->save();
        } catch (\Throwable $e) {
            return redirect()->route("{$this->route}.edit", $master)->with([
                'success' => false,
                'message' => 'Maaf, Telah terjadi kesalahan.',
            ]);
        }

        return redirect()->route("{$this->route}.index")->with([
            'success' => true,
            'message' => 'Data berhasil diubah',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        \abort(404);
        try {
            $master->delete();
        } catch (\Throwable $e) {
            return redirect()->route("{$this->route}.index")->with([
                'success' => false,
                'message' => 'Maaf, Telah terjadi kesalahan.',
            ]);
        }

        return redirect()->route("{$this->route}.index")->with([
            'success' => true,
            'message' => 'Data berhasil dihapus.',
        ]);
    }
}
