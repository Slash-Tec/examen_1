<?php include_once (VIEWS . 'header.php') ?>

<div class="card" id="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Iniciar Sesión</a></li>
            <li class="breadcrumb-item">Datos de envío</li>
            <li class="breadcrumb-item"><a href="#">Forma de pago</a></li>
            <li class="breadcrumb-item"><a href="#">Verificar los datos</a></li>
        </ol>
    </nav>
    <div class="card-header">
        <h1>Datos de envío</h1>
        <p>Por favor, compruebe los datos de envío y seleccione una dirección existente o agregue una nueva.</p>
    </div>
    <div class="card-body">
        <form action="<?= ROOT ?>cart/paymentmode" method="POST">
            <div class="form-group text-left mb-2">
                <label for="address">Dirección:</label>
                <select name="address" id="address" class="form-control">
                    <option value="">Seleccionar una dirección existente</option>
                    <?php foreach ($data['addresses'] as $address) : ?>
                        <option value="<?= $address->id ?>"><?= $address->address ?>, <?= $address->city ?>, <?= $address->state ?>, <?= $address->postcode ?>, <?= $address->country ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group text-left mb-2">
                <label for="first_name">Nombre:</label>
                <input type="text" name="first_name" id="first_name"
                       class="form-control" required
                       placeholder="Escribe tu nombre"
                       value="<?= $data['data']->first_name ?? '' ?>">
            </div>
            <div class="form-group text-left mb-2">
                <label for="last_name_1">Primer apellido:</label>
                <input type="text" name="last_name_1" id="last_name_1"
                       class="form-control" required
                       placeholder="Escribe tu primer apellido"
                       value="<?= $data['data']->last_name_1 ?? '' ?>">
            </div>
            <div class="form-group text-left mb-2">
                <label for="last_name_2">Segundo apellido:</label>
                <input type="text" name="last_name_2" id="last_name_2"
                       class="form-control"
                       placeholder="Escribe tu segundo apellido"
                       value="<?= $data['data']->last_name_2 ?? '' ?>">
            </div>
            <div class="form-group text-left mb-2">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email"
                       class="form-control" required
                       placeholder="Escriba su correo electrónico"
                       value="<?= $data['data']->email ?? '' ?>">
            </div>
            <hr>
            <h3>Agregar una nueva dirección</h3>
            <div class="form-group text-left mb-2">
                <label for="new_address">Dirección:</label>
                <input type="text" name="new_address" id="new_address" class="form-control" placeholder="Escriba su nueva dirección">
            </div>
            <div class="form-group text-left mb-2">
                <label for="new_city">Ciudad:</label>
                <input type="text" name="new_city" id="new_city" class="form-control" placeholder="Escriba su nueva ciudad">
            </div>
            <div class="form-group text-left mb-2">
                <label for="new_state">Provincia:</label>
                <input type="text" name="new_state" id="new_state" class="form-control" placeholder="Escriba su nueva provincia">
            </div>
            <div class="form-group text-left mb-2">
                <label for="new_postcode">Código Postal:</label>
                <input type="text" name="new_postcode" id="new_postcode" class="form-control" placeholder="Escriba su nuevo código postal">
            </div>
            <div class="form-group text-left mb-2">
                <label for="new_country">País:</label>
                <input type="text" name="new_country" id="new_country" class="form-control" placeholder="Escriba su nuevo país">
            </div>
            <div class="form-group text-left">
                <input type="submit" value="Enviar datos" class="btn btn-success">
            </div>
        </form>
    </div>
</div>

<?php include_once (VIEWS . 'footer.php') ?>
