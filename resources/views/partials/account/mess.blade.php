
<div class="alert-success" id="mess" style="{{session('message') ? 'top: 5%;' : 'top: -100%;'}}">
    <div class="">
        <div class="mess-contai">
            <div class="mess-icon" id="">
                <svg class="iconsvg" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2, 4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0, 0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z">
                    </path>
                </svg>
            </div>
            <div class="mess-text">
                <p class="text">
                    @if (session('message'))
                        {{ session('message') }}
                    @endif
                </p>
            </div>
            <div class="mess-action" tabindex="0" type="button" aria-label="Close" title="Close" onclick="change_att_mess()">
                <span
                    class="MuiIconButton-label"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall" focusable="false"
                        viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                        </path>
                    </svg>
                </span>
                    
            </div>
        </div>
    </div>
</div>
