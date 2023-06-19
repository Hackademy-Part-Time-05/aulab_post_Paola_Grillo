 <x-layout>
    <div class="container-fluid p-5  text-center text-black">
        <div class="row justify-content-center">
            <h1 class="display-1">
               Inserisci un articolo
            </h1>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
    
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
    
                <form class="" action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
    

<!-- Titolo-->

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}">
                    </div>


 <!-- Sottotitolo-->
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{ old('subtitle') }}">
                    </div>


                    <!-- Tags-->                     
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags:</label>
                        <input name="tags" id="tags" class="form-control" value="{{ old('tags')}}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>

<!-- Immagine-->                    
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine:</label>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>


<!-- Titolo-->                    
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category" id="category" class="form-control text-capitalize">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>


<!-- Corpo del testo-->                    
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{ old('body') }}</textarea>
                    </div>





<!-- Tasto per inviare--> 
                    <div class="mt-2">
                        <button class="btn btn-warning text-black my-3">Inserisci un articolo</button>
                        




                    </div>
                </form>
            </div>
        </div>
    </div>
    </x-layout>  


