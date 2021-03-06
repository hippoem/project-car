@extends ('layouts.master')

@section ('content')
<div id="content">


    <div class="carrentsingle">
    <div class="wrap">
        <p class="fcanavi">Home / Car rental / {{ $announce->genes->gene_name_eng }}</p>
        <div class="rentsgleft">
            <div class="rentsgslide">
            <div class="galleria1">
                @forelse ($ann_photos as $ann_photo)

                <img alt="" src="{{ $ann_photo->ann_photo }}" />

                @empty
                <img alt="" src="/images/cars/lamborghini.jpg" />

                @endforelse

            </div><!--.galleria1-->
            <script>
            Galleria.loadTheme('/galleria.classic.min.js');
            Galleria.configure({
                transition: 'fade',
                imageCrop: true,
                thumbnails: false
            });
                Galleria.run('.galleria1')
            </script>
            </div>
            <div class="rentsgby">
                <a target="_blank" href="{{ url('users/show') }}/{{ $announce->user_id }}"><img alt="" src="{{ $user_photo }}" /></a>
                <div class="rentsgbdet">
                    <a target="_blank" href="{{ url('users/show') }}/{{ $announce->user_id }}">
                        <h3>{{ $announce->user->firstname }} {{ $announce->user->lastname }}</h3>
                    </a>
                    <p>{{ $announce->user->about }}</p>
                </div>
            </div>

            <div class="rentsgqualify">
            	<div class="rentsgqheadwrap tab-buttonwrap">
	            	<h3 class="rentsgqhead tab-button">Specifications</h3>
	            	<h3 class="rentsgqhead tab-button">Features</h3>
	            	<h3 class="rentsgqhead tab-button">Condition</h3>
            	</div>

                <div class="rentsgqtextwrap tab-contentwrap">
                    <div class="rentsgqtext tab-content">
    	  	                	<dl>
    	  	                		<dt>Year</dt>
    	  	                		<dd>{{ $announce->year }}</dd>
    	  	                		<dt>Seats</dt>
    	  	                		<dd>{{ $announce->seats }} Seats</dd>
    	  	                		<dt>Fuel Type</dt>
    	  	                		<dd>Diesel</dd>
    	  	                		<dt>Transmission</dt>
    	  	                		<dd>Auto</dd>
    	  	                		<dt>Mileage</dt>
    	  	                		<dd>{{ $announce->mileage }} km</dd>
    	  	                		<dt>Consumption</dt>
    	  	                		<dd>6 L / 100 km</dd>
    	  	                		<dt>Doors</dt>
    	  	                		<dd>{{ $announce->doors }} doors</dd>
    	  	                		<dt>Type</dt>
    	  	                		<dd>{{ $announce->genes->categories->category_name_eng }}</dd>
    	  	                	</dl>
    	  	         </div>

                     <div class="rentsgqtext tab-content">
                        <dl>
                            <dt>Air conditioning</dt>
                            <dd>Yes</dd>
                            <dt>GPS Navigator</dt>
                            <dd>Yes</dd>
                            <dt>Power Steering</dt>
                            <dd>No</dd>
                            <dt>Baby Seat</dt>
                            <dd>Yes</dd>
                            <dt>CD Player</dt>
                            <dd>No</dd>
                            <dt>Roof Box</dt>
                            <dd>Yes</dd>
                            <dt>Audio / iPod input</dt>
                            <dd>No</dd>
                        </dl>
                    </div>

                    <div class="rentsgqtext tab-content">
                       <p>{{ $announce->condition }}</p>
                       <p><span>** Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</span></p>
                   </div>
    	        </div>




                <script type="text/javascript">
                        		$(document).ready(function() {
                        			$('.tab-button').click(function() {

                        				index = $(this).index()+1;
                        				$(this).siblings().removeClass('active');
                        				$(this).addClass('active');
                        				$(this).parent().siblings('.tab-contentwrap').children().hide().removeClass('active');
                        				$(this).parent().siblings('.tab-contentwrap').children(':nth-child('+index+')').fadeIn();
                        			});
                        			$('.tab-button:first-child').trigger('click');
                        		});


                    </script>
            </div>
            <div class="rentsgmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15503.293929324722!2d100.53561690828856!3d13.729134421632354!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sth!4v1487744915218" width="690" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div  class="rentsgfbcomment">
                <img alt=""src="/images/03-car-rent-single_97.jpg" />
            </div>

        </div>
        <div class="rentsgright">
            <div class="rentsgdetail">
                <p class="restsgdtag">new</p>
                <div class="rentsgrate">
                    <img alt="" src="/images/03-car-rent-single_15.png" />
                    <img alt="" src="/images/03-car-rent-single_15.png" />
                    <img alt="" src="/images/03-car-rent-single_18.png" />
                    <img alt="" src="/images/03-car-rent-single_18.png" />
                    <img alt="" src="/images/03-car-rent-single_18.png" />
                </div>
                <div class="rentsginfo">
                    <h3>{{ $announce->genes->brands->brand_name_eng }}  {{ $announce->genes->gene_name_eng }} </h3>
                    <p>฿{{ number_format($announce->price) }}<span>/วัน</span></p>
                </div>
            </div>
            <div class="rentsgwhite">
                <div class="rentsgcardet">
                    <h3>รายละเอียดเกี่ยวกับรถ</h3>
                    <p>{{ $announce->description }}</p>
                </div>
                <h3 class="mslrentcate">ช่วงเวลาที่คุณต้องการใช้รถ</h3>
                <div class="mslrentpart">
                	<div class="mslrenttype">
                		<input type="text" class="datepick" id="datepick">
                    	<img alt="" src="/images/01-main-th_91.png" class="mslrstypegrey">
                        <p>Pick-up</p>
                    </div>
                	<div class="mslrenttype">
                    	<img alt="" src="/images/01-main-th_91.png" class="mslrstypegrey">
                        <p>Return</p>
                    </div>
                </div>

                <div class="rentsgpart">
                    <h3>฿{{ number_format($announce->price) }} x 5 วัน</h3>
                    <p>฿ 3,750</p>
                </div>
                <div class="rentsgpart">
                    <h3>ประกันรถยนต์</h3>
                    <p>฿ 500</p>
                </div>
                <div class="rentsgpart">
                    <h3>ค่าธรรมเนียม</h3>
                    <p>฿ 250</p>
                </div>

                <div class="rentsgpart">
                    <strong><h3>รวมทั้งหมด</h3></strong>
                    <strong><p>฿ 2,550</p></strong>
                </div>





            <!-- <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
            <script type="text/javascript" src="/daterangepicker/moment.js"></script>
            <script type="text/javascript" src="/daterangepicker/daterangepicker.js"></script>
             <script type="text/javascript">
                $(document).ready(function() {


                    $('#datepick').daterangepicker({
                        "showCustomRangeLabel": false,
                        "timePicker": true,
                        "timePickerIncrement": 15,
                        "minDate" : "{{ Carbon\Carbon::now()->format('m-d-Y') }}",
                        "opens": "center"
                    }, function(start, end) {

                        console.log(start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                        console.log(start.format('h:mm A') + ' to ' + end.format('h:mm A'));

                    });

                });
             </script>

                <form class="" action="" method="post">
                    <button class="rentsggo" type="submit" name="button">ยื่นคำขอเช่ารถ</button>
                </form>

            </div>

            <div class="rentsgsocial">
                <p>Share this car</p>
                <img alt="" src="/images/03-car-rent-single_100.jpg" />
                <img alt="" src="/images/03-car-rent-single_102.jpg" />
                <img alt="" src="/images/03-car-rent-single_104.jpg" />
            </div>

        </div>
    </div>
    </div>


<div class="clear"></div>
</div>
@endsection
