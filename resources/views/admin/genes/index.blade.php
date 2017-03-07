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
    <form method="post" action="/admin/genes">
      {{ csrf_field() }}
        <div class="rentcon">
        	<h1 class="idthead">รุ่นรถยนต์</h1>
            <p class="idtsubh">กรุณากรอกข้อมูลรุ่นรถยนต์</p>
        	   <div class="idtinside">
            	<h2 class="idtcategory">ข้อมูลรุ่นรถยนต์</h2>

              <select name="categories_id" id="categories_id">

                @foreach ($categories as $category)

                  <option value="{{ $category->id }}"> {{ $category->name }} </option>

                @endforeach

              </select>


              <select name="brands_id" id="brands_id">

                @foreach ($brands as $brand)

                  <option value="{{ $brand->id }}"> {{ $brand->name }} </option>

                @endforeach

              </select>



              <div class="form-group">
                  <label class="regcate" for="name">ชื่อรุ่นรถยนต์</label>
                  <input type="text" class="form-control idtform" id="name" name="name" />
              </div>


            </div>
            <div class="rentpage">
            	<!-- <a href="#" class="rentback">ย้อนกลับ</a> -->
                <input type="submit" class="rentsend" value="เพิ่มรุ่นรถยนต์">
            </div>
        </div>
        </form>
  </div>
</div>

@endsection
