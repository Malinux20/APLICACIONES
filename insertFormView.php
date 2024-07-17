<div>
    <h1> Formulario para hacer reservas </h1>

    <form action="htpp://localhost/APP_RESTAURANTE/?C=clienteController&M=insert" method="post">
        <div>
            <label for="nombre"> Nombre :</label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label for="Apaterno"> Apellido Paterno:</label>
            <input type="text" name="Apaterno" required>
        </div>
        <div>
            <label for="Amaterno"> Apellido Materno :</label>
            <input type="text" name="Amaterno" required>
        </div>
        <div>
            <label for="fecha"> Fecha :</label>
            <input type="date" name="correo"required>
        </div>
        <div>
            <label for="Hora"> Hora :</label>
            <input type="time" name="Hora" required>
        </div>
        <div>
            <input type="submit" value="ADD">
        </div>
    </form>
</div>