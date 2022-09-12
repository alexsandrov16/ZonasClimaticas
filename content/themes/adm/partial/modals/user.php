<div class="modal" id="user">
    <div class="modal-content">
        <form action="" method="post">
            <header>
                <svg class="icons close-modal" viewBox="0 0 24 24">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
                <h4>Modificar usuario</h4>
            </header>
            <div>
                <label for="">Usuario</label>
                <input type="text" name="" value="admin" disabled>

                <label for="" required>Nombre</label>
                <input type="text" placeholder="Nombre de usuario" value="<?= Mint\Cookies\Session::get('username') ?>" required>

                <label class="switch">
                    <input type="checkbox" id="showPass" name="" onclick="toggleChangePass(this)" role="switch">
                    Cambiar contraseña
                </label>

                <div class="change-pass">
                    <div class="input-field">
                        <input type="password" placeholder="Establecer nueva contraseña">
                        <svg class="icons" viewBox="0 0 24 24" onclick="togglePass(this)">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="3" y1="3" x2="21" y2="21"></line>
                            <path d="M10.584 10.587a2 2 0 0 0 2.828 2.83"></path>
                            <path d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341">
                            </path>
                        </svg>
                    </div>
                </div>

            </div>
            <footer>
                <button class="close-modal" type="reset">Cerrar</button>
                <button type="submit">guardar</button>
            </footer>
        </form>
    </div>
</div>