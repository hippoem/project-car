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

      <form method="get" action="#">
        <div class="rentcon">
          <h1 class="idthead">ข้อมูลพื้นฐาน</h1>
          <p class="idtsubh">กรุณากรอกข้อมูลพื้นฐาน สิ่งอำนวยความสะดวกและอื่นๆ</p>
          <div class="idtinside">

            <div class="col-md-12 ">
                    <h1 class="featurette-heading ">ปล่อยเช่ารถคันนี้</h1>
                    <p class="lead desc" style="">นั่นคือทั้งหมดที่เราต้องการแล้ว! ตอนนี้คุณพร้อมที่จะนำรถออกปล่อยเช่าบน Drivemate ทันที คุณสามารถกลับมาแก้ไขข้อมูลทั้งหมดได้ที่เมนู จัดการรถของคุณ</p>

                    <form id="filterForm" role="form" class="filter-form " method="post">
                    <input type="hidden" name="csrfmiddlewaretoken" value="y4P8Y2NUtUaIi77JYApTTufPKwp0Uj13">
                      <input type="hidden" name="step" value="5">

                      <div class="clearfix"></div>
                      <hr>
                      <div class="row">
                        <div class="col-xs-12 text-center">

                          <button type="submit" class="btn btn-secondary" style="font-size:22px;">
                            <i class="glyphicon glyphicon-ok"></i>
                            <span>ปล่อยเช่ารถทันที</span>
                          </button>
                          <p style="margin-top:10px;">
                            <a href="/become-a-owner/id/location" style="color:#ccc;text-decoration:underline;">
                              <span>แก้ไขข้อมูล</span>
                            </a>
                          </p>


                        </div>
                      </div>
                    </form>

                </div>

              </div>

            </div>
          </form>

        </div>
      </div>


      @endsection
