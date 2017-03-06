<div id="header">
  <a href="/"><img alt="" class="logo" src="images/01-main-th_06.png" /></a>
  <div class="headoption">
    <a href="#" class="hmore">Learn More</a>
    <a href="#" class="hrent">ปล่อยรถเช่า</a>
    <div class="hsocial">
      <a href="#"><img alt="" src="images/01-main-th_28.png" /></a>
      <a href="#"><img alt="" src="images/01-main-th_30.png" /></a>
      <a href="#"><img alt="" src="images/01-main-th_31.png" /></a>
    </div>
    <a href="#"><img alt="" class="hlang" src="images/01-main-th_21.png" /></a>

    <div class="hsignin">
      <div class="hsignbox">
        @if (Auth::check())
          <img alt="" src="images/07-profile-user_12.png" />
        @else
          <img alt="" src="images/01-main-th_24.png" />
        @endif


        <div class="hsigndetail">

          @if (Auth::check())

          <p class="hprofilename">Narong</p>

          @else

          <h3 class="hsignhead"><a href="/login">เข้าสู่ระบบ</a></h3>
          <p class="hsignregist"><a href="/register">สมัครสมาชิก</a></p>

          @endif
        </div>
      </div>

      @if (Auth::check())

      <ul class="hprofilemenu">
        <li>คำขอเช่ารถ</li>
        <li>การเช่าของคุณ</li>
        <li>รถของคุณ</li>
        <li><a href="{{ route('logout') }}">ออกจากระบบ</a></li>
      </ul>

      @endif

    </div>

    <!-- <div class="hsignin">
      <div class="hsignbox">

        <div class="hsigndetail">

      </div>
    </div>
    <ul class="hprofilemenu">
      <li>คำขอเช่ารถ</li>
      <li>การเช่าของคุณ</li>
      <li>รถของคุณ</li>
      <li>ออกจากระบบ</li>
    </ul>
    </div> -->

  </div>
  <div class="clear"></div>
</div>



<div class="phoneheader">
  <div class="menubutton" onclick="$('.phonemenu, .menubutton').toggleClass('touch')"></div>
  <a href="#"><img alt="" class="hlang" src="images/01-main-th_21.png" /></a>

</div>


<ul class="phonemenu">
  <li><a href="#">หน้าหลัก</a></li>
  <li><a href="#">Learn More</a></li>
  <li><a href="#">ปล่อยรถเช่า</a></li>
  <li><a href="/login">เข้าสู่ระบบ</a></li>
  <li><a href="/register">สมัครสมาชิก</a></li>
</ul>
