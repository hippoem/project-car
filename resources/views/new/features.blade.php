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

        <form method="get" action="/become-a-owner/id/about">
        <div class="rentcon">
        	<h1 class="idthead">ข้อมูลพื้นฐาน</h1>
            <p class="idtsubh">กรุณากรอกข้อมูลพื้นฐาน สิ่งอำนวยความสะดวกและอื่นๆ</p>
        	<div class="idtinside">
            	<h2 class="idtcategory">สีของยานพาหนะ</h2>

              <div class="form-group">
            <div class="row">

              <div class="checkbox">


                <label class="col-sm-3 col-xs-12">
                  <input id="feature-1" type="checkbox" name="features" value="1" data-parsley-multiple="features"> ABS
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-2" type="checkbox" name="features" value="2" data-parsley-multiple="features"> Air conditioning
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-3" type="checkbox" name="features" value="3" data-parsley-multiple="features"> AUX port
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-4" type="checkbox" name="features" value="4" data-parsley-multiple="features"> Baby seat
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-5" type="checkbox" name="features" value="5" data-parsley-multiple="features"> Bike rack
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-6" type="checkbox" name="features" value="6" data-parsley-multiple="features"> CD/DVD player
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-7" type="checkbox" name="features" value="7" data-parsley-multiple="features"> Cruise control
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-8" type="checkbox" name="features" value="8" data-parsley-multiple="features"> GPS
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-9" type="checkbox" name="features" value="9" data-parsley-multiple="features"> Navigator
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-10" type="checkbox" name="features" value="10" data-parsley-multiple="features"> Power steering
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-11" type="checkbox" name="features" value="11" data-parsley-multiple="features"> Roof box
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-12" type="checkbox" name="features" value="12" data-parsley-multiple="features"> Ski racks
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-13" type="checkbox" name="features" value="13" data-parsley-multiple="features"> Snow chains
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-14" type="checkbox" name="features" value="14" data-parsley-multiple="features"> Snow tires
                </label>



                <label class="col-sm-3 col-xs-12">
                  <input id="feature-15" type="checkbox" name="features" value="15" data-parsley-multiple="features"> USE port
                </label>

              </div>

            </div>

          </div>

            </div>
            <div class="rentpage">
              <a href="/become-a-owner/id/colors" class="rentback">ย้อนกลับ</a>
              <input type="submit" class="rentsend" value="ถัดไป">
            </div>
        </div>
        </form>

  </div>
  </div>


@endsection
