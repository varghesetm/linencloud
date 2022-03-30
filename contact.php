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
                        <div class="contactUsTxtContent">
                            <p id="contactHeading">Contact Us</p>
                            <p id="caption1">Of course, we’d love to hear from you! Do send us a note.</p>
                        </div>
                    </div>
                </div>
                <div class="contactUsFormContainer">
                	<div class="contactUsLeftFormDetails">
                    	<ul class="list-contacts list-unstyled">
										<li class="list-contacts__item">
											<i class="icon-map"></i>
											<div class="list-contacts__inner">
												<div class="list-contacts__title">Address:</div>
												<div class="list-contacts__info addr">LINEN Software, 100 Pine Street, Suite 1250</div>
												<div class="list-contacts__info addr">San Francisco CA 94111</div>
											</div>
										</li>
										<li class="list-contacts__item">
											<i class="icon stroke icon-email"></i>
											<div class="list-contacts__inner">
												<div class="list-contacts__title">Email</div>
												<div class="list-contacts__info">US/Canada/Latam: <a href="mailto:americas@linen.cloud">americas@linen.cloud</a></div>
												<div class="list-contacts__info">Australia: <a href="mailto:au@linen.cloud">au@linen.cloud</a></div>
												<div class="list-contacts__info">Europe: <a href="mailto:emear@linen.cloud">emear@linen.cloud</a></div>
											</div>
										</li>
										<li class="list-contacts__item">
											<i class="icon stroke icon-phone"></i>
											<div class="list-contacts__inner">
												<div class="list-contacts__title">Tel:</div>
												<div class="list-contacts__info"><a href="tel:+1-415-523-8245">+1 415-523-8245</a>
                                                </div>
											</div>
										</li>
									</ul>
                    </div>
                	<div class="contactUsRightFormDetails">
                    	<div class="googleMapContainer">
                        	<div class="googleMapMarker">
                            	<div class="googleAddressDetail">
                                	<div class="linenAddressContent">
	                                	<h5>find us here</h5>
                                        <p>LINEN, 100 Pine Street, Suite 1250 San Francisco CA 94111</p>	
                                    </div>
                                <div class="downArrowBg"></div>
                                </div>
                                <p class="locationText">san francisco</p>
                            </div>
                        </div>
                    </div>                    
                    <div class="linenContactUsFormContainer">
                        <form action="#" method="post" id="contact" >
                            <div class="contact_input_container" id="user_first_name_msg">
                                <input class="contact_input" id="first_name" placeholder="FIRST NAME" size="100" type="text" value="" />
                            </div>
                            <div class="contact_input_container" id="user_last_name_msg">
                                <input class="contact_input" id="last_name" placeholder="LAST NAME" size="100" type="text" value="" />
                            </div>
                            <div class="contact_input_container" id="company_msg">
                                <input class="contact_input" id="company" placeholder="COMPANY / ORGANIZATION" size="100" type="text" value="" />
                            </div>
                            <div class="contact_input_container" id="email_msg">
                                <input class="contact_input" id="email" placeholder="EMAIL" size="100" type="text" value="" />
                            </div>
                            <div class="contact_input_container" id="phoneno_msg">
                                <input class="contact_input" id="phoneno" placeholder="TELEPHONE" size="20" />
                            </div>
                            <div class="contact_input_container" id="postalcode_msg">
                                <input class="contact_input" id="postalcode" placeholder="POSTAL CODE" size="20" />
                            </div>
                            <div class="contact_textarea_container" id="user_message_msg">
                                <textarea class="contact_textarea" id="user_message" placeholder="Your message here, click submit, and we're on it" rows="5" cols="100" required></textarea>
                            </div>
                            <div class="contact_btn_container">
                                <button id="contactus_btn">SUBMIT</button>
                            </div>                    
                            <div class="error_message"><p class="err-message"></p></div>
                        </form>    
                    </div>
    		</div>

            </section>

    
<?php
	include_once('common/footer.php');
?>      

<script>
	$(document).ready(function() {
		$('#contactus_btn').click(contact.send);
		$('.err-message').css('color','#ff0000');
	});
	var data = {};
	var contact = {
		reset:function(){
			$('#first_name').val('');
			$('#last_name').val('');
			$('#company').val('');
			$('#phoneno').val('');
			$('#email').val('');
			$('#postalcode').val('');
			$('#user_message').val('');
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
			var e = $('#user_first_name_msg');
			data.first_name = $.trim(v.val());
			if(data.first_name == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');
			var v = $('#last_name');
			var e = $('#user_last_name_msg');
			data.last_name = $.trim(v.val());
			if(data.last_name == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');	
			var v = $('#company');
			var e = $('#company_msg');
			data.company = $.trim(v.val());
			if(data.company == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');			
			v = $('#email');
			e = $('#email_msg');
			data.email = $.trim(v.val());
			if(data.email == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');
			if(!validateEmail(data.email)) {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');
			v = $('#phoneno');
			e = $('#phoneno_msg');
			data.phoneno = $.trim(v.val());
			if(data.phoneno == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');
			if(!validatePhone(data.phoneno)){
				e.addClass('rb'); c= false; return c;
			}
			else e.removeClass('rb');
			var v = $('#postalcode');
			var e = $('#postalcode_msg');
			data.postalcode = $.trim(v.val());
			if(data.postalcode == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');		
			if(!validatePostalCode(data.postalcode)){
				e.addClass('rb'); c= false; return c;
			}
			else e.removeClass('rb');
			v = $('#user_message');
			e = $('#user_message_msg');
			data.message = $.trim(v.val());
			if(data.message == '') {
				e.addClass('rb'); c = false; return c;
			}
			else e.removeClass('rb');
			if(data.message.length > 500) {
				e.addClass('rb');
				$('.err-message').html('* Message must not be longer than 500 characters.');
				c = false; return c;
			}
			else e.removeClass('rb');
			//data.message = data.message.replace(/\r\n|\r|\n/g,"<br />");
			$.ajax({
				type:'POST',
				url:'common/contact.php',
				data:data,
				success:contact.sent,
				error:contact.failure
			});		
		},
		sent:function(res) {
			try { res = JSON.parse(res); }
			catch(e) { $('.err-message').html('* Processing Error. Please try again.'); return false; }
			if (res.res == 0) {
				contact.reset();
				//contact.redirect();
				$('.err-message').html('Your message has been sent.').css('color','green');
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
				contact.reset();
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

function validatePhone(phoneno) {
    var re = /\d{10}/;
    return re.test(phoneno);
}
function validatePostalCode(postalcode) {
    var re = /\d+/;
    return re.test(postalcode);
}

	</script>
		<script type="text/javascript">
		$(document).ready(function (){
			$('#contactLink').addClass('active');
		});
	</script>

		</section>
	</body>
</html>