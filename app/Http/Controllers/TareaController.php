<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Revision;
use App\Models\TareaCategoria;


class TareaController extends Controller
{
    public function InsertarTareaConDosCategorias()
    {
        try
        {

        DB::raw('LOCK TABLE Tarea READ');
        DB::raw('LOCK TABLE TareaCategoria READ');


        $Tarea = new Tarea();

        $Tarea -> titulo = "pitochico";
        $Tarea -> contenido = "qerqwrqwrqwerqwre";
        $Tarea -> usuario_id = 1;

        DB::commit();
        $Tarea->save();

        $TareaCategorias = new TareaCategorias();

        $TareaCategorias -> categoria = "asdasdasdsa";
        $TareaCategorias -> tarea_id = $idtarea;

        DB::commit();
        $TareaCategorias->save();

        }
        catch (QueryException $th)
        {
            DB::rollBack();
        } 
    }

    public function InsertarTareaConRevision()
    {
        try
        {

        DB::raw('LOCK TABLE Tarea WRITE');
        DB::raw('LOCK TABLE TareaCategoria WRITE');


        $Tarea = new Tarea();

        $Tarea -> titulo = "pitochico";
        $Tarea -> contenido = "qerqwrqwrqwerqwre";
        $Tarea -> usuario_id = 1;

        DB::commit();
        $Tarea->save();

        $Revision = new Revision();

        $Revision -> detalle = "asdasdasdsa";
        $Revision -> tarea_id = $idtarea;

        DB::commit();
        $Revision->save();

        }
        catch (QueryException $th)
        {
            DB::rollBack();
        } 
    }

}
