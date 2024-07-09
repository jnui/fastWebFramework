<?php 

function includeWithVariables($filePath, $variables = array(), $print = true)
{
    $output = NULL;
    if(file_exists($filePath)){
        // Extract the variables to a local namespace
        extract($variables);

        // Start output buffering
        ob_start();

        // Include the template file
        include $filePath;

        // End buffering and return its contents
        $output = ob_get_clean();
    }
    if ($print) {
        print $output;
    }
    return $output;
}

includeWithVariables('header.php', array(
  'title' => 'Pipe Materials',
  'metadescription' => 'We stock all the pipe we need so there are no delays sourcing pipe',
  'theurl' => 'example.php',
  'keywords' => 'pipe materials in stock, stock of pipe, drain pipe in stock'));
  'extraClasses' => ''
?>



      <section class="container" id="examples">
        <h1>Pipe Materials always in stock</h1>
        <div class="row mainbody">
          <div class="column">
        
              <h2>Common Materials in Stock</h2>
        
                <ul>
                  <li>ADS Pipe 24", 18", 15" , 12", 10", 8", 6", 4"</li>
                  <li>ADS comes in Perforated or solid</li>
                  <li>ADS fittigns Tee, 45, 90, wye, Ada branch</li>
                  <li>ADS Reducers 15x12, 12x10, 10x8, 8x6, 8x4, 6x4</li>
                  <li>Inserta Tee multiple sizes</li>
                  <li>PVC Pipe 8", 6", 4", 2", 1"</li>
                  <li>PVC fittings Tee, 45, 90, cap</li>
                  <li>Ferncos 8", 6", 4x2, 4x3</li>
                  <li>Shoring 225, 325, 425, 475</li>
                  <li>Nyoplast Basins 6 sizes and many options, baffles</li>
                  <li>Nyoplast Grates</li>
                  <li>ABT Trench Drains 6", 8"</li>
                  <li>ACO Trench Drains</li>
                  <li>Selection of Trench drain grates</li>
                  <li>Stegmeier Trench/Slot Drains in stock 3", 2"</li>
                  <li>Exfil cloth, bio barrier</li>
                  <li>Plastic tanks in stock (concrete to order)</li>


                </ul>
        
            
            <blockquote>Just like you we don't like to wait for materials. So we stock everything we need.</blockquote>
            
            <img src="/images/pipe-materials.webp" width="100%">

            <p>During Covid there were material shortages especially for drainage pipe. We were lucky to have a good stock of pipe and that meant our jobs did not have delays for materials.</p>

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