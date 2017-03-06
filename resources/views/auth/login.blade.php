@extends ('layouts.master')

@section ('content')
<div id="auth-content">

    <div class="register">
    <div class="regcon">
    	<h1 class="reghead">ยินดีต้อนรับเข้าสู่ระบบ</h1>
        <h3 class="regsubh">Hippo Car Rent</h3>

        <form method="POST" action="/login">

  		{{ csrf_field() }}

        <div class="form-group">
                <label class="regcate" for="email">อีเมล</label>
                <input type="email" class="form-control regform" id="email" name="email" />
        </div>

        <div class="form-group">
                <label class="regcate" for="password">รหัสผ่าน</label>
                <input type="password" class="form-control regform" id="password" name="password" />
        </div>

        <div class="regcheck">
            <p>ลืมรหัสผ่าน ?</p>
        </div>

        <input name="submit" type="submit" value="เข้าสู่ระบบ" class="regregist"/>
    </div>

    <div class="clear"></div>
    </div>

</div>
@endsection
