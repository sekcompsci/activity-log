@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel panel-heading">เกี่ยวกับเรา</div>
				<div class="panel-body">
					{{ $fullname }}
					<br>
					{{ $website }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection