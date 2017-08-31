<form class="post-form-wrapper" method="post" action="{{url('/post/a/job')}}">

	{{csrf_field()}}
	<div class="row gap-20">

		<div class="col-sm-8 col-md-8">
		
			<div class="form-group">
				<label>Job Title</label>
				<input type="text" class="form-control" name="title" required="required">
			</div>
			
		</div>
		
		<div class="clear"></div>
		
		<div class="col-sm-8 col-md-4">
		
			<div class="form-group">
				<label>Company</label>
				<select class="selectpicker show-tick form-control" data-live-search="false" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" data-none-selected-text="All" name="company" required="required">
					<option value="" selected>Select</option>
					@foreach($allcompany as $cmp)
						<option value="{{$cmp->id}}">{{$cmp->name}}</option>
					@endforeach
				</select>
			</div>
			
		</div>

		<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
		
			<div class="form-group mb-20">
				<label>Due Date:</label>
				<input type="date" class="form-control" name="due_date" required="required">
			</div>
			
			
		</div>
		
		<div class="clear"></div>
		<input type="hidden" name="progress1" value="1">
		
		<div class="col-sm-8 col-md-8">
		
			<div class="form-group">
				<label>Rate/Salary</label>
				
				<div class="row gap-20">
					<div class="col-sm-6">
						<div class="input-group">
							<input type="text" class="form-control" name="salary">
							<span class="input-group-addon">$</span>
						</div>
					</div>
					<div class="col-sm-6">
					
						<div class="clearfix" style="margin-top: 2px;">
						
							<div class="pull-left">
								<div class="text-primary font600" style="margin-right: 15px; margin-top: 2px;">or</div>
							</div>
								<div class="pull-left">
								<div class="radio-block" style="margin-top: 2px;">
									<input id="radio_salary-1" name="radio_salary" type="radio" class="radio" />
									<label for="radio_salary-1">Negotiable</label>
								</div>
							</div>
						
						</div>
						
					</div>
				</div>
				
			</div>
			
		</div>
		
		<div class="clear"></div>
		
		<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
		
			<div class="form-group mb-20">
				<label>Job Type:</label>
				<select class="selectpicker show-tick form-control" data-live-search="false" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" data-none-selected-text="All" name="job_type" required="required">
					<option value="" selected>Select</option>
					@foreach($jobtype as $jb)
						<option value="{{$jb->id}}">{{$jb->name}}</option>
					@endforeach
					
				</select>
			</div>
			
		</div>
		
		<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
		
			<div class="form-group mb-20">
				<label>Experience:</label>
				<select class="selectpicker show-tick form-control" data-live-search="false" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" data-none-selected-text="All" name="experience" required="required">
					<option value="" >Select</option>
					<option value="1">Expert</option>
					<option value="2">2 Years</option>
					<option value="3">3 Years</option>
					<option value="4">4 Years</option>
					<option value="5">5 Years</option>
				</select>
			</div>
			
			
		</div>

		<div class="clear"></div>
		
		<div class="col-sm-12 col-md-12">
		
			<div class="form-group bootstrap3-wysihtml5-wrapper">
				<label>Job Description</label>
				<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;" name="description" required="required"></textarea>
			</div>
			
		</div>
		
		<div class="clear"></div>
		
		<div class="col-sm-6 mt-30">
			<button class="btn btn-primary btn-sm" type="submit">Post your Job</button>
		</div>

	</div>
	
</form>