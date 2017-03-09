@extends ('layouts.master')

@section ('content')

<div id="content">


	<div class="profilerental">
    <div class="wrap">
    <div class="pfrtcon">
    	<div class="pfrtboxh">
        	<div class="pfrtprofile">
            	<img alt="{{ $user->firstname }}" src="{{ $user->profile }}" class="pfrtpfpic"/>
                <div class="pfrtdetail">
                	<p class="pfrtjoin">Join in {{ $user->created_at->format('F Y') }}</p>
                    <h1 class="pfrtname">{{ $user->firstname }} {{ $user->lastname }}</h1>
                    <div class="pfrtsocial">
                    	<img alt="" src="/images/08-profile-rental_29.png" />
                        <p>Bangkok, Thailand</p>
                        <img alt="" src="/images/08-profile-rental_33.png" />
                        <img alt="" src="/images/08-profile-rental_37.png" />
                    </div>
                </div>
            </div>
            <div class="pfrtoption">
             	<p class="pfrtratehead">Ratings</p>
               	<div class="pfrtrateall">
                  	<img alt="" src="/images/08-profile-rental_14.png" />
                   	<img alt="" src="/images/08-profile-rental_14.png" />
                   	<img alt="" src="/images/08-profile-rental_17.png" />
                   	<img alt="" src="/images/08-profile-rental_17.png" />
                  	<img alt="" src="/images/08-profile-rental_17.png" />
              	</div>
               	<div class="pfrtinfo">
                 	<div class="pfrtifbox">
                     	<h3>ส่งอีเมล</h3>
                    	<img alt="" src="/images/08-profile-rental_12.png" />
                  	</div>
                 	<div class="pfrtifbox">
                     	<h3>Rentals</h3>
                       	<p>150</p>
                  	</div>
                 	<div class="pfrtifbox">
                      	<h3>Reviews</h3>
                     	<p>75</p>
                  	</div>
             	</div>
            </div>
        </div>
        <div class="pfrtleft">
        	<h3>รายละเอียดผู้ให้เช่า</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br /><br />Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
        </div>
        <div class="pfrtright">
        	<div class="pfrtrboxh">
            	<h2>Reviews (75)</h2>
                <p><a href="#">See more</a></p>
            </div>
            <div class="pfrtreview">
            	<div class="pfrtrvpf">
                	<img alt="" src="/images/08-profile-rental_54.png" />
                    <p>David</p>
                </div>
                <p class="pfrtrvtext">consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                <p class="pfrtrvtime">3 วันที่แล้ว</p>
            </div>
            <div class="pfrtreview">
            	<div class="pfrtrvpf">
                	<img alt="" src="/images/08-profile-rental_54.png" />
                    <p>David</p>
                </div>
                <p class="pfrtrvtext">consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                <p class="pfrtrvtime">3 วันที่แล้ว</p>
            </div>
            <div class="pfrtreview">
            	<div class="pfrtrvpf">
                	<img alt="" src="/images/08-profile-rental_54.png" />
                    <p>David</p>
                </div>
                <p class="pfrtrvtext">consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                <p class="pfrtrvtime">3 วันที่แล้ว</p>
            </div>
        	<div class="pfrtrboxh">
            	<h2>Cars (3)</h2>
            </div>
            <div class="pfrtcars">
            	<div class="pfrtcarbox">
                	<img alt="" src="/images/08-profile-rental_70.jpg" />
                    <p>Toyota</p>
                </div>
            	<div class="pfrtcarbox">
                	<img alt="" src="/images/08-profile-rental_72.jpg" />
                    <p>Toyota</p>
                </div>
            	<div class="pfrtcarbox">
                	<img alt="" src="/images/08-profile-rental_74.jpg" />
                    <p>Toyota</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

<div class="clear"></div>
</div>

@endsection
