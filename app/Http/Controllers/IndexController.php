<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Car;
use App\Models\Category;
use App\Models\Index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $testimonials = Testimonial::all();
        $cars = Car::all();
        return view('index', ['testimonials' => $testimonials],  ['cars' => $cars]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function listing()
    {
        $testimonials = Testimonial::all();
        $cars = Car::where('active', 1)->paginate(6);


        return view('listing', ['testimonials' => $testimonials],  ['cars' => $cars]);
    }

    public function testimonials()
    {
        $testimonials = Testimonial::all();

        return view('testimonials', ['testimonials' => $testimonials]);
    }
    public function blog()
    {

        return view('blog');
    }
    public function about()
    {

        return view('about');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoriesWithCounts = Category::withCount('cars')->get();
        $car = Car::findOrFail($id);
        return view('single', compact('car', 'categoriesWithCounts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
