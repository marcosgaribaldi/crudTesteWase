<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('products.create') }}">Adicionar Produtos <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.index') }}">Lista Produtos</a>
        </li>
  
      </ul>
    </div>
  </nav>

<form class="form-floating" action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="container-fluid">
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
           

                    <div class="col-md-6">
                        <label class="form" for="name" class="form-label">Nome:</label>
                        <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form" for="description" class="form-label">Descrição:</label>
                        <input class="form-control" type="text" name="description" value="{{$product->description}}">
                    </div>
                    <div class="col-md-6">
                        <label class="form" for="price" class="form-label">Preço:</label>
                        <input class="form-control" type="float" name="price" value="{{ $product->price }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form" for="quantity" class="form-label">Quantidade:</label>
                        <input class="form-control" type="number" name="quantity" value="{{ $product->quantity }}">

                        @error('quantity')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>    
                        <button type="submit">Salvar alterações</button>
                </div>
            </div>
       </div>
       </div>
    </div>
</form>