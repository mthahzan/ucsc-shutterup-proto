<?php ?>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="/styles/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="/scripts/members/edit.js"></script>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  <!-- NAV BEGIN -->
  <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo" style="padding-left: 16px">Edit Member</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/members">List</a></li>
      </ul>
    </div>
  </nav>
  <!-- NAV END -->

  <!-- Content BEGIN -->
  <div class="main">
    <div class="row"></div>
    <div class="row">
      <form class="col s12">
        <input <?php echo 'value="'.($member->id).'"' ?> placeholder="Username" id="id" type="hidden" class="validate" required>
        <div class="row">
          <div class="input-field col s12">
            <input <?php echo 'value="'.($member->username).'"' ?> placeholder="Username" id="username" type="text" class="validate" required>
            <label for="username">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input <?php echo 'value="'.($member->firstName).'"' ?> placeholder="First Name" id="first_name" type="text" class="validate" required>
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input <?php echo 'value="'.($member->lastName).'"' ?> placeholder="Last Name" id="last_name" type="text" class="validate" required>
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input <?php echo 'value="'.($member->email).'"' ?> placeholder="Email address" id="email" type="email" class="validate" required>
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input <?php echo 'value="'.($member->role).'"' ?> placeholder="User role" id="role" type="text" class="validate" required>
            <label for="role">Role</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
      </form>
    </div>

    <div class="fixed-action-btn toolbar">
      <a class="btn-floating btn-large red">
        <i class="large material-icons">delete_forever</i>
      </a>
      <ul>
        <li class="waves-effect waves-light"><a id="delete-confirm"><i class="material-icons">check</i></a></li>
        <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">cancel</i></a></li>
      </ul>
    </div>
  </div>
  <!-- COntent END -->

  <!-- Footer BEGIN -->
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Shutter Up</h5>
          <p class="grey-text text-lighten-4">We make your events memorable AF</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2017 Copyright
      </div>
    </div>
  </footer>
  <!-- Footer END -->
</body>

</html>
