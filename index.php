<?php 

require __DIR__ . '/varfunc.php';

includeWithVariables('header.php', array(
  'title' => 'My Meta Description here home page',
  'metadescription' => 'This is a great SEO type of description for this page about fast websites',
  'theurl' => 'index.php',
  'keywords' => 'fast website, fast loading websites, fast php website framework',
  'extraClasses' => ''
));
  
?>



      <section class="container" id="examples">
        <h1>Home page , Fast loading website framework in PHP</h1>
        <div class="row mainbody">
          <div class="column">
        
              <h2>How this framework loads so fast</h2>
        
                <ul>
                  <li>Minimal CSS and javascript</li>
                  <li>Lazy loading images</li>
                  <li>Loading scripts last</li>
                  <li>Minimal server side processing</li>
                  <li>Good html</li>
                  <li>No layout images</li>
                  <li>Minimized code</li>
                  <li>Server Optimizations</li>
                  


                </ul>
        
            
            
            
            <img src="images/pagespeed.png" width="532" height="553 alt="pagespeed score">
            <blockquote>Run pagespeed on this page to see the score</blockquote>

            <p>When I use this framework on my company website I get a score of 93 on mobile and a score of 100 on desktop</p>


            
          </div>        	
        </div>
      </section>
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Service",
        "serviceType": "Superfast website creation",
        "url": "https://mysite.com/settlement-tanks.php",
        "provider": {
          "@type": "Organization",
          "name": "Mysite Contracting",
          
          "logo": "https://mysite.com/images/small_logo.png", 
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "3114 Tuxedo Ave",
            "addressLocality": "West Palm Beach",
            "addressRegion": "FL",
            "postalCode": "33405",
            "addressCountry": "USA"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-561-689-8848",
            "contactType": "Customer Service"
          }
        },
        "areaServed": {
          "@type": "Place",
          "name": "Palm Beach"
        },
        "description": "We have settlement tanks to clear up any dewatering outflow",
        "image": [
          "https://mysite.com/images/settlement-tank.png"
        ]
        
        
      }
    </script>
<?php include 'footer.php';?>