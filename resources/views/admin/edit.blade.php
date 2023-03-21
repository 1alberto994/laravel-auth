@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="card-title">Modifica post</h1>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <form action="{{ route('admin.posts.update',$post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label" >Titolo</label>
                        <input type="text" class="form-control" name="title" id="title"value="{{$post->title}}" required maxlength="255" placeholder="Inserisci il titolo">
                    </div>
                    
                   
                   
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Inserisci una descrizione">{{$post->description}}</textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning">
                            Aggiorna
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection