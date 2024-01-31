<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\Common;

class TestimonialController extends Controller
{
    use Common;

    private $columns = [
        'name',
        'position',
        'content',
        'published',
        'image',

    ];
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('testimonialList', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addTestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();

        $data = $request->validate([

            'name' => 'required|string',
            'position' => 'required|string',
            'content' => 'required|string|max:100',
            'image' => 'required|mimes:png,jpg,jepg|max:2048',

        ], $messages);


        $fileName = $this->uploadFile($request->image, 'assets/admin/images');

        $data = $request->only($this->columns);
        $data['image'] =  $fileName;
        $data['published'] = $request->has('published') ? true : false;

        //$data['active'] = isset($request['active']);
        //$data['active'] = $request->has('active');


        Testimonial::create($data);

        return redirect('testimonialList');
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
        $testimonial = Testimonial::findOrFail($id);
        return view('editTestimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published']) ? true : false;
        $fileName = $this->uploadFile($request->image, 'assets/admin/images');
        $data['image'] =  $fileName;

        Testimonial::where('id', $id)->update($data);
        return redirect('testimonialList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->forceDelete();
        return redirect('testimonialList');
    }

    public function messages()
    {
        return [
            'name.required' => 'Title is required',
            'content.required' => 'should be text',
        ];
    }
}
