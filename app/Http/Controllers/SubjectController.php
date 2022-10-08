<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    
	public function index(){
		$subjects = Subject::all();

		return view('subjects.index', ['subjects2' => $subjects]);

	}

	public function store(){


		$subject = new Subject();

		$subject->code = request('code');
		$subject->description = request('description');
		$subject->units = request('units');

		$subject->save();

		return redirect('/subjects');

	}
}
