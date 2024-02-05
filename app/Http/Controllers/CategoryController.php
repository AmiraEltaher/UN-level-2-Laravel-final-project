<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $columns = [

        'category_name',
    ];

    public function index()
    {
        $messages = Message::all();
        $categories = Category::get();
        return view('categoryList', compact('categories', 'messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $messages = Message::all();
        return view('addCategory', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only($this->columns);
        Category::create($data);

        return redirect('categoryList');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $messages = Message::all();
        $category = Category::findOrFail($id);
        return view('editCategory', compact('category', 'messages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = $request->only($this->columns);

        Category::where('id', $id)->update($data);

        return redirect('categoryList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();
        return redirect('categoryList');
    }
}
