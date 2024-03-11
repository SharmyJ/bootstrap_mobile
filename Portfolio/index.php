<!DOCTYPE html>
<html>
   <head>
        <title>Portfolio</title>	
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>

            .navbar-brand img{
               width:100px;
               height:70px;
               padding: 2px;
               margin-right: 30px;
            }
             section{
             width: 100vw;
             height: 100vw;
             padding: 50px;
             }
             .cl_black{
               color:black;

             }
             img{
               width:300px;
               transition: opacity 1s ease-in-out;
             }
             img:hover{
               opacity: .10;
             }
             .col-text{
               -webkit-column-count: 3;
             }
         </style>
            
        
		
   </head>
      <body data-spy="scroll" data-target=".navbar">
      <nav class="navbar navbar-inverse navbar-fixed-bottom">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">
               <img src="pic/logo.png">
            </a>
         <ul class="nav navbar-nav" >
            <li><a href="#home"><h3 Span class="glyphicon glyphicon-home"> Home</h3></span></a></li>
            <li><a href="#work"><h3 span class="glyphicon glyphicon-gift"> What I Do</h3> </span></a></li>
            <li><a href="#about"><h3 span class="glyphicon glyphicon-user"> What about Me</h3> </span></a></li>
            <li><a href="#contact"><h3 span class="glyphicon glyphicon-comment"> Contact Me</h3> </span></a></li>
         </ul>
          </div>
      </nav>

      <section id="home" style="background: url(pic/temp.jpg); background-size: 100% 100%;" class="cl_black text-center">
         <h1 >MY PORTFOLIO</h1>
         <p class="lead"><h1>Welcome to my world, the life of programmer<h1></p>
         <h2>Hi, I'm Kate Ann Nicolas</h2>
         <p class="lead">Information System Student</p>
         <button class="btn btn-default btn-lg">Contact Me</button>

      </section>
      
      <section id="work" class="container">
         <div class="page-header">
            <h1 class="text-center">My Work</h1>
         </div>
         <div class="text-center">
            <img src="pic/pybasic.jpg"class="img-thumbnail"/>
            <img src="pic/GAstarter.jpg"class="img-thumbnail"/>
            <img src="pic/japanese.png"class="img-thumbnail"/>
            <img src="pic/sql.png"class="img-thumbnail"/>
            <img src="pic/jbasic.png"class="img-thumbnail"/>
            <img src="pic/bstrap.jfif"class="img-thumbnail"/>
            <img src="pic/php.png"class="img-thumbnail"/>
         </div>
      </section>

      <section id="about" class="container">
         <h2 class="text-center">My Skills</h2>
         <div class="col-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. 
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
         </div><br/>
         <div class="row">
            <div class="col-md-6">
               <div class="panel panel-primary">
                  <div class="panel-heading">
                     <h4>PHP PROGRAMMER</h4>
                  </div>
                  <div class="panel-body">
                     <img src="pic/Kate.jpg" class="img-circle center-block">
                     <p class="lead text-center">i do PHP Programming</p>
                  </div>
                  <div class="panel-footer"></div>
               </div>
            </div>

            <div class="col-md-6">
               <div class="panel panel-primary">
                  <div class="panel-heading">
                     <h4>WEB DESIGNER</h4>
                  </div>
                  <div class="panel-body">
                     <img src="pic/Kate.jpg" class="img-circle center-block">
                     <p class="lead text-center">I Do CSS Bootstrap Designing</p>
                  </div>
                  <div class="panel-footer"></div>
               </div>
            </div>
         </div>

         
      </section>
      
      <section id="contact" style="background: silver;">
         <div class="page-header">
            <h2 class="text-center">Contact Me</h2>
         </div>
         <form class="col-md-5 col-md-offset-4">
            <div class="form-group">
               <input class="form-control" placeholder="ENTER YOUR NAME" type="text">
            </div>
            <div class="form-group">
               <input class="form-control" placeholder="ENTER YOUR EMAIL" type="EMAIL">
            </div>
            <div class="form-group">
               <input class="form-control" placeholder="ENTER YOUR SUBJECT" type="text">
            </div>
            <div class="form-group">
               <textarea class="form-control rows="10">COMMENTS</textarea>
            </div>
            <div class="form-group">
               <input class="btn btn-success btn-block"  type="SUBMIT">
            </div>
         </form>
      </section>

      
  
    
   </body>
</html>