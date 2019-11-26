<div class="" v-if="auth_type.Register.Company"
    style="padding-left:0px;border: thin solid #50d0c8;background-color: black;color: white;">
    <!-- Nav tabs -->
    <div class="phases-container">

        <div class="phase_one reg_phases" :class="isActiveTab(1)">1</div>
        <div class="phase_one reg_phases" :class="isActiveTab(2)">2</div>
        <div class="phase_one reg_phases " :class="isActiveTab(3)">3</div>

    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="title">Registering as a supplier</h3>
        </div>
        <div class="card-body" v-if="Navigation.stage_one">
            <div class="row">
                <div class="form-group label-floating is-empty col-md-8 col-lg-8">
                    <label class="control-label">Company Email</label>
                    <input class="form-control" placeholder="" type="email" style="padding-top: 40px;"
                    v-model="Company.company_email"  >
                    <span class="material-input"></span>
                </div>
                <div class="form-group label-floating is-empty col-md-4 col-lg-4">
                    <button class="btn btn-primary btn-md-2" style="height: 55px; " @click.prevent="showEmailConfirmation()">Get Code</button>
                    <span class="material-input"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-group label-floating is-empty col-md-12 col-lg-12">
                    <label class="control-label">Enter code here</label>
                    <input class="form-control" placeholder="" type="number" style="padding-top: 40px;">
                    <span class="material-input"></span>
                </div>
            </div>
        </div>
        <div class="card-body" v-if="Navigation.stage_two">
            <div class="row">
                <div class="form-group label-floating is-select col-md-4 col-lg-4">
                    <label class="control-label">Your Telephone</label>
                    <select class="form-control" live-search="true">
                        <option value="+86" selected>China + 86</option>
                        <option value="+244">Congo + 244</option>
                        <option value="+252">Djibouti +253</option>
                        <option value="+251">Ethiopia +251</option>
                        <option value="+233">Ghana +233</option>
                        <option value="+254">Kenya +254</option>
                        <option value="+263">Mozambique +263</option>
                        <option value="+264">Namibia +254</option>
                        <option value="+234">Nigeria +234</option>
                        <option value="+252">Somalia +252</option>
                        <option value="+27">South Africa +27</option>
                        <option value="+255">Tanzania +255</option>
                        <option value="+260">Zambia +260</option>
                        <option value="+263">Zimbabwe +263</option>
                    </select>
                </div>
                <div class="form-group label-floating is-select col-md-8 col-lg-8">
                    <label class="control-label">Your Telephone</label>
                    <input class="form-control" placeholder="" type="number" style="padding-top: 40px;">
                    <span class="material-input"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-group label-floating is-empty col-md-12 col-lg-12">
                    <label class="control-label">Enter Company name</label>
                    <input class="form-control" placeholder="" type="text" style="padding-top: 40px;">
                    <span class="material-input"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-group label-floating is-empty col-md-12 col-lg-12">
                    <label class="control-label">Enter Company password</label>
                    <input class="form-control" placeholder="" type="password" style="padding-top: 40px;">
                    <span class="material-input"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-group label-floating is-empty col-md-12 col-lg-12">
                    <label class="control-label">Verify password</label>
                    <input class="form-control" placeholder="" type="password" style="padding-top: 40px;">
                    <span class="material-input"></span>
                </div>
            </div>
        </div>
        <div class="card-body" v-if="Navigation.stage_three">
            <div class="row">
                <div class="form-group label-floating is-empty col-md-6 col-lg-6">
                    <label class="control-label">Enter Company address one, city</label>
                    <input class="form-control" placeholder="" type="text" style="padding-top: 40px;">
                    <span class="material-input"></span>
                </div>
                <div class="form-group label-floating is-empty col-md-6 col-lg-6">
                    <label class="control-label">Enter Company address two</label>
                    <input class="form-control" placeholder="" type="text" style="padding-top: 40px;">
                    <span class="material-input"></span>
                </div>
            </div>
            <div class="row">
                <div class="form-group label-floating is-empty col-md-6 col-lg-6">
                    <label class="control-label">Enter Company province</label>
                    <input class="form-control" placeholder="" type="text" style="padding-top: 40px;">
                    <span class="material-input"></span>
                </div>
                <div class="form-group label-floating is-empty col-md-6 col-lg-6">
                    <label class="control-label">Enter Company Country</label>
                    <input class="form-control" placeholder="" type="text" value="China" style="padding-top: 40px;">
                    <span class="material-input"></span>
                </div>
            </div>
        </div>

        <div class="card-body" v-if="Navigation.stage_four">
            <div class="row">
                <div class="form-group label-floating is-empty col-md-6 col-lg-6">
                    <select name="company_type" class="form-control " @change.prevent="updateSelect($event)"
                        v-model="Company.company_type">
                        <option value="Aerospace industry">Aerospace industry</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Beautify">Beauty Products</option>
                        <option value="Chemical industry">Chemical industry</option>
                        <option value="Computer industry">Computer industry</option>
                        <option value="Construction industry">Construction industry</option>
                        <option value="Defense industry">Defense industry</option>
                        <option value="Education industry">Education industry</option>
                        <option value="Energy industry">Energy industry</option>
                        <option value="Entertainment industry">Entertainment industry</option>
                        <option value="Financial services industry">Financial services industry</option>
                        <option value="Food production">Food production</option>
                        <option value="Health care industry">Health care industry</option>
                        <option value="Hospitality industry">Information industry</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Mass media">Mass media</option>
                        <option value="Mining">Mining</option>
                        <option value="Telecommunications industry">Telecommunications industry</option>
                        <option value="Transport industry">Transport industry</option>
                        <option value="Water industry">Water industry</option>
                        <option value="Direct Selling industry">Direct Selling industry</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group label-floating is-empty col-md-6 col-lg-6">
                    <select class="form-control " name="comp_subtype" v-model="Company.company_subtype">
                        <option v-for=" type in Company.types[selected_type]" :value="type" v-text="type">
                        </option>
                    </select>
                </div>



            </div>
            <div class="row" v-show="customtype">
                <div class="form-group label-floating is-empty col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Enter custom type"
                        v-model="Company.company_type" />
                </div>
                <div class="form-group label-floating is-empty col-md-6 col-lg-6">
                    <input type="text" class="form-control" placeholder="Enter custom sub type"
                        v-model="Company.company_subtype" />
                </div>


            </div>
            <div class="row">

                <div class="form-group label-floating is-empty col-md-12 col-lg-12">
                    <textarea class="textarea form-control" placeholder="Company description"
                        style="resize:none;padding-top: 40px" name="company_description"
                        v-model="Company.company_description"></textarea>

                </div>
            </div>
            <div class="row mt-3">
                <div class="form-group label-floating is-empty col-md-6 col-lg-6">
                    <button type="submit" class="btn btn-primary" @click.prevent="submitRegistrationForm"
                        value="">Finish Registration</button>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body" style="color:black">
            <div class="form-group label-floating is-empty col-md-8 col-lg-8">
                <button class="btn btn-primary" :disabled="Navigation.current_stage <= 0" style="color:white;"
                    @click.prevent="Nextstage(false)">
                    << Previous </button> <button class="btn btn-primary" style="color:white;"
                        :disabled="Navigation.current_stage >= 3" @click.prevent="Nextstage()">
                        Next >>
                </button>
            </div>

        </div>
    </div>
</div>
