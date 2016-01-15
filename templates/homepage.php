<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Tomas Vohradnik</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet/less" type="text/css" href="css/main.less" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="graph/chartist.min.css">
    <script src="graph/chartist.min.js"></script>
    <!--NOT WORKING USING A LINE BELLOW WITH URL // <script src="js/less.js" type="text/javascript"></script>-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
        <img src="images/avatar.jpg" class="img-circle img-thumbnail">
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 center upper bold">
          <h1 class="bold">Tomas Vohradnik</h1>
        </div>
      </div>
      
      <div class="col-lg-12 center upper bold" style="border: 1px solid red;">
        <div class="ct-chart ct-perfect-fourth">
        
        
          <script>
            <?php 
              include('inc/graph.js');
            ?>    
          </script>
      

        </div>
      </div>
      
      
      

      <div class="container">
        <div class="row">
           <div class="col-lg-12 center">
              <h1 style="color: grey;">Experience</h1><br><br>
            </div>
        </div>
      </div>

      <?php include("left.php") ?>
        
      <?php include("right.php") ?>  
    
    <br><br>

    <div class="container">
      <div class="row">
         <div class="col-lg-12 center">
            <h1>Contact form</h1>

             <?php 
              include('inc/contact_form.php');
            ?>  

          </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/input_validator.js"></script>
    
  </body>
</html>