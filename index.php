<DOCTYPE HTML>
  <html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content="google details">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
          <meta name="author" content="Scott James">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                  <title>Clothing Store</title>
                    <link rel=stylesheet type="text/css" href="styling.css">
  </head>

  <body>
    <div id="Content">
      <header>
        <div id="Navigation">
          <a href="#"><img src="Logo-2.png"></a>
          <li><a href="#">WOMEN</a></li>
          <li><a href="#">MEN</a></li>
          <li><a href="#">KIDS</a></li>
          <li><a href="#">ACCESSORIES</a></li>
          <li><a href="#">BRANDS</a></li>
        </div>
      </header>

      <div id="Content-Item">
        <a href="#" class="test" onclick="myTest()">Hello!</a>
      </div>
      <!-- The onclick is used to open the content-description div -->


      <div id="Content-Description" style="display:none">
        <script>
        function myTest() {
          var T = document.getElementById("Content-Description");
            T.style.display = "block";  // <-- Set it to block
              }
        </script>
        <!-- This makes it so onclick opens the content-description div -->

        <button class="material-icons" onclick="closeButton()"><i class="material-icons">cancel</i></button>
        <!-- This script makes it so the X button closes the window -->
        <script>
          function closeButton() {
            var i = document.getElementById("Content-Description");
            i.style.display= "none"
          }
        </script>

        <button class="VoA">VIEW ON AMAZON</button>

      </div>

    </div>

  </body>

  </html>
</DOCTYPE>