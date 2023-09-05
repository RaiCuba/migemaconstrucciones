<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Backup\Tasks\Backup\BackupJob;

use Spatie\Backup\BackupDestination\Backup;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function realizarBackup()
    {
        // Ejecuta el comando de respaldo usando Artisan
        Artisan::call('backup:run');
        //return view('backup.index');

        return redirect()->route('realizar.backup.form')->with('Correcto', 'Copia de seguridad creada exitosamente.');
        //return view('backup.index');
    }
    public function index()
    {
        return view('backup.index');
    }
}
