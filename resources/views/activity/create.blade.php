@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">เพิ่มประวัติกิจกรรม</h3>
				</div>
				<div class="panel-body">
					{!! Form::open(array('url' => 'activity','files' => true)) !!}
					<div class="col-md-4">
						<div class="form-group">
							<?= Form::label('title', 'กิจกรรม : '.$activity->Title); ?>
							<?= Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ปีที่จัด ']); ?>
						</div>
						<div class="form-group">
							<?= Form::label('title', 'สถานที่'); ?>
							<?= Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'โรงเรียน...']); ?>
						</div>
						<div class="form-group">
							<?= Form::label('title', 'วันที่'); ?>
							<?= Form::text('title', null, ['class' => 'form-control', 'placeholder' => '1 มกราคม 2555']); ?>
						</div>
						<div class="form-group">
							<?= Form::label('title', 'ชั่วโมงกิจกรรม'); ?>
							<?= Form::text('title', null, ['class' => 'form-control', 'placeholder' => '3']); ?>
						</div>
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<?= Form::label('title', 'รายละเอียด'); ?>
							<?= Form::textarea('title', null, ['class' => 'form-control']); ?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<?= Form::label('title', 'ผู้รับผิดชอบ'); ?>
							<?= Form::text('title', null, ['class' => 'form-control']); ?>
						</div>
						<div class="form-group">
							<?= Form::text('title', null, ['class' => 'form-control']); ?>
						</div>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection