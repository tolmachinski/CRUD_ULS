@extends('layout')

@section('title', 'Edit') 

@section('content')

<a href="/" class="card-link">Go Back</a>
<form class="mt-4" method="POST" action="{{ route('news.id', ['id' => $new->id.'/new']) }}">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>

    <input value="{{ $new->titlu }}" name="titlu" type="text" class="form-control" placeholder="">
  </div>
    @error('titlu')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Text</label>
    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Update Text"></textarea>
  </div>
    @error('text')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  <p class="mt-4"><select name="nume">
   <option>Authors</option>
   @foreach($authors as $author)
   <option value="{{ $author->id}}">{{ $author->nume}} {{ $author->prenume}}</option>
   @endforeach
   </select>

  <div class="row mt-4">
    <div class="col">
        <button type="submit" class="btn btn-success">Save Changes</button>
    </div>
    
  </div>

</form>



@endsection('content')