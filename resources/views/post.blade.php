
@extends('layouts.main')

@section('container')
  @foreach ($post as $Posts)
   <article class="mb-5">
  <a href="/posts/{{ $Posts["slug"] }}"><h2>{{ $Posts["tittle"] }}</h2></a>
  <h5> Ditulis Oleh : {{ $Posts["author"] }}</h5>
  <p>{{ $Posts["body"] }}</p>   
  </article>   
  @endforeach
@endsection
    


