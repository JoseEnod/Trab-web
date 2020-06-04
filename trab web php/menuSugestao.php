<div  style="color: black;
    font: normal 15pt arial;">
    <div style="padding-top: 50px;"></div>
    <section style="background-color: white;
    border-radius: 10px;
    padding: 30px;
    height: 500px;
    width: 100%;">


<form id="sugestionForm" action="?pg=contatobd" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Lucas C#...">
  </div>  
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@email.com">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect2">Tipo de Entreterimento Digital</label>
    <select class="form-control" id="exampleFormControlSelect1" name="tipo">
      <option>Filme</option>
      <option>Serie</option>
      <option>Desenho</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Sugestão de Programa</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="programa"></textarea>
  </div>
  <button type="submit" class="btn btn-success mt-md-3">Enviar</button>
</form>
</div>
