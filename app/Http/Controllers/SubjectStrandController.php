<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject_Strands;
use App\Strands;
use App\Subjects;


class SubjectStrandsController extends Controller
{
    public function index()
    {
    	$subjectstrands = Subject_Strands::all();
    	return view('subjectstrands.index')->with('subject_strands', $subjectstrands);
    }
    public function create()
    {
        $subjects = Subjects::all();
        $strands = Strands::all();

        return view('subjectstrands.create',compact('subjects', 'strands'));
    }

     public function edit(Subject_Strands $subject_strand)
    {
        $subjects = Subjects::all()
        return view('subjectstrands.edit',compact('subject_strand', '$subjects'));
        //dd($subs);

        $strands = Strands::all()
        return view('subjectstrands.edit',compact('subject_strand', '$strands'));
    }

    public function store(Subjects $subject, Strands $strand)
    {
        request()->validate([
            //'subject_id' => 'required',
            //'strand_id' => 'required',
            'semester' => 'required',
            'grade_level' => 'required',
            
        ]);
        
    	$subjectstrands = new Subject_Strands;
        $subjectstrands->subject_id = request()->subject_id;
        $subjectstrands->strand_id = request()->strand_id;
        $subjectstrands->semester = request()->semester;
        $subjectstrands->grade_level = request()->grade_level;
    	$subjectstrands->save();

    	return redirect('/subject-strands');
    }
    //public function update(Subject_Strands $subject_strand)
    //{
       // $subjectstrands->name = request()->name;
        //$subjectstrands->save();
   // }

}
