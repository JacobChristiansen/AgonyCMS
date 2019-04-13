













</div>

<div class="modal signup">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sign up</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
        <form>
          <div class="field">
            <p class="control has-icons-left has-icons-right">
              <input class="input" type="email" placeholder="Email" id="signemail">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
              </span>
            </p>
          </div>
            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Username" id="signusername">
                <span class="icon is-small is-left">
                  <i class="fas fa-user-ninja"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>
              </p>
            </div>
              <div class="field">
                <p class="control has-icons-left has-icons-right">
                  <input class="input" type="Password" placeholder="Password" id="signpass">
                  <span class="icon is-small is-left">
                    <i class="fas fa-key"></i>
                  </span>
                  <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                  </span>
                  <span class="passerror">

                  </span>
                </p>
              </div>
                <div class="field">
                  <p class="control has-icons-left has-icons-right">
                    <input class="input" type="password" placeholder="Confirm Password" id="signpassc">
                    <span class="icon is-small is-left">
                      <i class="fab fa-keycdn"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                  </p>
                </div>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success signupsub">SIGN UP</button>
      </form>
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


        //Check if passwords match

        $('#signpassc, #signpass').keyup(function () {
          if($("#signpass").val() === $("#signpassc").val() ||$("#signpassc").val() === $("#signpass").val())
          {
              $("#signpassc").addClass("is-success");

          } else {
            $("#signpassc").removeClass("is-success");
          }
        });


        //Check password
        var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
        $('#signpass').keyup(function () {
          if($( this ).val().length >= 5 )
        {
          if($(this).val().match(special_characters)) {
            $(".passerror").html("")
            $( this ).addClass("is-success");
          } else {
              $(".passerror").html("You should include, special characters (! $ etc).")
              $( this ).removelass("is-success");
        }
        } else {
            $(".passerror").html("Password too short. 5 Characters minimum!")
            $( this ).removeClass("is-success");
        }
        });

        //Check email
        var email_char = /([@])/
        $('#signemail').keyup(function () {
          if($(this).val().match(email_char) && $(this).val().length >= 5)
          {
            $(this).addClass("is-success");
          } else {
            $(this).removeClass("is-success");
          }
        });
        //Check username
        $('#signusername').keyup(function () {
          if($(this).val().length >= 5)
          {
            $(this).addClass("is-success");
          } else {
            $(this).removeClass("is-success");
          }
        });



  });

  </script>
</body>
</html>
