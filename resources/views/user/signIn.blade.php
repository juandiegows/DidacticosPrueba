

<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<form class="form_add"  action="{{ route('users.create') }}" method="POST" >
    @csrf
   <div class="group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" placeholder="Ingrese su nombre" required>
    <span class="Errors"></span>
   </div>
   <div class="group">
    <label for="last_name">apellido</label>
    <input type="text" name="last_name"  placeholder="Ingrese su apellido" required>
    <span class="Errors"></span>
   </div>

     <div class="group">
    <label for="email">correo</label>
    <input type="email" name="email"  placeholder="Ingrese su correo" required>
    <span class="Errors"></span>
   </div>
   <div class="group">
    <label for="password">password</label>
    <input type="password" name="password"  placeholder="Ingrese su password" required>
    <span class="Errors"></span>
   </div>
   <div class="group">
    <label for="birth_day">Fecha Nacimiento</label>
    <input type="date" name="birth_day"  placeholder="Ingrese su fecha nacimiento" required>
    <span class="Errors"></span>
   </div>
   <div class="btns">
    <a href="{{ route('home') }}">Volver</a>
    <button type="submit" class="btn btn-primary"> Registrar</button>
   </div>

  </form>