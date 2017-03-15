@extends ('layouts.master')

@section ('content')
<div id="content">

    <div class="findcart_a">
    <div class="wrap">
      <p class="fcanavi">Home / Car rental / Coupe</p>
        <h2 class="fcahead">Search “<span>Coupe</span>”</h2>
        <form>
        <div class="fcabox">
          <p>สถานที่รับรถ</p>
        <div class="mslrentpart">
              <input name="" type="text" class="mslrsform" placeholder="Search Location"/>
                <input name="" type="button"  class="mslrsgo"/>
            </div>
        </div>
        <div class="fcabox x">
          <p>ช่วงเวลาที่คุณต้องการใช้รถ</p>
            <input name="" type="text"  class="fcadate" placeholder="Pick-up - Return" id="datepick"/>

            <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="daterangepicker/moment.js"></script>
            <script type="text/javascript" src="daterangepicker/daterangepicker.js"></script>
             <script type="text/javascript">
              $(document).ready(function() {

                $('#datepick').daterangepicker({
                    "showCustomRangeLabel": false,
                });

              });
             </script>
        </div>
        <div class="fcabox y">
          <p>เลือกประเภทของรถ</p>
            <select name="" class="fcatype">
              <option>ประเภท</option>

             @forelse ($categories as $categorie)

                <option value=" {{ $categorie->id }} "> {{ $categorie->category_name_eng }}  </option>

             @empty
                <option>ประเภท</option>

             @endforelse


            </select>
        </div>
        </form>
    </div>
    </div>


    <div class="findcart_b">
    <div class="wrap">
      <div class="fcboption">
          <div class="fcabox z">
              <p>ระยะห่างของจุดรับรถ กับ สถานที่เลือกรับรถ</p>
              <select name="" class="fcatype">
                <option>Select distance</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </div>
          <div class="fcabox z">
              <p>ช่วงราคาเช่ารถ</p>
              <div class="pricerangenumber" id="pricerangenumber">10,000</div>
              <input type ="range" id="pricerange" value="10000" min="0" max="10000" step="500"/>

              <script src="jquery.number.min.js" type="text/javascript"></script>
              <script>
              $('#pricerange').change(function() {
                $('#pricerangenumber').text( $('#pricerange').val() );
//            		$('#pricerangenumber').number();
              })


              </script>
            </div>
          <div class="fcabox w">
              <p>ระยะทางที่รถขับไป</p>
              <select name="" class="fcatype">
                <option>Select Mileage</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </div>
        </div>
        <div class="fcbcon">

            @foreach ($announces as $announce)

                @include ('announces.announce')

            @endforeach

          <!-- <div class="fcbbox">
              <img alt="" src="images/02-find-car-rent_43.jpg" class="fcbcar" />
                <p class="fcbtag">NEW</p>
                <img alt="" src="images/02-find-car-rent_51.png" class="fcbown" />
                <div class="fcbdetail">
                  <div class="fcbleft">
                      <h3>เช่ารถ Toyota Alphard</h3>
                        <div class="fcbrate">
                          <img alt="" src="images/03-car-rent-single_15.png" />
                          <img alt="" src="images/03-car-rent-single_15.png" />
                          <img alt="" src="images/03-car-rent-single_15.png" />
                          <img alt="" src="images/03-car-rent-single_18.png" />
                          <img alt="" src="images/03-car-rent-single_18.png" />
                        </div>
                    </div>
                    <p class="fcbprice">฿750<span>/วัน</span></p>
                </div>
            </div>
          <div class="fcbbox">
              <img alt="" src="images/02-find-car-rent_43.jpg" class="fcbcar" />
                <img alt="" src="images/02-find-car-rent_51.png" class="fcbown" />
                <div class="fcbdetail">
                  <div class="fcbleft">
                      <h3>เช่ารถ Toyota Alphard</h3>
                        <div class="fcbrate">
                          <img alt="" src="images/03-car-rent-single_15.png" />
                          <img alt="" src="images/03-car-rent-single_15.png" />
                          <img alt="" src="images/03-car-rent-single_15.png" />
                          <img alt="" src="images/03-car-rent-single_18.png" />
                          <img alt="" src="images/03-car-rent-single_18.png" />
                        </div>
                    </div>
                    <p class="fcbprice">฿750<span>/วัน</span></p>
                </div>
            </div>
        </div> -->
        <div class="fcbpage">
          <a href="#"><</a>
          <a href="#">1</a>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#">></a>
        </div>
    </div>
    </div>


<div class="clear"></div>
</div>
@endsection
