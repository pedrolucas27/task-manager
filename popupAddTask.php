<div id="popup-new-task" class="modal">
    <form class="modal-content animate" action="ws/addTask.php" method="post">
        <label id="new-t">Nova Tarefa</label>
        </br>
        </br>
        <label for="t">Titulo</label></br>
        <input type="text" name="t" id="t" required>
        </br>
        <label for="desc">Descrição</label></br>
        <textarea rows="7" cols="25" name="desc" id="desc" maxlength="150" minlength="15" required></textarea>
        </br>
        <label for="cor">Sprint</label></br>
        <input type="color" name="cor" id="cor"/>        
        <div id="t-btn">
            <input class="btn" type="submit" value="Criar Tarefa">
        </div>
    </form>
</div>

