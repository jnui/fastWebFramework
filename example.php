<?php 

require __DIR__ . '/varfunc.php';

includeWithVariables('header.php', array(
  'title' => 'My Meta Description here',
  'metadescription' => 'This is a great SEO type of description for this page about fast websites',
  'theurl' => 'example.php',
  'keywords' => 'fast website, fast loading websites, fast php website framework',
  'extraClasses' => ''
));
  
?>



      <section class="container" id="examples">
        <h1>Fast loading website framework in PHP</h1>
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
        
            
            <blockquote>Run pagespeed on this page to see the score</blockquote>
            
            <img src="/images/pagespeed.png" width="100%">

            <p>When I use this framework on my company website I get a score of 93 on mobile and a score of 100 on desktop</p>

            <img src="/images/catch-basins.webp" width="100%">
            <blockquote><em>Catch basins.</em></blockquote>
            <img src="/images/pipe-fittings.webp" width="100%">
            <blockquote><em>Pipe Fittings</em></blockquote>
            
          </div>        	
        </div>
      </section>
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Service",
        "serviceType": "Dewatering Settlement Tanks",
        "url": "https://smccontracting.com/settlement-tanks.php",
        "provider": {
          "@type": "Organization",
          "name": "SMC Contracting",
          
          "logo": "https://smccontracting.com/images/small_logo.png", 
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
          "https://smccontracting.com/images/settlement-tank.png"
        ]
        
        
      }
    </script>
<?php include 'footer.php';?>