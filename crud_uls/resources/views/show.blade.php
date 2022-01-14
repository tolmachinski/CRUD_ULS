


<div class="container card mt-4" id="js-modal-card" >
  <div class="card-body">
    <h5 class="card-title ">{{ $new->titlu}}</h5>
    <h6 class="card-subtitle mb-2 text-muted mt-2">{{ $new->author->nume}} {{ $new->author->prenume}}</h6>
    <p class="card-text mt-2">{{ $new->text}}</p>
    <h6>Created: {{ $new->created_at->format('d/m/y H:i:s')}}</h6>
    <h6>Updated: {{ $new->updated_at->format('d/m/y H:i:s')}}</h6> 
    <a href="/" class="card-link mt-4">Close</a>
    
  </div>
</div>


