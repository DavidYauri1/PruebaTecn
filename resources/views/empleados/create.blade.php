<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

    <div class="m-2 p-2 bg-slate-100 rounded">
        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                  <form method="POST" action="{{ route('empleados.store') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="sm:col-span-6">
                          <label for="nombres" class=""> Nombres </label>
                              <input type="text" id="nombres" name="nombres" />
                      </div>
                      @error('nombres')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror

                      <div class="sm:col-span-6">
                        <label for="apellidos" class=""> Apellidos </label>
                            <input type="text" id="apellidos" name="apellidos" />
                    </div>

                    @error('apellidos')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror


                    <div class="sm:col-span-6">
                        <label for="Dni" class=""> Dni </label>
                            <input type="text" id="Dni" name="Dni" />
                    </div>
                    @error('Dni')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror


                    <div class="sm:col-span-6">
                        <label for="email" class=""> Email </label>
                            <input type="email" id="email" name="email" />
                    </div>
                    @error('email')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror


                    <div class="sm:col-span-6">
                        <label for="area" class=""> Area </label>
                            <input type="text" id="area" name="area" />
                    </div>
                    @error('area')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror


                    <div class="sm:col-span-6">
                        <label for="cargo" class=""> Cargo </label>
                            <input type="text" id="cargo" name="cargo" />
                    </div>
                    @error('cargo')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror


                    <div class="sm:col-span-6">
                        <label for="local" class="">Local</label>
                            <input type="text" id="local" name="local" />
                    </div>
                    @error('local')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror


                    <div class="sm:col-span-6">
                        <label for="nacimiento" class=""> Nacimiento </label>
                            <input type="date" id="nacimiento" name="nacimiento" />
                    </div>
                    @error('nacimiento')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror


                    <div class="sm:col-span-6">
                        <label for="inicio" class=""> Inicio </label>
                            <input type="date" id="inicio" name="inicio" />
                    </div>
                    @error('inicio')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror

                    <div class="sm:col-span-6">
                        <label for="fin" class=""> Fin </label>
                            <input type="date" id="fin" name="fin" />
                    </div>
                    @error('fin')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror

                    <div class="sm:col-span-6">
                        <label for="type" class=""> Contrato </label>
                            <input type="text" id="type" name="type" />
                    </div>
                    @error('type')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror
                      <div class="mt-6 p-4">
                          
                      <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-green">Store</button>
                      </div>
                     
                  </form>
              </div>
    
    </div>
    
</body>
</html>