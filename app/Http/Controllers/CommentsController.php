<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;


class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       
    }

    public function storeComment($id,Request $request)
    {
        dd('hi');
        // $idRoom = $id;
        // // $room = Room::find($id);
        // $comment = new Comment;
        // $comment->content = $request->content;
        // $comment->user_id = Auth::user()->id;
        // $comment->room_id = $idRoom;
        // $comment->save();

        // return redirect()->back()->with('message','bình luận thành công');
    }
}
