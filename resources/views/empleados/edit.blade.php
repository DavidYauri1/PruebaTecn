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
                  <form method="POST" action="{{ route('empleados.update',$empleado->id) }}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="sm:col-span-6">
                          <label for="nombres" class="block text-sm font-medium text-gray-700"> Name </label>
                          <div class="mt-1">
                              <input type="text" id="nombres" name="nombres" value="{{ $empleado->nombres }}"/>
                          </div>

                      
                      </div>

                      

                      <label for="apellidos" class="block text-sm font-medium text-gray-700"> Apellidos </label>
                      <div class="mt-1">
                          <input type="text" id="apellidos" name="apellidos" value="{{ $empleado->apellidos }}"/>
                      </div>

                      <label for="Dni" class="block text-sm font-medium text-gray-700"> Dni </label>
                      <div class="mt-1">
                          <input type="number" id="Dni" name="Dni" value="{{ $empleado->Dni }}"/>
                      </div>


                      <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
                      <div class="mt-1">
                          <input type="email" id="email" name="email" value="{{ $empleado->email }}"/>
                      </div>


                      <label for="area" class="block text-sm font-medium text-gray-700"> Area </label>
                      <div class="mt-1">
                          <input type="text" id="area" name="area" value="{{ $empleado->area }}"/>
                      </div>


                      <label for="cargo" class="block text-sm font-medium text-gray-700"> Cargo </label>
                      <div class="mt-1">
                          <input type="text" id="cargo" name="cargo" value="{{ $empleado->cargo }}"/>
                      </div>


                      <label for="local" class="block text-sm font-medium text-gray-700"> Local </label>
                      <div class="mt-1">
                          <input type="text" id="local" name="local" value="{{ $empleado->local }}"/>
                      </div>


                      <label for="nacimiento" class="block text-sm font-medium text-gray-700"> Name </label>
                      <div class="mt-1">
                          <input type="text" id="nacimiento" name="nacimiento" value="{{ $empleado->nacimiento }}"/>
                      </div>


                      <label for="inicio" class="block text-sm font-medium text-gray-700"> Name </label>
                      <div class="mt-1">
                          <input type="text" id="inicio" name="inicio" value="{{ $empleado->inicio }}"/>
                      </div>

                      <label for="fin" class="block text-sm font-medium text-gray-700"> Name </label>
                      <div class="mt-1">
                          <input type="text" id="fin" name="fin" value="{{ $empleado->fin }}"/>
                      </div>


                      <label for="type" class="block text-sm font-medium text-gray-700"> Name </label>
                      <div class="mt-1">
                          <input type="text" id="type" name="type" value="{{ $empleado->type }}"/>
                      </div>


                      
                

                      <div class="mt-6 p-4">
                          
                      <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-black">Update</button>
                      </div>
                     
                  </form>
              </div>
    
    </div>    
    



</body>
</html>