@extends('atoclayout.profile')

@section('host_menu')
@include('atoclayout.comp.comp_menu')
@endsection

@section('body')
<div class="row" style="background-color: #3f4257;height: 70px;">

</div>

<div class="row mt-3" >
    <div class="card ml-5" style="width: 70vw;">
        <div class="card-header">
            Your post needs
        </div>
        <div class="card-content pl-3">
            <div class="" v-if="!Company.is_verified">
                <h4><u>Your company is not verified</u></h4>
                 We are sorry, your company can not be matched with any customer need
                 at the moment.<br/>


                 Please be assured we are working very hard to verify your company
                 as soon as possible.
            </div>
            <div class="" v-else="Company.is_verified">

                <table class="table">
                    <thead>
                        <th>
                            #
                        </th>
                        <th>
                             Name
                        </th>
                        <th>
                             Description
                        </th>
                        <th>
                            Quantity
                        </th>
                        <th>
                            Category
                        </th>
                        <th>
                            Valid until
                        </th>
                        <th>
                            Action
                        </th>
                    </thead>
                    <tbody v-for="(need , key) in Company.company_needs">
                        <tr>
                            @{{(key+1)}}
                        </tr>
                        <tr >
                            need.product_name
                        </tr>
                        <tr>
                            need.product_description
                        </tr>
                        <tr>
                            product_quantity
                        </tr>
                        <tr>
                            product_type product_sub_types
                        </tr>
                        <tr>
                            product_valid_until
                        </tr>
                        <tr>
                            <button class="btn btn-primary"
                            @click.prevent="">
                            View demand
                            </button>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('vuescript')
<script src="/js/comp_needs.js" type="text/javascript"></script>
@endsection
