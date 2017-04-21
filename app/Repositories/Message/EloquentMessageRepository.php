<?php

namespace App\Repositories\Message;
use App\Repositories\Message\MessageContract;
use App\Message;
use Sentinel;
use DB;

class EloquentMessageRepository implements MessageContract
{
  public function create($request){
    $message = new Message;
    $message->title = $request->title;
    $message->message = $request->message;
    $user = Sentinel::getUser();
    $message->user_id = $user->id;
    $message->save();
    return $message;
  }

  public function findAll(){
    return Message::all();
  }

  public function findById($id){
    return Message::find($id);
  }
}
