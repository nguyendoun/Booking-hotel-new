<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRoomTypeRequest;
use App\Http\Requests\StoreRoomTypeRequest;
use App\Http\Requests\UpdateRoomTypeRequest;
use App\Models\RoomType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoomTypesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('room_type_access'), Response::HTTP_FORBIDDEN, 'xin lỗi nhưng bạn không đủ tuổi, à nhầm...là không đủ quyền!!');

        $roomTypes = RoomType::all();

        return view('admin.roomTypes.index', compact('roomTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('room_type_create'), Response::HTTP_FORBIDDEN, 'xin lỗi nhưng bạn không đủ tuổi, à nhầm...là không đủ quyền!!');

        return view('admin.roomTypes.create');
    }

    public function store(StoreRoomTypeRequest $request)
    {
        $roomType = RoomType::create($request->all());

        return redirect()->route('admin.room-types.index')->with(['success'=>'create room type success']);
    }

    public function edit(RoomType $roomType)
    {
        abort_if(Gate::denies('room_type_edit'), Response::HTTP_FORBIDDEN, 'xin lỗi nhưng bạn không đủ tuổi, à nhầm...là không đủ quyền!!');

        return view('admin.roomTypes.edit', compact('roomType'));
    }

    public function update(UpdateRoomTypeRequest $request, RoomType $roomType)
    {
        $roomType->update($request->all());

        return redirect()->route('admin.room-types.index')->with(['success'=>'update room type success']);
    }

    public function show($id)
    {
        abort_if(Gate::denies('room_type_show'), Response::HTTP_FORBIDDEN, 'xin lỗi nhưng bạn không đủ tuổi, à nhầm...là không đủ quyền!!');

        $roomType= RoomType::findOrFail($id);

        return view('admin.roomTypes.show', compact('roomType'));
    }

    public function destroy(RoomType $roomType)
    {
        abort_if(Gate::denies('room_type_delete'), Response::HTTP_FORBIDDEN, 'xin lỗi nhưng bạn không đủ tuổi, à nhầm...là không đủ quyền!!');

        $roomType->delete();

        return back()->with(['success'=>'delete room type success']);
    }

    public function massDestroy(MassDestroyRoomTypeRequest $request)
    {
        RoomType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
