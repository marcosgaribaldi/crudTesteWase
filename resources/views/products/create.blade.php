<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Produtos</title>
</head>
<body>
    


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
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="container-fluid">
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
           
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" id="name" name="name"class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="description" class="form-label">Descrição:</label>
                        <input type="text" id="description" name="description"class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Preço:</label>
                        <input type="decimal" id="price" name="price"class="form-control">
                   
                    </div>
                    <div class="col-md-6">
                        <label for="quantity" class="form-label">Quantidade:</label>
                        <input type="number" id="quantity" name="quantity"class="form-control">
                        @error('quantity')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
        </div>
   </div>
</form>


</body>
</html>