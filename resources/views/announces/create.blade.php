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
    <form method="post" action="/create">
      {{ csrf_field() }}
        <div class="rentcon">
        	<h1 class="idthead">ลงประกาศ</h1>
            <p class="idtsubh">กรุณากรอกข้อมูลรถยนต์</p>
        	   <div class="idtinside">
            	<h2 class="idtcategory">ข้อมูลรถเช่าของคุณ</h2>


              <div class="form-group">
                  <label class="regcate" for="brand_id">ยี่ห้อรถยนต์</label>
                  <select id="brand_id" name="brand_id">

                    @foreach ($brands as $brand)

                      <option value="{{ $brand->id }}"> {{ $brand->name }} </option>

                    @endforeach

                  </select>
                  <!-- <input type="text" class="form-control idtform" id="brand" name="brand" /> -->
              </div>

              <div class="form-group">
                  <label class="regcate" for="gene">รุ่นรถยนต์</label>
                  <input type="text" class="form-control idtform" id="gene" name="gene" />
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
