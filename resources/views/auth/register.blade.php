@extends ('layouts.master')

@section ('content')
<div id="auth-content">
	<div class="register">
		<div class="regcon">
			<h1 class="reghead">สมัครสมาชิก</h1>
			<h3 class="regsubh">Hippo Car Rent</h3>

			<form method="POST" action="/register">

				{{ csrf_field() }}

				<div class="form-group">
						<label class="regcate" for="firstname">ชื่อจริง</label>
						<input type="text" class="form-control regform" id="firstname" name="firstname" />
				</div>

				<div class="form-group">
						<label class="regcate" for="lastname">นามสกุล</label>
						<input type="text" class="form-control regform" id="lastname" name="lastname" />
				</div>

				<div class="form-group">
						<label class="regcate" for="email">อีเมล</label>
						<input type="email" class="form-control regform" id="email" name="email" />
				</div>

				<div class="form-group">
						<label class="regcate" for="password">รหัสผ่าน</label>
						<input type="password" class="form-control regform" id="password" name="password" />
				</div>

				<div class="form-group">
						<label class="regcate" for="password_confirmation">ยืนยันรหัสผ่าน</label>
						<input type="password" class="form-control regform" id="password_confirmation" name="password_confirmation" />
				</div>

				<div class="form-group">
						<label class="regcate" for="telephone">เบอร์โทรศัพท์</label>
						<input type="password" class="form-control regform" id="telephone" name="telephone" />
				</div>

				<div class="regcheck">
					<input name="" type="checkbox" value="" />
					<p>ข้าพเจ้ายอมรับเงื่อนไขของ Hippo Car Rent</p>
				</div>
				<input name="" type="button" value="สมัครสมาชิก" class="regregist"/>
			</form>
		</div>
		<img alt="" src="images/01-register_27.jpg" class="regfacebook" />

		<div class="clear"></div>
	</div>

</div>
@endsection
