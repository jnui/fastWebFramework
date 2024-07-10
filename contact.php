<?php 
require __DIR__ . '/varfunc.php';


includeWithVariables('header.php', array(
  'title' => 'Contact mysite 561-555-1212',
   'metadescription' => 'Mysite Contracting 561-555-1212 Contact us',
    'theurl' => 'contact.php'));

?>



      <section class="container" id="examples">
        <h1 class="title">Contact SMC Contracting </h1>
        <div class="row">
            <div class="column">
                
                <h2>Ph: <a href="tel:5616898848">561-689-8848</a></h2>
                <p>General email <a href="mailto:info@mysite.com">info@mysite.com</a> </p>
                <ul>
                    <li>Estimating
                        <ul>
                            <li><a href="mailto:brian@mysite.com">Brian@mysite.com</a></li>
                            <li><a href="mailto:douglas@mysite.com">Jake@mysite.com</a></li>
                            <li><a href="mailto:jeff@mysite.com">Jeff@mysite.com</a></li>
                            <li><a href="mailto:rocco@mysite.com">Rocco@mysite.com</a></li>
                        </ul>
                    </li>
                    <li>Field
                        <ul>
                            <li>Manager - <a href="mailto:@daryl@mysite.com">Daryl@mysite.com</a></li>
                            <li>Hauling - <a href="mailto:gerard@mysite.com">Gerard@mysite.com</a></li>
                            <li>Logistics - <a href="mailto:gina@mysite.com">Gina@mysite.com</a></li>
                            
                            
                            
                        </ul>
                    </li>
                    <li>Office
                        <ul>
                            <li>Permits / Ops- <a href="mailto:kimberly@mysite.com">Kimberly@mysite.com</a></li>
                            <li>Controller - <a href="mailto:april@mysite.com">April@mysite.com</a></li>
                            <li>AP - <a href="mailto:kimo@mysite.com">KimO@mysite.com</a></li>
                            <li>AR T&amp;M- <a href="mailto:erica@mysite.com">Erica@mysite.com</a></li>
                            <li>AR Contract- <a href="mailto:sandra@mysite.com">Sandra@mysite.com</a></li>
                            <li>HR - <a href="mailto:elizabeth@mysite.com">Elizabeth@mysite.com</a></li>
                            <li>Scheduling - <a href="mailto:johnny@mysite.com">Johnny@mysite.com</a></li>
                            <li>Locates - <a href="mailto:kathy@mysite.com">Kathy@mysite.com</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
            <div class="column">
                <h2>Address:</h2>
                <div class="adr">
                 <div class="street-address">3114 SomeRoad Ave</div>
                 <span class="locality">West Palm Beach</span>,
                 <span class="region">FL</span>
                 <span class="postal-code">33405</span>
                 <div class="country-name">U.S.A.</div>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14259.337631183269!2d-80.071413!3d26.685778000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ab4db69351e4599!2sSMC%20Contracting!5e0!3m2!1sen!2sus!4v1652210141547!5m2!1sen!2sus" width="365" height="425" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
      </section>
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Service",
    "serviceType": "Super Fast website creation",
    "url": "https://mysite.com/settlement-tanks.php",
    "provider": {
      "@type": "Organization",
      "name": "Mysite Contracting",
      
      "logo": "https://mysite.com/images/small_logo.png", 
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "3114 SomeRoad Ave",
        "addressLocality": "West Palm Beach",
        "addressRegion": "FL",
        "postalCode": "33405",
        "addressCountry": "USA"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-561-555-1212",
        "contactType": "Customer Service"
      }
    },
    "areaServed": {
      "@type": "Place",
      "name": "Palm Beach"
    },
    "description": "Contact page for mysite.com",
    "image": [
      "https://mysite.com/images/small_logo.png"
    ]
    
    
  }
</script>
<?php include 'footer.php';?>