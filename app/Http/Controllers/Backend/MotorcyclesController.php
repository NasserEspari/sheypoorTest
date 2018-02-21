<?php

namespace App\Http\Controllers\Backend;

use App\Color;
use App\Http\Requests\Backend\CreateMotorcyclesRequest;
use App\Http\Requests\Backend\EditMotorcyclesRequest;
use App\Motorcycle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MotorcyclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motorcycles = Motorcycle::all();
        return view('backend.motorcycles.index', compact('motorcycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = Color::all();
        return view('backend.motorcycles.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMotorcyclesRequest $request)
    {
        $path = Storage::disk('uploads')->putFile('public/motorcycles', $request->image);
        Motorcycle::create([
            'name'     => $request->name,
            'model'    => $request->model,
            'cc'       => $request->cc,
            'color_id' => $request->color,
            'weight'   => $request->weight,
            'price'    => $request->price,
            'img_path' => $path

        ]);

        return back()->with('success', 'Added successfully ...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motorcycle = Motorcycle::findOrFail($id);
        return view('backend.motorcycles.show', compact('motorcycle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motorcycle = Motorcycle::findOrFail($id);
        $colors = Color::all();
        return view('backend.motorcycles.edit', compact('motorcycle', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditMotorcyclesRequest $request, $id)
    {
        $motorcycle = Motorcycle::findOrFail($id);

        // check delete old image or not
        if ($request->state_img == 1) {

            Storage::disk('uploads')->delete($motorcycle->img_path);
            $path = Storage::disk('uploads')->putFile('public/motorcycles', $request->image);

        } else {
            $path = $motorcycle->img_path;
        }


        $motorcycle->name = $request->name;
        $motorcycle->model = $request->model;
        $motorcycle->cc = $request->cc;
        $motorcycle->color_id = $request->color;
        $motorcycle->weight = $request->weight;
        $motorcycle->price = $request->price;
        $motorcycle->img_path = $path;
        $motorcycle->save();


        return back()->with('success', 'Update successfully ...');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motorcycle = Motorcycle::findOrFail($id);
        $motorcycle->delete();
        Storage::disk('uploads')->delete($motorcycle->img_path);
        return redirect(' / admin / motorcycles')->with('success', 'motorcycle ' . $motorcycle->name . ' Deleted ...');
    }
}
