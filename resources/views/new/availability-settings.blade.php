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

      <form method="get" action="/become-a-owner/id/calendar">
        <div class="rentcon">
          <h1 class="idthead">ข้อมูลพื้นฐาน</h1>
          <p class="idtsubh">กรุณากรอกข้อมูลพื้นฐาน สิ่งอำนวยความสะดวกและอื่นๆ</p>
          <div class="idtinside">
            <h2 class="idtcategory">คุณจำเป็นต้องได้รับการแจ้งเตือนล่วงหน้านานเพียงใดก่อนผู้เข้าพักมาถึง</h2>

            <div>
              <select class="" name="">
                <option value="">1 วัน</option>
              </select>
            </div>

            <div class="availability-settings__check-in-link-container">
              <span>ผู้เข้าพักเช็คอินได้เมื่อไร</span>
            </div>
            <div class="availability-settings__check-in-rules-container row space-top-2">
              <div class="col-sm-8 text-gray check-in-rule col-md-6 space-2">
                <label for="check_in_time_start" class="text-large">จาก:</label>
                <div class="select select-block select-jumbo">
                  <select id="check_in_time_start" name="check_in_time_start" class="">
                    <option value="NOT_SELECTED">เลือกเวลา</option>
                    <option value="FLEXIBLE">ยืดหยุ่น</option>
                    <option value="8">08:00</option>
                    <option value="9">09:00</option>
                    <option value="10">10:00</option>
                    <option value="11">11:00</option>
                    <option value="12">12:00</option>
                    <option value="13">13:00</option>
                    <option value="14">14:00</option>
                    <option value="15">15:00</option>
                    <option value="16">16:00</option>
                    <option value="17">17:00</option>
                    <option value="18">18:00</option>
                    <option value="19">19:00</option>
                    <option value="20">20:00</option>
                    <option value="21">21:00</option>
                    <option value="22">22:00</option>
                    <option value="23">23:00</option>
                    <option value="24">00:00</option>
                    <option value="25">01:00 (วันถัดไป)
                    </option>
                  </select>
                </div>
              </div>
              <div class="col-sm-8 text-gray check-in-rule col-md-6 space-2">
                <label for="check_in_time_end" class="text-large">ถึง:</label>
                <div class="select select-block select-jumbo">
                  <select id="check_in_time_end" name="check_in_time_end" class="">
                    <option value="NOT_SELECTED">เลือกเวลา</option>
                    <option value="FLEXIBLE">ยืดหยุ่น</option>
                    <option value="9" disabled="">09:00</option>
                    <option value="10">10:00</option>
                    <option value="11">11:00</option>
                    <option value="12">12:00</option>
                    <option value="13">13:00</option>
                    <option value="14">14:00</option>
                    <option value="15">15:00</option>
                    <option value="16">16:00</option>
                    <option value="17">17:00</option>
                    <option value="18">18:00</option>
                    <option value="19">19:00</option>
                    <option value="20">20:00</option>
                    <option value="21">21:00</option>
                    <option value="22">22:00</option>
                    <option value="23">23:00</option>
                    <option value="24">00:00</option>
                    <option value="25">01:00 (วันถัดไป)</option>
                    <option value="26">02:00 (วันถัดไป)</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="availability-settings__check-in-link-container">
              <span>ผู้เข้าพักสามารถจองที่พักล่วงหน้าได้นานเท่าใด</span>
            </div>

            <div class="row">
              <div class="col-sm-8 text-gray">
                <div class="select select-block select-jumbo">
                  <select id="max_days_notice" name="max_days_notice" class="">
                    <option value="-1">ตลอดเวลา</option>
                    <option value="90">3 เดือน</option>
                    <option value="180">6 เดือน</option>
                    <option value="365">หนึ่งปี</option>
                    <option value="0">วันที่ที่ไม่ว่างตามค่าเริ่มต้น</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="availability-settings__check-in-link-container">
              <span>ผู้เข้าพักสามารถพักได้นานเท่าใด</span>
            </div>

            <span>ต่ำสุดกี่วัน</span>
            <input type="number" name="" value="">
            <span>สูงสุดกี่วัน</span>
            <input type="number" name="" value="">



              </div>
              <div class="rentpage">
                <a href="/become-a-owner/id/vehicle-rules" class="rentback">ย้อนกลับ</a>
                <input type="submit" class="rentsend" value="ถัดไป">
              </div>
            </div>
          </form>

        </div>
      </div>


      @endsection
