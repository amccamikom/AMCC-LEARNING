<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use App\Models\Product;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Method For get All Course [Member]
     *
     * @param Product $product
     * @return void
     */
    public function index(Product $product)
    {
        $menu = $product->courses()->select('title','slug')->get();
        $course = $product->courses()->first();

        $previous = $this->control('<',1);
        $next = $this->control('>',1);

        return view('frontend.course',compact('menu','course','product','previous','next'));
    }

    /**
     * Method For get all Course [Member]
     *
     * @param Product $product
     * @param Course $course
     * @return void
     */
    public function show(Product $product, Course $course)
    {
        $menu = $product->courses()->select('title','slug')->get();

        $previous = $this->control('<',$course->id);
        $next = $this->control('>',$course->id);

        return view('frontend.course',compact('menu','course','product','previous','next'));
    }
    
    /**
     * method for control Course in arrow
     *
     * @param [type] $arrow
     * @param [type] $id
     * @return void
     */
    private function control($arrow, $id)
    {
        return Course::where('id', $arrow, $id)
            ->select('slug')
            ->pluck('slug')
            ->first();
    }
}
