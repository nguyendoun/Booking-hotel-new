<?php

namespace App\Http\Requests;

use App\Models\Room;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreRoomRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'price'  =>
            [
                'required',
                'numeric',
            ],
            'room_number' =>
            [
                'unique:rooms',
            ],
            'hotel_id'     => [
                'required',
                'integer',
            ],
            'roomtype_id' => [
                'required',
                'unique:rooms',
                'integer',
            ],
            'qty' => [
                'required',
                'numeric',
            ],
            'discount' => [
                'required',
                'numeric',
            ],
            'area' => [
                'required',
                'numeric',
            ],
            
        ];
    }
}
