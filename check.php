<?php
	include_once('common/header.php');
?>      

<section class="linenContactUsCenterContent">
            	<div class="linenContactUsBanner">
                    <div class="contactUsContainer">
                        <div class="circleBg"></div>
                        <div class="swatchBg"></div>
                    </div>
                    <div class="contactUsTextContainer">
                        <div class="contactUsTxtContent" id="desktopHomeHeading">
                            <p id="contactHeading">How do I know it works in</p>
                            <p id="contactHeading">my environment</p>
                            <p id="caption1">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                        <div class="contactUsTxtContent" id="mobileHomeHeading">
                            <p id="contactHeading">How do I know it works in my environment</p>
                            <p id="caption1">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                </div>
                <div class="contactUsFormContainer" id="checkFormContainer">
                    <div class="linenContactUsFormContainer" id="checkForm">
                        <form action="#" method="post" id="check" >
                            <div class="contact_radio_container">
                            	<h6>What is your CRM?</h6>
                                <div class="checkBoxContainer">
                                  <label class="container">Salesforce
                                    <input type="radio" onchange="display(1);" checked="checked" value="Salesforce" name="radio1">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="container">Zoho
                                    <input type="radio" onchange="display(1);" value="Zoho" name="radio1">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                                <div class="checkBoxContainer">
                                  <label class="container">SAP
                                    <input type="radio" onchange="display(1);" value="SAP" name="radio1">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="container">Microsoft
                                    <input type="radio" onchange="display(1);" value="Microsoft" name="radio1">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                                <div class="checkBoxContainer">
                                  <label class="container empty"></label>
                                  <label class="container">Other(Specify)
                                    <input type="radio" onchange="display(1);" value="other" id="others1" name="radio1">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                                <div class="checkBoxContainer">
                                  <label class="container empty"></label>
                                  <div class="check_input_container" id="others1_msg" style="display:none;">
                                    <input class="check_input" id="others1_txt" placeholder="" size="100" type="text" value="" />
                                  </div>
                                </div>
                            </div>
                            <div class="contact_radio_container">
                            	<h6>What is your Compensation Software?</h6>
                                <div class="checkBoxContainer">
                                <label class="container">Oracle
                                  <input type="radio" onchange="display(2);" value="Oracle" checked="checked" name="radio2">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="container">Anapian
                                  <input type="radio" onchange="display(2);" value="Anapian" name="radio2">
                                  <span class="checkmark"></span>
                                </label>
                                </div>
                                <div class="checkBoxContainer">
                                <label class="container">Xactly
                                  <input type="radio" onchange="display(2);" value="Xactly" name="radio2">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="container">Other(Specify)
                                  <input type="radio" onchange="display(2);" value="Other" id="others2" name="radio2">
                                  <span class="checkmark"></span>
                                </label>
                                </div>
                                <div class="checkBoxContainer">
                                  <label class="container empty"></label>
                                  <div class="check_input_container" id="others2_msg" style="display:none;">
                                    <input class="check_input" id="others2_txt" placeholder="" size="100" type="text" value="" />
                                  </div>
                                </div>
                            </div>
                            <div class="contact_radio_container">
                            	<h6>What is your ERP?</h6>
                                <div class="checkBoxContainer">
                                <label class="container">Oracle
                                  <input type="radio" onchange="display(3);" value="Oracle" checked="checked" name="radio3">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="container">Finance Force
                                  <input type="radio" onchange="display(3);" value="Finance Force" name="radio3">
                                  <span class="checkmark"></span>
                                </label>
                                </div>
                                <div class="checkBoxContainer">
                                <label class="container">SAP
                                  <input type="radio" onchange="display(3);" value="SAP" name="radio3">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="container">Netsuite
                                  <input type="radio" onchange="display(3);" value="Netsuite" name="radio3">
                                  <span class="checkmark"></span>
                                </label>
                                </div>
                                <div class="checkBoxContainer">
                                <label class="container empty"></label>
                                <label class="container">Other(Specify)
                                  <input type="radio" onchange="display(3);" value="Other" id="others3" name="radio3">
                                  <span class="checkmark"></span>
                                </label>
                                </div>
                                <div class="checkBoxContainer">
                                  <label class="container empty"></label>
                                  <div class="check_input_container" id="others3_msg" style="display:none;">
                                    <input class="check_input" id="others3_txt" placeholder="" size="100" type="text" value="" />
                                  </div>
                                </div>
                            </div>
                            <div class="contact_radio_container">
                            	<h6>Do you have any of the following situations?</h6>
                                <div class="checkBoxContainer">
                                <label class="container">Overlays
                                  <input type="radio" onchange="display(4);" value="Overlays" checked="checked" name="radio4">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="container">Acquisitions
                                  <input type="radio" onchange="display(4);" value="Acquisitions" name="radio4">
                                  <span class="checkmark"></span>
                                </label>
                                </div>
                                <div class="checkBoxContainer">
                                <label class="container">POS (Channels)
                                  <input type="radio" onchange="display(4);" value="POS (Channels)" name="radio4">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="container">Other(Specify)
                                  <input type="radio" onchange="display(4);" value="Other" id="others4" name="radio4">
                                  <span class="checkmark"></span>
                                </label>
                                </div>
                                <div class="checkBoxContainer">
                                  <label class="container empty"></label>
                                  <div class="check_input_container" id="others4_msg" style="display:none;">
                                    <input class="check_input" id="others4_txt" placeholder="" size="100" type="text" value="" />
                                  </div>
                                </div>
                            </div>
                            
                            <div class="contact_btn_container gradient">
                                <button id="contactus_btn">CHECK</button>
                            </div>                    
                        </form>    
                    </div>
                </div>
                <div class="contactUsFormContainer" id="checkYesAns" style="display:none;">
                    <div class="linenContactUsFormContainer" id="checkFormAns">
                      <div class="linenContentDesc">
                        <p class="heading">Yes</p>
                        <p class="desc">LINEN works with Salesforce CRM, any ERP and any downstream planning application.</p>
                      </div>
                    </div>
                    <div class="error_message"><p class="err-message"></p></div>
                </div>
                <div class="contactUsFormContainer" id="checkNoAns" style="display:none;">
                    <div class="linenContactUsFormContainer" id="checkFormAns">
                      <div class="linenContentDesc">
                        <p class="heading">Not yet, but we are working on it.</p>
                        <p class="desc">Currently LINEN works with only Salesforce CRM, but we are working hard on integrating with other CRMs as well. If you'd like to be contacted let us know</p>
                      </div>
                    </div>
                    <section class="linenRequestAccessCenterContent">
                      <div class="linenRequestAccessContent">
                        <div class="linenReqeustAccessFormContainer">
                            <form action="#" method="post" id="requestAccess" >
                              <div class="requestAccess_input_container" id="email_msg">
                                <label class="requestAccess_label">Your Work Email</label>
                                  <input class="requestAccess_input" id="email" placeholder="e.g johnsmith@domain.com" size="100" type="text" value="" />
                              </div>
                              <div class="requestAccess_btn_container">
                                  <button id="requestAccessus_btn">SUBMIT</button>
                              </div> 
                             
                            </form>    
                        </div>
                      </div>
                </section>
                <div class="error_message"><p class="err-message"></p></div>
              </div>

            <div class="didYouKnowContainer">
            	<div class="didYouKnowContent">
                	<div class="didYouKnowTextContainer">
	                	<h6>Did you know?</h6>
    	            	<p>That LINEN is the first sales-crediting app on Salesforce's App Exchange</p>
                  </div>
                  <div class="didYouKnowButtonContainer">
                    	<div class="buttonContainer"><button onClick="Javascript:window.location.href = 'try.php';">Free Trial</button></div>
                  </div>
                </div>
            </div>
            </section>
            </div>

    <?php
      include_once('common/footer.php');
    ?>      
    </section>
    
    <script>
	$(document).ready(function() {
    $('#checkYesAns').attr('style', 'display:none;');
    $('#checkNoAns').attr('style', 'display:none;');
		$('#contactus_btn').click(check.send);
		$('.err-message').css('color','#ff0000');
	});
	var data = {};
	var check = {
		reset:function(){
			$('#others1_txt').val('');
			$('#others2_txt').val('');
			$('#others3_txt').val('');
			$('#others4_txt').val('');
		},
		send:function(event) {
			event.preventDefault();
			event.stopPropagation();
			$('.err-message').html('&nbsp;').css('color','#ff0000');
			var v = $("input:radio[name=radio1]:checked");
			data.crm = $.trim(v.val());
      if(data.crm.toLowerCase() == 'salesforce'){
        $('#checkNoAns').attr('style', 'display:none;');
        $('#checkYesAns').attr('style', 'display:block;');
        var v = $("input:radio[name=radio2]:checked");
        data.compensation_software = $.trim(v.val());
        if(data.compensation_software.toLowerCase() == "other"){
          data.compensation_software = $.trim($('#others2_txt').val());
          var e = $('#others2_msg');
          if(data.compensation_software == ''){
            e.addClass('rb'); c = false; return c;
          }
        }
        var v = $("input:radio[name=radio3]:checked");
        data.erp = $.trim(v.val());
        if(data.erp.toLowerCase() == "other"){
          data.erp = $.trim($('#others3_txt').val());
          var e = $('#others3_msg');
          if(data.erp == ''){
            e.addClass('rb'); c = false; return c;
          }
        }
        var v = $("input:radio[name=radio4]:checked");
        data.situation = $.trim(v.val());
        if(data.situation.toLowerCase() == "other"){
          data.situation = $.trim($('#others4_txt').val());
          var e = $('#others4_msg');
          if(data.situation == ''){
            e.addClass('rb'); c = false; return c;
          }
        }
        $.ajax({
          type:'POST',
          url:'common/check.php',
          data:data,
          success:check.sent,
          error:check.failure
        });
      }
      else{
        $('#checkYesAns').attr('style', 'display:none;');
        $('#checkNoAns').attr('style', 'display:block;');
        $('#requestAccessus_btn').click(requestAccess.send);
		    $('.err-message').css('color','#ff0000');

      }
		},
		sent:function(res) {
			try { res = JSON.parse(res); }
			catch(e) { $('.err-message').html('* Processing Error. Please try again.'); return false; }
			if (res.res == 0) {
				check.reset();
				//check.redirect();

				$('.err-message').html('Your message has been sent.').css('color','#0000ff');
			}
			else{
				$('.err-message').html(res.res);
			}
		},
		failure: function() {
			$('.err-message').html('* Processing Error. Please try again.');
		},
		ack_sent:function(res) {
			try { res = JSON.parse(res); }
			catch(e) { $('.err-message').html('* Processing Error. Please try again.'); return; }
			if (res.res == 0) {
				check.reset();
				$('.err-message').html('Your message has been sent.').css('color','#0000ff');
			}
			else{
				$('.err-message').html('* Processing Error. Please try again.');
			}
		},
		ack_failure: function() {
			$('.err-message').html('* Processing Error. Please try again.');
		}
	};
	var data = {};
	var requestAccess = {
		reset:function(){
			$('#email').val('');
			$('#others1_txt').val('');
			$('#others2_txt').val('');
			$('#others3_txt').val('');
			$('#others4_txt').val('');
		},
		redirect:function(){
			//saveContact();
		},
		send:function(event) {
			event.preventDefault();
			event.stopPropagation();
			$('.err-message').html('&nbsp;').css('color','#ff0000');
			var c = true;
			v = $('#email');
			e = $('#email');
			data.email = $.trim(v.val());
			if(data.email == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');
			if(!validateEmail(data.email)) {
				e.addClass('rb'); c = false; return c;
			}
      else e.removeClass('rb');
			if(!validateDomain(data.email)) {
				e.addClass('rb'); c = false; return c;
			}
      else e.removeClass('rb');
			var v = $("input:radio[name=radio1]:checked");
      data.crm = $.trim(v.val());
      var e = $('#others1_msg');
      if(data.crm.toLowerCase() == "other"){
          data.crm = $.trim($('#others1_txt').val());
          if(data.crm == ''){
            e.addClass('rb'); c = false; return c;
          }
          else e.removeClass('rb');
      }      
      else e.removeClass('rb');
      var v = $("input:radio[name=radio2]:checked");
        data.compensation_software = $.trim(v.val());
        var e = $('#others2_msg');
        if(data.compensation_software.toLowerCase() == "other"){
          data.compensation_software = $.trim($('#others2_txt').val());
          if(data.compensation_software == ''){
            e.addClass('rb'); c = false; return c;
          }
          else e.removeClass('rb');
        }
        else e.removeClass('rb');
        var v = $("input:radio[name=radio3]:checked");
        data.erp = $.trim(v.val());
        var e = $('#others3_msg');
        if(data.erp.toLowerCase() == "other"){
          data.erp = $.trim($('#others3_txt').val());
          if(data.erp == ''){
            e.addClass('rb'); c = false; return c;
          }
          else e.removeClass('rb');
        }
        else e.removeClass('rb');
        var v = $("input:radio[name=radio4]:checked");
        data.situation = $.trim(v.val());
        var e = $('#others4_msg');
        if(data.situation.toLowerCase() == "other"){
          data.situation = $.trim($('#others4_txt').val());
          if(data.situation == ''){
            e.addClass('rb'); c = false; return c;
          }
          else e.removeClass('rb');
        }
        else e.removeClass('rb');
        $.ajax({
          type:'POST',
          url:'common/mail.php',
          data:data,
          success:requestAccess.sent,
          error:requestAccess.failure
        });            
		},
		sent:function(res) {
			try { res = JSON.parse(res); }
			catch(e) { $('.err-message').html('* Processing Error. Please try again.'); return false; }
			if (res.res == 0) {
				requestAccess.reset();
				//requestAccess.redirect();
				$('.err-message').html('Your message has been sent.').css('color','#0000ff');
			}
			else{
				$('.err-message').html(res.res);
			}
		},
		failure: function() {
			$('.err-message').html('* Processing Error. Please try again.');
		},
		ack_sent:function(res) {
			try { res = JSON.parse(res); }
			catch(e) { $('.err-message').html('* Processing Error. Please try again.'); return; }
			if (res.res == 0) {
				requestAccess.reset();
				$('.err-message').html('Your message has been sent.').css('color','#0000ff');
			}
			else{
				$('.err-message').html('* Processing Error. Please try again.');
			}
		},
		ack_failure: function() {
			$('.err-message').html('* Processing Error. Please try again.');
		}
	};
  function validateEmail(email) {
    var re = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    return re.test(email);
  }
  function validateDomain(email){
    var e=email.split("@");
    var e1=e[1].split(".");
    e1=e1[0];
    if(e1.indexOf("gmail") > -1 || e1.indexOf("yahoo") > -1 || e1.indexOf("rediff") > -1 || e1.indexOf("inbox") > -1 || e1.indexOf("iCloud") > -1 || e1.indexOf("msn") > -1 ){
      return false;
    }
    else{
      return true;
    }
  }


	</script>

	</body>
</html>