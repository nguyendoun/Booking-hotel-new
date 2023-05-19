@extends('layouts.orders')
@section('title', 'Tài khoản')
@section('main')
                            <form class="form--updateuser" action="{{ route('update.user') }}" method="post"
                                enctype="multipart/form-data">
                                <div class="MuiBox-root jss543"><span class="MuiBadge-root dropzone" role="button"
                                        tabindex="0">

                                        <input type="file" name="image" id="image" accept="image/*"
                                            class="form-control-file" onchange="readURL(this);">


                                        @if (Auth::user()->image !== null)
                                            <div class="MuiAvatar-root MuiAvatar-circle jss514 MuiAvatar-colorDefault">
                                                <img src="{{ asset('images/' . Auth::user()->image) }}" class="card-img-top"
                                                    style="width: 100%; height: 100%;" id="dd">
                                            </div>
                                        @else
                                        <div class="MuiAvatar-root MuiAvatar-circle jss514 MuiAvatar-colorDefault">
                                            <img class="card-img-top" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" id="dd">
                                        </div>
                                        @endif
                                        <span class="MuiBadge-badge MuiBadge-anchorOriginBottomRightCircle">
                                            <div class="MuiBox-root jss544 jss516">
                                                <svg width="20" height="20" fill="none">
                                                    <path
                                                        d="M4.167 5.833H5a1.667 1.667 0 001.667-1.666.833.833 0 01.833-.834h5a.833.833 0 01.833.834A1.667 1.667 0 0015 5.833h.833A1.666 1.666 0 0117.5 7.5V15a1.666 1.666 0 01-1.667 1.667H4.167A1.667 1.667 0 012.5 15V7.5a1.667 1.667 0 011.667-1.667"
                                                        stroke="#1A202C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M10 13.333a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" stroke="#1A202C"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </div>
                                        </span>
                                    </span></div>
                                <div class="MuiBox-root jss545">
                                    <div class="">

                                        @csrf
                                        <div class="form-field">
                                            <input type="text" name="name" class="form-input" placeholder=" "
                                                value="{{ Auth::user()->name }}">
                                            <label for="name" class="form-label">Full Name<i
                                                    style="color:red">*</i></label>
                                        </div>

                                        <div class="form-field">
                                            <input type="email" name="email" class="form-input" placeholder=" "
                                                value="{{ Auth::user()->email }}">
                                            <label for="Email" class="form-label">Email<i
                                                    style="color:red">*</i></label>
                                        </div>

                                        <div class="form-field">
                                            <input type="text" {{ Auth::user()->phone !== null ? 'readonly' : '' }} name="phone" class="form-input"
                                                placeholder=" " value="{{ Auth::user()->phone }}">
                                            <label for="number" class="form-label">Phone<i
                                                    style="color:red">*</i></label>
                                        </div>

                                        <div class="form-field">
                                            <input type="text" name="address" class="form-input" placeholder=" "
                                                value="{{ Auth::user()->address }}">
                                            <label for="address" class="form-label">Address<i
                                                    style="color:red">*</i></label>
                                        </div>
                                        <div class="form-field form-field__button">
                                            <button type="submit" class="form-button">Lưu lại</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
@stop