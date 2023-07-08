<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_register(){
            
        Artisan::call('migrate');

        //formulario de carga correcta
        $carga =$this->get(route('registrar.asistencia'));
        $carga->assertStatus(405)->assertSee('registrar.asistencia');

        //validar registros incorrectos de correo
       $incorrectos = $this->post(route('registrar.asistencia'),["id_emp"=>8,"id_ent_sal"=>10,"latitud" => "hola", "longitud"=>"car"]);
       $incorrectos->assertStatus(302)->assertRedirect(route('asistencia'));
     
    
    }   
    // 'name' =>'required',
    // 'username' =>'required',
    // 'email' =>'required|unique:users,email',
    // 'password' =>'required|min:8',
    // 'password_confirmation' =>'required|same:password',

}
