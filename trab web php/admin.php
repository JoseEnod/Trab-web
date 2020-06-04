<?php
  include("conecta.inc.php");

	$banco = "SELECT `nome`,`email`, `tipo`, `programa` FROM `sugestoes` WHERE 1";
	$conn = $conexao -> query ($banco) or die ($conexao->error);
	?>
  
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="local_style.css">    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>S Home</title>
</head>

<body style="
    background-color: black;
    font: normal 15pt arial;">

<div style="padding-top: 100px;"></div>

<div style="
    background-color: white;
    border-radius: 10px;
    padding: 15px;
    height: 500px;
    width: 700px;
    margin: auto;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.336);">

<div style="text-align: center;">
    <h1>::::: Pagina do ADM ::: Pedidos ::::::</h1>
</div>

<div style="margin: 30px 10px;">
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Filmes</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Series</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Desenhos</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <table>
          <tr>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Nome</td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Tipo</td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Programa</td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Email</td>
          </tr>
          <?php while($dado = $conn -> fetch_array()){ 
            if ($dado["tipo"] == "Filme"){?>
            <tr>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["nome"];?></td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["tipo"];?></td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["programa"];?></td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["email"];?></td>
            
          </tr> 
        </table>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <table>
          <tr>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Nome</td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Tipo</td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Programa</td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Email</td>
          </tr>
          <?php 
            }elseif ($dado["tipo"] == "Serie"){?>
            <tr>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["nome"];?></td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["tipo"];?></td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["programa"];?></td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["email"];?></td>
            
          </tr> 
        </table>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      <table>
          <tr>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Nome</td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Tipo</td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Programa</td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);">Email</td>
          </tr>
          <?php  
            }elseif ($dado["tipo"] == "Desenho"){?>
            <tr>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["nome"];?></td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["tipo"];?></td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["programa"];?></td>
            <td style="border: 15px solid rgba(0, 0, 0, 0.0);"><?php echo $dado["email"];?></td>
            
          </tr> 
          <?php }} ?>
        </table>
      </div>
    </div>
  </div>
</div>

<a href="index.php"><button class="btn btn-success mt-md-3">Inicio</button></a>

</div>



</body>