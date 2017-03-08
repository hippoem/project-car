@extends ('layouts.master')

@section ('content')

<div id="content">


	<div class="rentcar">
    <div class="wrap">
        <div class="rentcon">
        	<div class="contracthippo">
            	<img alt="" src="images/14-contract_04.png" />
              <h1>สัญญาเช่ารถ<br /><span>Hippo car rent</span></h1>
            </div>
            <div class="contractlocate">
                <input name="" type="text" placeholder="สถานที่เขียนในสัญญา" class="idtform e"/>
                <input name="" type="text" placeholder="วันที่/เดือน/พ.ศ." class="idtform e"/>
            </div>
        	<div class="idtinside">
                <input name="" type="text" placeholder="ชื่อ" class="idtform"/>
                <input name="" type="text" placeholder="นามสกุล" class="idtform"/>
                <input name="" type="text" placeholder="บัตรประจําตัวประชาชนเลขที่" class="idtform"/>
                <input name="" type="text" placeholder="เบอร์โทรศัพท์" class="idtform"/>
                <input name="" type="text" placeholder="ที่อยู่ปัจจุบัน" class="idtform c"/>
                <input name="" type="text" placeholder="จังหวัด" class="idtform"/>
                <input name="" type="text" placeholder="รหัสไปรษณีย์" class="idtform"/>
              	<p class="ctrsubh">ซึ่งต่อไปในสัญญานี้เรียกอีกฝ่่ายหนึ่งว่า “ผู้ให้เช่า” ข้อตกลงอยู่ภายใต้เงื่อนไขดังต่อไปนี้ :</p>
                <p class="ctrcategory">ข้อ 1. ผู้ให้เช่าตกลงให้เช่ารถกับผู้เช่า</p>
                <div>
	                <select name="" class="idtdatelist g"><option>ยี่ห้อ</option></select>
	                <select name="" class="idtdatelist g"><option>รุ่น</option></select>
	                <input name="" type="text"  placeholder="ทะเบียน" class="idtform h"/>
	                <select name="" class="idtdatelist g"><option>สี</option></select>
                </div>
                 <div>
	                <input name="" type="text"  placeholder="เลขไมล์" class="idtform h"/>
	                <p class="ctrdays">โดยมีกําหนดระยะเวลาเช่า</p>
	                <input name="" type="text"  placeholder="วันที่เริ่ม" class="idtform i"/>
	                <select name="" class="idtdatelist g"><option>เวลา</option></select>
                </div>
                 <div>
	                <input name="" type="text"  placeholder="วันสิ้นสุด" class="idtform i"/>
	                <select name="" class="idtdatelist g"><option>เวลา</option></select>
	                <p class="ctrdays">โดยมีแพลนจะเดินทางไป</p>
	                <input name="" type="text" placeholder="สถานที่" class="idtform h"/>
                </div>
                 <div>
	                 <p class="ctrcategory x">ข้อ 2. ผู้เช่าตกลงชําระค่าเช่าให้แก่ผู้ให้เช่า ในอัตราวันละ</p>
	                <input name="" type="text" placeholder="ราคา" class="idtform h"/>
	                <input name="" type="text" placeholder="จำนวนวัน" class="idtform h"/>
                </div>

                <p class="ctrcategory x">ข้อ 3. ผู้เช่าได้วางเงินประกันไว้เป็นจํานวนเงิน</p>
                <input name="" type="text" placeholder="ราคา" class="idtform h"/>

                <p class="ctrcategory">ข้อ 4. ผู้ให้เช่า และ ผู้เช่ารับทราบตรงกันว่ามีรอยชนหรือความเสียหายที่มีอยู่แล้วบนยาน
                พาหนะตามด้านล่าง</p>
                <img alt="" src="images/14-contract_40.jpg" class="ctrmark" />
                <div class="ctrtext">
            	<p>4.1. วาดความเสียหายในแผนภาพข้างต้น<br />
					4.2. บอกจํานวนความเสียหายในแผนภาพ เช่น มีกี่จุด ตรงไหนบ้าง<br />
					4.3. ผู้เช่าถ่ายรูปของแต่ละความเสียหายเก็บไว้ยืนยัน<br />
					4.4. ผู้ให้เช่า: ถ่ายรูป (หรือขอสําเนา ) ใบขับขี่ของผู้เช่าและบัตรประจําตัวประชาชน หรือ หนังสือเดินทาง<br />
					4.5. ผู้เช่า : ต้องแสดงบัตรประจําตัวประชาชน หรือ หนังสือเดินทาง ใบขับขี่ และบัตรเครดิตที่ใช้ในการชําระเงิน
     				(กรณีชําระผ่านทางเวปไซต์) กรณีจ่ายด้วยเงินสดต้องนําสลิปเงินเดือนมาแสดงด้วย ให้กับผู้ให้เช่า
     				ถ้าไม่มีเอกสารดังกล่าว การเชา่ จะไมเ่ กดิ ขนึ้<br />
					4.6. ผู้ให้เช่าถ่ายรูปคู่ กับ ผู้เช่า</p>
				<p>ข้อ 5. ผู้เช่ารถรับรองว่าในระหว่างที่นํารถไปใช้จะต้องรับผิดชอบไม่สูบบุหรี่และดื่มสิ่งมึนเมาภายในรถ อีกทั้งยังรักษา
                ความสะอาด เครื่องมือ อุปกรณ์ทั้งหมด และเมื่อถึงเวลาส่งคืนรถ ผู้เช่าจะต้องนําส่งคืนรถในสภาพเดิม ไม่มีชํารุดหรือเสียหายใดๆ</p>
				<p>ข้อ 6.  ในกรณีที่่ผู้เช่า รถ ต้องการต่อสัญญา สามารถทำได้โ้ดยการติดต่อไปที่ call center เบอร์ 061-995-5656 ก่อน “วันกําหนดคืนรถ” 2 วัน เพื่อเลื่อนการคืนรถออกไป ซึ่งหากล่าช้าจะต้องจ่ายค่าปรับ 500 บาทต่อวัน ซึ่งเงินจำนวนนี้จะไม่คิดรวมกับค่าเช่ารถใดๆทั้งสิ้น ซึ่งหากเลยวันและเวลากำหนดคืนรถแล้วผู้เช่ารถยังไม่นำรถมาคืน จะถูกแจ้งความดําเนินคดีตามกฎหมายในคดีอาญาต่อไป</p>
                <p>ข้อ 7. ผู้เช่ารถให้สัญญาว่าจะไม่นํารถที่เช่าไปให้คนอื่นใช้หรือให้ผู้อื่นเช่าต่อ หรือนําไปด้วยประการใดๆ เป็นอันขาดเว้นแต่จะได้รับอนุญาตจากผู้ให้เช่ารถเป็นลายลักษณ์อักษร </p>
				<p>ข้อ 8. ถ้าผู้เช่ารถทำผิดสัญญานี้ข้อหนึ่งข้อใดก็ดีหรือทำผิดระเบียบข้อบังคับเงื่อนไขการใช้รถของผู้ให้เช่ารถแม้แต่ ข้อหนึ่งข้อใดก็ดีผู้เช่ารถยอมให้ผู้ให้เช่ารถริบทรัพย์ตามที่วางประกันตามข้อ 3 นั้นเสีย และต้องชดใช้ค่าเสียหายส่วนต่างเพิ่มเติมอีกด้วย</p>
                <p>ข้อ 9. ผู้เช่ารับรองว่าในระหว่างที่ผู้เช่าขับรถที่เช่าไป ถ้ารถเกิดชํารุดหรือเสียหายด้วยประการใดๆ ผู้เช่ายินยอมจ่าย
ค่าปรับดังนี้<br />
					9.1 หากเกิดอุบัติเหตุที่ผู้เช่าไม่ได้เป็นฝ่ายผิดและมีใบเคลมจากบริษัทประกันจะไม่ปรับเงินใดๆ<br />
					9.2 หากเกิดอุบัติเหตุที่ผู้เช่าเป็นฝ่ายผิด และมีใบเคลมจากบริษัทประกัน ผู้เช่าต้องชําระค่าเสียหายส่วนแรกจํานวน
     3,000 - 10,000 บาท ขึ้นอยู่กับความเสียหายและระยะเวลาการซ่อม<br />
					9.3 หากเกิดอุบัติเหตุไม่มีคู่กรณี ไม่มีใบเคลมจากบริษัทประกัน ผู้เช่าต้องชําระค่าเสียหายส่วนแรกจํานวน
     3,000 - 10,000 บาท ขึ้นอยู่กับความเสียหายและระยะเวลาการซ่อม</p>
    			<p>ข้อ 10. ผู้ให้เช่าเติมน้ำมันเต็มถังก่อนการเช่า และผู้เช่ายินดีเติมน้ำมันเต็มถึงกลับเหมือนเดิมพร้อมใบเสร็จ หากน้ำมัน
ไม่เต็ม ผู้เช่ายินดีให้หักจากเงินประกัน</p>
				<p>ข้อ 11. ข้าพเจ้าผู้เช่ารถ และผู้ให้เช่ารถ ได้ทราบข้อความตามเงื่อนไขสัญญานี้ตลอดแล้ว และยินดีปฏิบัติตามโดยไม่มี
เหตุขัดข้องใดๆทั้งสิ้น เพื่อเป็นหลักฐานจึงได้ลงลายมือชื่อให้ไว้เป็นสําคัญ</p>
				<p>สัญญานี้ทำขึ้นสองฉบับมีข้อความถูกต้องตรงกันคู่สัญญาได้อ่านและเข้าใจข้อความโดยละเอียดตลอดแล้ว จึงได้ลง
ลายมือชื่อไว้เป็นสําคัญต่อหน้า พยานและคู่สัญญาต่างยึดถือไว้ฝ่ายละฉบับ</p>
				</div>
                <p class="ctridentity">หลักฐานที่แนบมาด้วย</p>
                <div class="ctrlistcheck">
                <div class="ctrcheck">
                	<input name="" type="checkbox" value="" />
                    <p>บัตรประชาชน</p>
                </div>
                <div class="ctrcheck">
                	<input name="" type="checkbox" value="" />
                    <p>ใบขับขี่</p>
                </div>
                <div class="ctrcheck">
                	<input name="" type="checkbox" value="" />
                    <p>บัตรพนักงาน/สลิปเงินเดือน/บัตรนักศึกษา</p>
                </div>
                <div class="ctrcheck">
                	<input name="" type="checkbox" value="" />
                    <p>ทะเบียนบ้าน</p>
                </div>
                <div class="ctrcheck">
                	<input name="" type="checkbox" value="" />
                    <p>พาสปอร์ต/ตั๋วเครื่องบิน</p>
                </div>
                </div>
                <input name="" type="text" value="ลายเซ็นผู้ให้เช่า" class="idtform"/>
                <input name="" type="text" value="ลายเซ็นผู้เช่า" class="idtform"/>


            </div>
            <a href="#" class="ctrprint">พิมพ์ใบสัญญา</a>
        </div>
    </div>
    </div>


<div class="clear"></div>
</div>

@endsection
