<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
      rel="stylesheet"
    />
    <title>Shkolla</title>
  </head>
  <body>
    <?php include "nav.php" ?>
    <div class="main">
      <div class="container">
        <div class="card hero">
          <div class="img"></div>
          <div class="content">
            <h2 class="title">Gjimnazi Said Najdeni</h2>
            <p class="text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Repudiandae sequi eligendi assumenda expedita debitis quasi
              commodi consectetur, suscipit delectus dolor numquam tempora omnis
              iste reprehenderit, quidem ipsa officiis, rerum architecto.
            </p>
          </div>
        </div>

        <div class="card">
          <div class="about-content">
            <div class="offer">
              <h2 class="title">Safety</h2>
              <p class="text">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Repudiandae sequi eligendi assumenda expedita debitis quasi
                commodi consectetur, suscipit delectus dolor numquam tempora
                omnis iste reprehenderit, quidem ipsa officiis, rerum
                architecto.
              </p>
            </div>
            <div class="offer">
              <h2 class="title">Good conditions</h2>
              <p class="text">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Repudiandae sequi eligendi assumenda expedita debitis quasi
                commodi consectetur, suscipit delectus dolor numquam tempora
                omnis iste reprehenderit, quidem ipsa officiis, rerum
                architecto.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="overlay" class="overlay">
      <div class="container">
        <div class="close-container">
          <span id="close" class="close material-icons-outlined">
            close
          </span>
        </div>
        <div class="menu">
          <a href="#" class="menu-items">Home</a>
          <a href="#" class="menu-items">About</a>
          <a href="#" class="menu-items">Contact</a>
        </div>
      </div>
    </div>
    <?php include "footer.php" ?>
  </body>
  <script src="main.js"></script>
</html>
