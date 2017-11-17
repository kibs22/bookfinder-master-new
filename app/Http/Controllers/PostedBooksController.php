<?php

namespace App\Http\Controllers;

use App\User;
use App\Review;
use App\PostedBook;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Traits\AuthenticatedUser;
use Illuminate\Support\Facades\Storage;


class PostedBooksController extends Controller
{
    use AuthenticatedUser;
    
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if($this->user()){
            return response()->json(['posts' => PostedBook::whereSellerId($this->user()->id)->with(['postedCategory','getCategory'])->get()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
       $post = $request->all();
       $post['seller_id'] = $this->user()->id;
       $post['availability'] = 0;
      
       $ret = PostedBook::create($post);

       if($ret->id){
           if($request->hasFile('image')){
                 $displayPhotoPath = $request->file('image')->store("displayphoto", 'public');
                 $ret->image = "storage/{$displayPhotoPath}";
                 $ret->save();
            }
           return response()->json(['success' => true ,'message' => 'successfully posted book!']);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      $data = PostedBook::with(['postedBy','postedCategory','getCategory'])->Details($request->id)->get();

       $data = $data->map(function($item, $key){
         return [
           'seller' => $item->postedBy,
           'item' => $item,
           'category' => $item->getCategory,
           'position' => ['lat' => $item->postedBy->latitude, 'lng' => $item->postedBy->longitude]
           ];
      });
      return response()->json(['data' => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PostedBook::whereId($id)->delete();
        return response()->json(['success'=> true]);
        // $posted = PostedBook::where('id','=',$id)->get();
        // $posted->delete();
        //PostedBook::whereId($id)->delete();
        // $postedbook = posted_books::where('id', '=', $id)->first();
        // $postedbook -> delete();
    }
}
