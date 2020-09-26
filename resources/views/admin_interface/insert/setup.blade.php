@extends('admin_interface.index')
@section('content')
<section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
</section>


<section class="content">
	<form method="post" action="{{url('addSetting')}}" enctype="multipart/form-data">
		<div class="form-group">
			<label>Logo</label>
				<input type="file" name="image" class="btn btn-success">
		</div>
	</form>
</section>
@stop