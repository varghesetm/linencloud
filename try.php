<?php
	include_once('common/header.php');
?>      

<section class="linenRequestAccessCenterContent">
            	<div class="linenRequestAccessContent">
                	<p id="heading">Request Trial</p>
                    <!-- <div class="advertisement">
                    <p>All entries by midnight PST on 11/30/19 will automatically be entered for our Dreamforce <sup id="reg">&reg;</sup>  &nbsp; <span>Airpods Pro</span> raffle, as advertised. Terms & Conditions apply.
</p>
                    </div> -->
                    <div class="linenReqeustAccessFormContainer">
                        <form action="#" method="post" id="requestAccess" >
                            <div class="requestAccess_input_container" id="user_first_name_msg">
	                        	<label class="requestAccess_label">First Name <span style="color:red;">*</span></label>
                                <input class="requestAccess_input" id="first_name" placeholder="e.g John" size="100" type="text" value="" />
                            </div>
                            <div class="requestAccess_input_container" id="user_last_name_msg">
	                            <label class="requestAccess_label">Last Name <span style="color:red;">*</span></label>
                                <input class="requestAccess_input" id="last_name" placeholder="e.g Smith" size="100" type="text" value="" />
                            </div>
                            <div class="requestAccess_input_container" id="company_msg">
                            	<label class="requestAccess_label">Company / Organization <span style="color:red;">*</span></label>
                                <input class="requestAccess_input" id="company" placeholder="e.g Acme co" size="100" type="text" value="" />
                            </div>
                            <div class="requestAccess_input_container" id="email_msg">
                            	<label class="requestAccess_label">Work Email <span style="color:red;">*</span></label>
                                <input class="requestAccess_input" id="email" placeholder="e.g johnsmith@acmecompany.com" size="100" type="text" value="" />
                            </div>
                            <div class="requestAccess_input_container" id="companySize_msg">
                            	<label class="requestAccess_label">Company / Organization Size <span style="color:red;">*</span></label>
                                 <select name="" class="requestAccess_input" id="companySize">
								  <option value="">select</option>
								  <option value="1 - 20">1 - 20</option>
                                  <option value="20 - 100">20 - 100</option>
                                  <option value="100 - 500">100 - 500</option>
                                  <option value="500 - 3000">500 - 3000</option>
                                  <option value="3000 - 10000">3000 - 10000</option>
                                  <option value="10000+">10000+</option>
								</select>
                            </div>
                            <div class="requestAccess_input_container" id="phoneno_msg">
                            	<label class="requestAccess_label">Phone Number <span style="color:red;">*</span></label>
                                <input class="requestAccess_input" id="phoneno" placeholder="Phone number" type="tel" size="20" />
                            </div>
                            <div class="requestAccess_input_container" id="interested_msg">
                            	<label class="requestAccess_label">Interested In<span style="color:red;">*</span></label>
                                <select name="interested[]" class="requestAccess_input" id="interested" multiple>
                                  <option value="Hierarchy Management">Hierarchy Management</option>
                                  <option value="Territory Planning">Territory Planning</option>
                                  <option value="Quota Planning">Quota Planning</option>
                                  <option value="Comp Plan">Comp Plan</option>
 								  <option value="Sales Crediting">Sales Crediting</option>
                                  <option value="COVIPLAN">COVIPLAN</option>
								</select>
                            </div>
                            <div class="requestAccess_input_container" id="role_msg">
                            	<label class="requestAccess_label">Role <span style="color:red;">*</span></label>
								<input class="requestAccess_input" id="role" placeholder="Role" size="100" type="text" value="" />
                            </div>
                            <div class="requestAccess_btn_container">
                                <button id="requestAccessus_btn">SUBMIT</button>
                            </div> 
                            <p id="privacy_text">By clicking "Register" you agree to LINEN's terms of Service and <a href="privacy.php">Privacy Policy</a>. We respect your privacy and will never sell, rent or share your personal information.</p>
                            <div class="error_message"><p class="err-message"></p>
				<p class="msg-txt"></p>
			    </div>
                        </form>    
                    </div>
    		</div>

            </section>

    
<?php
	include_once('common/footer.php');
?>      


		</section>
		<script type="text/javascript">
		$(document).ready(function (){
			$('#interested').multiselect({
			  nonSelectedText: 'Select Your Interest',
			  includeSelectAllOption: true
	 		});
			$('#tryLink').addClass('active');
			$('#requestAccessus_btn').click(requestAccess.send);
			$('.err-message').css('color','#ff0000');
			
        });
        $("#phoneno").intlTelInput({
			  // options here
			  allowDropdown:true,
			  autoHideDialCode:true,
			  separateDialCode: true
			});
	var data = {};
	var requestAccess = {
		reset:function(){
			$('#first_name').val('');
			$('#last_name').val('');
			$('#company').val('');
			$('#phoneno').val('');
			$('#email').val('');
			$('#companySize').val('');
            $('#interested').val('');
            $('#role').val('');
		},
		redirect:function(){
			//saveContact();
		},
		send:function(event) {
			event.preventDefault();
			event.stopPropagation();
			$('.err-message').html('&nbsp;').css('color','#ff0000');
			var c = true;
			var v = $('#first_name');
			var e = $('#first_name');
			data.first_name = $.trim(v.val());
			if(data.first_name == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');
			var v = $('#last_name');
			var e = $('#last_name');
			data.last_name = $.trim(v.val());
			if(data.last_name == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');	
			var v = $('#company');
			var e = $('#company');
			data.company = $.trim(v.val());
			if(data.company == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');			
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
            
			var v = $('#companySize');
			var e = $('#companySize');
            data.companySize = $.trim(v.val());
			if(data.companySize == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');		
			v = $('#phoneno');
			e = $('#phoneno');
			data.phoneno = $.trim(v.val());
			if(data.phoneno == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');
			if(!validatePhone(data.phoneno)){
				e.addClass('rb'); c= false; return c;
			}
			else e.removeClass('rb');
			v = $('#interested');
			e = $('#interested');
			data.interested = $.trim(v.val());
			if(data.interested == '') {
				e.addClass('rb'); c = false; return c;
			}
            else e.removeClass('rb');
			v = $('#role');
			e = $('#role');
			data.role = $.trim(v.val());
			if(data.role == '') {
				e.addClass('rb'); c = false; return c;
			}
            else e.removeClass('rb');
            
			$.ajax({
				type:'POST',
				url:'common/requestAccess.php',
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
				//contact.redirect();
				$('.err-message').html('Your request has been received.').css('color','green');
				$('.msg-txt').html('We’ll be in touch soon to initiate your free trial');
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

    function validatePhone(phoneno) {
        var re = /\d{10}/;
        return re.test(phoneno);
    }

	</script>

	</body>
</html>