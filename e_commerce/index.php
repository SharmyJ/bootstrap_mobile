<html>
   <head>
        <title>BSIS 1</title>	
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
         .carousel-indicators li {
            background-color: black; 
          }
         </style>
   </head>
   <body>
      <nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>

               </button>
               <a class="navbar-brand" href="#"> E-commerce</a>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="#">SOFTWARE</a></li>
                  <li><a href="#">MUSIC</a></li>
                  <li><a href="#">CONTACT US</a></li>
               </ul>
            </div>
         </div>
      </nav>

      <aside class="col-md-4">
         <div class="col-md-10 col-md-offset-1">
            <div class="list-group">
               <a href="product.php" class="list-group-item" style="padding:0;margin:0;">
                  <div class="col-md-3" style="padding:0;margin:0;">
                     <img src="pic/fazzio.jpg" style="width:80px;height;100px;">
                  </div>
                  <div class="col-md-9">
                     <div class="list-group-item-heading">
                        <h4>P92,900</h4>
                        <h4>Yamaha Mio Fazzio</h4>
                        <div class="clearfix"></div>
                     </div>
                     <p class="list-group-item-text"> MODEL CODE: OOOX123</p>
                  </div>
                  <div class="clearfix"></div>
               </a>
            </div>
         </div>

         <div class="col-md-10 col-md-offset-1">
            <div class="list-group">
               <a href="product1.php" class="list-group-item" style="padding:0;margin:0;">
                  <div class="col-md-3" style="padding:0;margin:0;">
                     <img src="pic/GENIO.jpg" style="width:80px;height;100px;">
                  </div>
                  <div class="col-md-9">
                     <div class="list-group-item-heading">
                        <h4>P72,900</h4>
                        <h4>Honda Genio</h4>
                        <div class="clearfix"></div>
                     </div>
                     <p class="list-group-item-text">MODEL CODE: OOOX456</p>
                  </div>
                  <div class="clearfix"></div>
               </a>
            </div>
         </div>
         <div class="col-md-10 col-md-offset-1">
            <div class="list-group">
               <a href="product2.php" class="list-group-item" style="padding:0;margin:0;">
                  <div class="col-md-3" style="padding:0;margin:0;">
                     <img src="pic/KYMCO.jpg" style="width:80px;height;100px;">
                  </div>
                  <div class="col-md-9">
                     <div class="list-group-item-heading">
                        <h4>P119,000</h4>
                        <h4>KYMCO Like</h4>
                        <div class="clearfix"></div>
                     </div>
                     <p class="list-group-item-text">Model Code : OOOX789</p>
                  </div>
                  <div class="clearfix"></div>
               </a>
            </div>
         </div>
         <div class="col-md-10 col-md-offset-1">
            <div class="list-group">
               <a href="product3.php" class="list-group-item" style="padding:0;margin:0;">
                  <div class="col-md-3" style="padding:0;margin:0;">
                     <img src="pic/skydrive.jpg" style="width:80px;height;100px;">
                  </div>
                  <div class="col-md-9">
                     <div class="list-group-item-heading">
                        <h4>P70,900</h4>
                        <h4>Suzuki Skydrive Sport</h4>
                        <div class="clearfix"></div>
                     </div>
                     <p class="list-group-item-text">Model Code : OOOX1011</p>
                  </div>
                  <div class="clearfix"></div>
               </a>
            </div>
         </div>
         <div class="col-md-10 col-md-offset-1">
            <div class="list-group">
               <a href="product4.php" class="list-group-item" style="padding:0;margin:0;">
                  <div class="col-md-3" style="padding:0;margin:0;">
                     <img src="pic/v.primavera.jpg" style="width:80px;height;100px;">
                  </div>
                  <div class="col-md-9">
                     <div class="list-group-item-heading">
                        <h4>P210,000 to P298,000</h4>
                        <h4>Vespa Primavera</h4>
                        <div class="clearfix"></div>
                     </div>
                     <p class="list-group-item-text">Model Code : OOOX1012</p>
                  </div>
                  <div class="clearfix"></div>
               </a>
            </div>
         </div>

      </aside>


      <header class="col-md-8">
         <div class="carousel slide" data-ride="carousel" id="c1">
            <ol class="carousel-indicators">
               <li data-target="#c1" data-slide-to="0"></li>
               <li data-target="#c1" data-slide-to="1"></li>
               <li data-target="#c1" data-slide-to="2"></li>
               <li data-target="#c1" data-slide-to="3"></li>
               <li data-target="#c1" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
               <div class="item active">
                  <img src="pic/fazzio.jpg">
                  <div class="carousel-caption">
                     <h4 style="color:black">Yamaha Mio Fazzio</h4>
                     <p style="color:black">YAMAHA - Revs your Heart</p>
                  </div>
               </div>
               <div class="item">
                  <img src="pic/GENIO.jpg">
                  <div class="carousel-caption">
                     <h4 style="color:black">Honda Genio</h4>
                     <p style="color:black">HONDA - The Power of Dreams</p>
                  </div>
               </div>
               <div class="item">
                  <img src="pic/KYMCO.jpg">
                  <div class="carousel-caption">
                     <h4 style="color:black">Kymco Like</h4>
                     <p style="color:black">KYMCO - the thrills of touring</p>
                  </div>
               </div>
               <div class="item">
                  <img src="pic/skydrive.jpg">
                  <div class="carousel-caption">
                     <h4 style="color:black">Suzuki Skydrive Sport</h4>
                     <p style="color:black">Suzuki - Way of Life!</p>
                  </div>
               </div>
               <div class="item">
                  <img src="pic/v.primavera.jpg">
                  <div class="carousel-caption">
                     <h4 style="color:black">Vespa Primavera</h4>
                     <p style="color:black">VESPA - Let's Vespa!</p>
                  </div>
               </div>
            </div>
            <a href="#c1" class="left carousel-control" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#c1" class="right carousel-control" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span> 
            </a>
         </div>
      </header>
      <div class="container">
         <div class="page-header"><h3 class="text-center">ALL PRODUCTS</h3></div>
            <div class="col-md-4">
               <div class="thumbnail">
                  <img src="pic/GENIO.jpg" style="width:100%">
                  <div class="caption">
                     <h4 class="pull-right">P72,900</h4>
                     <h4><a href="product1.php">Honda Genio</a></h4>
                     <p>GENIO has an ever-expanding line of innovative and stylish motorcycle that is intended to allow Filipinas to 
                     experience the joy of riding. The chic design and special features of GENIO will solve the mobility concerns 
                      of the female commuters.</p>
                  </div>
               </div>
            </div>
         <div class="col-md-4">
            <div class="thumbnail">
               <img src="pic/KYMCO.jpg" style="width:100%">
               <div class="caption">
                  <h4 class="pull-right">P119,000</h4>
                  <h4><a href="product2.php">Kymco Like 150i</a></h4>
                  <p>The all-new Kymco Like 150i ABS possesses a stunning design of a modern scooter with futuristic-retro style. 
                  It provides a smooth and linear output throughout its power band.</p>
               </div>
           </div>
         </div>

         <div class="col-md-4">
            <div class="thumbnail">
               <img src="pic/skydrive.jpg" style="width:100%">
               <div class="caption">
                  <h4 class="pull-right">P70,900</h4>
                  <h4><a href="product3.php">Suzuki Skydrive Sport</a></h4>
                  <p>Ride in fashion and style, set the trend with Suzuki fashion scooter – 
                  the Skydrive Sport! Get lit on the road with the Skydrive Sport’s headturner looks and exceptional features complementing 
                  a rider’s fun, stylish and active lifestyle. </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="thumbnail">
               <img src="pic/v.primavera.jpg" style="width:100%">
               <div class="caption">
                  <h4 class="pull-right">P210,000 to P298,000</h4>
                  <h4><a href="product4.php">Vespa Primavera</a></h4>
                  <p>An iconic symbol of its times, the Vespa Primavera zips through twenty-first century streets 
                     with the same agility and dynamism today as the original legend that revolutionised urban mobility
                     during the Swinging Sixties. </p>
               </div>
            </div>
         </div>

         <div class="col-md-4">
            <div class="thumbnail">
               <img src="pic/fazzio.jpg" style="width:100%">
               <div class="caption">
                  <h4 class="pull-right"> P92,900</h4>
                  <h4><a href="">Yamaha Mio Fazzio</a></h4>
                  <p>The Yamaha Mio Fazzio is an icon of youthful expression complemented by high-quality mobility.
                     Its distinct design caters to the unique personality of today's generation and offers a stunning collection that is 
                     aesthetically fashionable for every style.</p>
               </div>
            </div>
         </div>
      </div>


  
    
   </body>
</html>