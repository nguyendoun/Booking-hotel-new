  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #ff7b0a;">
          <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Đặt Phòng Cá Nhân</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form dialog-book-quick">
            <div class="form-group">
              <p class="quote" style=" border: solid 1px #e4e2e2;padding: 10px;font-size: .8em;background-color: #edf9d2;font-style: italic;line-height: 18px;">
                Không muốn mất thời gian tìm kiếm, lựa chọn?<br>
                Hãy để lại yêu cầu đặt phòng và thông tin liên lạc của bạn tại đây.<br>
                Chúng tôi sẽ liên hệ với bạn trong vòng 12 tiếng giờ hành chính.
              </p>
              <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Yêu cầu đặt phòng</label>
              <textarea class="" id="txtBody" style="width: 100%;height: 100px;border: solid 1px #e4e2e2;font-size: small;font-family: none;padding: 0 5px;" placeholder="Xin vui lòng điền tóm tắt thông tin đặt phòng nhanh của bạn tại đây.Chúng tôi sẽ liên hệ bạn trong vòng 12 tiếng giờ hành chính."></textarea>
            </div>
            <div class="form-group">
              <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Email</label>
              <input type="email" class="form-control" id="txtEmail_divBookQuick">
            </div>
            <div class="form-group">
              <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Số di động</label>
              <input type="text" class="form-control" id="txtMobile_divBookQuick">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" style="background-color: #ff7b0a;">Đặt Phòng Nhanh</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="phongdoan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #ff7b0a;">
          <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Đặt Phòng Đoàn</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form dialog-book-quick">
            <div class="form-group">
              <p class="quote" style=" border: solid 1px #e4e2e2;padding: 10px;font-size: .8em;background-color: #edf9d2;font-style: italic;line-height: 18px;">
                <b>Lợi ích khi đặt phòng cho đoàn với Bookinghotel.vn</b>
                <br>Uy tín, trách nhiệm &amp; giá tốt.
                <br>Giảm giá tối đa cho khách hàng cá nhân.
                <br>Chiết khấu hấp dẫn cho khách hàng công ty.
              </p>
              <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Yêu cầu đặt phòng</label>
              <textarea class="" id="txtBody" style="width: 100%;height: 100px;border: solid 1px #e4e2e2;font-size: small;font-family: none;padding: 0 5px;" placeholder="Không muốn mất thời gian tìm kiếm, lựa chọn? Hãy để lại yêu cầu đặt phòng và thông tin liên lạc của bạn tại đây. Chúng tôi sẽ liên hệ với bạn trong vòng 12 tiếng giờ hành chính."></textarea>
            </div>
            <div class="form-group">
              <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Email</label>
              <input type="text" class="form-control" id="txtEmail_divBookQuick">
            </div>
            <div class="form-group">
              <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Số di động</label>
              <input type="text" class="form-control" id="txtMobile_divBookQuick">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary" style="background-color: #ff7b0a;">Đặt Phòng Đoàn</button>
        </div>
      </div>
    </div>
  </div>

  {{-- login --}}
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #ff7b0a;">
          <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Đăng nhập</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form dialog-book-quick">
            <form action="{{ route('home.login')}}" method="post">
              @csrf
              @if(session()->has('error'))
              <p style="color:red">{{session()->get('error')}}</p>
              @endif

              <div class="form-group">
                <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Email</label>
                <input type="email" name="email" class="form-control" id="txtEmail_divBookQuick" value="{{ old('email', '') }}" required>
                @if($errors->has('email'))
                <p style="color:red">{{$errors->first('email')}}</p>
                @endif
              </div>
              <div class="form-group">
                <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Password</label>
                <input type="password" name="password" class="form-control" id="txtMobile_divBookQuick" required>
                @if($errors->has('password'))
                <p style="color:red">{{$errors->first('password')}}</p>
                @endif
              </div>
              <div class="form-group">
                <input type="checkbox" id="brand1" value="">
                <label for="brand1"><span></span>Remember me</label>
                <a href="#">Forgot password?</a><br>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" style="background-color: #ff7b0a;padding: left 40px;" value="Đăng nhập"></input>
              </div>
            </form>
          </div>
        </div>
        <hr>
<div class="form-group row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ url('/auth/redirect/google') }}" class="btn btn-primary"><i class="fa fa-google"></i> Google</a>
</div>
<div class="col-md-8 offset-md-4">
  <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i>Facebook</a>
  </div>
</div>
        <div class="modal-footer ">
          <p>Nếu chưa có tài khoản hãy đăng ký tại đây<span>→</span> <a class="w3_play_icon1" href="#" data-toggle="modal" data-target="#register">Đăng ký</a></p>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>

  {{-- register --}}
  <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #ff7b0a;">
          <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Đăng ký</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form dialog-book-quick">
            <form action="{{ route('home.register') }}" method="POST">
              @csrf
              <div class="form-group">
                <p class="quote" style=" border: solid 1px #e4e2e2;padding: 10px;font-size: .8em;background-color: #edf9d2;font-style: italic;line-height: 18px;">
                  Đăng ký tài khoản để được nhiều ưu đãi hơn khi đặt phòng<br>
                  Hãy đăng ký ở dưới !!!.<br>
                </p>
              </div>
              <div class="form-group">
                <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Tên<i style="color:red">*</i></label>
                <input type="text" name="name" class="form-control" id="txtEmail_divBookQuick" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                <p style="color:red">{{$errors->first('name')}}</p>
                @endif
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Email<i style="color:red">*</i></label>
                  <input type="email" name="email" class="form-control" id="txtEmail_divBookQuick" value="{{ old('email', '') }}" required>
                  @if($errors->has('email'))
                  <p style="color:red">{{$errors->first('email')}}</p>
                  @endif
                </div>
                <div class="form-group col-md-6">
                  <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Mật khẩu<i style="color:red">*</i></label>
                  <input type="password" name="password" class="form-control" id="txtMobile_divBookQuick" required>
                  @if($errors->has('password'))
                  <p style="color:red">{{$errors->first('password')}}</p>
                  @endif
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Điện thoại<i style="color:red">*</i></label>
                  <input type="text" name="phone" class="form-control" id="txtEmail_divBookQuick" value="{{ old('phone', '') }}" required>
                  @if($errors->has('phone'))
                  <p style="color:red">{{$errors->first('phone')}}</p>
                  @endif
                </div>
                <div class="form-group col-md-6">
                  <label style="display: inline-block;max-width: 100%;margin-bottom: 5px;font-weight: 700;">Địa chỉ<i style="color:red">*</i></label>
                  <input type="text" name="address" class="form-control" id="txtMobile_divBookQuick" value="{{ old('address', '') }}" required>
                  @if($errors->has('address'))
                  <p style="color:red">{{$errors->first('address')}}</p>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" style="background-color: #ff7b0a;padding: left 40px;" value="Đăng ký"></input>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer ">
          <p>Bạn đã có tài khoản hãy đăng nhập tại đây<span>→</span> <a class="w3_play_icon1" href="#" data-toggle="modal" data-target="#login">Đăng nhập</a></p>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal cmt -->
  <div class="modal fade" id="cmt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:#fa9442">Đánh giá hotel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Gửi bình luận thành công !!!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>