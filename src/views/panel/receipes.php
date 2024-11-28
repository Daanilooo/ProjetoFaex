<div class="container-list">
    <form action="/panel/receipes/search" method="get" class="d-flex" role="search">
        <input value="<?= $search ?>" class="form-control me-2" type="search" placeholder="Search" name="nameFilter">
        <button class="btn" type="submit">Search</button>
    </form>
    <?php if ($search != "") { ?>
        <a href="/panel/receipes">Limpar</a>
    <?php } ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
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
                        <div style="display:flex; gap: 10px;">
                            <a href="/panel/receipes/edit/<?= $receipe['id'] ?>" class="btn btn-light">Editar<i class="bi bi-pencil"></i></a>
                            <form action="/panel/receipes/delete/<?= $receipe['id'] ?>" method="post">
                                <button class="btn btn-light" type="submit">Deletar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
