@extends('layout')

@section('title', 'News')

@section('content')

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="btn btn-primary" role="button" href="create">Create</a>
      <form class="d-flex" method="get" action="{{ route('search') }}">
        <input class="form-control me-2" name="s" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>  

<div id="test">
</div>
<div class="container">
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Title</th>
      <th scope="col">Text</th>
      <th scope="col">Author</th>
      <th scope="col">Created</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach($news as $new)
      
        <tr>
            <th scope="row">{{ $new->titlu}}</th>
            
            <td>{{ $new->text}}</td>
            <td>{{ $new->author->nume}} {{ $new->author->prenume}}</td>
            <td>{{ $new->created_at->format('d/m/y H:i:s')}}</td>
            <td>
              <div class="btn-group">
                <a type="button" data-id="{{$new->id }}" class="btn btn-primary js-modal-click">Show</a>
                <a type="button" class="btn btn btn-warning" href="{{ route('news.id', ['id' => $new->id]) }}">Edit</a>
                <a type="button" class="btn btn-danger" href="{{ route('delete.id', ['id' => $new->id]) }}">Delete</a>
              </div>
        </tr>
      
      @endforeach
  </tbody>
</table>
</div>



{{ $news->links() }}
@endsection('content')

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
  $(document).ready(function(){

    $('.js-modal-click').click(function(e){
      e.preventDefault();
      

      $.ajax({
            
            url: '/show/'+ $(this).data('id'),
            
        }).done(response => { 
            $('#test').html(response);
          });
    
    });

  });
</script>