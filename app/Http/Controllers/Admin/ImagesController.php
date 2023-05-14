<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Image;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::with('room')->get();
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('booking_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rooms = Room::all();

        return view('admin.images.create', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('path');
        $file_name= $file->getClientOriginalName();
        $file->move(public_path('../resources/images/rooms'),$file_name);//insert file vào thư mục
        $room_id = $request->only('room_id');  
        $image= new Image(); 
        $image->path = $file_name;
        $image->room_id = $request->room_id;
        $image->save();

        return redirect()->route('admin.images.index')->with(['success'=>'create image room success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        abort_if(Gate::denies('image_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $rooms = Room::all()->pluck('room_number', 'id')->prepend(trans('global.pleaseSelect'), '');
        return view('admin.images.edit', compact('image','rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Image $image)
    {
        $image->room_id = $request->room_id;
        $file = $request->file('path');
        if($file)
        {
            $file_name= $file->getClientOriginalName();
            $file->move(public_path('../resources/images/rooms'),$file_name);//insert file vào thư mục
            $room_id = $request->only('room_id');  
            $image->path = $file_name;
            $image->update();
        }        
        $image->update();       
        return redirect()->route('admin.images.index')->with(['success'=>'update image room success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        abort_if(Gate::denies('image_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $image->delete();

        return back()->with(['success'=>'delete booking success']);
    }
}
