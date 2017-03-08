<div class="fcbbox">
       <a href="cars/{{ $announce->id }}">
              <img alt="" src="{{ $announce->cover }}" class="fcbcar" />
       </a>
       <p class="fcbtag">NEW</p>
       <a href="users/{{ $announce->id }}">
              <img alt="" src="{{ $announce->profile }}" class="fcbown" />
       </a>
       <div class="fcbdetail">

              <div class="fcbleft">
                     <a href="cars/{{ $announce->id }}"><h3>เช่ารถ {{ $announce->genes->brands->name }} {{ $announce->genes->name }}</h3></a>
                     <div class="fcbrate">
                            <img alt="" src="images/03-car-rent-single_15.png" />
                            <img alt="" src="images/03-car-rent-single_15.png" />
                            <img alt="" src="images/03-car-rent-single_15.png" />
                            <img alt="" src="images/03-car-rent-single_18.png" />
                            <img alt="" src="images/03-car-rent-single_18.png" />
                     </div>
              </div>
       <a href="cars/{{ $announce->id }}">
              <p class="fcbprice">฿{{ number_format($announce->price)}}<span>/วัน</span></p>
       </a>
       </div>
</div>
