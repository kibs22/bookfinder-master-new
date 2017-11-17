<?php

namespace App\Http\Controllers;

use App\PostedBook;
use Illuminate\Http\Request;
use App\Http\Traits\AuthenticatedUser;

class SearchBookController extends Controller
{
    use AuthenticatedUser;
    public function get_search(Request $r)
    {
      
      $data = PostedBook::with(['postedBy','postedCategory','getCategory'])->search($r->search)->get();
      $new = $data->map(function($item, $key){
         return [
           'id' => $item->id,
           'fullname' => $item->postedBy->firstname,
           'item' => ['title' => $item->title, 'description' => $item->description, 'author' => $item->author,'ibsn' => $item->IBSN,'availability' => $item->availability,'image' => $item->image]
           ];
      });
      return response()->json(['data' => $data ]);
    }
}
