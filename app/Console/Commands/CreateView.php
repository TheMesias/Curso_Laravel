<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File; 

/*
Interactúa con el sistema de archivos de manera más intuitiva: Proporciona métodos convenientes para acceder a archivos y directorios, 
como get(), put(), exists(), delete(), copy(), move(), etc.
Abstrae la complejidad del sistema de archivos subyacente: No necesitas preocuparte por las diferencias entre sistemas operativos 
o las rutas absolutas de los archivos.
Integración con los servicios de almacenamiento en la nube: Laravel puede configurarse para utilizar la fachada File 
con servicios como Amazon S3, lo que permite un acceso uniforme a archivos tanto locales como en la nube. 
*/

class CreateView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $viewPath = resource_path('views/'.$name.'.blade.php'); 
        if(File::exists($viewPath)){
            $this->error('Ruta ya existe!'); 
        } else {
            File::put($viewPath, '');
            $this->info('View creada correctamente');
        }
    }
}
