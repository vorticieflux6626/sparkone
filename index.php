<?php
  /* 

     SparkOne() Labs, 2020(c) SparkOne Labs Online Distribution, LLC.; 
     --------------------------------------------------------------------

     This web project is a collage of art project, independent study coursework material & scientific / philosophical empirical investigations of a 
     proprietary yet open-sourced nature; more as an adaptation of game theory required for pragmatic modern living. Collaboration is welcome, please
     excuse my adaptation strategy in the most civil manner one can express. This is an existential search & discovery of utilitarian prioritized truth, 
     with the intention of realizing ultimate absolute truth of the good using tool assistance. In our modern era of increasing complexity and hyperbolic
     use of human ability for alarming ends, a philosophical soul search for truth is the proverbial apple which keeps the doctor away, so to speak. 

     With the search for truth, one doesn't get far without realizing that the quality of truth is dependent on the language and identities utilized for each 
     instance of truth. Put another way, the lingo employed determines the realness deployed. No matter how you put it, it is certainly true that the utmost
     quality of truth could be achieved by retro-engineering the base language into a aboslute truth capable kernel of 'lingo'. In particular, this is what
     scientific models are created for, as civilization progresses many divergent empirically true datasets could conceptually be converged into a single
     truth space designed for utility of physics, or thermodynamic-information space which captures the essence of the physical system in a 'truer' manner
     than can be achieved simply using the corrupted language floating around socially. Bio-energetic informatics is a promising field of study for a 
     developing science. Here, I am corrupting the base language to express a concept which means something to me, and expounding on it exlusively in 
     standard speak. As long as definitions are tabulated and kept rigorously, language mechanics should not be an issue.

     NOTE todo: 
     As far as language mechanics go, it seems profitable to speak of a kernel fo truth in a more formal mathematical sense. The same way a vector space
     can be constructed from a mathematical kernel; a high dimensional data set of truth-space is one way to abstract the reality of the data deluge. Let's 
     investigate this possibility here at SparkOne() Labs. 

     Update: 06.13.2020 3:56a EST Winchester, KY ::

	Website's File System:

		Start --> http://localhost/index.php <=> file:///srv/http/index.php
						      |
						      => file:///srv/http/php/sparkone-html.php 
						      | 
						      => file:///srv/http/js/serverStackGraph3.js <=
												   |
												   => file:///srv/http/js/particlesJS/particles.js

	TODO: Finish file-function map, then go about the business of refactoring into discrete functional code segments of PHP.

	NOTE: Investigate node.js

     The WordPress Blog link outputted error: Error Establishing Database Connection... http://vorticieflux6626.ihostfull.com/jawp/
	../jawp => wordpress installation directory

	todo Construct a set of executable bash scripts or a set of server side scripting in the PHP framework to automate pushing and pulling local and remote
	     site data updates. Basically, any file that has a modifcation of size or is otherwise touched should be processed both in the getter and setter. 
	todo Construct a set of bash scripts to execute yay -Ss <font-package> and other search commands to pull repo information on licensing, format this output
	     in site-relative html and JS and save it to a file directory off of /srv/http/fonts... <dir-name>/
   <!--

    	Index.php -- Mostly this is a placeholder, the main functions are in /php/sparkone-html.php
    	@author:  Eric Sparkman
    	@date:	  12.28.2018 
    	@version: v2.24b
    	@email:   vorticieflux6626@gmail.com
    	@home:    CURRENT: http://sparkone.ueuo.com OLD: http://sparkone.sparklab.com/index.html
    	@Notes:
    		This index page was created using:
			The HTML5 template
			Media Queries  
			other hacks 

    		Mobile.css,
		Screen.css:
 
		  Ref: https://perishablepress.com/the-5-minute-css-mobile-makeover/

    		Horizontal Menu Resizabilit:

		  Ref: http://netdna.webdesignerdepot.com/uploads7/how-to-create-a-resizing-menu-bar/;
    		  Ref(local): sparkone.sparklab.com/resizing_horizontal_menu.html, resizing_horizontal_menu-vertical_scroll.html

    		Tooltips on Hover, Ref: http://www.w3schools.com/css/css_tooltip.asp

        	Refactoring: 03-20-2018, moved most of the inline JS and other unsightly prototyping code to their own JS libs files.

        	Added some flex-box css for a more sane horizontal menu bar...
        	Added some fun little particles from particles.js (JSON parameterized)
        	http://www.codingphase.com - Dear Jesus, please bring peace through awakening of wisdom natured empathy of a humble nature, love.
        	Added a force-directed graph diagram of webserver platform stack

        	NOTE: Now using FTP and sparkone.ueuo.com from ramses.freewha.com as host
		      as exede bans local hosting... [Coded from Stanton, through Sat ISP]
		NOTE: Poorly worded journalistic speculation caused WebSite hosting server
		      to drop content, flagged in violation :: http://vorticieflux6626.ihostfull.com

    -->

/* NOTE: 06.13.2020 3:09a EST; Winchester, KY :: This is the beginning of encapsulating the HTML output into severeal
   functions. As refactoring continues, the frame subdivisions within the SparkOne() Labs homepage should approach
   a syntactically functional container framework. */
/**

	PHP Framework dependencies:
			
			sparkone-html.php  index-0.php      registration.php
				\		|		/

				/srv/http/index.php ( root document )
				
	sparkone-html.php is the actual framework library of functions
	registration.php is a module php for squeeze modalities and SQL user DB registration		
	index-0.php == ?

*/

  require_once('php/sparkone-html.php');
  require_once('php2/index-0.php');
  require_once('php2/registration.php');

 sparkOneHeader();
 sparkOneMainMenu();
 sparkOneGraph();
 //sparkOneGLSLEditor();
 split3dcarousel();
 //sparkOneGLSLEditor();
 sparkOneFooter();

?>
