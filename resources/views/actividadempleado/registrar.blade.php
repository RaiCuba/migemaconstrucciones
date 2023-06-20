@extends('layouts.menupricipal')
@section('Contenido')
  
  
          <form action="{{route("departamento.create")}}" method="post">
    <!--se requiere este para ralaval para que funciones-->
            @csrf 
            <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Nuevo Ciudad</h1>
            <label for="exampleInputEmail1" class="form-label">Pais</label>
            
            
            <select name="" id="idpais" class="form-control" >
              @foreach($datos as $pais)
              <option value="{{ $pais->id_pai }}">{{ $pais->nombre}}</option>
              @endforeach
            </select>

            <div>
            <label for="exampleInputEmail1" class="form-label">Departamento</label>
                
            <select name="" id="iddepartamento" class="form-control" >            </select> 
            </div>
            <div>
              <label for="exampleInputEmail1" class="form-label">Ciudad</label>
                  
              <select name="" id="idciudad" class="form-control" >            </select> 
              </div>
           


            {{-- <label for="exampleInputEmail1" class="form-label">Pais</label>
            <select wire:model="pais" id="idpais" name="textpais" class="form-control" >
              @foreach($paises as $pais)
              <option value="{{ $pais->id_pai }}">{{ $pais->nombre}}</option>
              @endforeach
            </select>  
         
            <div>
                <label for="exampleInputEmail1" class="form-label">Departamento</label>
                <select wire:model="departamento" id="iddepartamento" name="textdepartamento" class="form-control" >
                    @if ($departamento->count()==0)
                    <option value="">Debe seleccionar pais</option>
                    @endif

                    @foreach($departamentos as $departamento)
                  <option value="{{ $departamento->id_dep }}">{{ $departamento->nombre}}</option>
                  @endforeach
                </select>  
            </div> --}}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="textciudad" name="textciudad" required>
                <div id="emailHelp" class="form-text"></div>
              </div>
            
            
            <div >
              <a href="{{ route('departamento') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>    
              <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
          </form>
          @endsection

          @section('Script')
          <p>entro a la seccion de escrip</p>
         <script>

            const paises = document.getElementById('idpais')
            const departamentos = document.getElementById('iddepartamento')

            paises.addEventListener('change',async (e)=>{
              const response =await fetch("obtenerdepa/"${e.target.value}"")
              const data = await response.json();

              console.log(data);

              let options ='';

              data.forEach(element => {
                options = options + "<option values="${element.id_dep}"> "${element.nombre}"</optien>"               
              });
              departamentos.innerHTML = options;
              //console.log(e.target.value);
            })
         </script>
       <!--para que funcione el select dependiente-->
        {{-- <script>
          const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content; 
          //const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
          document.getElementById('idpais').addEventListener('change',(e)=>{
            fetch('obtenerdep',{
              method : 'POST',
              body: JSON.stringify({texto : e.target.value}),
              headers:{
                'Content-Type': 'application/json',
                "X-CSRF-Token": csrfToken
              }
            }).then(response =>{
              return response.json()
            }).then(data =>{
              var opciones="<option value="">Seleccionar</option>";
              //lista recibe del controlador 'lista' departamento
              for(let i in data.lista){
                opciones+='<option value="'+data.lista[i].id_dep+'">'+data.lista[i].nombre+'</option>';
              }
              document.getElementById("iddepartamento").innerHTML = opciones;
            }).catch(error => console.error(error));
          })

          document.getElementById('iddepartamento').addEventListener('change',(e)=>{
            //fetch es la ruta obtener ciudad
            fetch('obtenerciudad',{
              method : 'POST',
              body: JSON.stringify({texto:e.target.value}),
              headers:{
                'Content.Type':'application/json',
                "X-CSRF-Token":csrfToken
              }
            }).then(response =>{
              return response.JSON()
            }).then(data=>{
              var opciones="<option value="">Seleccionar</option>";
              for(let i in data.lista){
                opciones+='<option value="'+data.lista[i].id_ciu+'">'+data.lista[i].nombre+'</option>';
              }
              document.getElementById("idciudad").innerHTML = opciones;
            }).catch(error => console.error(error));
          })
        </script> --}}
        @endsection

