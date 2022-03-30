
<?php
	include_once('common/header.php');
?>   

 <section class="territoryManagementContainer">
                <section class="linenDescription">
                    <div class="linenDescriptionContent">
                        <p class="mainHeading">Quota Management</p>
                        <p id="TMDesc">Streamline the assigning, cascading, and adjusting of setting rep sales quotas!</p>
                        <ul>
                        <li>•	Integrated approach combines org hierarchy, territory planning, and quota setting</li>
                        <li>•	Seamless approach for delivering quotas on time</li>
                        <li>•	Meet monthly, quarterly, and annual objectives</li>
                        </ul>
                    </div>
                </section>
			</section>
             <section class="linenTMCenterContent">
                <div class="linenCenterContent">
                    <div class="leftContent" id="text">
                        <div class="linenContentDesc">
                            <p class="heading">How Does It Work?</p>
                            <p class="desc">Using the Salesforce platform, LINEN simplifies the way quotas are assigned. Choose cascaded top-down and/or bottom-up criteria, and easily adjust as needed to distribute quotas equitably.</p>
                            <p class="desc">Say goodbye to passing around spreadsheets, losing data, and poor distribution of quotas. Now, you can benefit from instant reconciliation of sales manager inputs and sales ops—while your reps receive clear and fair quota assignments.</p>
                        </div>
                    </div>
                    <div class="rightContent" id="img">
						<div class="imgBgMgmt">
                             <img src="assets/images/QuotaMgmtImg1.png" alt="Quota Mgmt 1" id="imgMgmtQuota1" />
                        </div>                    
                    </div>
	            </div>
            </section>
            <section class="linenTMCenterContent bgColor">
                <div class="linenCenterContent">
                    <div class="leftContent" id="img">
                            <div class="imgBgMgmt">
                             	<img src="assets/images/QuotaMgmtImg2.png" alt="Quota Mgmt 2" id="imgMgmtQuota2" />
                        	</div>
                    </div>
                    <div class="rightContent" id="text">
                        <div class="linenContentDesc bgColor">
                            <p class="heading">The LINEN Difference</p>
                            <p class="desc">LINEN seamlessly coordinates sales org hierarchy design, territory setup, and quota management into one workflow.</p>
                            <p class="desc">For example, a change made to your sales hierarchy will adjust everything downstream (such as rep quotas) while updating everyone up the management chain.</p>
                        </div>
                    </div>
               	</div>
            </section>
         
            <section class="linenTMCenterContent">
                <div class="linenNotifyCenterContent">
                        <div class="linenNotifyContentDesc">
                            <p class="heading">No More Silos!</p>
                            <p class="desc">LINEN’s platform solves your quota management challenges.</p>
                        </div>
                        <table class="quotaTable">
                           <tr class="colorBg">
                               <th class="leftSide"><p>Sales Pain Point</p></th>
                               <th class="rightSide"><p>How we solve it</p></th>
                           </tr>
                           <tr>
                               <td class="leftSide"><p>"My territory isn’t fair and I can’t hit my quota"</p></td>
                               <td class="rightSide"><p>Our AI/ML builds equitable territories through routing rules and maps—and adjusts when the data changes</p></td>
                           </tr>
                           <tr class="colorBg">
                               <td class="leftSide"><p>"My quota isn't transparent"</p></td>
                               <td class="rightSide"><p>Sales Managers participate in the planning process and can provide inputs and quota overrides in the quota setting workflow</p></td>
                           </tr>
                       </table>
                           
                           
                   
               	</div>
            </section>
            
          <!--  <section class="linenTMCenterContent">
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
            </section>  --->
           

<?php
	include_once('common/footer.php');
?>     
 
 <script type="text/javascript">
		$(document).ready(function (){

	$('#productLink').addClass('active');
	$('#quotaLink').addClass('active');
    $('#quotaMobileLink').addClass('active');
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
				url:'common/notifyQuotaEmail.php',
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
