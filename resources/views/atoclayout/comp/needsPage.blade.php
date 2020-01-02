@extends('atoclayout.profile')

@section('host_menu')
@include('atoclayout.comp.comp_menu')
@endsection

@section('body')
<div class="row" style="background-color: #3f4257;height: 70px;">

</div>

<div class="row mt-3" >
    <div class="card " >
        <div class="card-header">
            Matched Demands
        </div>
        <div class="card-body ">
            <div class="" v-if="!companyIsVerified()">
                <h4><u>Your company is not verified</u></h4>
                 We are sorry, your company can not be matched with any customer need
                 at the moment.<br/>


                 Please be assured we are working very hard to verify your company
                 as soon as possible.
            </div>
            <div class="" v-else="Company.is_verified">
                <div class="table-responsive">
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    #
                                </th>
                                <th scope="col">
                                     Name
                                </th>
                                <th scope="col">
                                     Description
                                </th>
                                <th scope="col">
                                    Quantity
                                </th>
                                <th scope="col">
                                    Category
                                </th>
                                <th scope="col">
                                    Valid until
                                </th>
                                <th scope="col">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody  >
                            <tr v-for="(need,key) in Company.company_needs">
                                <th scope="row">
                                    @{{(key+1)}}
                                </th>
                                <td scope="row">
                                    @{{need.product_name}}
                                </td>
                                <td scope="row">
                                    @{{need.product_description}}
                                </td>
                                <td scope="row">
                                    @{{need.product_quantity}} @{{need.product_measure_unit}}
                                </td>
                                <td scope="row">
                                    @{{need.product_type}}
                                </td>
                                <td scope="row">
                                    @{{need.product_valid_until}}
                                </td>
                                <td scope="row">
                                    <button class="btn btn-primary"
                                    @click.prevent="NeedsModal(need.id, need.need_token)">
                                    View demand
                                    </button>
                                </td>
    
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="">
    <needdetails v-if="needs_modal.visible" v-bind="needs_modal.need"
     v-on:close-comp-match-modal="disMissNeedModal()"></needdetails>
</div>
@endsection

@section('vuescript')
@php
$hash = hash('md5', file_get_contents(public_path()."/js/comp_needs.js"));
$file_name = "/js/comp_needs.js?".$hash;
 @endphp
<script src="{{$file_name}}" type="text/javascript"></script>


<style>
    table.custom-table thead {
        background-color: #1f2d3ad9;
        color: white;
    }
    table.custom-table thead tr {
        height: 50px;
    }
    table.custom-table tbody tr {
        height: 40px;
        border-bottom: thin solid gray;
        border-left: thin solid gray;
    }
    table.custom-table tbody tr td, table.custom-table tbody tr th {
        border-right: thin solid gray;
        padding: 10px;
    }
    </style>
@endsection
