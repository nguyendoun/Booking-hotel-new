<?php

namespace App\Http\Requests;

use App\RoomType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreRoomTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('room_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'type' => [
                'required',
                'unique:room_types',
            ],
            'bed' => [
                'required',
                'numeric',
            ],
            'capactity' => [
                'required',
                'numeric',
            ],
        ];
    }
}
