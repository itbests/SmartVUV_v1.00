@extends('adminlte::page')

@section('js')
    <script>
        // Verificar si la alerta está presente y redirigir después de un corto retraso
        document.addEventListener('DOMContentLoaded', function () {
            if (document.querySelector('.swal2-container')) {
                setTimeout(function () {
                    window.location.href = "LogoutByLoginOtherBrowser"; // Reemplaza con el enlace que desees
                }, 4000); // Redirigir después de 3 segundos (ajusta el valor según tus preferencias)
            }
        });
    </script>
@endsection
