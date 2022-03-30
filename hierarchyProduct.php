<?php
	include_once('common/header.php');
?>      

			<section class="linenproductDescription">
            	<img src="assets/images/hierarchyImg.svg?v=2" alt="product" width="1000" height="587" id="hierarchyHeaderImg"/>
                <img src="assets/images/hierarchyImg.svg?v=2" alt="product" width="300" height="176" id="hierarchyHeaderMobileImg"/>
            </section>

			<section class="linenProductCenterContent" style="min-height: 225px;">
                <div class="circleBg"></div>
            	<div class="linenCenterContent" style="min-height: 200px;">
	                <div class="swatchBg"></div>   
                    <div class="linenContentDesc">
                    	<p class="heading">Why LINEN Sales Hierarchy Management?</p>
                        <p class="desc">LINEN's cloud-based Hierarchy Management platform, built on Salesforce<sup id="reg">&reg;</sup>, helps simplify the ongoing optimization of sales regions and agent assignments needed to support your sales targets. Our application is easy to use and helps your sales operations team quickly adapt to new and evolving business models like subscriptions and usage-based, or manage organizational changes like acquisitions.
</p>
                    </div>
                </div>
            </section>
            <section class="linenProductCenterContent" id="canProveItBg">
	            <div class="circleBgImg"></div>
                <div class="linenCenterContent">
                    <div class="leftContent" id="img">
                    </div>
                    <div class="rightContent" id="text">
                        <div class="linenContentDesc">
                            <p class="heading">What does it do?</p>
                            <p class="desc">Our platform helps companies easily create and manage Sales, Product, Finance or custom hierarchies, without the need for coding or rewiring, to accommodate evolving company strategies. It can be used for sales territory, people or product hierarchy-based rollups typically used for sales compensation. LINEN enables these changes to be executed with minimal or no impact to compensation plans.
</p>
							<p class="desc">LINEN is built to hook into <a href="https://help.salesforce.com/articleView?id=tm2_intro.htm&type=5" target="_blank">Salesforce's<sup id="reg">&reg;</sup> Territory Management </a> and makes it easy to manage Agent to Territory assignments, including ongoing changes, with a very intuitive interface.
</p>
                            <p class="desc">It also serves as a pure hierarchy management platform to feed your Sales Planning, Reporting and Analytics applications.</p>
                        </div>
                    </div>
	            </div>
            </section>
            <section class="linenProductCenterContent">
                <div class="linenCenterContent">
                    <table class="hierarchyTable">
                    	<tr class="heading">
                    		<th>CAPABILITIES</th>
                    		<th>FEATURES</th>
                    	</tr>
                        <tr>
                        	<td><div><p>Maintain sales agent to territory (node) relationships</p></div></td>
                            <td><div><p>Create, manage, and publish hierarchies</p></div>
                            <div><p>Drag-and-drop to control parent-to-child node relationships</p></div>
                            </td>
                        </tr>
                        <tr>
                        	<td><div><p>Use with Sales Crediting for compensation needs, or as a stand-alone app</p></div></td>
                            <td><div><p>Use pre-built attributes or configure your own</p></div>
                            <div><p>Custom hierarchies to suit your industry and function</p></div>
                            </td>
                        </tr>
                        <tr>
                        	<td><div><p>Integrates with any Compensation system (Xactly, Callidus, Anaplan, Oracle, IBM, etc.)</p></div></td>
                            <td><div><p>Sales Overlays</p></div>
                            <div><p>Visually powerful and intuitive</p></div>
                            </td>
                        </tr>
                        <tr>
                        	<td><div><p>Versatile, for use across functions - Sales, Finance, Supply Chain, etc. to manage simple and complex hierarchy needs</p></div></td>
                            <td><div><p>Compares hierarchies</p></div>
                            <div><p>Version control for period-based hierarchies</p></div>
                            </td>
                        </tr>
                        <tr>
                        	<td><div><p>APIs for integrating to any downstream Sales Planning or reporting applications (Tableau, Microsoft, Qlik, Looker, MicroStrategy, Hyperion, Thoughtspot, Anaplan, etc.)</p></div></td>
                            <td><div><p>Event tracking provides auditability and transparency to changes</p></div>
                            <div><p>Alerts & Governance</p></div>
                            </td>
                        </tr>
                    </table>
                </div>
            </section>
            
            
            <section class="linenProductCenterContent">
                <div class="linenCenterContent">
                    <div class="leftContent" id="img">
                        <div class="imgBgProd">
                             <img src="assets/images/img2.png" alt="Sales Credit" id="imgSCProd1" />
                        </div>
                    </div>
                    <div class="rightContent" id="text">
                    	<!-- <div class="howDoKnowContainer">
                        	<div class="arrowYellowBg"></div>
                            <p onClick="Javascript:window.location.href = 'check.php';" style="cursor:pointer;">How do I know if this  works for my company? </p>
                        </div> -->
                        <div class="linenContentDesc">
                            <p class="heading">Does it work with Sales Crediting?</p>
                            <p class="desc">Yes. Hierarchies are often used in determining sales commissions, i.e. a Territorial Hierarchy may be used to determine which agent(s) get credited for a sale in a particular geography or territory. A People Hierarchy rollup may be used to determine how many people in an organization need to get credited (and compensated) for a sale. </p>
                            <p class="desc">LINEN Hierarchy Management works together with Sales Crediting to seamlessly use both Sales Crediting rules and Hierarchy rollups – whether it be Sales, Product or People-based, to ensure that sales people are compensated correctly. LINEN is purpose-built to solve traditional compensation challenges, simplify internal processes and enable compensation accuracy and efficiency.</p>
                        </div>
                    </div>
               	</div>
            </section>

            
			<section class="scFAQContainer">
            	<div class="faq_heading_container">
	            	<p id="faqHeading">FAQs</p>
                </div>
            	<div class="faqContent">
                	<ul>
                    	<li><p class="question">What is a Sales Hierarchy?
                        <span class="minusBgIcon" id="minusQ1" style="display:none;" onclick="hideAnswer(1);"></span><span class="plusBgIcon" id="plusQ1" style="display:block;" onclick="showAnswer(1);"></span></p>
                        <p class="answer" id="answer1" style="display:none;">A Sales Hierarchy could represent a Geographic, Territorial, Sales Segment, Account-based or Sales agent-based view. Or it could be a view that combines all of these. 
                        </p></li>
                    	<li><p class="question">What is a Product Hierarchy?
                        <span class="minusBgIcon" id="minusQ2" style="display:none;" onclick="hideAnswer(2);"></span><span class="plusBgIcon" id="plusQ2" style="display:block;" onclick="showAnswer(2);"></span></p>
                        <p class="answer" id="answer2" style="display:none;">A Product Hierarchy may be used to rollup SKUs to product families, and up to Business Units (BUs) or Lines of Businesses (LOBs).
                        </p></li>
                    	<li><p class="question">How do these hierarchies work together?
                        <span class="minusBgIcon" id="minusQ3" style="display:none;" onclick="hideAnswer(3);"></span><span class="plusBgIcon" id="plusQ3" style="display:block;" onclick="showAnswer(3);"></span></p>
                        <p class="answer" id="answer3" style="display:none;">Hierarchies can get difficult to maintain and manage. Traditionally they have resided as part of MDM (Master Data Management) systems and hidden deep in the technology layer with business users having little or minimal visibility into hierarchy management. However, hierarchy management impacts many aspects of corporate planning, reporting, forecasting and business decision-making.
                        
                        <br/>
                        
                        <br/>
                        Decision making tools that executives use for insights include metrics highly dependent on these hierarchies. One example: Revenue is a key metric in any business. Let's assume that Revenue for US Commercial for the Video Business Unit is $20M/Qtr. This is an example of an intersection of 'Sales Hierarchy' and 'Product Hierarchy'.
                        
                        <br/>
                        
                        <br/>
                        
                        These are dynamic items and need to be viewed in context. Uncoordinated changes in hierarchy management can have an adverse effect on sales compensation, planning, reporting and forecasting across the business.
                        
                        </p></li>
                    </ul>
                </div>
            </section>
            <section class="linenContactUsCenterContent">
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
		<div class="bgImg1"></div>
		<script type="text/javascript">
$(document).ready(function (){
	$('#productLink').addClass('active');
	$('#hierarchyLink').addClass('active');
    $('#hierarchyMobileLink').addClass('active');
	var url_string=window.location.href;
	var url = new URL(url_string);
	var p = url.searchParams.get("page");
	console.log(p);
	if(p){
		if(p.toString().toLowerCase() == 'faq'){
			//$(window).scrollTop($('#answer1').offset().top);
			$('html,body').animate({
			    scrollTop: $('#faqHeading').offset().top - 150
			}, 1000);

			//$('html, body').animate({
        		//'scrollTop' : $("#answer1").position().top
    		//});
		}
	}
});
</script>

	</body>
</html>