<?php

namespace App\Http\Controllers\Backend;

use App\Course;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(Product $product)
    {
        if(request()->wantsJson()){
            $course = $product->courses()
                ->latest('created_at')
                ->get();
            return datatables($course)
                ->addIndexColumn()
                ->editColumn('attachment', function($query){
                    return '<a href="'.$query->attachment.'" class="btn btn-default btn-sm"><i class="fa fa-download"></i></a>';
                })
                ->addColumn('action', function($query) {
                    $route = route("admin.product.course.destroy",["product" => $query->product_id, "course" => $query->slug]);
                    return '
                    <form action="'.$route.'" method="post">
                        '.csrf_field().method_field("DELETE").
                        '<a href="'.$query->attachment.'" class="btn btn-warning btn-sm">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>';
                })
                ->rawColumns(['action','attachment'])
                ->make(true);
        }

        return view('backend.course', compact('product'));
    }

    public function store(Product $product, Request $request)
    {
        $product->courses()->create($request->all());

        return redirect()->back();
    }

    public function destroy(Product $product, Course $course)
    {
        $course->delete();

        return redirect()->back()->withSuccess('Task Deleted Successfully!');
    }
}
