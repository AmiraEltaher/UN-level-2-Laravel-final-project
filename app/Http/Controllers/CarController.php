<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Message;
use App\Models\Category;
use App\Traits\Common;
use Illuminate\Http\Request;


class CarController extends Controller
{
    use Common;
    private $columns = [
        'carTitle',
        'content',
        'luggage',
        'doors',
        'passengers',
        'price',
        'active',
        'image',
        'category_id',
    ];
    public function index()
    {
        $messages = Message::all();
        $cars = Car::get();
        return view('carList', compact('cars', 'messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $messages = Message::all();
        $categories = Category::select('id', 'category_name')->get();
        return view('addCar', compact('categories', 'messages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;
        $data['category_id'] = 1;
        $data['active'] = isset($request->active);
        $data = $request->only($this->columns);
        Car::create($data);
        return 'done';*/

        $messages = $this->messages();

        $data = $request->validate([

            'carTitle' => 'required|string',
            'content' => 'required|string',
            'luggage' => 'required|numeric',
            'doors' => 'required|numeric',
            'passengers' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'required|mimes:png,jpg,jepg|max:2048',
            'category_id' => 'required|exists:categories,id',

        ], $messages);


        $fileName = $this->uploadFile($request->image, 'assets/admin/images');

        $data = $request->only($this->columns);
        $data['image'] =  $fileName;

        //$data['active'] = isset($request['active']);
        $data['active'] = $request->has('active');


        Car::create($data);

        return redirect('carList');
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
        $car = Car::findOrFail($id);
        $categories = Category::select('id', 'category_name')->get();
        return view('editCar', compact('car', 'categories', 'messages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();

        $data = $request->validate([

            'carTitle' => 'required|string',
            'content' => 'required|string|',
            'luggage' => 'required|numeric',
            'doors' => 'required|numeric',
            'passengers' => 'required|numeric',
            'price' => 'required|numeric',

            'image' => 'required|mimes:png,jpg,jepg|max:2048',

            'category_id' => 'required|exists:categories,id',

        ], $messages);


        $fileName = $this->uploadFile($request->image, 'assets/admin/images');

        $data = $request->only($this->columns);
        $data['image'] =  $fileName;

        //$data['active'] = isset($request['active']);
        $data['active'] = $request->has('active');


        Car::where('id', $id)->update($data);
        return redirect('carList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->forceDelete();
        return redirect('carList');
    }


    public function messages()
    {
        return [
            'carTitle.required' => 'Title is required',
            'content.required' => 'should be text',
            'luggage.required' => 'please enter the number of luggage',
            'doors.required' => 'please enter the number of doors',
            'passengers.required' => 'please enter the number of passengers',
            'price.required' => 'please enter the price',
            'image.required' => 'please enter the image',
            'category_id.required' => 'please enter the category',
        ];
    }
}
