<footer class="container-fluid text-center">
<div class="container">
    <div class="row">
<div class="col-md-6">
  <!-- <a class="navbar-brand" href="#"><span class="josh">JOSH</span> <span class="orange">WHITKIN</span></a> -->
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
endif; ?>
</div>

<div class="col-md-6">
    <!-- <p>Terms and Conditions</p> -->
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
endif; ?>
    </div>
    
    </div> <!-- row -->
</div> <!-- container -->
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>