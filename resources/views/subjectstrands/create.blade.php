@extends('layouts.master')
@section('content')
	<div class="container">
		
		<form method="POST" action="/subject-strands/store">
			@csrf
		  <div class="form-group">

		  	<label for='Subject'>Subjects</label>
		  	<select name='subject_id' class="form-control">
		  		@foreach($subjects as $subject)
				<option value='{{$subject->name}}'>{{$subject->name}}</option>
				@endforeach
			</select>

			<label for='Strand'>Strands</label>
		  	<select name='strand_id' class="form-control">
		  		@foreach($strands as $strand)
				<option value='{{$strand->name}}'>{{$strand->name}}</option>
				@endforeach
			</select><br>

		    <input type="text" class="form-control" name='semester' aria-describedby="emailHelp" placeholder="Semester"><br>

		    <input type="text" class="form-control" name='grade_level' aria-describedby="emailHelp" placeholder="Grade Level">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
