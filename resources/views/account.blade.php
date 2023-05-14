@extends('layouts.master')

{{-- @section('title') --}}

@section('styles')
    <style>
        .jss372 {
            color: #ffffff;
            height: 105px;
            background-color: #00B6F3;
        }

        .jss374 {
            height: 100%;
            display: flex;
            padding: 16px 0;
            flex-direction: column;
            justify-content: space-between;
        }

        .jss379 {
            margin: 0 auto;
            max-width: 1188px;
        }

        .jss535 {
            display: flex;
            align-items: center;
            line-height: 22px;
        }

        .jss538 {
            font-size: 30px;
            font-weight: 600;
            line-height: 36px;
        }

        .jss375 {
            color: #ffffff;
        }

        .MuiLink-underlineHover {
            text-decoration: none;
        }

        .MuiTypography-root {
            margin: 0;
        }

        .jss375 {
            color: #ffffff;
        }

        .jss373 {
            margin: 0 4px;
            stroke: #ffffff;
            transform: rotate(270deg);
        }

        .svgFill *,
        .svgFillAll * {
            fill: inherit;
            stroke: inherit;
        }

        .jss379 {
            margin: 0 auto;
            max-width: 1188px;
        }

        .MuiTabs-root {
            display: flex;
            overflow: hidden;
            min-height: 48px;
            -webkit-overflow-scrolling: touch;
        }

        .MuiTabs-fixed {
            width: 100%;
            overflow-x: hidden;
        }

        .MuiTabs-scroller {
            flex: 1 1 auto;
            display: inline-block;
            position: relative;
            white-space: nowrap;
        }

        .MuiTabs-flexContainer {
            display: flex;
        }

        .MuiTab-textColorInherit.Mui-selected {
            opacity: 1;
        }

        .jss376 {
            color: #1a202c;
            opacity: 1;
            font-weight: 600;
            line-height: 17px;
            text-transform: none;
        }

        .MuiTab-root {
            padding: 6px 12px;
            overflow: hidden;
            position: relative;
            font-size: 14px;
            max-width: 264px;
            min-width: 72px;
            box-sizing: border-box;
            min-height: 48px;
            text-align: center;
            flex-shrink: 0;
            font-family: Mt;
            font-weight: 500;
            line-height: auto;
            white-space: normal;
            text-transform: none;
        }

        .MuiButtonBase-root {
            color: inherit;
            border: 0;
            cursor: pointer;
            margin: 0;
            display: inline-flex;
            outline: 0;
            padding: 0;
            position: relative;
            align-items: center;
            user-select: none;
            border-radius: 0;
            vertical-align: middle;
            -moz-appearance: none;
            justify-content: center;
            text-decoration: none;
            background-color: transparent;
            -webkit-appearance: none;
            -webkit-tap-highlight-color: transparent;
        }

        .MuiTab-wrapper {
            width: 100%;
            display: inline-flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        .MuiTouchRipple-root {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            overflow: hidden;
            position: absolute;
            border-radius: inherit;
            pointer-events: none;
        }

        .jss461 {
            width: 100%;
            bottom: 0;
            height: 2px;
            position: absolute;
            transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .jss540 {
            padding-top: 16px;
        }

        .MuiTab-root {
            min-width: 160px;
        }

        .jss376 {
            color: #1a202c;
            opacity: 1;
            font-weight: 600;
            line-height: 17px;
            text-transform: none;
        }

        .jss540 {
            padding-top: 16px;
        }

        .jss371 {
            color: #1a202c;
            font-size: 14px;
        }

        .jss513 {
            border: 1px solid #EDF2F7;
            display: flex;
            padding: 32px 0 42px 40px;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            margin-bottom: 100px;
            background-color: #ffffff;
        }

        .jss545 {
            max-width: 480px;
            padding-left: 40px;
        }


        .MuiBadge-root {
            width: 124px;
            display: inline-flex;
            position: relative;
            flex-shrink: 0;
            vertical-align: middle;
            height: 124px;
        }


        .jss514 {
            width: 124px;
            height: 124px;
            font-size: 40px;
            font-weight: 600;
            background-color: #00B6F3;
        }

        .MuiAvatar-root {
            width: 100%;
            height: 100%;
            display: flex;
            overflow: hidden;
            position: relative;
            font-size: 1.4285714285714286rem;
            align-items: center;
            flex-shrink: 0;
            font-family: Mt;
            line-height: 1;
            user-select: none;
            border-radius: 50%;
            justify-content: center;
        }

        .MuiBadge-anchorOriginBottomRightCircle {
            right: 14%;
            bottom: 14%;
            transform: scale(1) translate(50%, 50%);
            transform-origin: 100% 100%;
        }

        .MuiBadge-badge {
            height: 20px;
            display: flex;
            padding: 0 6px;
            z-index: 1;
            position: absolute;
            flex-wrap: wrap;
            font-size: 0.8571428571428571rem;
            min-width: 20px;
            box-sizing: border-box;
            transition: transform 225ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            align-items: center;
            font-family: Mt;
            font-weight: 500;
            line-height: 1;
            align-content: center;
            border-radius: 10px;
            flex-direction: row;
            justify-content: center;
        }

        .jss516 {
            width: 32px;
            height: 32px;
            display: flex;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
            align-items: center;
            border-radius: 50%;
            justify-content: center;
            background-color: #ffffff;
        }

        svg {
            display: block;
        }

        .MuiFormControl-fullWidth {
            width: 100%;
        }

        .MuiFormControl-root {
            border: 0;
            margin: 0;
            display: inline-flex;
            padding: 0;
            position: relative;
            min-width: 0;
            margin-right: 16px;
            flex-direction: column;
            vertical-align: top;
        }

        .jss547 {
            margin-top: 5px;
            margin-right: 0;
        }

        .MuiFormControl-root {
            border: 0;
            margin: 0;
            display: inline-flex;
            padding: 0;
            position: relative;
            min-width: 0;
            margin-right: 16px;
            flex-direction: column;
            vertical-align: top;
        }

        .jss546 .MuiInputLabel-formControl {
            color: #718096;
            font-size: 16px;
            margin-bottom: 0;
        }

        .MuiInputLabel-animated {
            transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
        }

        .MuiInputLabel-shrink {
            transform: unset;
            transform-origin: top left;
        }

        .MuiInputLabel-formControl {
            top: 0;
            left: 0;
            position: relative;
            font-size: 12px;
            transform: translate(0, 24px) scale(1);
            font-weight: normal;
            line-height: 14px;
            margin-bottom: 4px;
        }

        .MuiInputLabel-root {
            color: #000000;
            display: block;
            position: relative;
            font-size: 12px;
            font-weight: normal;
            line-height: 14px;
            transform-origin: top left;
        }

        .MuiFormLabel-root {
            color: rgba(0, 0, 0, 0.54);
            padding: 0;
            font-size: 16px;
            font-family: Mt;
            font-weight: normal;
            line-height: 1;
        }

        .jss547 .MuiInput-root {
            font-size: 14px;
            margin-top: 0 !important;
        }

        .MuiInput-root {
            position: relative;
        }

        .MuiInputBase-root {
            color: rgba(0, 0, 0, 0.87);
            cursor: text;
            display: inline-flex;
            position: relative;
            font-size: 16px;
            box-sizing: border-box;
            align-items: center;
            font-family: Mt;
            font-weight: normal;
            line-height: 1.1876em;
        }

        .MuiInput-underline:before {
            left: 0;
            right: 0;
            bottom: 0;
            content: "\00a0";
            position: absolute;
            transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-bottom: 1px solid rgba(0, 0, 0, 0.42);
            pointer-events: none;
        }

        .jss547 .MuiInput-root .MuiInputBase-input {
            padding: 11px 0 9px;
        }

        .MuiInputBase-input {
            font: inherit;
            color: currentColor;
            width: 100%;
            border: 0;
            height: 1.1876em;
            margin: 0;
            display: block;
            padding: 6px 0 7px;
            min-width: 0;
            background: none;
            box-sizing: content-box;
            animation-name: mui-auto-fill-cancel;
            letter-spacing: inherit;
            animation-duration: 10ms;
            -webkit-tap-highlight-color: transparent;
        }

        .MuiInput-underline:after {
            left: 0;
            right: 0;
            bottom: 0;
            content: "";
            position: absolute;
            transform: scaleX(0);
            transition: transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            border-bottom: 2px solid #00B6F3;
            pointer-events: none;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        .container {
            width: 1000px;
            margin: 0 auto;
        }

        .form--updateuser {
            width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .form-control-file {
            height: 100%;
            position: absolute;
            width: 100%;
            /* display: none; */
            z-index: 2;
            opacity: 0;
        }

        .form-title {
            font-size: x-large;
            font-family: cursive;
        }

        .form-input {
            border: 1px solid rgb(99, 97, 97);
            height: 50px;
            border-radius: 4px;
            width: 100%;
            padding: 0 20px;
            transition: 0.25s ease;

        }

        .form-input-birthday {
            font-size: larger;
            color: darkgray;

        }

        .form-input-gender {
            display: flex;
            align-items: center;
            padding-left: 15px;
            width: auto;
        }

        .form-option-country {
            font-size: 16px;
            font-family: emoji;
        }

        .form-input:focus {
            border-color: #6a5af9;

        }

        .form-field {
            position: relative;
            width: 450px;
            margin: 10px;
        }

        .form-label {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 21px;
            user-select: none;
            color: rgb(172, 161, 161);
            pointer-events: none;
            transition: 0.25s ease;
        }

        .form-input:not(:placeholder-shown)+.form-label,
        .form-input:focus+.form-label {
            top: 0;
            left: 11px;
            padding: 0 10px;
            display: inline-block;
            background-color: white;
            color: #1b00ff;
        }

        .form-button {
            width: 50%;
            height: 50px;
            border-radius: 4px;
            color: white;
            background-color: #726666;
        }

        .form-field__button {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #mess {
            position: fixed;
            top: 5%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .mess-contai {
            display: flex;
            align-items: center;
        }

        p.text {
            margin: 0;
        }

        .mess-icon {
            color: #4caf50;
        }

        .mess-icon {
            display: flex;
            opacity: 0.9;
            padding: 7px 0;
            font-size: 22px;
            margin-right: 12px;
        }

        .iconsvg {
            fill: currentColor;
            width: 1em;
            height: 1em;
            display: inline-block;
            font-size: 1.7142857142857142rem;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            flex-shrink: 0;
            user-select: none;
        }

        .mess-action {
            display: flex;
            align-items: center;
            margin-right: -8px;
            margin-left: 16px;
            background: none;
            border: none;
        }

        .MuiSvgIcon-root {
            fill: currentColor;
            width: 1em;
            height: 1em;
            display: inline-block;
            font-size: 1.7142857142857142rem;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            flex-shrink: 0;
            user-select: none;
        }

        .MuiSvgIcon-fontSizeSmall {
            font-size: 1.4285714285714286rem;
        }

        .MuiIconButton-label {
            width: 100%;
            display: flex;
            align-items: inherit;
            justify-content: inherit;
        }

        #mess {
            -webkit-animation: cssAnimation 1.5s forwards;
            animation: cssAnimation 1.5s forwards;
            animation-delay: 5s;
        }


        @keyframes cssAnimation {
            0% {
                top: 5%;
            }

            100% {
                top: -100%;
            }
        }

        @-webkit-keyframes cssAnimation {
            0% {
                top: 55%;
            }

            100% {
                top: -100%;
            }
        }
    </style>
@stop


@section('content')

    <main>
        <div class="MuiBox-root jss532 jss371">
            <div class="MuiBox-root jss533 jss372" style="background: rgb(0, 182, 243);">
                <div class="MuiBox-root jss534 jss379 jss374">
                    <div class="MuiBox-root jss535"><a
                            class="MuiTypography-root MuiLink-root MuiLink-underlineHover jss375 MuiTypography-colorPrimary"
                            href="/"><span class="MuiBox-root jss536">Trang chủ</span></a><svg width="10"
                            height="6" fill="none" class="svgFillAll jss373">
                            <path d="M1.667 1.333L5 4.667l3.333-3.334" stroke="#1A202C" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg><span class="MuiBox-root jss537">Tài khoản</span></div><span class="MuiBox-root jss538">Tài
                        khoản </span>
                </div>
            </div>
            <div class="MuiBox-root jss539 jss379">
                <div class="MuiTabs-root">
                    <div class="MuiTabs-scroller MuiTabs-fixed" style="overflow: hidden;">
                        <div aria-label="full width tabs example" class="MuiTabs-flexContainer" role="tablist"><button
                                class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit jss376 Mui-selected"
                                tabindex="0" type="button" role="tab" aria-selected="true"><span
                                    class="MuiTab-wrapper">Tài khoản</span><span
                                    class="MuiTouchRipple-root"></span></button><button
                                class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit jss376" tabindex="-1"
                                type="button" role="tab" aria-selected="false"><span class="MuiTab-wrapper">Đơn
                                    phòng</span><span class="MuiTouchRipple-root"></span></button><button
                                class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit jss376" tabindex="-1"
                                type="button" role="tab" aria-selected="false"><span class="MuiTab-wrapper">Chuyến
                                    bay</span><span class="MuiTouchRipple-root"></span></button><button
                                class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit jss376" tabindex="-1"
                                type="button" role="tab" aria-selected="false"><span class="MuiTab-wrapper">Khách sạn
                                    yêu thích</span><span class="MuiTouchRipple-root"></span></button></div><span
                            class="jss461 jss463 MuiTabs-indicator jss460 jss377" style="left: 0px; width: 160px;"></span>
                    </div>
                </div>
                <div class="MuiBox-root jss540">
                    <div class="MuiBox-root jss541">
                        <div class="MuiBox-root jss542 jss513">
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
                                        {{-- @if ($errors->has('address'))
                                                    <p style="color:red">{{$errors->first('address')}}</p>
                                                @endif --}}
                                        <div class="form-field form-field__button">
                                            <button type="submit" class="form-button">Lưu lại</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            @if (Session::has('mess'))
                                <p class="alert alert-info">{{ Session::get('mess') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    @include('partials.account.mess')

@stop
<script language="javascript">
    function change_att_mess() {
        var style = document.getElementById("mess").style.top;
        if (style == "5%") {
            document.getElementById("mess").style.top = "-100%";
            document.getElementById("mess").classList.remove("alert-success");
            // document.getElementById("mess").classList.add("add");
        }
    }

    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#dd').attr('src', e.target.result).width(124).height(124);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>
