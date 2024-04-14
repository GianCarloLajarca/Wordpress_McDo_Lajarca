
<footer class="footer bg-primary">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__actions">
                    <img src="<?php echo get_field('footer_logo') ?>" alt="">
                <ul>
                        <li><img src="<?php echo get_field('footer_google_play') ?>" alt=""></li>
                        <li><img src="<?php echo get_field('footer_apple_store') ?>" alt=""></li>
                </ul>

                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Our Food</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Opportunities</a></li>
                </ul>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Family</a></li>
                </ul>

                </div>
                <div class="footer__connect">
                    <p>Follow us on</p>
                    <ul class="flex">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
  
  
  <script>
 
  const toggleBtn = document.querySelector('.toggle__button')
  const dropdown = document.querySelector('.dropdown')

  const closeBtn = document.querySelector('.close')


  toggleBtn.addEventListener('click', ()=> {
    dropdown.classList.add('show');
    toggleBtn.classList.add('cross');
  })

  closeBtn.addEventListener('click', ()=> {
    dropdown.classList.remove('show');
    toggleBtn.classList.remove('cross');
  })
  </script>
  
    <?php wp_footer() ?>
</body>
</html>