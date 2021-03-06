@extends('layouts.home')
@section('title','MyChildDay')


@section('content')
<div class="containerRols">

      <h1 class="title">Elige con que rol quieres ingresar</h1>

<div class="flexContainer">

  @if (Auth::user()->teacherRol)
  <div class="rol hand">
    <a href="{{ url ('/home/teacher/log') }}">
      <img src="{{url ('images/icons/big/teacher.svg')}}" alt="">
      <h1>Docente</h1>
    </a>
  </div>
  @endif

  @if (Auth::user()->schoolRol)
  <div class="rol hand">
    <a href="{{ url ('/home/school/log') }}">
      <img src="{{url ('images/icons/big/school.svg')}}" alt="">
      <h1>Escuela</h1>
    </a>
  </div>
  @endif


  @if (Auth::user()->parentRol)
  <a href="{{ url ('/home/parent/log') }}">
    <div class="rol hand">
      <img src="{{url ('images/icons/big/parent.svg')}}" alt="">
      <h1>Padre</h1>
    </div>
  </a>
  @endif

</div>


  <script type="text/javascript">

  </script>

</div>

@endsection
