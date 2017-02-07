@extends('layouts.master')


@section('content')


<section class="hero is-info margin-top">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Primary title
      </h1>
      <h2 class="subtitle">
        Primary subtitle
      </h2>
    </div>
  </div>
</section>

<section class="section">
	
	<div class="container">
	
		
		<table class="table">
			
			<thead>
				<tr>
					<th class="is-info">Name</th>
					<th>Email</th>
					<th>Api_Token</th>
				</tr>				
			</thead>
				
			@if($users)
				
				@foreach($users as $user)
				
				<tfoot>
					<tr>
						<td> {{ $user->name }} </td>
						<td> {{ $user->email }} </td>
						<td class="is-info"> {{ $user->api_token }} </td>
					</tr>
				</tfoot>

				@endforeach

			@endif

		</table>


	</div>



</section>





@endsection