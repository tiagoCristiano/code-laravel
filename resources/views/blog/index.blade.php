@extends('template')

@section('title')
    Blog
@stop

@section('content')
      <div class="jumbotron">
        <h1 class="text-center">Blog Laravel Express</h1>
      </div>


        @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$post['titulo']}}</h3> <span class="glyphicon glyphicon-time"></span> <small>{{$post['data']}}</small>
                </div>

                <blockquote>
                    <p>{{$post['conteudo']}}</p>
                    <footer>{{$post['autor']}}</footer>
                </blockquote>
            </div>
       @endforeach

@stop