<?php

use App\Http\Controllers\ActEmpController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\CostoProdController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpCarController;
use App\Http\Controllers\HoraAsigController;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TipoActController;
use App\Http\Controllers\TipoEmpController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LugarExtController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\CostoPro;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Operaciones 
Route::post('/calcular', [OperacionesController::class, 'calcular'])->name('calcular');
Route::get('/formulario', [OperacionesController::class, 'formulario'])->name('formulario');
Route::get('/getproductos', [OperacionesController::class, 'getproductos'])->name('getproductos');

Route::get('/obtener-descripcion/{id}', [OperacionesController::class, 'obtenerDescripcion']);

Route::get('/formulario1', [OperacionesController::class, 'formularioopera1'])->name('formulario1');
Route::get('/obtener-texto/{opcion}', 'OperacionesController@obtenerTexto');

//ASISTENCIA
//ver formulario de registro de asistencia
Route::get('/asistencia-registrar', [AsistenciaController::class, 'Verformregistrar'])->name('asistencia.formulario');

Route::get('/asistencia', [AsistenciaController::class, 'index'])->name('asistencia');
//registrar asistencia con coordenadas
Route::post('/registrar-asistencia', [AsistenciaController::class, 'store'])->name('registrar.asistencia');
//ver ubicacion en map
Route::get('/ubicacion/{id}', [AsistenciaController::class, 'verubicacion'])->name('verasistenciamap');

Route::post('/guardar-ubicacion', [OperacionesController::class, 'guardarUbicacion'])->name('guardar.ubicacion');
Route::post('/registrar-ubicacion', [OperacionesController::class, 'registrarUbicacion'])->name('ubicacion1');

Route::get('/', function () {
    return view('welcome');
});
//CLIENTES
//VER PAGINA  INDEX
Route::get('/index', [ClienteController::class, 'index'])->name('cliente.index');
//VER PAGINA  EMPRESA
Route::get('/empresa', [ClienteController::class, 'empresa'])->name('cliente.empresa');
//VER PAGINA  PROYECTOS
Route::get('/proyectos', [ClienteController::class, 'proyecto'])->name('cliente.proyecto');
//REGISTRAR USUARIO
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');

//REGISTRAR CONTACTO
Route::post('/contactos', [ContactosController::class, 'create'])->name('contacto.create');
//VER CONTACTO
Route::get('/ver-contactos', [ContactosController::class, 'index'])->name('contacto.mostrar');
//ELIMINAR CONTACTO
Route::get('/eliminar-contacto-{id}', [ContactosController::class, "delete"])->name("contacto.delete");
//ENVIAR RESPUESTA DE CONTACTO
Route::post('/send-email', [ContactosController::class, 'sendEmail'])->name('send.email');
//FORMULARIO DE RESPUESTA DE CONTACTO
Route::post('/contact/{id}/reply', [ContactController::class, 'reply'])->name('contact.reply');

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/logout', [LogoutController::class, 'logout']);
//INDEX 
Route::get('/verfotosimages', [ImagenController::class, 'index'])->name('imagens.index');
//REGISTRAR IMAGEN
Route::post('/registrarimages', [ImagenController::class, 'store'])->name('imagen.store');
//VER FORMULARIO DE REGISTRO DE IMAGENES
Route::get('/nuevaimages', [ImagenController::class, 'verformimg'])->name('imagen.nuevo');

//EMPLEADO
Route::get('/empleado', [EmpleadoController::class, "index"])->name("empleado");
Route::post('/registrar-empleado', [EmpleadoController::class, "create"])->name("empleado.create");
Route::put('/modificar-empleado/{id}', [EmpleadoController::class, "update"])->name("empleado.update");
Route::get('/eliminar-empleado-{id}', [EmpleadoController::class, "delete"])->name("empleado.delete");

Route::get('/nuevoempleado', [EmpleadoController::class, "verform"])->name("formularioempleado");
Route::get('/modificarempleado/{id}', [EmpleadoController::class, "formmodificar"])->name("modificarempleado");
//ACTIVIDAD
Route::get('/act', [ActividadController::class, "index"])->name("act");
Route::post('/registrar-act', [ActividadController::class, "create"])->name("act.create");
Route::put('/modificar-act/{id}', [ActividadController::class, "update"])->name("act.update");
Route::get('/eliminar-act-{id}', [ActividadController::class, "delete"])->name("act.delete");

Route::get('/nuevoact', [ActividadController::class, "verform"])->name("formularioact");
Route::get('/modificaract/{id}', [ActividadController::class, "formmodificar"])->name("modificaract");
//ASIGNACION DE ACTIVIDADES A EMPLEADOS
Route::get('/actemp', [ActEmpController::class, "index"])->name("actemp");
Route::post('/registrar-actemp', [ActEmpController::class, "create"])->name("actemp.create");
Route::put('/modificar-actemp/{id}', [ActEmpController::class, "update"])->name("actemp.update");
Route::get('/eliminar-actemp-{id}', [ActEmpController::class, "delete"])->name("actemp.delete");

Route::get('/nuevoactemp', [ActEmpController::class, "verform"])->name("formularioactemp");
Route::get('/modificaractemp/{id}', [ActEmpController::class, "formmodificar"])->name("modificaractemp");
//PERSONA
Route::get('/persona', [PersonaController::class, "index"])->name("persona");
Route::post('/registrar-persona', [PersonaController::class, "create"])->name("persona.create");
Route::put('/modificar-persona/{id}', [PersonaController::class, "update"])->name("persona.update");
Route::get('/eliminar-persona-{id}', [PersonaController::class, "delete"])->name("persona.delete");

Route::get('/nuevopersona', [PersonaController::class, "verform"])->name("formulariopersona");
Route::get('/modificarperson/{id}', [PersonaController::class, "formmodificar"])->name("modificarpersona");


//CARGO
Route::get('/cargo', [CargoController::class, "index"])->name("cargo");
Route::post('/registrar-cargo', [CargoController::class, "create"])->name("cargo.create");
Route::put('/modificar-cargo/{id}', [CargoController::class, "update"])->name("cargo.update");
Route::get('/eliminar-cargo-{id}', [CargoController::class, "delete"])->name("cargo.delete");

Route::get('/nuevocargo', [CargoController::class, "verform"])->name("formulariocargo");
Route::get('/modificarcar/{id}', [CargoController::class, "formmodificar"])->name("modificarcargo");

//CATEGORIA DE PRODUCTO
Route::get('/categoria', [CategoriaController::class, "index"])->name("categoria");
Route::post('/registrar-categoria', [CategoriaController::class, "create"])->name("categoria.create");
Route::put('/modificar-categoria/{id}', [CategoriaController::class, "update"])->name("categoria.update");
Route::get('/eliminar-categoria-{id}', [CategoriaController::class, "delete"])->name("categoria.delete");

Route::get('/nuevocategoria', [CategoriaController::class, "verform"])->name("formulariocategoria");
Route::get('/modificarcategori/{id}', [CategoriaController::class, "formmodificar"])->name("modificarcategoria");
//CIUDAD
Route::get('/ciudad', [CiudadController::class, "index"])->name("ciudad");
Route::post('/registrar-ciudad', [CiudadController::class, "create"])->name("ciudad.create");
Route::put('/modificar-ciudad/{id}', [CiudadController::class, "update"])->name("ciudad.update");
Route::get('/eliminar-ciudad-{id}', [CiudadController::class, "delete"])->name("ciudad.delete");

Route::get('/nuevaciudad', [CiudadController::class, "obtenerpais"])->name("formulariociudad");

Route::get('/modificar/{id}', [CiudadController::class, "formmodificar"])->name("modificarciudad11");

route::resource('departamento1', CiudadController::class);
//COSTO DE PRODUCTO
Route::get('/costoprod', [CostoProdController::class, "index"])->name("costoprod");
Route::post('/registrar-costoprod', [CostoProdController::class, "create"])->name("costoprod.create");
Route::put('/modificar-costoprod/{id}', [CostoProdController::class, "update"])->name("costoprod.update");
Route::get('/eliminar-costoprod-{id}', [CostoProdController::class, "delete"])->name("costoprod.delete");

Route::get('/nuevocostoprod', [CostoProdController::class, "verform"])->name("formulariocostoprod");
Route::get('/modificarcostopro/{id}', [CostoProdController::class, "formmodificar"])->name("modificarcostoprod");

//OPTENER DATOSDE COSTOPRO
Route::post('/getcostopro', [DetalleVentaController::class, 'getCostoPro'])->name("getcostopro");

//PROVEEDOR
Route::get('/proveedor', [ProveedorController::class, "index"])->name("proveedor");
Route::post('/registrar-proveedor', [ProveedorController::class, "create"])->name("proveedor.create");
Route::put('/modificar-proveedor/{id}', [ProveedorController::class, "update"])->name("proveedor.update");
Route::get('/eliminar-proveedor-{id}', [ProveedorController::class, "delete"])->name("proveedor.delete");

Route::get('/nuevoproveedor', [ProveedorController::class, "verform"])->name("formularioproveedor");
Route::get('/modificarproveedo/{id}', [ProveedorController::class, "formmodificar"])->name("modificarproveedor");

//DEPARTAMENTO
Route::get('/departamento', [DepartamentoController::class, "index"])->name("departamento");
Route::post('/registrar-departamento', [DepartamentoController::class, "create"])->name("departamento.create");
Route::put('/modificar-departamento/{id}', [DepartamentoController::class, "update"])->name("departamento.update");
Route::get('/eliminar-departamento-{id}', [DepartamentoController::class, "delete"])->name("departamento.delete");

Route::get('/nuevodepartamento', [DepartamentoController::class, "verform"])->name("formulariodepartamento");
Route::get('/modificar/{id}', [DepartamentoController::class, "formmodificar"])->name("modificardepartamento");
//ASIGNACION DE CARGO A EMPLEADO EMP_CAR
Route::get('/empcar', [EmpCarController::class, "index"])->name("empcar");
Route::post('/registrar-empcar', [EmpCarController::class, "create"])->name("empcar.create");
Route::put('/modificar-empcar/{id}', [EmpCarController::class, "update"])->name("empcar.update");
Route::get('/eliminar-empcar-{id}', [EmpCarController::class, "delete"])->name("empcar.delete");

Route::get('/nuevoempcar', [EmpCarController::class, "verform"])->name("formularioempcar");
Route::get('/modificaremp/{id}', [EmpCarController::class, "formmodificar"])->name("modificarempcar");

//HORA ASIGNACION DE EMPLEADO HORA_ASIG
Route::get('/horaasig', [HoraAsigController::class, "index"])->name("horaasig");
Route::post('/registrar-horaasig', [HoraAsigController::class, "create"])->name("horaasig.create");
Route::put('/modificar-horaasig/{id}', [HoraAsigController::class, "update"])->name("horaasig.update");
Route::get('/eliminar-horaasig-{id}', [HoraAsigController::class, "delete"])->name("horaasig.delete");

Route::get('/nuevohoraasig', [HoraAsigController::class, "verform"])->name("formulariohoraasig");
Route::get('/modificarhoraasi/{id}', [HoraAsigController::class, "formmodificar"])->name("modificarhoraasig");
//LUGAR DE PRODUCTO
Route::get('/lugar', [LugarController::class, "index"])->name("lugar");
Route::post('/registrar-lugar', [LugarController::class, "create"])->name("lugar.create");
Route::put('/modificar-lugar/{id}', [LugarController::class, "update"])->name("lugar.update");
Route::get('/eliminar-lugar-{id}', [LugarController::class, "delete"])->name("lugar.delete");

Route::get('/nuevolugar', [LugarController::class, "verform"])->name("formulariolugar");
Route::get('/modificarlugar/{id}', [LugarController::class, "formmodificar"])->name("modificarlugar");
//LUGAR DE EXTRACCION
Route::get('/lugarext', [LugarExtController::class, "index"])->name("lugarext");
Route::post('/registrar-lugarext', [LugarExtController::class, "create"])->name("lugarext.create");
Route::put('/modificar-lugarext/{id}', [LugarExtController::class, "update"])->name("lugarext.update");
Route::get('/eliminar-lugarext-{id}', [LugarExtController::class, "delete"])->name("lugarext.delete");

Route::get('/nuevolugarext', [LugarExtController::class, "verform"])->name("formulariolugarext");
Route::get('/modificarlugarex/{id}', [LugarExtController::class, "formmodificar"])->name("modificarlugarext");
//DETALLE_VENTA //VENTAS
Route::get('/ventas', [DetalleVentaController::class, "index"])->name("ventas");
Route::post('/registrar-ventas', [DetalleVentaController::class, "create"])->name("ventas.create");
Route::put('/modificar-ventas/{id}', [DetalleVentaController::class, "update"])->name("ventas.update");
Route::get('/eliminar-ventas-{id}', [DetalleVentaController::class, "delete"])->name("ventas.delete");

Route::get('/nuevoventas', [DetalleVentaController::class, "verform"])->name("formularioventas");
Route::get('/modificarventa/{id}', [DetalleVentaController::class, "formmodificar"])->name("modificarventas");


//MATERIAL
Route::get('/material', [MaterialController::class, "index"])->name("material");
Route::post('/registrar-material', [MaterialController::class, "create"])->name("material.create");
Route::put('/modificar-material/{id}', [MaterialController::class, "update"])->name("material.update");
Route::get('/eliminar-material-{id}', [MaterialController::class, "delete"])->name("material.delete");

Route::get('/nuevomaterial', [MaterialController::class, "verform"])->name("formulariomaterial");
Route::get('/modificarmateria/{id}', [MaterialController::class, "formmodificar"])->name("modificarmaterial");

//CRUD PAIS 
Route::get('/pais', [PaisController::class, "index"])->name("pais");
Route::post('/registrar-pais', [PaisController::class, "create"])->name("pais.create");
Route::put('/modificar-pais/{id}', [PaisController::class, "update"])->name("pais.update");
Route::get('/eliminar-pais-{id}', [PaisController::class, "delete"])->name("pais.delete");

Route::get('/nuevopais', [PaisController::class, "verform"])->name("formulariopais");
Route::get('/modificar/{id}', [PaisController::class, "formmodificar"])->name("modificarpais");
//OPTENER DEPARTAMENTO A PARTIR DEL PAIS
Route::post('/getDepartamentos', [PaisController::class, 'getDepartamento'])->name("getDepartamentos");

Route::post('/getDatos', [OperacionesController::class, 'getDatos'])->name("getDatos");
Route::post('/getDatos1', [OperacionesController::class, 'getDatos1'])->name("getDatos1");

//PRODUCTO
Route::get('/producto', [ProductoController::class, "index"])->name("producto");
Route::post('/registrar-producto', [ProductoController::class, "create"])->name("producto.create");
Route::put('/modificar-producto/{id}', [ProductoController::class, "update"])->name("producto.update");
Route::get('/eliminar-producto-{id}', [ProductoController::class, "delete"])->name("producto.delete");

Route::get('/nuevoproducto', [ProductoController::class, "verform"])->name("formularioproducto");
Route::get('/modificarproduct/{id}', [ProductoController::class, "formmodificar"])->name("modificarproducto");
//CRUD ROL
Route::get('/rol', [RolController::class, "index"])->name("rol");
Route::post('/registrar-rol', [RolController::class, "create"])->name("rol.create");
Route::put('/modificar-rol/{id}', [RolController::class, "update"])->name("rol.update");
Route::get('/eliminar-rol-{id}', [RolController::class, "delete"])->name("rol.delete");

Route::get('/nuevorol', [RolController::class, "verform"])->name("formulariorol");
Route::get('/modificarro/{id}', [RolController::class, "formmodificar"])->name("modificarrol");
//TIPO ACTIVIDAD
Route::get('/tipoact', [TipoActController::class, "index"])->name("tipoact");
Route::post('/registrar-tipoact', [TipoActController::class, "create"])->name("tipoact.create");
Route::put('/modificar-tipoact/{id}', [TipoActController::class, "update"])->name("tipoact.update");
Route::get('/eliminar-tipoact-{id}', [TipoActController::class, "delete"])->name("tipoact.delete");

Route::get('/nuevotipoact', [TipoActController::class, "verform"])->name("formulariotipoact");
Route::get('/modificartipoact/{id}', [TipoActController::class, "formmodificar"])->name("modificartipoact");

//TIPO EMP
Route::get('/tipoemp', [TipoEmpController::class, "index"])->name("tipoemp");
Route::post('/registrar-tipoemp', [TipoEmpController::class, "create"])->name("tipoemp.create");
Route::put('/modificar-tipoemp/{id}', [TipoEmpController::class, "update"])->name("tipoemp.update");
Route::get('/eliminar-tipoemp-{id}', [TipoEmpController::class, "delete"])->name("tipoemp.delete");

Route::get('/nuevotipoemp', [TipoEmpController::class, "verform"])->name("formulariotipoemp");
Route::get('/modificartipoemp/{id}', [TipoEmpController::class, "formmodificar"])->name("modificartipoemp");
