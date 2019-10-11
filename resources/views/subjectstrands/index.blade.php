@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Subject ID</th>
					<th scope="col">Strand ID</th>
					<th scope="col">Semester</th>
					<th scope="col">Grade Level</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($subject_strands as $subject_strand)
					<tr>
						<td>{{ $subject_strand->id }}</td>
						<td>{{ $subject_strand->subject_id }}</td>
						<td>{{ $subject_strand->strand_id }}</td>
						<td>{{ $subject_strand->semester }}</td>
						<td>{{ $subject_strand->grade_level }}</td>
						<td><a href="/subject-strands/{{ $subject_strand->id }}/edit">Edit</a></td>
						
					</tr>
				@endforeach
			</tbody>
			
			
		</table>
		<a class="btn btn-primary" href='/subject-strands/add'>Add New Subject Strand</a>
	</div>
@endsection