<div id="popUpContainerPassReset" class="popUpContainer" style="display: {{ isset($display)? $display : 'none' }}">
  <img id="buttonClosePassReset" class="buttonClose" src="images/icons/close.png" alt="cerrar" />
  <h4 class="popUpTitles">Recuperar Contraseña</h4>
  <form id="passResetForm" role="form" method="POST" action="{{ url('/password/reset') }}">

    {{ csrf_field() }}

    <p class="inputError" id="loginEmailError">

    </p>
    <label for="resetPass">Email:</label>
    <input id="resetPassEmail" type="email" placeholder="Ingrese su email" name="email" required>
    <label for="resetPassword">Contraseña:</label>
    <input id="resetPassword" type="password" placeholder="Ingrese su clave" name="password" required>
    <label for="resetPasswordConfirm">Verificación de contraseña:</label>
    <input type="password" id="resetPasswordConfirm" placeholder="Ingrese su contraseña nuevamente" name="password_confirmation" required>
    <button id="resetFormSubmit" type="submit" name="resetFormSubmit" style="
    float: right;"><strong>Cambiar contraseña</strong></button>
  </form>
</div>
