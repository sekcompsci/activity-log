@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-8">
							<h3 class="panel-title">กิจกรรม : {{ $activity->Name }}</h3>
						</div>
						<div class="col-xs-4">
							<select class="form-control" onchange="location = '/activity/{{ $activity->ID }}/'+this.value ">
								@foreach($history as $his)
									@if($his->Year == $select)
										<option value="{{ $his->Year }}" selected>{{ $his->Year }}</option>
									@else
										<option value="{{ $his->Year }}">{{ $his->Year }}</option>
									@endif
								@endforeach
							</select>
							<div class="dropdown" style="float:right;">
								<button class="btn btn-default dropdown-toggle" type="button" id="จัดการข้อมูล" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								จัดการข้อมูล
								<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="จัดการข้อมูล">
									<li><a href="create/{{ $activity->ID }}">เพิ่มประวัติ</a></li>
									<li><a href="edit/{{ $activity->ID }}/{{ $select }}">แก้ไขประวัติ</a></li>
									<li><a href="delete/{{ $activity->ID }}/{{ $select }}">ลบประวัติ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">รายละเอียด</a></li>
						<li role="presentation"><a href="#participant" aria-controls="participant" role="tab" data-toggle="tab">ผู้ร่วมกิจกรรม</a></li>
						<li role="presentation"><a href="#group" aria-controls="group" role="tab" data-toggle="tab">ข้อมูลฝ่าย</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="description">
							<br>
							<div class="row">
								<div class="col-md-4">
									<a href="{{ $detail->Poster }}" data-lity><img src="{{ $detail->Poster }}" class="img-responsive"></a>
								</div>
								<div class="col-md-8">
									<h4><i class="fa fa-map-marker" aria-hidden="true"></i> สถานที่</h4>
									<p>{{ $detail->Location }}</p>
									<h4><i class="fa fa-sticky-note-o" aria-hidden="true"></i> รายละเอียด</h4>
									<p>{{ $detail->Description }}</p>
									<h4><i class="fa fa-clock-o" aria-hidden="true"></i> ชั่วโมงกิจกรรม</h4>
									<p>{{ $detail->GE }} ชั่วโมง</p>
									<h4><i class="fa fa-user" aria-hidden="true"></i> ผู้รับผิดชอบ</h4>
									@foreach($staff as $staff)
										<p>{{ $staff->MID }} {{ $staff->FirstName }} {{ $staff->LastName }} : <b>{{ $staff->Position }}</b></p>
									@endforeach
								</div>
							</div>
							<div class="page-header">
								<h2>ภาพกิจกรรม</h2>
							</div>
							<!-- Check isset picture -->
							@if($picture != "[]")
								{{--*/ $i = 1 /*--}}
										<div class="row">
								<!-- Loop show picture -->
								@foreach($picture as $pic)
										<div class="col-md-3">
											<a href="{{ $pic->Url }}" data-lity><img src="{{ $pic->Url }}" class="img-responsive"></a>
										</div>
									@if($i == $count)
										</div>
									@elseif($i % 4 == 0)
										</div>
										<br>
										<div class="row">
									@endif
									{{--*/ $i++ /*--}}
								@endforeach
								<!-- End Loop -->
							@elseif($picture == "[]")
								ไม่พบรูปภาพ
							@endif
							<!-- End Picture -->
						</div>
						<div role="tabpanel" class="tab-pane fade" id="participant">
							<br>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Code</th>
										<th>Name</th>
										<th>Date</th>
										<th>Time</th>
									</tr>
								</thead>
								<tbody id="member">
									<!-- <tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr> -->
								</tbody>
							</table>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="group">
							<br>
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											ฝ่ายการเงิน
										</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											ฝ่ายสถานที่
										</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											ฝ่ายทะเบียน
										</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('netpie')
	<script src="https://netpie.io/microgear.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
      const APPID     = "SCCheckin";
      const APPKEY    = "PVm0Ij34VFYPklB";
      const APPSECRET = "siYbpWxiHe51rYPeVEeu6CFjk";

        var microgear = Microgear.create({
            key: APPKEY,
            secret: APPSECRET,
            alias : "WebCommand"         /*  optional  */
        });

        microgear.on('message',function(topic,msg) {
            if(msg == "bca8ae2b")
            	msg = "<tr><td>560510666</td><td>นายธรรมดี มีธรรม</td><td><?php echo date("m-d-Y"); ?></td><td><?php echo date("H:m"); ?></td></tr>";
            else if(msg == "86d40449")
           		msg = "<tr><td>570510777</td><td>นายวิทยา พาความสุข</td><td><?php echo date("m-d-Y"); ?></td><td><?php echo date("H:m"); ?></td></tr>";
            else if(msg == "77ab1e2b")
            	msg = "<tr><td>580510888</td><td>นายปิตา มานี</td><td><?php echo date("m-d-Y"); ?></td><td><?php echo date("H:m")?></td></tr>";

            $("#member").append(msg);
        });

        microgear.on('connected', function() {
            microgear.setAlias('WebCommand');    /* alias can be renamed anytime with this function */
            //document.getElementById("member").innerHTML = "Now I am connected with netpie...<br>";
        });

        microgear.on('present', function(event) {
            console.log(event);
        });

        microgear.on('absent', function(event) {
            console.log(event);
        });

        microgear.connect(APPID);
    </script>
@endsection