<template>
    <div id="myModal" class="modal" style="display:block;">

        <!-- Modal content -->

        <div class="modal-content">
            <div class="error-header">
                <h4 style="color:red">
                    <span class="close-modal" @click.prevent="disMissNeedModal()">&times;</span>
                </h4>
            </div>
            <div class="card">
                <div class="card-header" v-if="hasMatchedCompanies()">
                    Your need is matched with these companies
                </div>
                    <div class="card-header" v-else="!hasMatchedCompanies()">
                        We are still searching for the right companies to serve your need.
                        Please come back soon.
                    </div>
                <div class="card-body" style="">
                    <div class="card " style="width: 100%;display: inline-block;;"
                    v-for="Company in matched_companies">

                      <div class="card-body" style="display: flex;">
                          <div class="col-md-4 col-lg-4">
                              <img class="card-img-top" :src="Company.company_data.comp_logo" alt="Card image cap">
                          </div>
                          <div class="col-md-4 col-lg-4">
                              <a :href="getCompLink(Company.company_data)" target="_blank">
                                  <h5 class="card-title" v-text="Company.company_data.comp_name"></h5>
                              </a>
                          </div>
                          <div class="col-md-4 col-lg-4">
                              <a :href="getCompLink(Company.company_data)" class="btn btn-primary" target="_blank">
                                  Contact info
                              </a>
                          </div>


                      </div>
                  </div>
                </div>
            </div>

        </div>

    </div>
</template>



<script>
module.exports = {
    data: function(){
        console.log('child ready');

        return {'userneeds':1,'version':1}
    },
    methods: {
        getCompLink(company)
        {
            return ("/comp/view/"+company.comp_id+"/"+company.comp_token);
        },
        disMissNeedModal()
        {
            this.$emit('close-user-need-modal');
        },
        hasMatchedCompanies()
        {
            return this.matched_companies.length;
        }
    },
    props:["matched_companies"],
    filters: {
        truncate: function (text, length, suffix) {
            return text.substring(0, length) + suffix;
        },
    },
}
</script>
