<div id="header">
  <a href="/"><img alt="" class="logo" src="/images/01-main-th_06.png" /></a>
  <div class="headoption">
    <a href="/learn" class="hmore">Learn More</a>
    <a href="/become-a-owner" class="hrent">ปล่อยรถเช่า</a>
    <div class="hsocial">
      <a href="#"><img alt="" src="/images/01-main-th_28.png" /></a>
      <a href="#"><img alt="" src="/images/01-main-th_30.png" /></a>
      <a href="#"><img alt="" src="/images/01-main-th_31.png" /></a>
    </div>
    <a href="#"><img alt="" class="hlang" src="/images/01-main-th_21.png" /></a>
    <div class="hsignin">
      <div class="hsignbox">

          @if (Auth::check())

            <a href="{{ url('users/show') }}/{{ Auth::user()->id }}">
              <img alt="{{ Auth::user()->firstname }}" src="{{ Auth::user()->user_photos->where('position','1')->first()->user_photo }}" />
            </a>

          @endif

        <div class="hsigndetail">

          @if (Auth::check())

          <a href="{{ url('users/show') }}/{{ Auth::user()->id }}"><p class="hprofilename">{{ Auth::user()->firstname }}</p></a>

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
        <li><a href="/logout">ออกจากระบบ</a></li>
      </ul>

      @endif

    </div>

  </div>
  <div class="clear"></div>
</div>



<div class="phoneheader">
  <div class="menubutton" onclick="$('.phonemenu, .menubutton').toggleClass('touch')"></div>
  <a href="#"><img alt="" class="hlang" src="/images/01-main-th_21.png" /></a>

</div>


<ul class="phonemenu">
  <li><a href="#">หน้าหลัก</a></li>
  <li><a href="/learn">Learn More</a></li>
  <li><a href="#">ปล่อยรถเช่า</a></li>
  <li><a href="/login">เข้าสู่ระบบ</a></li>
  <li><a href="/register">สมัครสมาชิก</a></li>
</ul>
