<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title', 'Your-orders')</title>
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/btr.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/bootstrap.bundle.min.js') }}" />

    <link rel="stylesheet" type="text/css" href="resources/js/bootstrap.bundle.min.js" />
    <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
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
        .selected{
    border-bottom: solid #ff3366;
        }
        .selected span{
            color: #ff3366;
        }
    .ht .image{
    position: relative;
}
.ht .image a{
position: absolute;
right: 10px;
top: 5px;
}
.ord .MuiBox-root.jss542.jss513 {
    flex-direction: column;
}
.starandcate {
    display: flex;
    flex-direction: column;
}
.starandcate .starsss, .rate, .address{
    display: flex;
}
.activept {
            background-color: #f38e11;
        }

        .defau {
            background-color: #00B6F3;
        }

        .defau:hover {
            background-color: #1c6780;
        }


    </style>
    @yield('styles')
</head>

<body>
    @include('partials.orders.header')
    @include('partials.orders.navlink')
    @yield('main')
    @include('partials.orders.footer')

</body>

</html>
