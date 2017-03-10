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

      <form method="get" action="/become-a-owner/id/price">
        <div class="rentcon">
          <h1 class="idthead">ข้อมูลพื้นฐาน</h1>
          <p class="idtsubh">กรุณากรอกข้อมูลพื้นฐาน สิ่งอำนวยความสะดวกและอื่นๆ</p>
          <div class="idtinside">
            <h2 class="idtcategory">คุณจำเป็นต้องได้รับการแจ้งเตือนล่วงหน้านานเพียงใดก่อนผู้เข้าพักมาถึง</h2>


            <div class="main-panel-container no-padding-h bg-white col-sm-12 no-padding-h" tabindex="-1">
              <div class="main-panel main-panel-padding main-panel-progress col-sm-12 main-panel-inner-full space-sm-8">
                <div class="day-picker-container large-calendar">
                  <div class="large-calendar-title row no-margin-padding va-container va-container-v va-container-h">
                    <div class="va-middle">
                      <h3 class="no-margin-padding">
                        <span>ปรับปรุงปฏิทินของคุณ</span>
                      </h3>
                    </div>
                    <div class="pull-right">
                      <div class="help-panel__floating-container">
                        <span class="tooltip-popup__transition-container">
                          <div class="help-panel--collapsed help-panel__bulb-img-bubble">
                            <div class="help-panel__bulb-img img-center">

                            </div>
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row no-margin-padding va-container va-container-h va-container-v">
                    <div class="va-middle show-sm row no-margin-padding">
                      <span class="col-sm-3 no-margin-padding">
                        <button type="button" class="btn" disabled="">
                          <i class="icon icon-chevron-left"></i>
                        </button>
                      </span>
                      <span class="col-sm-6 text-center">มีนาคม 2017</span>
                      <span class="col-sm-3 no-margin-padding">
                        <span class="pull-right">
                          <button type="button" class="btn">
                            <i class="icon icon-chevron-right"></i>
                          </button>
                        </span>
                      </span>
                    </div>
                    <div class="va-middle hide-sm">
                      <div class="btn-group">
                        <button type="button" class="btn btn-large" disabled="">
                          <i class="icon icon-chevron-left"></i>
                        </button>
                        <button type="button" class="btn btn-large">
                          <i class="icon icon-chevron-right"></i>
                        </button>
                      </div>
                      <span style="padding-left: 20px;">มีนาคม 2017</span>
                      <div class="pull-right">
                        <button type="button" class="btn btn-large">
                          <span class="text-kazan"><span>บล็อควันที่ทั้งหมด</span></span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="space-4"></div><div class="DayPicker text-center va-top space-8"><table><thead class="text-gray text-center text-small"><tr><td>อา</td><td>จ</td><td>อ</td><td>พ</td><td>พฤ</td><td>ศ</td><td>ส</td></tr><tr class="week-header-filler"></tr></thead><tbody><tr class="DayPicker-week"><td class="DayPicker-day DayPicker-day--outside"></td><td class="DayPicker-day DayPicker-day--outside"></td><td class="DayPicker-day DayPicker-day--outside"></td><td class="DayPicker-day DayPicker-day--blocked-past-date">1</td><td class="DayPicker-day DayPicker-day--blocked-past-date">2</td><td class="DayPicker-day DayPicker-day--blocked-past-date">3</td><td class="DayPicker-day DayPicker-day--blocked-past-date">4</td></tr><tr class="DayPicker-week"><td class="DayPicker-day DayPicker-day--blocked-past-date">5</td><td class="DayPicker-day DayPicker-day--blocked-past-date">6</td><td class="DayPicker-day DayPicker-day--blocked-past-date">7</td><td class="DayPicker-day DayPicker-day--blocked-past-date">8</td><td class="DayPicker-day DayPicker-day--blocked-past-date">9</td><td class="DayPicker-day DayPicker-day--unavailable">10</td><td class="DayPicker-day DayPicker-day--unavailable">11</td></tr><tr class="DayPicker-week"><td class="DayPicker-day DayPicker-day--unavailable">12</td><td class="DayPicker-day DayPicker-day--unavailable">13</td><td class="DayPicker-day DayPicker-day--unavailable">14</td><td class="DayPicker-day DayPicker-day--unavailable">15</td><td class="DayPicker-day DayPicker-day--unavailable">16</td><td class="DayPicker-day DayPicker-day--available">17</td><td class="DayPicker-day DayPicker-day--available">18</td></tr><tr class="DayPicker-week"><td class="DayPicker-day DayPicker-day--available">19</td><td class="DayPicker-day DayPicker-day--available">20</td><td class="DayPicker-day DayPicker-day--available">21</td><td class="DayPicker-day DayPicker-day--available">22</td><td class="DayPicker-day DayPicker-day--available">23</td><td class="DayPicker-day DayPicker-day--available">24</td><td class="DayPicker-day DayPicker-day--available">25</td></tr><tr class="DayPicker-week"><td class="DayPicker-day DayPicker-day--available">26</td><td class="DayPicker-day DayPicker-day--available">27</td><td class="DayPicker-day DayPicker-day--available">28</td><td class="DayPicker-day DayPicker-day--available">29</td><td class="DayPicker-day DayPicker-day--available">30</td><td class="DayPicker-day DayPicker-day--available">31</td><td class="DayPicker-day DayPicker-day--outside"></td></tr></tbody></table></div><div class="shared-tooltip-styles availability-tooltip text-center text-large availability-tooltip--transition tooltip-bottom-middle" role="tooltip" aria-hidden="true" style="top: 0px; left: 0px; position: absolute; opacity: 0; pointer-events: none;"><div class="panel-body"><p><span>วันนี้ถูกบล็อกไม่ให้มีการจอง</span></p></div></div><div class="shared-tooltip-styles availability-tooltip text-center text-large availability-tooltip--transition tooltip-bottom-middle" role="tooltip" aria-hidden="true" style="top: 0px; left: 0px; position: absolute; opacity: 0; pointer-events: none;"><div class="panel-body"><p><span>วันนี้ว่างให้จอง</span></p></div></div></div></div><div class="main-panel__actions-wrapper"><div class="centered-content clearfix"><div class="bg-white col-sm-12 no-padding-h shadowed"><div class="no-margin-padding__sm main-panel-padding main-panel-progress col-sm-12 main-panel-inner-full space-sm-8"><div class="divider hide-sm"></div><div class="row no-margin-padding__sm"><div class="main-panel__actions col-sm-12 no-margin-padding__sm"><div><a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="/become-a-host/17627604/availability-settings"><span class="icon hide-sm"></span><span class="va-middle"><h5 class="text-normal"><span>กลับไป</span></h5></span></a><a class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md btn-primary" href="/become-a-host/17627604/choose-pricing-mode"><div class="btn-progress-next__text"><span>ถัดไป</span></div></a></div></div></div></div></div></div></div><div class="waypoint-container"><span style="font-size: 0px;"></span></div></div>

              </div>
              <div class="rentpage">
                <a href="/become-a-owner/id/availability-settings" class="rentback">ย้อนกลับ</a>
                <input type="submit" class="rentsend" value="ถัดไป">
              </div>
            </div>
          </form>

        </div>
      </div>


      @endsection
