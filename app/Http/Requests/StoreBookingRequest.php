<?php

namespace App\Http\Requests;

use App\Booking;
use App\BookingRoom;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreBookingRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('booking_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'qty_total' => 'numeric'
        ];
    }
}
