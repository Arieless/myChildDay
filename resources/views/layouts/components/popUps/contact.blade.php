<div id="popUpContainerContact" class="popUpContainer indexPopUp popUpContact" style="display: {{ isset($display)? $display : 'none' }}">
  <img id="buttonCloseContact" class="buttonClose hand" src="/images/icons/close.png" alt="cerrar" />
  <h4 class="popUpTitles">Contacto</h4>
  <form id="contactForm" role="form" method="POST" action="{{ url ('/contact/send') }}">

    {{ csrf_field() }}



    <p class="inputError" id="contactEmailError">

      @if (isset($errors))
        @if ($errors->has('email'))
          @foreach ($errors->get('email') as $message)
              {{ $message }} <br/>
          @endforeach
        @endif
      @endif
    </p>

    <p class="inputSucces">
      @if (session('status'))
              {{ session('status') }}
      @endif
    </p>


    <label for="contactEmail">Email:</label>
    <input id="contactEmail" type="email" placeholder="Ingrese su email" name="contactEmail" required>
    <label for="contactSubject">Asunto:</label>
    <input id="contactSubject" type="text" placeholder="Ingrese el asunto del email" name="contactSubject" required/>
    <textarea id="contactTextArea" type="textarea" placeholder="Ingrese su mensaje..." name="contactTextArea" required></textarea>
    <div class="containerOptions">
      <p id="containerContactText" class="containerContactText">
        <span>Te enviaremos un mail para responder tu solicitud</span>
      </p>
    </div>
    <button id="contactFormSubmit" type="submit" name="contactFormSubmit"><strong>Enviar</strong></button>
  </form>
</div>
