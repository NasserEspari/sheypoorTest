<?php

namespace App\Http\Controllers\Frontend;

use App\Color;
use App\Motorcycle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $motorcycle = new Motorcycle();


        if ($request->has('color') and $request->color != 'all') {
            $motorcycle = $motorcycle->whereHas('color', function ($query) use ($request) {
                $query->where('name', $request->color);
            })->with('color');

        }
        if ($request->has('orderby') and ($request->orderby == 'price' or $request->orderby == 'date')) {

            if ($request->orderby == 'date') {
                $request->orderby = 'created_at';
            }

            $motorcycle = $motorcycle->orderBy($request->orderby, request('sort') ?? 'desc');
        } else {
            $motorcycle = $motorcycle->orderBy('created_at', 'desc');

        }

        $motorcycles = $motorcycle->paginate(5)->appends([
            'color'   => request('color'),
            'orderby' => request('orderby'),
            'sort'    => request('sort'),
        ]);

        $colors = Color::all();
        return view('frontend.home', compact('motorcycles', 'colors'));
    }

    public function show($id)
    {
        $motorcycle = Motorcycle::findOrFail($id);
        return view('frontend.show', compact('motorcycle'));

    }
}
