<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Naloga">
    <meta name="author" content="Gregor Bahor">
    <link rel="icon" href="../SPECTO_logo.ico">

    <title>Stecto TODO LIST</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="../css/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

 <!--JAVASCRIPT VALIDATION-->
     <script type="text/javascript">
        <!--
           function validate()
           {

           var Oseba = document.getElementById("Oseba").value;
           var Naziv = document.getElementById("Naziv").value;
           var Opis  = document.getElementById("Opis").value;

           if( Oseba != "" )
           {
                document.getElementById('errorOseba').style.display = 'none';
                document.getElementById("Oseba").style.border="1px solid green";

           }
           if( Naziv != "" )
           {
                document.getElementById('errorNaziv').style.display = 'none';
                document.getElementById("Naziv").style.border="1px solid green";
           }
           if( Opis != "" )
           {
                document.getElementById('errorOpis').style.display = 'none';
                document.getElementById("Opis").style.border="1px solid green";
           }

              if( Oseba == "" )
              {
                 //alert( "Polje Oseba je prazno, vnesi potrebne podatke." );
                 document.getElementById('errorOseba').style.display = 'block';
                 document.getElementById("Oseba").style.border="1px solid red";
                 return false;
              }

            else if( Naziv == "" )
              {
                 alert( "Polje Naziv je prazno, vnesi potrebne podatke." );
                 document.getElementById('errorNaziv').style.display = 'block';
                 document.getElementById("Naziv").style.border="1px solid red";
                 return false;
              }
              else if( Opis == "" )
              {
                  alert( "Polje Opis je prazno, vnesi potrebne podatke." );
                  document.getElementById('errorOpis').style.display = 'block';
                  document.getElementById("Opis").style.border="1px solid red";
                  return false;
              }

              return true;
           }
        //-->
     </script>
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="<?= URL::to('/')?>">Nova</a></li>
            <li role="presentation"><a href="<?= URL::to('/DoneTask')?>">Opravljena opravila</a></li>

          </ul>
        </nav>
          <h3 class="text-muted"><img src="../SPECTO_logo.png" alt="SPECTO"> To-Do List</h3>
      </div>

      <div class="jumbotron">
        <form action="<?= URL::to('/update')?>" method="post" onsubmit="return validate()">


        <?php if(count($errors)>0){?>
                <p style="color: red;">{{$errors->first('Oseba')}}</p>
                <p style="color: red;">{{$errors->first('Naziv')}}</p>
                <p style="color: red;">{{$errors->first('Opis')}}</p>

        <?php }?>
      <div class="input-group" style="padding-bottom: 5px;">


        <span  class="input-group-addon" name="Oseba"><div style="width: 50px;">Oseba:</div> </span>
        <input type="text" class="form-control" name="Oseba" id="Oseba"  value="<?php echo $data->OSEBA;?>" >
        </div>
        <div id="errorOseba" class="alert alert-danger" role="alert" style="display: none;">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          Polje Oseba je prazno, vnesi potrebne podatke.
        </div>
        <div class="input-group" style="padding-bottom: 5px;">
            <span  class="input-group-addon" name="naziv"><div style="width: 50px;">Naziv:</div>  </span>
            <input type="text" class="form-control"  name="Naziv" id="Naziv" value="<?php echo $data->NAZIV;?>">
        </div>
        <div id="errorNaziv" class="alert alert-danger" role="alert" style="display: none;">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          Polje Naziv je prazno, vnesi potrebne podatke.
        </div>
        <div class="input-group" style="padding-bottom: 10px;">
            <span  class="input-group-addon" name="opis"><div style="width: 50px;">Opis:</div></span>

            <textarea class="form-control" rows="3" name="Opis" id="Opis"> <?php echo $data->OPIS;?></textarea>
        </div>

        <div id="errorOpis" class="alert alert-danger" role="alert" style="display: none;">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          Polje Opis je prazno, vnesi potrebne podatke.
        </div>

      <p>


        <p>
            <input type="submit" value="Uredi opravilo" class="btn btn-lg btn-success">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="<?php echo $data->ID_OPRAVILA;?>">
        </form>
      </div>

      <footer class="footer">
         <p>&copy; SPECTO 2015</p>
      </footer>

    </div> <!-- /container -->


  </body>
</html>
