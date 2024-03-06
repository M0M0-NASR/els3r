<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('site.about');
    }

    public function search(Request $request)
    {
        
        if($request->filter == "category")
            $table = new Category;
        else
            $table= new Product;
    

        if ($request->ajax()) {
            
            $output = "";
            if($table instanceof Product)
            {
                $posts = $table->where('name', 'LIKE', '%' . $request->search . "%")
                ->orWhere('description', 'LIKE', '%' . $request->search . "%")->limit(5)
                ->get();
                
            }
            else
            {

                $posts = $table->where('name', 'LIKE', '%' . $request->search . "%")
                    ->limit(5)->get();
            }

            if ($posts) {
                foreach ($posts as $key => $post) {
                    $slug = $post->slug;
                    $tableName = $request->filter;
                    $output .= '<div>' .
                        "<a href='".$tableName."/$slug' >" . $post->name . '</a>' .
                        '<h2>' . $post->description . '</h2>' .
                        '</div>';
                }
            }
            // dd($posts);

            if (count($posts) < 0) {
                $output = "<div class='d-flex justify-content-center'>No Posts Available </div>";
            }
            return Response($output);

        }

    }

}
