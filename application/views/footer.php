













</div>

<div class="modal signup">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sign up</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <!-- Content ... -->
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">SIGN UP</button>
    </footer>
  </div>
</div>

<div class="modal login">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Login</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <!-- Content ... -->
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Login</button>
    </footer>
  </div>
</div>



<footer class="footer">
  <div class="content has-text-centered">
    <p>
      Copyrighted 2019 &copy; server-name.<br />
       Using <font id="LogoStart" style="font-size:1.5rem;">Agony</font><font id="LogoEnd" style="top:0px !important;">CMS</font>.
    </p>
  </div>
</footer>

  <!-- SCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script>
  $(document).ready(function() {
    $(".signupbut").click(function(){
      $(".signup").toggleClass("is-active");
    });
      $(".loginbut").click(function(){
        $(".login").toggleClass("is-active");
      });
    $(".delete").click(function(){
      $( ".modal" ).removeClass("is-active");
    });
    $(".modal-background").click(function(){
      $( ".modal" ).removeClass("is-active");
    });

    $(".navbar-burger").click(function() {

        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");

    });
  });

  </script>
</body>
</html>
