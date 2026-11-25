{{-- Código desarrollado por BaronaNicolas. --}} 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaronaNicolasTest</title>
</head>
<body>
    @if (session('success'))
        <div class="mensaje-exito">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="mensaje-error">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mensaje-error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @error('identificacion')
         <p style="color: red;">{{ $message }}</p>
    @enderror
    
    <form action="{{ route('pasajeros.store') }}" method="POST">
        @csrf {{-- Proteje el formulario de solicitudes falsas. --}}

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}" requiered>

        <label>Identificación:</label>
        <input type="text" name="identificacion" value="{{ old('identificacion') }}" requiered>

        <label>Teléfono:</label>
        <input type="tel" name="telefono" value="{{ old('telefono') }}" requiered>

        <label>Correo electrónico:</label>
        <input type="email" name="correo" value="{{ old('correo') }}" requiered>

        <button type="submit">Guardar datos</button>

    </form>
</body>
</html>