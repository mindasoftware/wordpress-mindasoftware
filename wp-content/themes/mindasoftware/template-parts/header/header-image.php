<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


<div class="custom-header">
<div class="slider-wrapper">
  <div class="slider">
    <div class="slider--item fade_slider" style="background-image: url(wp-content/themes/mindasoftware/images/image1.jpg)">
		<div class="slide-overlay"></div>
		<div class="slide-caption">
			
			    <span id="ex3" style="z-index:100; position: absolute;">
    
    
   				 </span>
			
			<div class="slide-cap-desc in-left" id="test">
			<p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna.</p> </div>
		</div>
	</div>
	
	<div class="slider--item fade_slider" style="background-image: url(wp-content/themes/mindasoftware/images/image2.jpg)">
		<div class="slide-overlay"></div>
		<div class="slide-caption">
			

			<div class="slide-cap-desc in-left" id="test">
			<p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna.</p> </div>
		</div>
	</div>
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>


<script>


var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slider--item");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 6000); // Change image every 2 seconds
}


  var typed3 = new Typed('#ex3', {
                strings: ['', 'Czy pamiêtasz o: <strong>Aktualizacji i bezpieczeñstwie Twoich aplikacji ?</strong>', 'Czy pamiêtasz o: <strong>Promowaniu Twoich us³ug w Internecie ?</strong>', 'Czy pamiêtasz o: <strong>Utrzymaniu standradów oprogramowania zgodnych z panuj¹cymi przepisami ?</strong>^4000\n<br><strong>My o tym pamiêtamy !</strong>'],
                backDelay: 3000,
                startDelay: 1000,
                typeSpeed: 50,
                backSpeed: 20,
                smartBackspace: true, // this is a default
                loop: true
            });

</script>
</div>
</div><!-- .custom-header -->

