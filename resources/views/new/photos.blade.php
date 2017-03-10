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

        <form method="get" action="/become-a-owner/id/vehicle-rules">
        <div class="rentcon">
        	<h1 class="idthead">ข้อมูลพื้นฐาน</h1>
            <p class="idtsubh">กรุณากรอกข้อมูลพื้นฐาน สิ่งอำนวยความสะดวกและอื่นๆ</p>
        	<div class="idtinside">
            	<h2 class="idtcategory">สีของยานพาหนะ</h2>

              <ul id="preview" class="ui-sortable">
          <form id="updateList" role="form" method="post">
          <input type="hidden" name="csrfmiddlewaretoken" value="y4P8Y2NUtUaIi77JYApTTufPKwp0Uj13">
          <input id="post_type" name="post_type" type="hidden" value="next">
          <input id="q_list" name="q_list" type="hidden" value="">
          </form>

          <div id="previews">



          </div>

          <li class="ui-state-default ui-state-disabled upload-btn dz-clickable" style="position:relative">
            <div style="font-size:50px;font-weight:100;">+</div>
            <div>เพิ่มรูป</div>

          </li>
        </ul>

            </div>
            <div class="rentpage">
              <a href="/become-a-owner/id/about" class="rentback">ย้อนกลับ</a>
              <input type="submit" class="rentsend" value="ถัดไป">
            </div>
        </div>
        </form>

  </div>
  </div>


@endsection
