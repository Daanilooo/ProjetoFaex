<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome da Receita</th>
      <th scope="col">Ingredientes</th>
      <th scope="col">Modo de Preparo</th>
      <th scope="col">Tempo de Preparo</th>
      <th scope="col"></th>
    </tr>
  </thead>
   <tbody>
      <?php foreach ($receipes as $key => $receipe): ?>
          <tr>
              <td><?= $receipe['id'] ?></td>
              <td><?= $receipe['name'] ?></td>
              <td><?= $receipe['ingredient'] ?></td>
              <td><?= $receipe['prepare'] ?></td>
              <td><?= $receipe['timePrepare'] ?></td>
              
              <td>
              <div>
                <button class="btn-alert" type="button">
                    <a style="text-decoration:none" href="/panel/receipes/edit/<?= $receipe['id'] ?>">
                Editar  
                    </a>
                </button>
                <form action>
                  <button class="btn-danger" type="button">    
                    Deletar              
                  </button>
                </form>
              </div>      
              </td>
          </tr>    
      <?php endforeach;?>           
  </tbody>
</table>
</div>
</table>
