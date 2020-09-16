<?php

namespace App\Http\Controllers\Frontend;

use App\Course;
use App\Product;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(Product $product)
    {
        $menu = $product->courses()->select('title','slug')->get();
        $course = $product->courses()->first();

        $previous = $this->control('<',1);
        $next = $this->control('>',1);

        return view('frontend.course',compact('menu','course','product','previous','next'));
    }

    public function show(Product $product, Course $course)
    {
        $menu = $product->courses()->select('title','slug')->get();

        $previous = $this->control('<',$course->id);
        $next = $this->control('>',$course->id);

        return view('frontend.course',compact('menu','course','product','previous','next'));
    }

    private function control($arrow, $id)
    {
        return Course::where('id', $arrow, $id)
            ->select('slug')
            ->pluck('slug')
            ->first();
    }
}
