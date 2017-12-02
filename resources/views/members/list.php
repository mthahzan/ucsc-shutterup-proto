<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="/styles/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <!-- NAV BEGIN -->
  <nav class="nav-extended">
    <div class="nav-content">
      <span class="padding nav-title" style="padding-left: 16px">Members</span>
      <a href="/members/create" class="btn-floating btn-large halfway-fab waves-effect waves-light teal">
      <i class="material-icons">add</i>
    </a>
    </div>
  </nav>
  <!-- NAV END -->

  <!-- Content BEGIN -->
  <div class="main">
    <ul class="collection">
      <?php

        function createListItem($memberObject) {
          echo '<li class="collection-item avatar">';
          echo '  <i class="material-icons circle">account_circle</i>';
          echo '  <span class="title">@' . ($memberObject->username) . ' ('.($memberObject->role).')</span>';
          echo '  <p>'.($memberObject->firstName).' '.($memberObject->lastName).'</p>';
          echo '  <a href="/members/'.($memberObject->id).'/edit" class="secondary-content"><i class="material-icons">create</i></a>';
          echo '</li>';
        }

        foreach ($members as $member) {
          createListItem($member);
        }

      ?>
    </ul>
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
