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
                            <p id="contactHeading">Data Security</p>
                            <p id="caption1">Your trust and the security of data is our top priority</p>
                        </div>
                    </div>
                </div>
	            <section class="linenSecurityCenterContent">
                	<div class="linenCenterContent">
                        <div class="leftContent" id="text">
                            <div class="linenContentDesc">
                                <p class="heading">Data & Application Security</p>
                                <p class="desc">LINEN uses Salesforce's single sign-on security model. The application is also fully hosted on Salesforce's servers to ensure maximum security for clients. Based on customer specifications, we can also easily integrate into your organizations enterprise access management systems (Okta, Microsoft, IBM, etc) and enable multi-factor authentications as needed.</p>
                            </div>
                        </div>
                        <div class="rightContent" id="img">
                            <div class="imgBg">
                                <img src="assets/images/securityImg1.png" alt="Application Data" id="img1" />
                            </div>
                        </div>
                    </div>
                </section>
                <section class="linenSecurityCenterContent" id="bgColor">
	                <div class="linenCenterContent">
                		<div class="leftContent" id="img">
                        	<div class="imgBg">
                                <img src="assets/images/securityImg2.png" alt="GDPR" id="img2" />
                            </div>
                        </div>
                 		<div class="rightContent" id="text">
                     		<div class="linenContentDesc">
                        		<p class="heading">Where does the data reside? Are you GDPR compliant?</p>
                        		<p class="desc">LINEN's customer data resides 100% on Salesforce's<sup id="reg">&reg;</sup> Heroku cloud databases, and is GDPR compliant. Read more about Salesforce's GDPR policies <a href="https://devcenter.heroku.com/articles/gdpr">here</a>.</p>
                    		</div>
                		</div>
                	</div>
            	</section>
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


    
<?php
	include_once('common/footer.php');
?>      
		</section>
		<script type="text/javascript">
		$(document).ready(function (){
			$('#securityLink').addClass('active');
		});
	</script>

	</body>
</html>