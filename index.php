<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Single Page Site with Smooth Scrolling and Fixed Navigation</title>
    
    <meta name="description" content="In this lab, I'm going to demonstrate how to create a fixed navigation, single page site with smooth scrolling, and highlighting the navigation link depending on which section is currently being viewed. This technique is great for single page sites that want to pack in lots of goodies on one page, but use a navigation with cool scrolling to section it off." />
    
    <link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/style.css" />
    
    
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src='js/jquery.scrollto.js'></script>
	
    
</head>



<body>


<div id="wrapper">



<div id="main">
    <div class="container clearfix">
			
	    <div id="sidebar">
            <div id="nav-anchor"></div>
            <nav>
                <ul>					
					<li><button class='btn' onclick="window.location='#pixels';"><img src="img/pix.jpg" alt="logo1" />Pixels</a></button></li>
					<li><button class='btn' onclick="window.location='#break';"><img src="img/bre.png" alt="logo1" />Breaking News</a></button></li>
					<li><button class='btn' onclick="window.location='#trend';"><img src="img/tre.jpg" alt="logo1" />Trending</a></button></li>
                    <li><button class='btn' onclick="window.location='#world';"><img src="img/glob1.jpg" alt="logo1" />World</a></button></li>
                    <li><button class='btn' onclick="window.location='#us';"><img src="img/us.png" alt="logo1" />US</a></button></li>
                    <li><button class='btn' onclick="window.location='#business';"><img src="img/bus.jpg" alt="logo1" />Business</a></button></li>
                    <li><button class='btn' onclick="window.location='#tech';"><img src="img/tec.jpg" alt="logo1" />Tech</a></button></li>
					<li><button class='btn' onclick="window.location='#games';"><img src="img/gam.png" alt="logo1" />Games</a></button></li>
					<li><button class='btn' onclick="window.location='#science';"><img src="img/sci.png" alt="logo1" />Science</a></button></li>
                    <li><button class='btn' onclick="window.location='#sports';"><img src="img/spo.jpg" alt="logo1" />Sports</a></button></li>
                    <li><button class='btn' onclick="window.location='#entertainment';"><img src="img/ent.jpg" alt="logo1" />Entertainment</a></button></li>
                    <li><button class='btn' onclick="window.location='#travel';"><img src="img/trav.jpg" alt="logo1" />Travel</a></button></li>
					<li><button class='btn' onclick="window.location='#gold';"><img src="img/gold.png" alt="logo1" />Gold Price</a></button></li>
					<li><button class='btn' onclick="window.location='#silver';"><img src="img/silver.jpg" alt="logo1" />Silver Price</a></button></li>
					<li><button class='btn' onclick="window.location='#curency';"><img src="img/cur.png" alt="logo1" />Curency Converter</a></button></li>
					<li><button class='btn' onclick="window.location='final.html';"><img src="img/ear.png" alt="logo1" />Earthquake</a></button></li>
					<li><button class='btn' onclick="window.location='casualties.html';"><img src="img/nat.png" alt="logo1" />Natural Disaster</a></button></li>

					<div id="weather">
					<iframe src="https://www.meteoblue.com/en/weather/widget/daily?geoloc=detect&days=3&tempunit=FAHRENHEIT&windunit=MILE_PER_HOUR&precipunit=INCH&coloured=coloured&pictoicon=0&pictoicon=1&maxtemperature=0&maxtemperature=1&mintemperature=0&mintemperature=1&windspeed=0&windgust=0&winddirection=0&uv=0&uv=1&humidity=0&precipitation=0&precipitationprobability=0&precipitationprobability=1&spot=0&pressure=0&layout=light"  frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups" style="width: 162px;height: 288px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/en/weather/forecast/week?utm_source=weather_widget&utm_medium=linkus&utm_content=daily&utm_campaign=Weather%2BWidget" target="_blank">meteoblue</a></div>
					</div>
                </ul>
            </nav>
        </div>
        
        <div id="content">
		
			<section id="pixels">
                <h1>Pixels</h1>
				<button>Buy Pixel</button>
            </section>
			
			<section id="break">
                <h1>Breaking News</h1>
            </section>
	        
			<section id="trend">
                <h1>Trending</h1>
            </section>
           
            <section id="world">
                <h1>World</h1>
            </section>
        
        
            <section id="us">
                <h1>US</h1>
            </section>
        
        
            <section id="business">
                <h1>Business</h1>
            </section>
        
        
            <section id="tech">
                <h1>Tech</h1>
            </section>
			
			<section id="games">
                <h1>Games</h1>
            </section>
        
        
        
            <section id="science">
                <h1>Science</h1>
            </section>
			
			<section id="sports">
                <h1>Sports</h1>
            </section>

			<section id="entertainment">
                <h1>Entertainment</h1>
            </section>

			<section id="travel">
                <h1>Travel</h1>
            </section>

			<section id="gold">
                <h1>Gold Price</h1>
				<div>
				<iframe
				src="https://www.goldbroker.com/widget/live-price/XAU?currency=USD" 
				width="100%" height="130" style="border: 0; overflow: 
				hidden;">
				</iframe>
				</div>
				<div>
				<iframe src="https://www.goldbroker.com/widget/iframe/historical/XAU/500?currency=USD" width="110%" height="600" style="border: 0; overflow: hidden;"></iframe><br>Historical Gold Chart by <a href="https://www.goldbroker.com">GoldBroker.com</a>
				</div>
			</section>	
			
			<section id="silver">
                <h1>Silver Price</h1>
				
				<div>
				<iframe
				src="https://www.goldbroker.com/widget/live-price/XAG?currency=USD" 
				width="100%" height="130" style="border: 0; overflow: 
				hidden;">
				</iframe>
				</div>
				
				<div>
				<iframe src=https://www.goldbroker.com/widget/iframe/historical/XAG/500?currency=USD" width="110%" height="600" style="border: 0; overflow: hidden;"></iframe><br>Historical Silver Chart by <a href="https://www.goldbroker.com">GoldBroker.com</a>
				</div>
				
            </section>	
			
			<section id="curency">
                <h1>Curency Converter</h1>
				
				<div>
				<iframe height="375" width="210" src="https://ssltools.forexprostools.com/currency-converter/index.php?from=12&to=17&force_lang=1"></iframe><br /><table width="197"><tr><td><span style="font-size: 11px;color: #333333;text-decoration: none;">The Currency Converter is powered by <a href="https://www.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com</a></span></td></tr></table>
				</div>
				
			</section>

        	
  
        </div><!-- /#content -->
        
    </div>
</div>


<footer>
    <div class="container">
	</div>
</footer>



</div>






<script>
    

        
    $(document).ready(function(){
        
        /** 
         * This part does the "fixed navigation after scroll" functionality
         * We use the jQuery function scroll() to recalculate our variables as the 
         * page is scrolled/
         */
        $(window).scroll(function(){
            var window_top = $(window).scrollTop() + 12; // the "12" should equal the margin-top value for nav.stick
            var div_top = $('#nav-anchor').offset().top;
                if (window_top > div_top) {
                    $('nav').addClass('stick');
                } else {
                    $('nav').removeClass('stick');
                }
        });
        
        
        /**
         * This part causes smooth scrolling using scrollto.js
         * We target all a tags inside the nav, and apply the scrollto.js to it.
         */
        $("nav a").click(function(evn){
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash); 
        });
        
        
        
        /**
         * This part handles the highlighting functionality.
         * We use the scroll functionality again, some array creation and 
         * manipulation, class adding and class removing, and conditional testing
         */
        var aChildren = $("nav li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i=0; i < aChildren.length; i++) {    
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        } // this for loop fills the aArray with attribute href values
        
        $(window).scroll(function(){
            var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
            var windowHeight = $(window).height(); // get the height of the window
            var docHeight = $(document).height();
            
            for (var i=0; i < aArray.length; i++) {
                var theID = aArray[i];
                var divPos = $(theID).offset().top; // get the offset of the div from the top of page
                var divHeight = $(theID).height(); // get the height of the div in question
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    $("a[href='" + theID + "']").addClass("nav-active");
                } else {
                    $("a[href='" + theID + "']").removeClass("nav-active");
                }
            }
            
            if(windowPos + windowHeight == docHeight) {
                if (!$("nav li:last-child a").hasClass("nav-active")) {
                    var navActiveCurrent = $(".nav-active").attr("href");
                    $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                    $("nav li:last-child a").addClass("nav-active");
                }
            }
        });
    });

</script>




</body>
</html>