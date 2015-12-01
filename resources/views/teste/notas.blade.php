@extends('template')

@section('title')
    Notas
@stop

@section('content')
    <h1>Notas </h1>


    <!-- Funciona -->
    <ul class="list">
        <?php foreach($notas as $nota): ?>
        <li><?php echo $nota; ?></li>
        <?php endforeach; ?>
    </ul>
    <!-- Funciona -->
@stop