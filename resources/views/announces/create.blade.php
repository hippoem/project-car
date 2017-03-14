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
            <img alt="" src="images/09-rent-car_09.jpg">
        	<div class="rentnvbox">
        		<h3>2</h3>
            	<p>รูปภาพ</p>
            </div>
            <img alt="" src="images/09-rent-car_09.jpg">
        	<div class="rentnvbox">
        		<h3>3</h3>
            	<p>ปฏิทิน ราคา</p>
            </div>
        </div>

        <form>
        <div class="rentcon">
        	<h1 class="idthead">ข้อมูลพื้นฐาน</h1>
            <p class="idtsubh">กรุณากรอกข้อมูลพื้นฐาน สิ่งอำนวยความสะดวกและอื่นๆ</p>
        	<div class="idtinside">
            	<h2 class="idtcategory">ระบุตำแหน่งที่ตั้ง (คุณสามารถเลื่อนตำแหน่งได้ เพื่อความแม่นยำมากขึ้น)</h2>
              <input name="" type="text" placeholder="ที่อยู่ปัจจุบัน" class="idtform c">
              <div class="rentsgmap">
            	   <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15503.293929324722!2d100.53561690828856!3d13.729134421632354!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sth!4v1487744915218" width="690" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
               </div>

                <input name="" type="text" placeholder="ชื่อ" class="idtform">
                <input name="" type="text" placeholder="นามสกุล" class="idtform">
                <div class="idtform a">
                	รูปผู้เช่า    <input name="" type="file" placeholder="" class="">
                </div>

<!--                <input name="" type="button" class="idtuploadpic" placeholder="BROWSE"/>-->
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
            	<a href="#" class="rentback">ย้อนกลับ</a>
                <input type="submit" class="rentsend" value="ยื่นคำขอเช่ารถ">
            </div>
        </div>
        </form>

  </div>
  </div>

  <div class="findcart_b">
  <div class="wrap">
    <form method="post" action="/create">
      {{ csrf_field() }}
        <div class="rentcon">
        	<h1 class="idthead">ลงประกาศ</h1>
            <p class="idtsubh">กรุณากรอกข้อมูลรถยนต์</p>
        	   <div class="idtinside">
            	<h2 class="idtcategory">ข้อมูลรถเช่าของคุณ</h2>

              <div class="form-group">
                  <label class="regcate" for="brands_id">ยี่ห้อรถยนต์</label>
                  <select id="brands_id" name="brands_id">

                    @foreach ($brands as $brand)

                      <option value="{{ $brand->id }}"> {{ $brand->name }} </option>

                    @endforeach

                  </select>
              </div>


              <div class="form-group">
                  <label class="regcate" for="genes_id">รุ่นรถยนต์</label>
                  <select id="genes_id" name="genes_id">

                    @foreach ($genes as $gene)

                      <option value="{{ $gene->id }}"> {{ $gene->name }} </option>

                    @endforeach

                  </select>
              </div>

              <div class="form-group">
                  <label class="regcate" for="categories_id">ประเภทรถยนต์</label>
                  <select id="categories_id" name="categories_id">

                    @foreach ($categories as $category)

                      <option value="{{ $category->id }}"> {{ $category->name }} </option>

                    @endforeach

                  </select>
              </div>

              <div class="form-group">
                  <label class="regcate" for="price">ราคา</label>
                  <input type="text" class="form-control idtform" id="price" name="price" />
              </div>

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
