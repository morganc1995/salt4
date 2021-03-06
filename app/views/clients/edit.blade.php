@extends("master")


@section("content")

	<!-- onSubmit go to clientSave,and pass in the route to this form (for errors) -->
	{{ Form::model( $client , array('route' => array('clientSave' , 'clientEdit' ))) }}
	
		<div class='panel'>
			{{ Form::label('id','ID  :') }}
			 	{{ Form::text('id' , $client->id , ['readonly'] )  }} <br/>
			
			{{ Form::label('name','Name :') }}
			 	{{ Form::text('name',$client->name) }} <br/>
			
			{{ Form::label('phone' , 'Phone : ') }}
				{{ Form::input('tel','phone',$client->phone) }} <br/>

			{{ Form::label('email' , 'Email : ') }}
				{{ Form::email('email',$client->email) }} <br/>

			{{ Form::label('address' , 'Address : ') }}
				{{ Form::textarea('address',$client->address , [ 'rows' => 4 ]) }} <br/>

		</div>

		<div class='panel'>
	
			{{ Form::label('pps' , 'PPS : ') }}
				{{ Form::text('pps',$client->pps) }} <br/>

			{{ Form::label('dob' , 'Date of Birth : ') }}
				{{ Form::input('date','dob',$client->dob) }} <br/>

			{{ Form::label('therapist' , 'Therapist : ') }}
				{{ Form::select('therapist',$therapists,$client->therapist) }} <br/>

			{{ Form::label('username' , 'Login ID : ') }}
				{{ Form::text('username',$client->username) }} <br/>

			{{ Form::label('password' , 'Password : ') }}
				{{ Form::password('password',$client->password) }} <br/>

			{{ Form::label('password_confirmation' , 'Confirm : ') }}
				{{ Form::password('password_confirmation',$client->password) }} <br/>

		</div>
		
		<br clear='all' />
		{{ Form::label('notes' , 'Notes : ') }}
			{{ Form::textarea('notes',$client->notes , [ 'class' => 'notes' ] ) }} <br/>


		<div class="menuBar">
			
			<?php 
				$urlCancel = URL::route('clientDisplay',array($client->id));
			?>

			{{ Form::submit("Save Client") }}
			<a class='button' href='{{$urlCancel}}'>Cancel</a>
			
		</div>

	{{ Form::close() }}

@endsection


