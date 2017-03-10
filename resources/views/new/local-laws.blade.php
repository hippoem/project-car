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

      <form method="get" action="/become-a-owner/id/publish">
        <div class="rentcon">
          <h1 class="idthead">ข้อมูลพื้นฐาน</h1>
          <p class="idtsubh">กรุณากรอกข้อมูลพื้นฐาน สิ่งอำนวยความสะดวกและอื่นๆ</p>
          <div class="idtinside">

            <div class="main-panel main-panel-padding main-panel-progress pull-right main-panel-inner-half space-sm-8"><div class="rowPaddingTop_444gbv-o_O-rowPaddingBottom_1q85xv2-o_O-baseline_none_1w3yqgy"><div style="margin: 24px 0px 0px;"><!-- react-text: 15091 --><!-- /react-text --><div style="margin: -16px 0px 0px;"><div class="text_1chds16-o_O-size_title3_17urhfo-o_O-weight_bold_1lymmfr"><!-- react-text: 15094 -->กฎหมายและภาษีท้องถิ่นของคุณ<!-- /react-text --></div></div></div></div><span class="lys-local-laws"><!-- react-empty: 15096 --><p class="text-high-importance"><span><!-- react-text: 15099 -->อย่าลืมศึกษากฎหมายท้องถิ่น รวมถึง<!-- /react-text --><span><a href="/help/article/1405" target="_blank"><!-- react-text: 15102 -->นโยบายการไม่แบ่งแยกของ Airbnb<!-- /react-text --></a></span></span></p><div class="text-low-importance"><span><p class="law-header-text text-high-importance"><span>โปรดหาข้อมูลให้ตัวเองเกี่ยวกับกฎหมายในเขตอำนาจของคุณก่อนลงประกาศที่พักคุณ</span></p><div class="text-low-importance"><p><span>เมืองส่วนใหญ่มีกฎครอบคลุมการแบ่งบ้านให้คนอื่นเช่า และกฎเกณฑ์และกฎหมายเฉพาะอาจปรากฏในหลายที่ (เช่นกฎการจัดผังเมือง อาคาร การอนุญาตหรือภาษี) ในที่ส่วนใหญ่ คุณต้องลงทะเบียน รับอนุญาตหรือใบอนุญาตก่อนลงประกาศที่พักหรือยอมรับการจองของผู้เข้าพัก คุณยังอาจต้องรับผิดชอบเก็บและคืนภาษีบางอย่าง ในบางที่ห้ามมีการให้เช่าที่พักระยะสั้นด้วย</span></p><p><span><!-- react-text: 15112 -->เนื่องจากคุณรับผิดชอบต่อการตัดสินใจลงประกาศที่พักหรือจองที่พักเอง คุณควรทำความคุ้นเคยกับกฎที่บังคับใช้ก่อนลงประกาศที่พักบน Airbnb ในการเริ่มต้น เรามี <!-- /react-text --><span><a href="/responsible-hosting" target="_blank"><!-- react-text: 15115 -->ทรัพยากรที่มีประโยชน์<!-- /react-text --></a></span><!-- react-text: 15116 -->บางส่วนภายใต้ “กฎหมายของเมืองคุณ”<!-- /react-text --></span></p><p><span>การยอมรับเงื่อนไขการให้บริการและการลงประกาศที่พักของคุณแสดงว่าคุณยอมรับว่าคุณจะปฏิบัติตามกฎหมายและระเบียบที่บังคับใช้</span></p></div></span></div></span></div>



              </div>
              <div class="rentpage">
                <a href="/become-a-owner/id/price" class="rentback">ย้อนกลับ</a>
                <input type="submit" class="rentsend" value="ถัดไป">
              </div>
            </div>
          </form>

        </div>
      </div>


      @endsection
