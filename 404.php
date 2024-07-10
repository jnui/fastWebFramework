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

includeWithVariables('header.php', array('title' => '404 Page Not Found',
 'metadescription' => 'Page not found',
  'theurl' => 'https://smccontracting.com/404.php',
   'keywords' => ''));

?>



      <section class="container" id="examples">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="title">Error 404 Page Not found</h1>
        <div class="row mainbody">

          <div class="column">
            
           <div style="text-align: center;">
             <img src="/images/stickman.gif">
             <br>
             <p>I hope my dance makes <br>
             you feel better.</p>
           </div>

        <br>
        <br>
        <br>
          </div>        	
        </div>
      </section>
   
<?php include 'footer.php';?>