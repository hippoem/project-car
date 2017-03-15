<div class="fcbbox">
       <a target="_blank" href="{{ url('cars') }}/{{ $announce->ann_id }}">
              <img alt="" src="{{ $announce->ann_photo }}" class="fcbcar" />
       </a>
       <p class="fcbtag">NEW</p>
       <a target="_blank" href="{{ url('users/show') }}/{{ $announce->user_id }}">
              <img alt="" src="{{ $announce->user->user_photos->where('user_id', $announce->user_id )->first()->user_photo }}" class="fcbown" />
       </a>
       <div class="fcbdetail">
              <div class="fcbleft">
                     <a target="_blank" href="{{ url('cars') }}/{{ $announce->ann_id }}"><h3>เช่ารถ {{ $announce->genes->brands->brand_name_eng }} {{ $announce->genes->gene_name_eng }}</h3></a>
                     <div class="fcbrate">
                            <img alt="" src="images/03-car-rent-single_15.png" />
                            <img alt="" src="images/03-car-rent-single_15.png" />
                            <img alt="" src="images/03-car-rent-single_15.png" />
                            <img alt="" src="images/03-car-rent-single_18.png" />
                            <img alt="" src="images/03-car-rent-single_18.png" />
                     </div>
              </div>
       <a target="_blank" href="{{ url('cars') }}/{{ $announce->ann_id }}">
              <p class="fcbprice">฿{{ number_format($announce->price)}}<span>/วัน</span></p>
       </a>
       </div>
</div>
