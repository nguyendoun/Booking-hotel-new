<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Comment;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function booking($id)
    {

        return view('booking');
    }

    public function show($id)
    {
        // $comments = Comment::with('user','room')->get();
        $room = Room::find($id);
        return view('roomDetail', compact('room'));
    }
}