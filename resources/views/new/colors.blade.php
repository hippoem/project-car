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

        <form method="get" action="/become-a-owner/id/features">
        <div class="rentcon">
        	<h1 class="idthead">ข้อมูลพื้นฐาน</h1>
            <p class="idtsubh">กรุณากรอกข้อมูลพื้นฐาน สิ่งอำนวยความสะดวกและอื่นๆ</p>
        	<div class="idtinside">
            	<h2 class="idtcategory">สีของยานพาหนะ</h2>

              <div class="form-group">
              <div class="row">

                <div class="checkbox">

                  <label class="col-sm-2 col-xs-3" style="padding:10px;">
                    <div class="colorOption" style="background-color:#d0021b"></div>
                    <input type="radio" class="radioOption" name="colors" value="red" required="" data-parsley-error-message="กรุณาระบุสีของรถที่ให้เช่า" data-parsley-multiple="colors"> Red
                  </label>

                  <label class="col-sm-2 col-xs-3" style="padding:10px;">
                    <div class="colorOption" style="background-color:#f8e71c"></div>
                    <input type="radio" class="radioOption" name="colors" value="yellow" required="" data-parsley-error-message="กรุณาระบุสีของรถที่ให้เช่า" data-parsley-multiple="colors"> Yellow
                  </label>

                  <label class="col-sm-2 col-xs-3" style="padding:10px;">
                    <div class="colorOption" style="background-color:#417505"></div>
                    <input type="radio" class="radioOption" name="colors" value="green" required="" data-parsley-error-message="กรุณาระบุสีของรถที่ให้เช่า" data-parsley-multiple="colors"> Green
                  </label>

                  <label class="col-sm-2 col-xs-3" style="padding:10px;">
                    <div class="colorOption" style="background-color:#4a90e2"></div>
                    <input type="radio" class="radioOption" name="colors" value="blue" required="" data-parsley-error-message="กรุณาระบุสีของรถที่ให้เช่า" data-parsley-multiple="colors"> Blue
                  </label>

                  <label class="col-sm-2 col-xs-3" style="padding:10px;">
                    <div class="colorOption" style="background-color:#d4af37"></div>
                    <input type="radio" class="radioOption" name="colors" value="gold" required="" data-parsley-error-message="กรุณาระบุสีของรถที่ให้เช่า" data-parsley-multiple="colors"> Gold
                  </label>

                  <label class="col-sm-2 col-xs-3" style="padding:10px;">
                    <div class="colorOption" style="background-color:#ffffff"></div>
                    <input type="radio" class="radioOption" name="colors" value="white" required="" data-parsley-error-message="กรุณาระบุสีของรถที่ให้เช่า" data-parsley-multiple="colors"> White
                  </label>

                  <label class="col-sm-2 col-xs-3" style="padding:10px;">
                    <div class="colorOption" style="background-color:#231f20"></div>
                    <input type="radio" class="radioOption" name="colors" value="black" required="" data-parsley-error-message="กรุณาระบุสีของรถที่ให้เช่า" data-parsley-multiple="colors"> Black
                  </label>

                  <label class="col-sm-2 col-xs-3" style="padding:10px;">
                    <div class="colorOption" style="background-color:#4a4a4a"></div>
                    <input type="radio" class="radioOption" name="colors" value="grey" required="" data-parsley-error-message="กรุณาระบุสีของรถที่ให้เช่า" data-parsley-multiple="colors"> Grey
                  </label>

                  <label class="col-sm-2 col-xs-3" style="padding:10px;">
                    <div class="colorOption" style="background-color:#dcdcdc"></div>
                    <input type="radio" class="radioOption" name="colors" value="silver" required="" data-parsley-error-message="กรุณาระบุสีของรถที่ให้เช่า" checked="" data-parsley-multiple="colors"> Silver
                  </label>


                </div>

              </div>

            </div>

            </div>
            <div class="rentpage">
              <a href="/become-a-owner/id/details" class="rentback">ย้อนกลับ</a>
              <input type="submit" class="rentsend" value="ถัดไป">
            </div>
        </div>
        </form>

  </div>
  </div>


@endsection
