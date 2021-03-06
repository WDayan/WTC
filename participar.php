
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          
    <title>BruDay WTC</title>
    
    <!-- nosso css -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">                             
    <!-- css menu -->
    <link rel="stylesheet" type="text/css" href="css/menu.css">                               
    
    <!-- script google maps -->
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&v=3.exp"> </script>
    <!-- nossos codigos -->
    <script type="text/javascript" src="scripts/bruday-script-participar.js"> </script>                            
    <!-- script menu --> 
    <script type="text/javascript" src="scripts/bibliotecas/jquery-latest.min.js"> </script>  
    <!-- script $ jquery -->
    <script type="text/javascript" src="scripts/bibliotecas/jquery.min.js"></script>
    <!-- script $ jquery -->
    <script type="text/javascript" src="scripts/bibliotecas/jquery-ui.custom.min.js"></script>
    
  </head>
  <body>

    <div id='cssmenu'>
      <ul> <!-- class='active' define o selecionado -->
       <li><a href='index.php'>Home</a></li> 
       <li><a href='info.html'>Sobre</a></li>
       <li class='active'><a href='participar.php'>Participar</a></li>
       <li><a href='contato.html'>Contato</a></li>
       <li><a href='relatorio.php'>Relatórios</a></li>
       <li style="display:scroll;position:fixed;top:10px;right:10px;"> <img src="imgs/logo_uffs.jpg" title="UFFS" alt="LOGO UFFS"> </li>
      </ul>
    </div>

    <div id="pg_participar">   <!-- nome da div principal da pagina -->

    <!-- <h1 style="bottom: 0; border-radius: 5px 5px; padding: 5px 10px; position:fixed; top:38px; right:500px"> Cadastro Estudantes da Universidade Federal Fronteira Sul</h1> -->

    <form id="formp" method="post" action="phpc.php" style="float: left ">
    <fieldset>
      <legend>Mapa de Estudantes da Universidade Federal Fronteira Sul</legend>   
      <div class="form_cpf">
        <label for="txtCpf">CPF:</label>
        <input type="text" id="txtCpf" name="txtCpf" />
      </div>
      <div class="form_name">
        <label for="txtNome">Nome:</label>
        <input type="text" id="txtNome" name="txtNome" />
      </div>
      <div class="form_aniver">
        <label for="txtAniver">Data Nascimento</label>
        <input type="date" id="txtAniver" name="txtAniver">
      </div>
      <div class="form_escolaridade">
        <label for="txtEscolaridade">Escolaridade</label>
         <select>
          <option>Escolha...</option>
          <option value="Ensino Médio Particular">Ensino Médio Particular</option>
          <option value="Ensino Médio Publico">Ensino Médio Publico</option>
          <option value="Ensino Tecnico">Ensino Tecnico</option>
          <option value="Superior Incompleto">Superior Incompleto</option>
          <option value="Superior">Superior</option>
        </select> 
      </div>
      <div class="form_email">
        <label for="txtEmail">Email:</label>
        <input type="email" id="txtEmail" name="txtEmail" />
      </div>
      <div class="form_campus">
        <label for="txtCampus">Campus:</label>
        <select>
          <option>Escolha...</option>
          <option value="Chapecó">Chapecó</option>
          <option value="Cerro Largo">Cerro Largo</option>
          <option value="Erechim">Erechim</option>
          <option value="Laranjeiras do Sul">Laranjeiras do Sul</option>
          <option value="Realeza">Realeza</option>
          <option value="Passo Fundo">Passo Fundo</option>
        </select>        
        </div>
      <div class="form_nota">
        <label for="txtNota">Nota:</label>
        <input type="number" id="txtNota" name="txtNota" min="1" max="5"/>
      </div> 
      <div class="form_curso">
        <label for="txtCurso">Curso:</label>
        
        <select>
          <option>??</option>
        </select>
      
      </div>   

      <div class="form_periodo">
        <label for="txtPeriodo">Periodo</label>
        <select>
          <option>Escolha...</option>
          <option value="Diurno">Diurno</option>
          <option value="Noturno">Noturno</option>
        </select> 
      </div>

      <div class="form_ingresso">
        <label for="txtIngresso">Data Ingresso</label>
        <input type="date" id="txtIngresso" name="txtIngresso">
      </div>

      <div class="form_concluido">
        <label for="txtConcluido">Data Formatura</label>
        <input type="date" id="txtConcluido" name="txtConcluido">
      </div>

      <div class="form_etnia">
        <label for="txtEtnia">Etina</label>
        <select>
          <option>Escolha...</option>
          <option value="Branco">Branco</option>
          <option value="Pardo">Pardo</option>
          <option value="Preto">Preto</option>
          <option value="Indigina">Indigina</option>
        </select> 
      </div>

      <div class="form_esporte">
        <label for="txtEsporte">Esporte:</label>
        <select>
          <option>Escolha...</option>
          <option value="Futebol">Futebol</option>
          <option value="Volei">Volei</option>
          <option value="Basquete">Basquete</option>
        </select> 
      </div>   
      <div class="form_endereco">
        <label for="txtEndereco">Endereço Origem:</label>
        <input type="text" id="txtEndereco" name="txtEndereco"/>
        <input type="button" id="btnEndereco" name="btnEndereco" onclick="codeAddress1()" value="Mostrar no mapa" />
      </div>      
      <div class="form_endereco2">
        <label for="txtEndereco">Endereço Atual:</label>
        <input type="text" id="txtEndereco2" name="txtEndereco2"/>
        <input type="button" id="btnEndereco2" name="btnEndereco2" onclick="codeAddress2()" value="Mostrar no mapa" />
      </div>

      <div class="form_submit">
        <input type="submit" value="Enviar" name="btnEnviar" />
      </div>
    </fieldset>
  </form>

    <div id="form_mapa" style="float: right; position:fixed; top:10%; right:100px">
    </div>

      <div>        
        Lat1: <input type="text" id="txtLatitude" name="txtLatitude"/>
        Long1: <input type="text" id="txtLongitude" name="txtLongitude"/>
      </div>
      <div>
        Lat2: <input type="text" id="txtLatitude2" name="txtLatitude2"/>
        Long2: <input type="text" id="txtLongitude2" name="txtLongitude2"/>
      </div>

    <div class="autores">
      <p>Criado por: Bruno Dall Orsoletta e Dayan Weber</p>
    </div>
    </div>


  </body>
</html>
