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

        <form method="get" action="/become-a-owner/id/colors">
        <div class="rentcon">
        	<h1 class="idthead">ข้อมูลพื้นฐาน</h1>
            <p class="idtsubh"></p>
        	   <div class="idtinside">
            	  <h2 class="idtcategory">ข้อมูลพาหนะของคุณ</h2>

                  <div class="row">
                      <p>ทะเบียนรถ</p>
                      <input type="text" name="" value="" placeholder="ทะเบียนรถ">

                      <p>จดทะเบียนที่ประเทศ</p>
                      <input type="text" name="" value="" placeholder="ประเทศ">

                      <p>ปีที่จดทะเบียน</p>
                      <input type="text" name="" value="" placeholder="ประเทศ">
                  </div>

                  <div>
                      <p>จำนวนที่นั่ง</p>
                      <select class="" name="">
                        <option>4</option>
                      </select>

                      <p>จำนวนประตู</p>
                      <select class="" name="">
                        <option>4</option>
                      </select>

                      <p>ระบบเกียร์</p>
                      <select class="" name="">
                        <option>4</option>
                      </select>
                  </div>

                  <div>
                      <p>ชนิดเชื้อเพลิง</p>
                      <select class="" name="">
                        <option>4</option>
                      </select>

                      <p>ประเภทเชื้อเพลิงที่ใช้เติม</p>
                      <select class="" name="">
                        <option>4</option>
                      </select>

                      <p>เลขไมล์ (กิโลเมตร)</p>
                      <select class="" name="">
                        <option>4</option>
                      </select>
                  </div>


            </div>
            <div class="rentpage">
            	<a href="/become-a-owner/id/vehicle" class="rentback">ย้อนกลับ</a>
                <input type="submit" class="rentsend" value="ถัดไป">
            </div>
        </div>
        </form>

  </div>
  </div>


@endsection
