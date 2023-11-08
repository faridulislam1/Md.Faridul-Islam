<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;

    private static $task;
    public static function saveTask($request){
        self::$task = new tasks();
        self::$task->title = $request->title;
        self::$task->description = $request->description;
        self::$task->completed = $request->completed;
        self::$task->save();
    }

    
      public static function taskDelete($id){
        self::$task=tasks::find($id);
        self::$task->delete();

    }
      public static  function taskUpdate($request){
        self::$task=tasks::find($request->id);

        self::$task->title = $request->title;
        self::$task->description = $request->description;
        self::$task->completed = $request->completed;
        self::$task->save();



    }


}

