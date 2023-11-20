<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="image/icon" rel="icon" href="static/image/favicon.ico">
  <link href="static/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/css/style.css" rel="stylesheet">
  <link href="static/css/story.css" rel="stylesheet">
  <link href="static/css/new.css" rel="stylesheet">
  <link href="static/css/magazine.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet"> 
  <title>CN Story Tales - Tickets, Event Ordering Management System</title>
  <script src="js/jquery.min.js"></script>
</head>

<body>
  <header class="header">
    <?php require_once 'includes/header.php'; ?>
  </header>
  <main> 
    <div class="fb3d-modal">
      <span class="cmd-close fas fa-times"></span>
      <div class="mount-container">

      </div>
    </div>
    <div class="container-fluid no-padd overflow-hidden ticket-num" style="position:relative;top:40px;">
      <div class="row tp-grad">
        <div class="col-12 tp-bg">
          <div class="container">
            <div class="row">
              <div class="col-12 px-4 mt-4 pt-lg-5">
                <h1 class="text-capitalize text-white bn-size">Welcome to StoryTale Magazine</h1>
                <h5 class="text-white px-2">Where we tell the story of the Motherland!</h5>
              </div>
            </div>
            <div class="row position-relative" style="z-index:1000"><a href="competition.php" class="btn col-7 ms-4 mt-2 col-md-4 col-lg-2 main-color2 text-white text-capitalize">enter competition</a></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="container">
            <div class="row pb-5">
              <h4 class="mt-5 mb-4 fw-bold text-center"><i class="fa-solid fa-book-open-reader"style="color: #000080;"></i> <a href="story.php" class="text-black">Want to read StoryTale Blog?</a></h4>
              <script src="js/render.js"></script>
              <div class="col-12 py-3 mb-5">
                <div class="row justify-content-evenly">
                  <div class="col-10 col-md-3 mb-3 bg py-3 books" style="cursor:pointer">
                    <img id="magazine100" src="static/image/magazine.jpg"  width="100%">
                  </div>
                  <div class="col-10 col-md-3 mb-3 bg py-3 books" style="cursor:pointer">
                    <img id="magazine101" src="static/image/magazine-2.jpg" width="100%">
                  </div>
                </div>
                
              </div>
              <!-- <a href="javascript:;" class="btn border hp-bdr-rad text-capitalize mt-5 see-more col-10 col-md-6 col-lg-4 mx-auto see-more-shad">see more</a> -->
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
  </main>
  <footer class="bg overflow-hidden"><?php require_once 'includes/footer.php'; ?></footer>
<script src="js/html2canvas.min.js"></script>
<script src="js/three.min.js"></script>
<script src="js/pdf.min.js"></script>

<script src="js/3dflipbook.min.js"></script>
<script>
  var template = function() {
      return {
        html: [{
          url: 'templates/default-book-view.html',
          data: jsData.urls['templates/default-book-view.html']}],
        script: [{
          url: 'js/default-book-view.js',
          data: jsData.urls['js/default-book-view.js']}],
        styles: [{
          url: 'css/font-awesome.min.css',
          data: jsData.urls['css/font-awesome.min.css']},{
          url: 'css/short-black-book-view.css',
          data: jsData.urls['css/short-black-book-view.css']},],
        sounds: {"startFlip":"sounds\/start-flip.mp3","endFlip":"sounds\/end-flip.mp3"},
        init: undefined };
    };

    var booksOptions = {
        magazine100: {
          pdf: 'src/learning_sql_second_edition.pdf',
          downloadURL: 'src/learning_sql_second_edition.pdf',
          template: template
        },
        magazine101: {
          pdf: 'src/Introduction-to-Bitcoin.pdf',
          downloadURL: 'src/Introduction-to-Bitcoin.pdf',
          template: template
        },
      }

  var instance = {
    scene: undefined,
    options: undefined,
    node: $('.fb3d-modal .mount-container')
  };

  var modal = $('.fb3d-modal');
  modal.addClass('light');
  modal.on('fb3d.modal.hide', function() {
    instance.scene.dispose();
  });
  modal.on('fb3d.modal.show', function() {
    instance.scene = instance.node.FlipBook(instance.options);
  });

  $('.books img').click(function(e) {
    if(e.target.id) {
      instance.options = booksOptions[e.target.id];
      $('.fb3d-modal').fb3dModal('show');
    }
  });
</script>
<script src="js/script.js"></script>
</body>
</html>