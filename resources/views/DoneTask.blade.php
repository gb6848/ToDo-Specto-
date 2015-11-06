<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Todo">
    <meta name="author" content="Bahor Gregr">
    <link rel="icon" href="SPECTO_logo.ico">

    <title>Stecto TODO LIST</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="css/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

    </style>
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
              <li role="presentation" ><a href="<?= URL::to('/')?>">Nova</a></li>
              <li role="presentation"class="active"><a href="<?= URL::to('/DoneTask')?>">Opravljena opravila</a></li>

          </ul>
        </nav>
        <h3 class="text-muted"><img src="SPECTO_logo.png" alt="SPECTO"> To-Do List</h3>
      </div>

<?php

    if(count($data)>0){
?>
    <div class="table-responsive">
          <table class="table table-hover">
              <thead>
                  <th>#</th>
                  <th>Oseba</th>
                  <th>Naziv</th>
                  <th>Začetek</th>
                  <th>Zaključek</th>
                  <th>Pregled</th>
                  <th>Zbriši</th>
              </thead>
            <?php
            $index=1;
            foreach($data as $row){
            ?>

            <tr>
                <td><?php echo $index?></td>
                <td><?php echo $row->OSEBA?></td>
                <td><?php echo $row->NAZIV?></td>
                <td><?php echo date("d.m.Y", strtotime($row->DATUM_START)) ?></td>
                <td><?php echo date("d.m.Y", strtotime( $row->DATUM_END))?></td>
                <td align="center"><a href="#" class="big-link" data-reveal-id="myModal<?=$row->ID_OPRAVILA?>" data-animation="fade"><span class="glyphicon glyphicon glyphicon-fullscreen" aria-hidden="true"></span></a></td>
                <td  align="center"><a href="<?= URL::to('/DeleteDoneTask', array($row->ID_OPRAVILA))?>"><span style="color: red;" class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
            </tr>
            <?php
            $index++;
            }
            ?>

          </table>
      <div align="center">
      <?php
      echo $data->render();
      ?>
      </div>
    </div>

    <?php
    }else{
    ?>
    <div class="alert alert-danger" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      Trenutno nimate zaključenih opravil.
    </div>
    <?php
    }
    ?>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    <link rel="stylesheet" href="css/reveal.css">
    <script type="text/javascript" src="js/jquery.reveal.js"></script>

         <?php


            foreach($data as $row){
            if($row->STATUS==1){
                ?>
    		<div id="myModal<?=$row->ID_OPRAVILA?>" class="container reveal-modal" style="background:url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/dark_wall.png);">
    		    <div style="
                padding:5px 0px 5px 30px;
                background:rgba(0,0,0,0.2);
                margin-left: -30px;
                margin-right: -30px;
                margin-bottom:10px;
                color:rgba(180, 183, 186, 0.76);
                text-shadow:#000 0px 1px 5px;"
    		    ">
    		    	<p><h1><?php echo'<span style="font-size: small;">'."#".$row->ID_OPRAVILA.'</span>'."  ". $row->NAZIV?></h1></p>
    		    </div>

    			<p style="color: #ffffff;"><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span><?php echo " : ". $row->OSEBA;?></p>
    			<p style="color: #ffffff;"><span class="glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span><?php echo" : ". date("d.m.Y", strtotime($row->DATUM_START))." - ".date("d.m.Y", strtotime($row->DATUM_END));?></p>


    			<div class="col-lg-12" style="  width:98%;
                                                padding:15px 0px 15px 8px;
                                                border-radius:5px;
                                                box-shadow:inset 4px 6px 10px -4px rgba(0,0,0,0.3), 0 1px 1px -1px rgba(255,255,255,0.3);
                                              	background:rgba(0,0,0,0.2);

                                                border:1px solid rgba(0,0,0,1);
                                                margin-bottom:10px;
                                                color:#6E6E6E;
                                                text-shadow:#000 0px 1px 5px;">

                  <p><?php echo $row->OPIS?></p>
                </div>
    			<a class="close-reveal-modal">&#215;</a>


    		</div>

            <?php
            }
            }
            ?>

      <footer class="footer">
        <p>&copy; SPECTO 2015</p>
      </footer>

    </div> <!-- /container -->


  </body>
</html>
