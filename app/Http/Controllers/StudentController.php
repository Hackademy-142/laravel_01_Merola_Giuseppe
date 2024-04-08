<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $array = [
        ['id'=>1,'nome' => 'Giuseppe', 'cognome' => 'Merola'],
        ['id'=>2,'nome' => 'Flavia', 'cognome' => 'Vignanelli'],
        ['id'=>3,'nome' => 'Giovanni', 'cognome' => 'Sugamiele'],
        ['id'=>4,'nome' => 'Emanuele', 'cognome' => 'Pelliccia'],
        ['id'=>5,'nome' => 'Karim', 'cognome' => 'Ben Abid']
    ];

    public function studenti(){
        return view('pagina2', ['students' => $this->array]);
    }

    public function studentiNome($id){
        foreach ($this->array as $student) {
            if ($id == $student['id']) {
                return view('pagina2', ['student'=> $student]);
            }
        }
    }


}
