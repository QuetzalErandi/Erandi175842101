<?php
include "head.php"
?>
<body>
    <div class="row">
        <form class="col s12" action="form.php" method="get">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" name="txtnombre" type="text" class="validate">
              <label for="icon_prefix">Nombre Completo</label>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" name="txtedad" type="text" class="validate">
              <label for="icon_prefix">Edad</label>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="tel" name="txtemail" class="validate">
              <label for="icon_telephone"  >Correo Electronico</label>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="input-field col s6">
              <i class="material-icons prefix"></i>
              <input id="icon_telephone" type="tel" name="txtpassword" class="validate">
              <label for="icon_telephone"  >Contraseña</label>
            </div>
          </div>

          <button>Enviar</button>
        </form>
      </div>
</body>
<?php
include "footeer.php";
?>
