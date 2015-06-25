
<?php
  ini_set('default_charset', 'utf8_general_ci');
    require_once 'bd/fcnsdb.php';
    require_once 'bd/logindb.php';
    require_once 'bd/querys.php';
    $banco = conectadb($dbHostname, $dbUsername, $dbPassword); //faz a coneão com phpMyAdmin
    selectdb($banco, $dbDatabase); //Alterando a conexão seleciona o bando em $dbDatabase
    $result = allCampus($banco);
    $var_script = array();
    $count_x = 0;
    $i = 0;
    $j = 0;

    while($row = mysqli_fetch_array($result)){
      
    // codigo generico das consultas  
      for ($i=0; $i < ( sizeof($row)/2 ) ; $i++, $j++){
        $var_script[$j] = $row[$i];   // grava row em var_script como um matriz
      }
        $count_x = $i;
    }
    $string_array = implode('|', $var_script);
?>


<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          
    <title>BruDay WTC</title>

    <script type="text/javascript">  
      var string_array7 = " <?php echo "$string_array"; ?>";
      VARS_AMBIENTE = string_array7.split("|");
      VARS_AMBIENTE_CONTROLE = " <?php echo "$count_x"; ?>";
    </script>
    
    <!-- nosso css -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">                             
    <!-- css menu -->
    <link rel="stylesheet" type="text/css" href="css/menu.css">                               
    
    <!-- script google maps -->
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&v=3.exp"> </script>
    <!-- nossos codigos -->
    <script type="text/javascript" src="scripts/bruday-script-index.js"> </script>                            
    <!-- script menu --> 
    <script type="text/javascript" src="scripts/bibliotecas/jquery-latest.min.js"> </script>     
    <!-- script $ jquery -->
    <script type="text/javascript" src="scripts/bibliotecas/jquery.min.js"></script>
    <!-- script $ jquery -->
    <script type="text/javascript" src="scripts/bibliotecas/jquery-ui.custom.min.js"></script>
    <!-- script infobox -->
    <script type="text/javascript" src="scripts/bibliotecas/infobox.js"></script>
    <!-- script markerclusterrsr -->
    <script type="text/javascript" src="scripts/bibliotecas/markerclusterer.js"></script>

    
  </head>
  <body>
   
    <div id='cssmenu'>
      <ul> <!-- class='active' define o selecionado -->
       <li class='active'><a href='index.php'>Home</a></li> 
       <li><a href='info.html'>Sobre</a></li>
       <li><a href='participar.php'>Participar</a></li>
       <li><a href='contato.html'>Contato</a></li>
       <li><a href='relatorio.php'>Relatórios</a></li>
       <li style="display:scroll;position:fixed;top:10px;right:10px;"> <img src="imgs/logo_uffs.jpg" title="UFFS" alt="LOGO UFFS"> </li>
      </ul>
    </div>

    <div id="pg_index">   <!-- nome da div principal da pagina -->

    <div>
      <h1 style="bottom: 0; border-radius: 5px 5px; padding: 5px 10px; position:fixed; top:38px; right:500px"> 
        Mapa de Estudantes da Universidade Federal Fronteira Sul
      </h1>
    </div> 

    <!-- <div id="filtro">filtro aqui!</div> -->

    <div id="mapa"></div>

    <div class="autores">
      <p>Criado por: Bruno Dall Orsoletta e Dayan Weber</p>
    </div>
    </div>
  </body>
</html>
