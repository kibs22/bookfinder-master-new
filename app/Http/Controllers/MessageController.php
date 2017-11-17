<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use App\PostedBook;
use Illuminate\Http\Request;
use App\Http\Traits\AuthenticatedUser;
use App\Http\Requests\SendMessageRequest;


class MessageController extends Controller
{
    use AuthenticatedUser;

    public function send(SendMessageRequest $r)
    {
        $message = $r->all();
        $message['sender_id'] = $this->user()->id; 
        
        $res = Message::create($message);
        
        if($res->id){
            return response()->json(['message' => 'Message successfully sent!' ]);
        }
    }
    public function message()
    {
        if($this->user()){
           return response()->json([
               'data' => Message::GroupMessage($this->user()->id)->with(['sender'])->get()
               ]);
        }
    }
    public function mobileMessages(){
        return response()->json([
               'data' => Message::with(['sender'])->groupBy('sender_id')->get()
               ]);
    }
    public function tempRetrieveMessages()
    {
       $message = Message::ThreadHeader($this->user()->id)->get();

    
        //dd($message->toArray());
        // $message = $message->map(function($item,$key){
            
        //  $header = [];
        // //  if($item->recipient_id == $this->user()->id && $item->posted_id == $item[$key+1]->posted_id)  
        //     $temp = [
        //         'sender' => $item->sender,
        //         'message' => $item->message,
        //         'image' => $item->image,
        //         'details' => [
        //             'title' => $item->title,
        //             'description' => $item->description,
        //             'price' => $item->price,
        //             'author' => $item->author
        //         ]
        //     ];
        //         if($item->sender_id == $this->user()->id){
        //             $temp['recipient_id'] = $item->sender_id;
        //         }else{
        //             $temp['sender_id'] = $item->sender_id;
        //         }

        //     return $temp;
        // });
          return response()->json(['posted_books' => PostedBook::with(['postedCategory','getCategory'])->get(), 'data' => $message ]);  
    }

    public function messageThread()
    {
        
    }
}
