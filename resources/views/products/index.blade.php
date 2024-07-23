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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
               

                    <h1>Lista de Produtos...</h1>
                    
                        <table class="table table">
                            <thead class="thead-light ">
                              <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($products as $produto)
                                  <th scope="row">{{ $produto->id }}</th>
                                  <td>{{ $produto->name }}</td>
                                  <td>{{ $produto->description }}</td>
                                  <td>{{ $produto->price }}</td>
                                  <td>{{ $produto->quantity}}</td>
                                  <td>
                                    <div class="col-3 col-sm-1">   
                                        <form action="{{ route('products.edit', $produto->id) }}" method="GET">
                                            @csrf
                                            @method('Edit')
                                            <button class="btn btn-warning" type="submit">Editar</button>
                                        </form>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="col-3 col-sm-1">     
                                        <form action="{{ route('products.destroy', $produto->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja deletar este produto?')">Deletar</button>
                                        </form>
                                    </div>
                                  </td>
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>    
                    
                      
                </div>
            </div>
        </div>
    </div>
    