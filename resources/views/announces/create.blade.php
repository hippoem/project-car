@extends ('layouts.master')

@section ('content')
<div id="content">
  <div class="findcart_a">
  <div class="wrap">
    <div class="rentnavi">
        	<div class="rentnvbox active">
        		<h3>1</h3>
            	<p>เลือกรถเช่า</p>
            </div>
            <img alt="" src="images/09-rent-car_09.jpg">
        	<div class="rentnvbox">
        		<h3>2</h3>
            	<p>ส่งคำร้องกับเจ้าของ</p>
            </div>
            <img alt="" src="images/09-rent-car_09.jpg">
        	<div class="rentnvbox">
        		<h3>3</h3>
            	<p>ส่งหลักฐานแสดงตัวตน</p>
            </div>
        </div>
  </div>
  </div>

  <div class="findcart_b">
  <div class="wrap">
    <form>
        <div class="rentcon">
        	<h1 class="idthead">ลงประกาศ</h1>
            <p class="idtsubh">กรุณากรอกข้อมูลรถยนต์</p>
        	<div class="idtinside">
            	<h2 class="idtcategory">ข้อมูลรถเช่าของคุณ</h2>
                <input name="" type="text" placeholder="ชื่อ" class="idtform">
                <input name="" type="text" placeholder="นามสกุล" class="idtform">
                <div class="idtform a">
                	รูปผู้เช่า    <input name="" type="file" placeholder="" class="">
                </div>
                <input name="" type="text" placeholder="วันเกิด" class="idtform b">
                <input name="" type="text" placeholder="อีเมล" class="idtform">
                <input name="" type="text" placeholder="เบอร์โทรศัพท์" class="idtform">
                <input name="" type="text" placeholder="ที่อยู่ปัจจุบัน" class="idtform c">
                <input name="" type="text" placeholder="จังหวัด" class="idtform">
                <input name="" type="text" placeholder="รหัสไปรษณีย์" class="idtform">
            	<h2 class="idtcategory">ข้อมูลการขับขี่</h2>
                <input name="" type="text" placeholder="เลขใบขับขี่" class="idtform">
                <input name="" type="text" placeholder="วันหมดอายุ" class="idtform b">
                <textarea name="" cols="" rows="" class="idtform d">แนะนำตัวเองเพิ่มเติม</textarea>
            	<h2 class="idtcategory">ข้อมูลการจ่ายเงิน</h2>
                <input name="" type="text" placeholder="หมายเลขบัตรเครดิต" class="idtform">
                <img alt="" class="idtbank" src="images/10-send-identity_32.jpg">
                <p class="idtdate">วันหมดอายุ</p>
                <select name="" class="idtdatelist"><option>เดือน</option></select>
                <select name="" class="idtdatelist"><option>ปี</option></select>
                <input name="" type="text" placeholder="CVV*" class="idtform">
                <input name="" type="text" placeholder="ชื่อ" class="idtform">
                <input name="" type="text" placeholder="นามสกุล" class="idtform">

            </div>
            <div class="rentpage">
            	<!-- <a href="#" class="rentback">ย้อนกลับ</a> -->
                <input type="submit" class="rentsend" value="ลงประกาศ">
            </div>
        </div>
        </form>
  </div>
</div>

@endsection
