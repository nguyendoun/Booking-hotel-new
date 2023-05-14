
  <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .container{
                width: 1000px;
                margin: 0 auto;
            }
            .form{
                width: 500px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

            }
            .form-title{
                font-size: x-large;
                font-family: cursive;
            }
            .form-input{
                border: 1px solid rgb(99, 97, 97);
                height: 50px;
                border-radius:4px;
                width: 100%;
                padding: 0 20px;
                transition: 0.25s ease;
                
            }
            .form-input-birthday{
                font-size: larger;
                color: darkgray;
               
            }
            .form-input-gender{
                display: flex;
                align-items: center;
                padding-left: 15px;
                width: auto;
            }
            .form-option-country{
              font-size: 16px;
              font-family: emoji;
            }
            .form-input:focus{
                border-color: #6a5af9;
                
            }
            .form-field{
                position: relative;
                width: 450px;
                margin: 10px;
            }
            .form-label{
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                left: 21px;
                user-select: none;
                color: rgb(172, 161, 161);
                pointer-events: none;
                transition: 0.25s ease;
            }
            .form-input:not(:placeholder-shown) + .form-label,
            .form-input:focus + .form-label{
                top: 0;
                left: 11px;
                padding: 0 10px;
                display: inline-block;
                background-color:white;
                color: #1b00ff;
            }
             .form-button{
              width: 50%;
              height: 50px;
              border-radius: 4px;
              color: white;
              background-color: #726666;
            }
            .form-field__button{
              display: flex;
              justify-content: center;
              align-items: center;
            }
        </style>




<div class="container" style="margin-top:5rem">
    <form  class="form" action="{{ route('home.register')}}" method="post">
                @csrf
                <div class="form-title">Đăng Kí</div>
                <div class="form-field">                    
                    <input type="text" name="name" class="form-input" placeholder=" ">
                    <label for="name" class="form-label">Full Name<i style="color:red">*</i></label>                  
                </div>
                @if($errors->has('name'))
					    <p style="color:red">{{$errors->first('name')}}</p>
				@endif
                <div class="form-field">
                    <input type="email" name="email" class="form-input" placeholder=" ">
                    <label for="Email" class="form-label">Email<i style="color:red">*</i></label>
                </div>
                @if($errors->has('email'))
					<p style="color:red">{{$errors->first('email')}}</p>
				@endif
                <div class="form-field">
                    <input type="password" name="password" class="form-input" placeholder=" ">
                    <label for="Password" class="form-label">Password<i style="color:red">*</i></label>                  
                </div>
                @if($errors->has('password'))
					<p style="color:red">{{$errors->first('password')}}</p>
				@endif
                <div class="form-field">
                    <input type="number" name="phone" class="form-input" placeholder=" ">
                    <label for="number" class="form-label">Phone<i style="color:red">*</i></label>                   
                </div>
                @if($errors->has('phone'))
					<p style="color:red">{{$errors->first('phone')}}</p>
				@endif
                <div class="form-field">
                    <input type="text" name="address" class="form-input" placeholder=" ">
                    <label for="address" class="form-label">Address<i style="color:red">*</i></label>                  
                </div>
                @if($errors->has('address'))
					<p style="color:red">{{$errors->first('address')}}</p>
				@endif
               <div class="form-field form-field__button">
                     <button type="submit" class="form-button">Đăng Kí</button>
                </div>
    </form>
</div>


