<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome da Receita</th>
      <th scope="col">Ingredientes</th>
      <th scope="col">Modo de Preparo</th>
      <th scope="col">Tempo de Preparo</th>
      <th scope="col">Editar</th>
      <th scope="col">Deletar</th>

    </tr>
  </thead>
   <tbody>
      <?php foreach ($receipes as $key => $receipe): ?>
          <tr>
              <th scope="row">1</th>
              <td><?= $scheduler['nameReceipes'] ?></td>
              <td><?= $scheduler['ingredients'] ?></td>
              <td><?= $scheduler['prepare'] ?></td>
              <td><?= $scheduler['timePrepare'] ?></td>
              
              <td>
                  <div class="dropdown">
                      <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Ações
                      </button>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/panel/scheduler/edit"><i class="fa-solid fa-pen-to-square"></i> Editar</a></li>
                          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Deletar</a></li>
                      </ul> 
                  </div>
              </td>
          </tr>    
      <?php endforeach;?>           
  </tbody>
</table>
</div>
</table>
