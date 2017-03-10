@extends ('layouts.master')

@section ('content')
<div id="content">
  <div class="rentcar">
  <div class="wrap">
    <div class="rentnavi">
        	<div class="rentnvbox active">
        		<h3>1</h3>
            	<p>ข้อมูลพื้นฐาน</p>
            </div>
            <img alt="" src="/images/09-rent-car_09.jpg">
        	<div class="rentnvbox">
        		<h3>2</h3>
            	<p>รูปภาพ</p>
            </div>
            <img alt="" src="/images/09-rent-car_09.jpg">
        	<div class="rentnvbox">
        		<h3>3</h3>
            	<p>ปฏิทิน ราคา</p>
            </div>
        </div>

        <form method="get" action="/become-a-owner/id/photos">
        <div class="rentcon">
        	<h1 class="idthead">ข้อมูลพื้นฐาน</h1>
            <p class="idtsubh">กรุณากรอกข้อมูลพื้นฐาน สิ่งอำนวยความสะดวกและอื่นๆ</p>
        	<div class="idtinside">
            	<h2 class="idtcategory">สีของยานพาหนะ</h2>

          <div class="form-group">

            <textarea name="description" class="form-control" rows="5" required="" data-parsley-error-message="เพิ่มข้อมูลรายละเอียดเกี่ยวกับรถของคุณ และการปล่อยเช่าของคุณ">test</textarea>
            <label>คุณไม่จำเป็นต้องใส่เบอร์ติดต่อของคุณ ผู้เช่าจะได้รับเองหลังจากได้รับการยืนยันการเช่า</label>
          </div>

            </div>
            <div class="rentpage">
              <a href="/become-a-owner/id/features" class="rentback">ย้อนกลับ</a>
              <input type="submit" class="rentsend" value="ถัดไป">
            </div>
        </div>
        </form>

  </div>
  </div>


@endsection
