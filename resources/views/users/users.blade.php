@extends('app')

@section('content')

			      	
<div class="row">
	<div class="col-md-12">
			      
		<span class="h4">Users <a href="{{ url('users/create') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></span>

		<div class="pull-right">
			<a href="{{ url('users') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
		</div>

		<div class="spacerSmall"></div>

			      <!-- Table -->
			      <table class="table">
			        <thead class="bghead">
			          <tr>
			            <th>name</th>
			            <th>Email</th>
			            <th class="text-center">Status</th>
			          </tr>
			        </thead>
			        <tbody>

			        	@foreach ($users as $user)
			        	
					          <tr class="project-table">
					            
					            <td>{!! $user->name !!}</td>
					            <td>{!! $user->email !!}</td>
					            <td class="text-center">
					            	<a href="{{ url('users/' .$user->id. '/edit') }}">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>
									|
									<a href="javascript:deleteUser('{{ $user->id }}');">
										<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									</a>
								</td>
					            
					          </tr>
				        
			         @endforeach
			         @if ($users->render())
				         <tr class="project-table">
				         	<td colspan="3">
						         <?php echo $users->render(); ?>	
						    </td>
						</tr>
					@endif
			        </tbody>
			      </table>
	</div>			    
</div>
@endsection
