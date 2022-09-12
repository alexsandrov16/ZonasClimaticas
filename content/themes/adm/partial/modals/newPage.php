<div class="modal" id="newPage">
    <div class="modal-content">
        <form action="<?=base('admin/pages')?>" method="post">
            <header>
                <svg class="icons close-modal" viewBox="0 0 24 24">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
                <h4>Añadir página</h4>
            </header>
            <div>

                <label for="" required>Título de Página</label>
                <input type="text" name="name" required>

                <label for="" required>Nombre de la Carpeta</label>
                <input type="text" name="folder" required>
            </div>
            <footer>
                <button class="close-modal" type="reset">Cerrar</button>
                <button type="submit">crear</button>
            </footer>
        </form>
    </div>
</div>