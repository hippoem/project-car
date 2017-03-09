@extends ('layouts.master')


@section ('content')
<div id="content">

  <div class="mainslide">
    <div class="galleria1">
      <img alt="" src="images/01-main-th_01.jpg" />
    </div>
    <script>
    Galleria.loadTheme('galleria.classic.min.js');
    Galleria.configure({
      transition: 'fade',
      imageCrop: true,
      thumbnails: false,
      showCounter: false,
      showImagenav: false
    });
    Galleria.run('.galleria1')
    </script>
    <div class="mainslon">
      <div class="mainslrent">
        <h2 class="mslrenthead"><span>จองรถ</span>ที่คุณต้องการ</h2>
        <p class="mslrenttext">Book Online for the Best Rates with Hippo car rent</p>
        <h3 class="mslrentcate">สถานที่รับรถ</h3>

        <form method="get" action="/search">
          <div class="mslrentpart">
            <input name="" type="text" class="mslrsform" placeholder="Search Location"/>
            <input name="" type="button"  class="mslrsgo"/>
          </div>
          <h3 class="mslrentcate">เลือกประเภทของรถ</h3>
          <div class="mslrentpart">



            <div class="mslrenttype">
              <input type="radio" value="Car" name="cartype">
              <img alt="" src="images/01-main-th_50.png" class="mslrstypegrey"/>
              <p>Car</p>
            </div>
            <div class="mslrenttype">
              <input type="radio" value="Van" name="cartype">
              <img alt="" src="images/01-main-th_53.png" class="mslrstypegrey"/>
              <p>Van</p>
            </div>
            <div class="mslrenttype">
              <input type="radio" value="4wd" name="cartype">
              <img alt="" src="images/01-main-th_55.png" class="mslrstypegrey"/>
              <p>4wd</p>
            </div>
            <div class="mslrenttype">
              <input type="radio" value="suv" name="cartype">
              <img alt="" src="images/01-main-th_57.png" class="mslrstypegrey"/>
              <p>suv</p>
            </div>
            <div class="mslrenttype">
              <input type="radio" value="Bike" name="cartype">
              <img alt="" src="images/01-main-th_69.png" class="mslrstypegrey"/>
              <p>Bike</p>
            </div>

          </div>
          <h3 class="mslrentcate">ช่วงเวลาที่คุณต้องการใช้รถ</h3>
          <div class="mslrentpart">


            <div class="mslrenttype">
              <input type="text" class="datepick" id="datepick">
              <img alt="" src="images/01-main-th_91.png" class="mslrstypegrey"/>
              <p>Pick-up</p>
            </div>
            <div class="mslrenttype">
              <img alt="" src="images/01-main-th_91.png" class="mslrstypegrey"/>
              <p>Return</p>
            </div>
            <input name="" type="submit" value="" class="mslrentfind"/>
          </div>

          <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="daterangepicker/moment.js"></script>
          <script type="text/javascript" src="daterangepicker/daterangepicker.js"></script>
          <script type="text/javascript">
          $(document).ready(function() {
            $('.mslrenttype input').change(function() {
              name = $('.mslrenttype input').attr('name');
              console.log(name);
              $('.mslrenttype input[name='+name+']').parent().removeClass('checked');
              $('.mslrenttype input[name='+name+']:checked').parent().addClass('checked');
            });

            $('#datepick').daterangepicker({
              "showCustomRangeLabel": false
            });

          });
          </script>

        </form>
      </div>
      <div class="mainsltext">
        <h2>เช่ารถจาก<span>คนที่คุณไว้ใจ</span> ได้โดยตรง</h2>
        <p>แบ่งปัน สะดวก ปลอดภัย
          รวดเร็วทันใจ ง่ายๆแค่คลิกเดียว</p>
        </div>
      </div>
    </div><!--.mainslide-->



    <div class="main_a">
      <div class="wrap">
        <h2 class="mnahead">เพิ่ม<span>รายได้พิเศษ</span>ให้ตัวคุณเอง</h2>
        <p class="mnatext">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
        <a href="#" class="mnarent">ปล่อยรถเช่า</a>
      </div>
    </div>




    <div class="main_b">
      <div class="mnbbox">
        <a href="/promotion"><img alt="" src="images/shutterstock_493048780.jpg" />
          <div class="mnbbon">
            <h3>โปรแกรมพิเศษ</h3>
            <p>สําหรับวัยรุ่นที่รักการเดินทาง</p>
          </div></a>
        </div>
        <div class="mnbbox">
          <a href="/promotion"><img alt="" src="images/shutterstock_285442550.jpg" />
            <div class="mnbbon">
              <h3>โปรแกรมพิเศษ</h3>
              <p>สําหรับวัยรุ่นที่รักการเดินทาง</p>
            </div></a>
          </div>
          <div class="mnbbox">
            <a href="/promotion"><img alt="" src="images/shutterstock_519482095.jpg" />
              <div class="mnbbon">
                <h3>โปรแกรมพิเศษ</h3>
                <p>สําหรับวัยรุ่นที่รักการเดินทาง</p>
              </div></a>
            </div>
          </div>




          <div class="main_c">
            <div class="wrap">
              <h2 class="mnchead">วิธีการใช้งานง่ายๆ ของ Hippo Car Rent</h2>
              <div class="mncbox">
                <img alt="" src="images/01-main-th_16.png" />
                <h3>จองผ่านหน้าเว็บไซต์</h3>
                <p>ลงทะเบียนและค้นหารถที่คุณชอบ<br />และทำการจองได้เลย!</p>
              </div>
              <div class="mncbox">
                <img alt="" src="images/01-main-th_18.png" />
                <h3>นัดพบเจ้าของรถเพื่อรับกุญแจ</h3>
                <p>นัดพบกับเจ้าของรถ<br />ตามจุดนัดพบเพื่อรับกุญแจ</p>
              </div>
              <div class="mncbox">
                <img alt="" src="images/01-main-th_20.png" />
                <h3>เริ่มต้นการเดินทางอันสุดแสนประทับใจ</h3>
                <p>เริ่มต้นการเดินทางอันสุดแสนประทับใจ</p>
              </div>
            </div>
          </div>



          <div class="main_d">
            <div class="wrap">
              <div class="mndleft">
                <img alt="" class="mndicon" src="images/01-main-th_33.png" />
                <h3 class="mndlhead">ประเภทของรถ</h3>
                <p class="mndltext">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                <div class="mndlcon">
                  <a href="#"><div class="mslrenttype x">
                    <img alt="" src="images/01-main-th_50.png" class="mslrstypegrey"/>
                    <p>Car</p>
                  </div></a>
                  <a href="#"><div class="mslrenttype x">
                    <img alt="" src="images/01-main-th_53.png" class="mslrstypegrey"/>
                    <p>Van</p>
                  </div></a>
                  <a href="#"><div class="mslrenttype x">
                    <img alt="" src="images/01-main-th_55.png" class="mslrstypegrey"/>
                    <p>4wd</p>
                  </div></a>
                  <a href="#"><div class="mslrenttype x">
                    <img alt="" src="images/01-main-th_57.png" class="mslrstypegrey"/>
                    <p>suv</p>
                  </div></a>
                  <a href="#"><div class="mslrenttype x">
                    <img alt="" src="images/01-main-th_69.png" class="mslrstypegrey"/>
                    <p>Bike</p>
                  </div></a>
                  <a href="#"><div class="mslrenttype x">
                    <img alt="" src="images/01-main-th_53.png" class="mslrstypegrey"/>
                    <p>Van</p>
                  </div></a>
                  <a href="#"><div class="mslrenttype x">
                    <img alt="" src="images/01-main-th_55.png" class="mslrstypegrey"/>
                    <p>4wd</p>
                  </div></a>
                  <a href="#"><div class="mslrenttype x">
                    <img alt="" src="images/01-main-th_57.png" class="mslrstypegrey"/>
                    <p>suv</p>
                  </div></a>
                </div>
              </div>
              <div class="mndright">
                <a href="#"><h3 class="mndlhead">How does it work?</h3>
                  <p class="mndltext">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                  <img alt="" src="images/01-main-th_42.jpg" /></a>
                </div>
              </div>
            </div>


            <div class="main_e">
              <div class="wrap">
                <div class="mnecon">
                  <h2 class="mnehead">คุณมีคำถามเพิ่มเติม หรือ <span>ต้องการความช่วยเหลือ</span></h2>
                  <div class="mnecall">
                    <img alt="" src="images/01-main-th_202.png" />
                    <p>061-995-5656</p>
                  </div>
                  <p class="mnetext">จันทร์ถึงศุกร์ เวลา <span>08.30-19.30</span> และเสาร์อาทิตย์ เวลา <span>09.00-18.00</span><br />คุณสามารถไว้วางใจเกี่ยวกับการปฏิบัติงานของเรา<br />สำหรับธุรกิจรถเช่า โปรดติดต่อเราสำหรับข้อมูลเพิ่มเติม</p>
                </div>
              </div>
            </div>




            <div class="clear"></div>
          </div>
@endsection
