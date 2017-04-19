<?php

namespace App\Repositories\Message;
use App\Repositories\Message\MessageContract;
use App\Message;
use Sentinel;

class EloquentMessageRepository implements MessageContract
{
  public function create($request){
    $message = new Message;
    $message->message_content = $request->message_content;
    $user = Sentinel::getUser;
    $message->user_id = $user->id;
    $message->save();
    return $message;
  }

  public function findByAll(){
    return Message::all();
  }

  public function findById($id){
    return Message::find($id);
  }
}
