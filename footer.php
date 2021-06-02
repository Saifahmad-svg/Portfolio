<!-- footer  -->
    <div style="background-color: #000000;">
        <div class="container">
            <div class="footer">
                <div class="footer-1">
                    <div class="footer-logo">
                        <img src="./images/m.svg" alt="">
                        <p>This site was built with great tools like Visual Studio Code Editor & Canva. Technologies used in this are HTML5, CSS3 and PHP. Font used in this is Montserrat</p>
                    </div>
                    <div>
                        <h4>Contact Us</h4>
                        <div>
                            <p><img src="./images/Mail-logo.svg" alt="">&nbsp;&nbsp;&nbsp;<a href="mailto:specslab.in@gmail.com">specslab.in@gmail.com</a></p>
                        </div>
                        <div>
                            <p>
                                <img src="./images/Phone-logo.svg" alt="">&nbsp;&nbsp;&nbsp;
                                <a href="tel:+91 8468064641">+91 8468064641</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
                                <a href="tel:+91 7838890262">+91 7838890262</a>
                            </p>
                        </div>
                    </div>
                    <div class="social-logo">
                        <h4>Follow Us</h4>
                        <a href="https://www.facebook.com/SpecsLab.in/" target="_blank"><img src="./images/facebook.svg" alt="Facebook"></a>
                        <a href="https://instagram.com/specslab?igshid=1ctt45wogokqr" target="_blank"><img src="./images/instagram.svg" alt="Instagram"></a>
                    </div>
                </div>
         
                <div class="footer-3" style="width: auto;">
                </div>
              
                <div class="footer-5">
                    <p>&#169; saifAhmad 2021. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="whatsapp-button slideInRight" data-wow-delay="0.2s" style="animation-duration: 2s">
        <a href="https://wa.me/+919962186555"  target="_blank"><button><span>Chat With Us</span><img src="./images/whatsapp.png" alt=""></button></a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
        <!-- SLIDER  -->
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll(".slide")
        const dots = document.querySelectorAll('.dot')

        const init = (n) => {
          slides.forEach((slide, index) => {
            slide.style.display = "none"
            dots.forEach((dot, index) => {
              dot.classList.remove("active")
            })
          })
          slides[n].style.display = "block"
          dots[n].classList.add("active")
        }
        document.addEventListener("DOMContentLoaded", init(currentSlide))
        const next = () => {
          currentSlide >= slides.length - 1 ? currentSlide = 0 : currentSlide++
          init(currentSlide)
        }

        const prev = () => {
          currentSlide <= 0 ? currentSlide = slides.length - 1 : currentSlide--
          init(currentSlide)
        }

        document.querySelector(".next").addEventListener('click', next)

        document.querySelector(".prev").addEventListener('click', prev)


        setInterval(() => {
          next()
        }, 5000);

        dots.forEach((dot, i) => {
          dot.addEventListener("click", () => {
            console.log(currentSlide)
            init(i)
            currentSlide = i
          })
        })
    </script>
    <script>
        // form 
        var     modal = document.getElementById("myModal");
        var     btn = document.getElementById("myBtn");
        var     btn2 = document.getElementById("myBtn2");
        var     span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
          modal.style.display = "block";
        }
        btn2.onclick = function() {
          modal.style.display = "block";
        }
        span.onclick = function() {
          modal.style.display = "none";
        }
    </script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            }
    </script>