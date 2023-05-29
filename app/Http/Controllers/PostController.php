<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Station;
use App\Http\Requests\ReviewRequest;

class PostController extends Controller
{
    public function index(Review $review)
    {
        return view('reviews/index')->with(['reviews' => $review->getPaginateByLimit()]);  
    }
    
    public function show(Review $review)
    {
        return view('reviews/show')->with(['review' => $review]);
    }
    
    public function create(Station $station)
    {
        return view('reviews/create')->with(['stations' => $station->get()]);
    }
    
    public function store(ReviewRequest $request, Review $review)
    {
        $input = $request['review'];
        $review->fill($input)->save();
        return redirect('/reviews/' . $review->id);
    }
    
    public function search(Request $request, Review $review)
    {
        $keyword = $request['keyword'];
        
        $query_station = Station::query();
        $query = Review::query();
        
        if($keyword){
            $query_station->where('line','LIKE',"%{$keyword}%");
        }
 
        
        $station = $query_station->first();
        
        
        $posts = $review->where('station_id',$station->id)->get(); 
        
        return view('reviews/index')->with(['reviews'=>$posts]);
    }
}