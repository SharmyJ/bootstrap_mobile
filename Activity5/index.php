<html>
   <head>
        <title>BSIS 1</title>	
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

		
   </head>
   <body>
      <h1>Activity6</h1>
 
      <div class="container">


         <ul class="list-inline">
            <li><a href="#" data-toggle="popover" data-placement="top" title="Top popover" data-content="Some content here in popover">Top</a></li>
            <li><a href="#" data-toggle="popover" data-placement="bottom" title="bottom popover" data-trigger="focus" data-content="Some content here in popover">bottom</a></li>
            <li><a href="#" data-toggle="popover" data-placement="left" title="left popover" data-trigger="hover" data-content="Some content here in popover">left</a></li>
            <li><a href="#" data-toggle="popover" data-placement="right" title="right popover">right</a></li>
         </ul>

         <ul class="list-inline">
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Top Tool Tip">Top</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="bottom Tool Tip">bottom</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="left Tool Tip">left</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="right" title="right Tool Tip">right</a></li>
         </ul>
      </div>
      <script>
         $(document).ready(function() {

            $('[data-toggle="tooltip"]').tooltip(); 
            $('[data-toggle="popover"]').popover(); 
         });
      </script>


      <hr/>
      <br/>
      <br/>
      <div class="container">
         <div id="mycarousel" class="carousel slide" data-ride="carousel" style="width: 1000px;">
            <ol class="carousel-indicators">
               <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
               <li data-target="#mycarousel" data-slide-to="1"></li>
               <li data-target="#mycarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="item active">
                  <img src="pic/beauty_and_the_beast.jpg" width="1000px">
                  <div class="carousel-caption">
                     <h3 class="lead text-danger bg-danger">Beauty and The Beast</h3>
                     <p class="text-danger bg-danger">A fairy tale about a beautiful and gentle young woman who is taken to live with a man-beast in return for a good deed the Beast did for her father</p>
                  </div>
               </div>
               <div class="item">
                  <img src="pic/inside_out.jpg" width="1000px">
                  <div class="carousel-caption">
                     <h3 class="lead text-success bg-success">Inside Out</h3>
                     <p class="text-success bg-success"> Follows the inner workings of the mind of Riley, a young girl who adapts to her family's relocation as five personified emotions administer her thoughts and actions.</p>
                  </div>
               </div>
               <div class="item">
                  <img src="pic/monsters_inc.jpg" width="1000px">
                  <div class="carousel-caption">
                     <h3 class="lead text-info bg-info " >Monsters, Inc.</h3>
                     <p class="text-info bg-info">  The most successful scream-processing factory in the monster world, and there is no better Scarer than James P. Sullivan. But when "Sulley" accidentally lets a little human girl into Monstropolis, life turns upside down for him and his buddy Mike.</p>
                  </div>
               </div>

               <a class="left carousel-control" href="#mycarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
               </a>
               <a class="right carousel-control" href="#mycarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
               </a>
               

            </div>

         </div>


      </div>


      <hr/>
      <br/>
      <br/>
      <div class="container">
         <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Modal Box</button>
         <div class="modal fade" id="myModal">
             <div class="modal-dialog">
               <div class="modal-content">
                  <button class="close" data-dismiss="modal">&times;</button>
                 <div class="modal-header">
                  <h4>This is my Modal header</h4>
                 </div>
                 <div class="modal-body">
                  <p>this is modal content</p>
                 </div>
                 <div class="modal-footer">
                  <button class="btn btn-info" data-dismiss="modal">Close</button>
                 </div>

               </div>
           </div>
         

         </div>


      </div>
      
  
    
   </body>
</html>