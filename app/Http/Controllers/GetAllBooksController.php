<?php

namespace App\Http\Controllers;

use App\PostedBook;
use Illuminate\Http\Request;

class GetAllBooksController extends Controller
{
    public function __invoke(Request $r)
    {
        if($r->q){
            
            $data = PostedBook::with(['postedBy','postedCategory','getCategory'])->search($r->q)->get();
            $new = $data->map(function($item, $key){
               return [
                 'id' => $item->id,
                 'fullname' => $item->postedBy->firstname,
                 'item' => ['title' => $item->title, 'description' => $item->description, 'author' => $item->author,'ibsn' => $item->IBSN,'availability' => $item->availability,'image' => $item->image]
                 ];
            });
            return response()->json(['posts' => $data ]);
        }
    	return response()->json(['posts' => PostedBook::with(['postedCategory','getCategory','postedBy'])->get()]);
    }
}
