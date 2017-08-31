

@if($job->post_status == 30)
<h3>Set Job Location</h3>
<form class="post-form-wrapper" method="post" action="{{url('/post/a/job')}}">
	{{csrf_field()}}
	<div class="row gap-20">


		<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
		
			<div class="form-group mb-20">
				<label>State/Province:</label>
				<input type="text" class="form-control" required="required" name="state">
			</div>
			
		</div>
		
		<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
			<div class="form-group mb-20">
				<label>City:</label>
				<input type="text" class="form-control" required="required" name="city">
			</div>
		</div>
		
		<div class="clear"></div>

		<input type="hidden" name="progress2" value="2">
		<input type="hidden" name="job_id" value="{{$job->id}}">
		
		<div class="clear"></div>
		
		<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
		
			<div class="form-group mb-20">
				<label>Country:</label>
				<select class="selectpicker show-tick form-control" data-live-search="false" name="country" required="required">
					<option value="{{$company->country}}">{{$company->country}}</option>
					<option value="Thailand">Thailand</option>
					<option value="France">France</option>
					<option value="China">China</option>
					<option value="Malaysia">Malaysia </option>
					<option value="Italy">Italy</option>
					<option value="Kenya">Kenya</option>
				</select>
			</div>
			
		</div>
		
		<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
			<div class="form-group mb-20">
				<label>Zip:</label>
				<input type="text" class="form-control" required="required" name="zip">
			</div>
		</div>

		<div class="clear"></div>
		
		<div class="col-sm-12 col-md-12">
		
			<div class="form-group bootstrap3-wysihtml5-wrapper">
				<label>Street Address</label>
				<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;" required="required" name="street"></textarea>
			</div>
			
		</div>
		
		<div class="clear"></div>
		
		
		<div class="col-sm-6 mt-30">
			<button class="btn btn-primary btn-sm" type="submit">Save job location</button>
			<!-- <a href="#" class="btn btn-primary btn-sm">Post Your Job</a> -->
		</div>

	</div>
</form>
@elseif($job->post_status == 55)
<!-- setting responsibility and requirement -->
<h3>Set Job Responsibility & Requirement</h3>
<form class="post-form-wrapper" method="post" action="{{url('/post/a/job')}}">

	{{csrf_field()}}

	<div class="row gap-20">

		<div class="col-sm-12 col-md-12">
		
			<div class="form-group bootstrap3-wysihtml5-wrapper">
				<label>Job Responsibilies</label>
				<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;" required="required" name="responsibility"></textarea>
			</div>
			
		</div>
		
		<div class="clear"></div>
		
		<div class="col-sm-12 col-md-12">
		
			<div class="form-group bootstrap3-wysihtml5-wrapper">
				<label>Requirements</label>
				<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;" name="requirements" required="required"></textarea>
			</div>
			
		</div>

		<input type="hidden" name="progress3" value="3">
		<input type="hidden" name="job_id" value="{{$job->id}}">
		
		<div class="clear"></div>
		
		
		
		<div class="clear"></div>
		
		<div class="col-sm-6 mt-30">
			<button class="btn btn-primary btn-sm" type="submit">Save</button>
		</div>

	</div>
	
</form>

@elseif($job->post_status == 70)
<!-- setting skills -->
<h3>Set Skills Required</h3>
<form class="post-form-wrapper" method="post" action="{{url('/post/a/job')}}">

	{{csrf_field()}}

	<div class="row gap-20">

		<input type="hidden" name="progress4" value="4">
		<input type="hidden" name="job_id" value="{{$job->id}}">

		<div class="col-sm-12 col-md-12">
		
			<div class="form-group bootstrap3-wysihtml5-wrapper">
				<label>Select Skill</label>
				<select class="selectpicker show-tick form-control" data-live-search="false" name="skillset" required="required" onchange="loadSkillsetDetails(this.value);">
					<option value="">--Select--</option>
					@foreach($skillset as $sk)
						<option value="{{$sk->id}}">{{$sk->skill_name}}</option>
					@endforeach
				</select>
			</div>
			
		</div>
		
		<div class="clear"></div>

		<div class="col-sm-11" id="skillsetdatadiv" style="display: none;">

			<label class="mt-10" id="labello">Related Skills </label>
			
			<p class="mb-10">Click to select all skills that apply to you.</p>
			
		</div>
		
<!-- 		<div class="col-sm-12 col-md-12">
		
			<div class="form-group bootstrap3-wysihtml5-wrapper">
				<label>Skill details</label>
				<input type="text" class="form-control" id="autocompleteTagging" value="red,green,blue" placeholder="Start typing to add?" />
			</div>
			
		</div> -->
		
		<div class="clear"></div>
		
		
		
		<div class="col-sm-6 mt-30">
			<button class="btn btn-primary btn-sm" type="submit">Save skills</button>
		</div>

	</div>
	
</form>
@elseif($job->post_status == 85)
<!-- setting how to apply -->
<h3>How to Apply</h3>
<form class="post-form-wrapper" method="post" action="{{url('/post/a/job')}}">

	{{csrf_field()}}

	<div class="row gap-20">
		<input type="hidden" name="progress5" value="5">
		<input type="hidden" name="job_id" value="{{$job->id}}">
		
		<div class="col-sm-12 col-md-12">
		
			<div class="form-group bootstrap3-wysihtml5-wrapper">
				<label>How to apply</label>
				<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;" name="how_to_apply" required="required"></textarea>
			</div>
			
		</div>
		
		<div class="clear"></div>
		
		<div class="col-sm-6 mt-30">
			<button class="btn btn-primary btn-sm" type="submit">Save</button>
		</div>

	</div>
	
</form>

@endif