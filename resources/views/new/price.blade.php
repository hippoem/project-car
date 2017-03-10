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

      <form method="get" action="/become-a-owner/id/local-laws">
        <div class="rentcon">
          <h1 class="idthead">ข้อมูลพื้นฐาน</h1>
          <p class="idtsubh">กรุณากรอกข้อมูลพื้นฐาน สิ่งอำนวยความสะดวกและอื่นๆ</p>
          <div class="idtinside">
            <div class="col-md-12 ">
          <form id="listForm" role="form" class="filter-form " method="post" enctype="multipart/form-data" novalidate="">
          <input type="hidden" name="csrfmiddlewaretoken" value="y4P8Y2NUtUaIi77JYApTTufPKwp0Uj13">
            <h1>ราคาเช่ารถ</h1>


            <div class="row">
              <div class="form-group form-inline">
                <div class="col-xs-6 no-padding">

                  <h3>กำหนดราคาเช่ารถต่อวัน</h3>
                  <p>ราคาแนะนำสำหรับ Audi A3 : THB <strong>3,000</strong> / วัน</p>
                </div>
                <div class="col-xs-6 no-padding text-right">
                  THB <input type="text" name="pricePerDay" id="pricePerDay" class="form-control text-right price-inp" value="3000" required="" data-parsley-error-message="Please set your daily price"> / วัน
                </div>
              </div>
            </div>

            <div class="row" style="margin-top:20px">
              <div class="col-sm-6 col-xs-6 no-padding">
                <h3>ส่วนลด</h3>
              </div>
              <div class="col-sm-6 col-xs-6 form-group form-inline no-padding text-right">
                <div>
                  ส่วนลดสำหรับ 3-7 วัน (10%) <input type="text" id="discount3-7" name="discount3-7" class="form-control text-right pricedis-inp-lock" value="0" readonly=""> / วัน
                </div>
                <div style="margin-top:10px">
                  ส่วนลดสำหรับ 8-15 วัน (15%) <input type="text" id="discount7-15" name="discount7-15" class="form-control text-right pricedis-inp-lock" value="0" readonly=""> / วัน
                </div>
                <div style="margin-top:10px">
                  ส่วนลดสำหรับ 16-30 วัน (25%) <input type="text" id="discount15-30" name="discount15-30" class="form-control text-right pricedis-inp-lock" value="0" readonly=""> / วัน
                </div>
                <div style="margin-top:10px">
                  ส่วนลดสำหรับตั้งแต่ 31 วัน ขึ้นไป (30%) <input type="text" id="discount30" name="discount30" class="form-control text-right pricedis-inp-lock" value="0" readonly=""> / วัน
                </div>
              </div>
            </div>





          </form>

      </div>



              </div>
              <div class="rentpage">
                <a href="/become-a-owner/id/calendar" class="rentback">ย้อนกลับ</a>
                <input type="submit" class="rentsend" value="ถัดไป">
              </div>
            </div>
          </form>

        </div>
      </div>


      @endsection
