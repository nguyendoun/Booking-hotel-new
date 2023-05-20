@extends('layouts.orders')

@section('title', 'Yêu thích')


@section('main')

{{-- <div class="hotels" style="width: 75%;float: right;min-height: 400px;"> --}}
    @if ($favohotel->count() > 0)
        @foreach ($favohotel as $hotel)
            {{-- @foreach ($hotel as $ht) --}}
            <div class="ht"
                style="border-radius: 8px;width: 100%;height: 200px;display: flex;flex-direction: row;justify-content: flex-end;align-content: space-around; padding: 10px;margin-bottom: 10px; background-color: white;">
                <div class="image" style="width: 30%; float:left;">
                    <a  href="{{ route('addfavorite', $hotel['id']) }}">
                        @if(in_array($hotel['id'], $favoar))
                        <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" fill="red"></path> </svg>
                        @endif
                    </a>
                    <img src="../images/hotels/{{ $hotel['image'] }}" class=""
                        style="border-radius: 8px;width: 100%;height: 100%;">
                </div>
                <div class="name" style="width: 70%; float:left;margin-left: 10px;">
                    <div
                        style="font-weight: 600;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;font-size: 18px;line-height: 21px;">
                        <a
                            href="{{ route('hotel.detail', $hotel['id']) }}?">{{ $hotel['name'] }}</a>

                    </div>
                    <div class="starandcate"
                        title="Số sao đánh giá này do bạn Dũng tự điền, phản ánh sự hư cấu cũng như sự không có thật của các hotel.">
                        <div class="starsss">
                            @for ($i = 0; $i < $hotel['star']; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512"
                                style="height: 12px;">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"
                                    style="color: #f38e11;" />
                            </svg>
                        @endfor
                        </div>
                        <p>{{ showtypehotel($hotel['category_id']) }}</p>
                    </div>
                    <div class="rate">
                        <p>
                            <span class="avgrate" data-selected="true"
                                data-label-id="0">{{ showRate($hotel['id']) }}</span>
                            <span>
                                @if (showRate($hotel['id']) >= 9)
                                    Tuyệt vời
                                @elseif(showRate($hotel['id']) >= 7 && showRate($hotel['id']) < 9)
                                    Tốt
                                @elseif(showRate($hotel['id']) >= 5 && showRate($hotel['id']) < 7)
                                    Tạm
                                @elseif(showRate($hotel['id']) >= 1 && showRate($hotel['id']) < 4)
                                    Tệ
                                @else
                                    Chưa có đánh giá
                                @endif
                            </span>
                        <div style="width: 1px;height: 14px;margin: 0 8px;background: #cdc1c1;;"></div>
                        <span class="" style="margin-left: 4px;">({{ countRate($hotel['id']) }} đánh
                            giá)</span>
                        </p>
                    </div>
                    <div class="address">
                        <svg width="16" height="16" fill="none">
                            <path d="M8.467 3.8V2a1 1 0 00-1-1h-.8a1 1 0 00-1 1v1.8" stroke="#1A202C" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path
                                d="M1 7.467a1 1 0 001 1h9.838a1 1 0 00.64-.232l1.6-1.333a1 1 0 000-1.537l-1.6-1.333a1 1 0 00-.64-.232H2a1 1 0 00-1 1v2.667zM5.667 10.333V14a1 1 0 001 1h.8a1 1 0 001-1v-3.667"
                                stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                        <p>{{ $hotel['address'] }}</p>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
        @endforeach
            <div class="phantrang"
                                style="width: 100%;height: 150px;display: flex;justify-content: center;align-items: center;">
                                <div class="phantrang_container" style="width: 100%;">
                                    @if (count($favohotel) / 2 != null)
                                        <ul style="display: flex; justify-content: center; align-items: center;">
                                            <div><a href="{{ request()->fullUrlWithQuery(['page' => 1]) }}"><svg
                                                        style="stroke: #1A202C;transform: rotate(90deg);" width="14"
                                                        height="8" fill="none" class="svgFillAll jss11675">
                                                        <path d="M13 1L7 7 1 1" stroke="#4A5568" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg></a></div>
                                            @for ($i = 0; $i < count($favohotel) / 2; $i++)
                                                <li class="{{ $page == $i + 1 || $page == null ? 'activept' : 'defau' }}"
                                                    style="list-style: none;color: #FFF;width: 32px;height: 32px;font-size: 14px;font-weight: 600;display: flex;line-height: 16px;border-radius: 100px;margin: 0px 10px;align-items: center;justify-content: center;;">
                                                    <a style="color: white;text-decoration: none;"
                                                        href="{{ request()->fullUrlWithQuery(['page' => $i + 1]) }}">{{ $i + 1 }}</a>
                                                </li>
                                            @endfor
                                            <div><a
                                                    href="{{ request()->fullUrlWithQuery(['page' => round(count($favohotel) / 2)]) }}"><svg
                                                        style="stroke: #1A202C;transform: rotate(270deg);" width="14"
                                                        height="8" fill="none" class="svgFillAll jss11675">
                                                        <path d="M13 1L7 7 1 1" stroke="#4A5568" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg></a></div>
                                        </ul>
                                        {{-- @else --}}

                                    @endif
                                </div>
                            </div>
    @else
        <div>Đéo có</div>
    @endif

@stop
