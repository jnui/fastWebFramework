# Fast Website Framework with basic PHP

A very simple fast and lightweight website framework using straight php files. This framework was made to get the highest possible score on google page-speed tests.

## Description

This framework uses straight PHP as the basis of a website framework.
Every page on your website has a php file, so this framework may not be good for large websites. However it gives you flexibility to do anything that PHP can do.
This framework uses milligram CSS - https://milligram.io which is fast, view their documentation on how to use it.

## Getting Started

### Dependencies

* PHP on your web server
* jQuery
* milligram CSS https://milligram.io loaded inline in header.php
* optional google fonts loaded in header.php
* normalize.css loaded in header.php
* custom css loaded in header.php


### Installing

* download from this github repo
* upload to a web server, and go to the root (it will load index.php)
* view and copy example.php file , rename it to your new page name and update it

### How to use example.php

* Open and rename example.php file (for example rename it product_a.php)
  * in your new page edit the variables inside  the "includeWithVariables" function
  
```
includeWithVariables('header.php', array(
  'title' => 'Pipe Materials',
  'metadescription' => 'We stock all the pipe we need so there are no delays sourcing pipe',
  'theurl' => 'example.php',
  'keywords' => 'pipe materials in stock, stock of pipe, drain pipe in stock',
  'extraClasses' => ''
));
```
  * title - this is the meta title
  * metadescription - self explanatory
  * theurl - this is for the canonical tag, it should be the file name 
  * keywords - meta keywords
  * extraClasses - this adds Css class names to the body tag, use commas if more than one class added to body tag
* once you have edited that function you can start editing the html on this page
  * change the H1 tag
  * for the milligram css, create a div with class "row"
    * inside the row div add a div with class column
  

### Lazy loading images
To lazy load images add the class of "lazy" to the image. This will speed up loading.

### create gallery
If you have a div with the class of mainbody, then all the images within that div will become a gallery. Clicking on any image will open a gallery modal

## Favicon
There is a folder in the images folder called favicon_io , you can generate your own favicons at https://favicon.io
after generated, save the icon images to this folder.

### Javascript
JQuery is loaded inline on the header.php file.
extra javascript is added in the footer.php file.

## CSS tips.
The width of each screen type is in header.php , look for max-width
```
.wrapper .container{
  max-width:80rem
}
```

## Help

you are on your own. Aint nobody got time to support this.

## Authors

Contributors names 

ex. Johnny Niumata 


## Version History

* 0.2
    * Various bug fixes and optimizations
    * See [commit change]() or See [release history]()
* 0.1
    * Initial Release

## License

This project is licensed under the [NAME HERE] License - see the LICENSE.md file for details

## Acknowledgments

Inspiration, code snippets, etc.
* [awesome-readme](https://github.com/matiassingers/awesome-readme)
* [PurpleBooth](https://gist.github.com/PurpleBooth/109311bb0361f32d87a2)
* [dbader](https://github.com/dbader/readme-template)
* [zenorocha](https://gist.github.com/zenorocha/4526327)
* [fvcproductions](https://gist.github.com/fvcproductions/1bfc2d4aecb01a834b46)