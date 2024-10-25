<div class="container-fluid">
<div class='card p-5'>
<form action="/panel/receipes/create/save" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nome da Receita</label>
                <input name= "name" type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="ingredient" class="form-label">Ingredientes</label>
                <input name="ingredient" type="text" class="form-control" id="ingredient" required>
            </div>
            <div class="mb-3">
                <label for="prepare" class="form-label">Modo de Preparo</label>
                <input name="prepare" type="text" class="form-control" id="prepare" required>
            </div>
            <div class="mb-3">
                <label for="timePrepare" class="form-label">Tempo de Preparo</label>
                <input name="timePrepare" type="text" class="form-control" id="timePrepare" required>
            </div>
            <button type="submit" class="btn btn-danger">Cadastrar</button>
            
        </form>
</div>
</div>
