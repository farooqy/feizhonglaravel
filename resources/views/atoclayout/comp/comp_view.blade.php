<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header">

					<div class="main-header" style="max-width:unset;">
						<div class="content-bg-wrap bg-account"></div>
						<div class="container">
							<div class="row">
								<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
									<div class="main-header-content">
										<h1>@{{Comp_Profile.company_name}}</h1>
										<p>@{{Comp_Profile.company_description}}</p>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="profile-section" style="z-index:0">
						<div class="row">
							<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="" @click.prevent="toggleTab(0)"
										:class="{'active': profile_tabs.about_tab}">About</a>
									</li>
									<li>
										<a href="" @click.prevent="toggleTab(1)"
										:class="{'active': profile_tabs.post_tab}">Posts</a>
									</li>
								</ul>
							</div>
							<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="" @click.prevent="toggleTab(2)"
										:class="{'active': profile_tabs.product_tab}">Products</a>
									</li>
									<li>
										<a href="" @click.prevent="toggleTab(3)"
										:class="{'active': profile_tabs.address_tab}">Address</a>
									</li>
									<li>
										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
											<ul class="more-dropdown more-with-triangle">
												<li>
													<a href="#">Report Profile</a>
												</li>
												<li>
													<a href="#">Block Profile</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
					<div class="top-header-author" style="z-index:0">
						<a href="02-ProfilePage.html" class="author-thumb">
							<img :src="Comp_Profile.company_logo" alt="author"
							style="height: 100%;">
						</a>
						<div class="author-content">
							<a href="02-ProfilePage.html" class="h4 author-name">
								@{{Comp_Profile.company_province}}
							</a>
							<div class="country">
								@{{Comp_Profile.company_city}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="container" v-show="profile_tabs.about_tab">
	<div class="row">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="ui-block">

					<div class="ui-block-title">
						<div class="h6 title">Customer Interactions</div>
						<span class="more">
							<i class="fas fa-bars"></i>
						</span>
					</div>
				<div class="ui-block-content">
					<div class="monthly-indicator">
						<div class="monthly-count">
							0 New Favourites
							<span class="indicator positive"> + 0</span>
							<span class="period">Last Month</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="ui-block">

				<div class="ui-block-title">
					<div class="h6 title">Company Visitors</div>
					<span class="more">
						<i class="fas fa-chart-bar"></i>
					</span>
				</div>
				<div class="ui-block-content">
					<div class="monthly-indicator">
						<div class="monthly-count">
							0 New Visitors
							<span class="indicator negative"> + 0</span>
							<span class="period">Last Month</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container" v-show="profile_tabs.about_tab">
	<div class="row">
		<div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<div class="h6 title">Single Two Bar Graphic</div>
					<span class="more">
						<i class="fas fa-chart-bar"></i>
					</span>
				</div>

				<div class="ui-block-content">

					<div class="points">

						<span>
							<span class="statistics-point bg-primary"></span>
							Statistic 01
						</span>

						<span>
							<span class="statistics-point bg-yellow"></span>
							Statistic 02
						</span>

					</div>

					<div class="chart-js chart-js-two-bars">
						<iframe class="chartjs-hidden-iframe" tabindex="-1"
						style="display: block; overflow: hidden; border: 0px;
						margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px;
						height: 100%; width: 100%; position: absolute;
						pointer-events: none; z-index: -1;"></iframe>
						<canvas id="two-bars-chart" width="292" height="219"
						style="display: block; width: 292px; height: 219px;"></canvas>
					</div>

				</div>

			</div>
		</div>
		<div class="col col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">Lines Graphic</div>

					<div class="form-group"><div class="btn-group bootstrap-select form-control without-border"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="LAST YEAR (2016)"><span class="filter-option pull-left">LAST YEAR (2016)</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">LAST YEAR (2016)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">CURRENT YEAR (2017)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control without-border" tabindex="-98">
						<option value="LY">LAST YEAR (2016)</option>
						<option value="2">CURRENT YEAR (2017)</option>
					</select></div><span class="material-input"></span></div>

					<div class="points align-right">

						<span>
							<span class="statistics-point bg-blue"></span>
							FAVOURITES
						</span>

						<span>
							<span class="statistics-point bg-breez"></span>
							VISITORS
						</span>

					</div>

					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg></a>

				</div>

				<div class="ui-block-content">
					<div class="chart-js chart-js-line-stacked"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
						<canvas id="line-stacked-chart" width="662" height="272" style="display: block; width: 662px; height: 272px;"></canvas>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


<div class="container" v-show="profile_tabs.address_tab">
	<compaddress v-bind="Comp_Profile"></compaddress>


	<div class="row mb-3">
		<baidumap></baidumap>
	</div>
</div>

<div class="container" v-show="profile_tabs.post_tab">
		<div class="card">
			<div class="card-header">Company post</div>
			<div class="card-body" style="border-right: thin solid gray;">
				<div class="row">
		      <statuslistv2 v-for="status in Status" v-bind="status"
					class="col-md-4 col-lg-4" style="border-left: thin solid;
    border-top: thin solid gray;"></statuslistv2>
				</div>
			</div>

	  </div>
</div>

<div class="container mb-3" v-show="profile_tabs.product_tab">

	<div class="card">
		<div class="card-header">Company post</div>
		<div class="card-body" style="border-right: thin solid gray;">
			<div class="row">
				<productviewgrid v-for="product in productList"
				v-bind="product"
				class="col-md-6 col-lg-6 col-xl-6" ></productviewgrid>
			</div>
		</div>

	</div>
</div>
