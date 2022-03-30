<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Linen</title>
  <link rel="stylesheet" href="./assets/js/jquery.flipster.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">

  <script>

const dropdown=()=>{
const display=document.querySelector(".header_nav--bottom").style.display;

if(!display){
  console.log(display);
  document.querySelector(".header_nav--bottom").style.display="block";
}
else{
  document.querySelector(".header_nav--bottom").style.display="";
}
  }
  
  const dropdownmobile=()=>{
  
  const display=document.querySelector("#menu .header_nav--bottom").style.display;
  
  if(!display){
    console.log(display);
    document.querySelector("#menu .header_nav--bottom").style.display="block";
  }
  else{
    console.log(display);
    document.querySelector("#menu .header_nav--bottom").style.display="";
  }
    }
    </script>
</head>

<body>
 
  <header class="container">
    <div class="header_logo hiddenMob">
      <img class="header_logo--image" alt="Linen logo" src="./assets/images/logo_ black_text.svg" />
    </div>
    <nav role="navigation" class="desktop-navigation hiddenMob">
      <ul class="header_nav">
        <li class="header_nav--items"><a href="index.php">Home</a></li>
        <li class="header_nav--items" onclick="dropdown()"><a class="header_alink">Platform</a><div class="header_nav--dropdown" ></div>
    <div class="header_nav--bottom"><div class="header_platform-arrow"></div><ul class="header_platform">
      <li class="header_platform--items"><a href="">What is LINEN Cloud</a></li>
<li class="header_platform--items"><a href="hierarchyProduct.php">Hierarchy Management</a></li>
<li class="header_platform--items"><a href="territoryManagement.php">Territory Management</a></li>
<li class="header_platform--items"><a href="quotaManagement.php">Quota Planning</a></li>
<li class="header_platform--items"><a href="planManagement.php">Compensation Plans</a></li>
<li class="header_platform--items"><a href="salesCreditProduct.php">Sales Crediting</a></li>
</ul></div>
      
      
      </li>
        <li class="header_nav--items"><a href="partners.php">partners</a></li>
        <li class="header_nav--items"><a href="security.php">security</a></li>
        <li class="header_nav--items"><a href="try.php">try</a></li>
      </ul>
    </nav>
    <div class="hiddenMob header-btn">
      <a href="contact.php" class="btn btn-white">contact us</a>
    </div>
    <!-- Mobile Navigation -->
    <nav role="navigation" class="header_mob_nav mobile-navigation hiddenDesktop">
      <div id="menuToggle">
        <input type="checkbox" />
        <div class="header-hamburger-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <ul id="menu">
          <li class="header_nav--items"><a href="index.php">Home</a></li>
          <li class="header_nav--items" onclick="dropdownmobile()"><a>Platform</a><div class="header_nav--dropdown"></div>
    <div class="header_nav--bottom"><div class="header_platform-arrow"></div><ul class="header_platform">
      <li class="header_platform--items"><a href="" >What is LINEN Cloud</a></li>
<li class="header_platform--items"><a href="hierarchyProduct.php" >Hierarchy Management</a></li>
<li class="header_platform--items"><a href="territoryManagement.php" >Territory Management</a></li>
<li class="header_platform--items"><a href="quotaManagement.php" >Quota Planning</a></li>
<li class="header_platform--items"><a href="planManagement.php">Compensation Plans</a></li>
<li class="header_platform--items"><a href="salesCreditProduct.php" >Sales Crediting</a></li>
</ul></div>
        
        
        
        
        </li>
          <li class="header_nav--items"><a href="partners.php">partners</a></li>
          <li class="header_nav--items"><a href="security.php">security</a></li>
          <li class="header_nav--items"><a href="try.php">try</a></li>
          <li class="header-btn">
            <a href="contact.php" class="btn btn-white">contact us</a>
          </li>
        </ul>
        <div class="header_logo hiddenDesktop">
          <img class="header_logo--image" alt="Linen logo" src="./assets/images/logo_ black_text.svg" />
        </div>
      </div>
    </nav>
  </header>

  <section class="block container padding-offset">
    <div class="block-text">
      <h1>
        Planning Made Easy
      </h1>
      <h2>
        Built on the Salesforce® platform, Connect your Salesforce® (or any CRM)
      </h2>
      <p>
        Manage sales hierarchies, design territories,
        plan quotas, set up comp plans and assign sales credits!
      </p>
      <div class="block-btn">
        <a href="" class="btn btn-black btn-large-black">Know More</a>
      </div>
    </div>
  </section>
  <section class="block container">
    <div class="block_bg--green">
      <div class="block-text">
        <h2>
          Trusted by Fortune 500 Companies
        </h2>
        <p>
          10X increase in Planning Efficiency for a $50B Company
        </p>
      </div>
      <div class="block-btn">
        <a href="" class="btn btn-border-green">Click Here</a>
      </div>

    </div>
  </section>
  <section class="block block_carousal">
    <div class="banner">
      <div class="carousel">
        <ul class="carousel__ul">
          <li>
            <a href="hierarchyProduct.php" >
            <div class="carousel__li">
              <div class="carousel__img"> <img src="./assets/images/2.svg" /></div>
              <div class="carousel__title">Hierarchy Management for sales &amp finance</div>
            </div>

            </a>
          </a>
          </li>
          <li>
            <a href="territoryManagement.php" >
            <div class="carousel__li">
              <div class="carousel__img "><img src="./assets/images/3.svg" /></div>
              <div class="carousel__title">Territory Design</div>
            </div>
            </a>
          </li>
          <li>
            <a href="planManagement.php" >
            <div class="carousel__li">
              <div class="carousel__img"> <img src="./assets/images/1.svg" /></div>
              <div class="carousel__title">Comp Plan</div>
            </div>
            </a>
          </li>
          <li>
            <a href="salesCreditProduct.php" >
            <div class="carousel__li">
              <div class="carousel__img"> <img src="./assets/images/4.svg" /></div>
              <div class="carousel__title">Sales Crediting</div>
            </div>
            </a>
          </li>
          <li>
            <a href="https://advisory.kpmg.us/articles/2021/saas-thought-leadership-series/models-measuring-success.html" target="_blank">
            <div class="carousel__li">
              <div class="carousel__img"> <img src="./assets/images/5.svg" /></div>
              <!-- <div class="carousel__name">kpmg</div> -->
              <div class="carousel__title carousel__title--custom">
                <p>Recurring Revenue Models White Paper</p>
              
                <p class="carousel__title--para"> featuring LINEN Cloud’s point of view of GTM Planning in the Cloud economy</p> 
              </div>
              </div>
            
            </a>
          </li>
          <li>
            <a href="" target="_blank">
            <div class="carousel__li">
              <div class="carousel__img"> <img src="./assets/images/6.svg" /></div>
              <!-- <div class="carousel__name">cisco</div> -->
              <div class="carousel__title carousel__title--custom">Case Study</div>
            </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <footer class="container footer">
    <div class="wrapper">
      <div class="footer-logo">
        <img class="footer_logo--image" alt="Linen logo" src="./assets/images/logo_ black_text.svg" />
        <p>Intelligent Planning in the Cloud &trade;</p>
      </div>
      <div class="footer-links">
        <ul>
          <li class="footer-title">Quick links</li>
          <li class="footer-link"><a href="index.php">Home</a></li>
          <li class="footer-link"><a href="partners.php">partners</a></li>
          <li class="footer-link"><a href="security.php">data & security</a></li>
          <li class="footer-link"><a href="about.php">about us</a></li>
        </ul>
      </div>
      <div class="footer-links">
        <ul>
          <li class="footer-title">Support</li>
          <li class="footer-link"><a href="try.php">try</a></li>
          <li class="footer-link"><a href="contact.php">technical support</a></li>
          <li class="footer-link"><a href="salesCreditProduct.php?page=faq">FAQs</a></li>
          <li class="footer-link"><a href="privacy.php">Privacy policy</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./assets/js/jquery.flipster.min.js"></script>
  <script>
    // inititalise carousel
    $('.carousel').flipster({
      style: 'carousel',
      spacing: -0.4,
      nav: true,
      buttons: false,
      loop: true

    });
  </script>
</body>

</html>