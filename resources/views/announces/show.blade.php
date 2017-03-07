@extends ('layouts.master')

@section ('content')
<div id="content">


    <div class="carrentsingle">
    <div class="wrap">
        <p class="fcanavi">Home / Car rental / Coupe</p>
        <div class="rentsgleft">
            <div class="rentsgslide">
            <div class="galleria1">
                <img alt="" src="/images/03-car-rent-single_07.jpg" />
                <img alt="" src="/images/03-car-rent-single_07.jpg" />
                <img alt="" src="/images/03-car-rent-single_07.jpg" />
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
                <img alt="" src="/images/03-car-rent-single_45.png" />
                <div class="rentsgbdet">
                    <h3>{{ $announce->user->firstname }}</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
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
                            <dd>2011</dd>
                            <dt>Seats</dt>
                            <dd>5 Seats</dd>
                            <dt>Fuel Type</dt>
                            <dd>Diesel</dd>
                            <dt>Transmission</dt>
                            <dd>Auto</dd>
                            <dt>Mileage</dt>
                            <dd>100-150,000 km</dd>
                            <dt>Consumption</dt>
                            <dd>6 L / 100 km</dd>
                            <dt>Doors</dt>
                            <dd>5 doors</dd>
                            <dt>Type</dt>
                            <dd>Coupe</dd>
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
                        <p>Try-hard kitsch enamel pin jean shorts, poke helvetica food truck lomo DIY iPhone tilde readymade 90's venmo lo-fi. Ramps try-hard pitchfork hammock, shoreditch typewriter occupy vice af knausgaard. Hammock cronut flannel vice, biodiesel vegan bicycle rights salvia keytar. Vape food truck hammock blue bottle prism, forage etsy bitters. Tumblr yr pabst, semiotics subway tile cardigan messenger bag chambray franzen. Four dollar toast cronut iceland whatever freegan, microdosing single-origin coffee next level tbh lumbersexual ramps chartreuse VHS. Quinoa four loko cardigan tumblr, chillwave heirloom yr ethical letterpress wayfarers flexitarian unicorn truffaut godard.</p>
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
                    <h3>เช่ารถ {{ $announce->brand }} {{ $announce->gene }}</h3>
                    <p>฿{{ number_format($announce->price) }}<span>/วัน</span></p>
                </div>
            </div>
            <div class="rentsgwhite">
                <div class="rentsgcardet">
                    <h3>รายละเอียดเกี่ยวกับรถ</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br /><br />Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                </div>
                <div class="rentsgpart">
                    <h3>฿750 x 5 วัน</h3>
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
                <h3 class="mslrentcate">ช่วงเวลาที่คุณต้องการใช้รถ</h3>


                <div class="mslrentpart">


                    <div class="mslrenttype">
                        <input type="text" class="datepick" id="datepick">
                        <img alt="" src="/images/01-main-th_91.png" class="mslrstypegrey"/>
                        <p>Pick-up</p>
                    </div>
                    <div class="mslrenttype">
                        <img alt="" src="/images/01-main-th_91.png" class="mslrstypegrey"/>
                        <p>Return</p>
                    </div>
                </div>




            <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="/daterangepicker/moment.js"></script>
            <script type="text/javascript" src="/daterangepicker/daterangepicker.js"></script>
             <script type="text/javascript">
                $(document).ready(function() {


                    $('#datepick').daterangepicker({
                        "showCustomRangeLabel": false,
                        "opens": "center"
                    });

                });
             </script>



                <a href="#" class="rentsggo">ยื่นคำขอเช่ารถ</a>
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
