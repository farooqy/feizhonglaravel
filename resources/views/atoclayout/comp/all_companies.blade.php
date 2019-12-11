<div class="container">
	<div class="row">
		<div class="ui-block col-md-12 col-lg-12">
			<div class="row mt-2 mb-2">
				<div class="col-md-4 col-lg-4">
					<select name="searchfilter" class="select">
						<option value="" >Filter</option>
						<option value="" >Industry</option>
						<option value="" >Best Rate</option>
						<option value="" >New Companies</option>
					</select>
				</div>
				<div class="col-md-5 col-lg-5">
					<input class="input" name="searchinput"
					placeholder="Search" />
				</div>
				<input class="col-md-3 col-lg-3 btn btn-primary"
				class="input" value="Search" style=" height: 58px;">

			</div>

		</div>
	</div>
</div>


	<div class="container">
		<div class="row">
		  <div class="card">
				<div class="card-header">List of companies</div>
					<div class="card-body">
						<div class="row">
							<companylist v-for="comp in comp_list" v-bind="comp"></companylist>
						</div>

					</div>

			</div>
		</div>


	</div>
