
<?php
	include_once('common/header.php');
?>      


 <section class="territoryManagementContainer">
                <section class="linenDescription">
                    <div class="linenDescriptionContent">
                        <p class="mainHeading">Compensation Plan Management</p>
                        <p id="TMDesc">Efficient coordination of roles, quotas, and objectives for correct compensation plans!</p>
                        <ul>
                        <li>•	Operationally simple process</li>
                        <li>•	Give your sales reps timely updates to new comp plans</li>
                        <li>•	Accommodate reps who are onboarding, transitioning roles, or changing territory coverage</li>
                        </ul>
                    </div>
                </section>
			</section>
             <section class="linenTMCenterContent">
                <div class="linenCenterContent">
                    <div class="leftContent" id="text">
                        <div class="linenContentDesc">
                            <p class="heading">How Does It Work?</p>
                            <p class="desc">Using the Salesforce platform, LINEN gives Sales Ops and Sales Managers the ability to efficiently assign, verify, and send compensation plans to reps, even as the reps’ positions change.</p>
                            <p class="desc">The customizable toolset ties to products, quotas, and SPIFFs for each sales rep, and ensures reps are credited correctly while eliminating shadow accounting and preventing sales comp leakage.</p>
                        </div>
                    </div>
                    <div class="rightContent" id="img">
                        <div class="imgBgMgmt">
                             <img src="assets/images/PlanMgmtImg1.png" alt="3 person Meeting" id="imgMgmtPlan1" />
                        </div>
                    </div>
	            </div>
            </section>
            <section class="linenTMCenterContent bgColor">
                <div class="linenCenterContent">
                    <div class="leftContent" id="img">
                        <div class="imgBgProd">
                            <div class="imgBgMgmt">
                             	<img src="assets/images/PlanMgmtImg2.png" alt="Laptop Server" id="imgMgmtPlan2" />
                        	</div>
                        </div>
                    </div>
                    <div class="rightContent" id="text">
                        <div class="linenContentDesc bgColor">
                            <p class="heading">Stop Loss, Compensate Fairly</p>
                            <p class="desc">With LINEN's comp plan management, sales reps receive accurate and documented compensation tied to their deliverables. When there are comp plan changes, all users are notified through a clear and traceable system</p>
                        </div>
                    </div>
               	</div>
            </section>
            
            <section class="linenTMCenterContent">
                <div class="linenNotifyCenterContent">
                        <div class="linenNotifyContentDesc">
                            <p class="heading">This feature is in BETA</p>
                            <p class="desc"> Enter your email to be the first to know and participate!</p>
                            <div class="notifiedContainer">
                            	<input class="notify_input" id="email" placeholder="Enter email address" size="100" type="text" value="" />
                                <button id="notify_btn">SUBMIT</button>
                            </div>
                            <div class="error_message" style="clear:both;float:none;margin:0 auto;">
                            	<p class="err-message"></p>
			    			</div>
                    </div>
               	</div>
            </section>
<?php
	include_once('common/footer.php');
?>      
<script type="text/javascript">
		$(document).ready(function (){
			
				$('#productLink').addClass('active');
	$('#planLink').addClass('active');
    $('#planMobileLink').addClass('active');
	
			$('#notify_btn').click(notifyAccess.send);
			$('.err-message').css('color','#ff0000');
        });

	var data = {};
	var notifyAccess = {
		reset:function(){
			$('#email').val('');
		},
		redirect:function(){
			//saveContact();
		},
		send:function(event) {
			event.preventDefault();
			event.stopPropagation();
			$('.err-message').html('&nbsp;').css('color','#ff0000');
			var c = true;
			var v = $('#email');
			var e = $('#email');
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
            
            
			$.ajax({
				type:'POST',
				url:'common/notifyPlanEmail.php',
				data:data,
				success:notifyAccess.sent,
				error:notifyAccess.failure
			});		
		},
		sent:function(res) {
			try { res = JSON.parse(res); }
			catch(e) { $('.err-message').html('* Processing Error. Please try again.'); return false; }
			if (res.res == 0) {
				notifyAccess.reset();
				//contact.redirect();
				$('.err-message').html('Your request has been received.').css('color','green');
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
				notifyAccess.reset();
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
