<main class="ord">
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
                    <div aria-label="full width tabs example" class="MuiTabs-flexContainer" role="tablist">
                        <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit jss376 
                        {{ request()->is('tai-khoan')  ? 'selected' : ''}}"
                            tabindex="0" type="button" role="tab" aria-selected="true">
                            <span class="MuiTab-wrapper">Tài khoản</span>
                        </button>
                            <button
                            class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit jss376 
                            {{request()->is('don-hang-cua-ban') ? 'selected' : ''}}" tabindex="-1"
                            type="button" role="tab" aria-selected="false"><span class="MuiTab-wrapper">Đơn
                                phòng</span><span class="MuiTouchRipple-root"></span>
                        </button>
                        <button
                            class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit jss376 
                            {{request()->is('khach-san-yeu-thich') ? 'selected' : ''}}" tabindex="-1"
                            type="button" role="tab" aria-selected="false"><span class="MuiTab-wrapper">Khách sạn
                                yêu thích</span><span class="MuiTouchRipple-root"></span></button></div><span
                        class="jss461 jss463 MuiTabs-indicator jss460 jss377" style="left: 0px; width: 160px;"></span>
                </div>
            </div>
            <div class="MuiBox-root jss540">
                <div class="MuiBox-root jss541">
                    <div class="MuiBox-root jss542 jss513">