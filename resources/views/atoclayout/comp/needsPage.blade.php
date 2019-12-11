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
            Matched Demands
        </div>
        <div class="card-content pl-3">
            <div class="" v-if="!companyIsVerified()">
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
                    <tbody  >
                        <tr v-for="(need,key) in Company.company_needs">
                            <td>
                                @{{(key+1)}}
                            </td>
                            <td>
                                @{{need.product_name}}
                            </td>
                            <td>
                                @{{need.product_description}}
                            </td>
                            <td>
                                @{{need.product_quantity}} @{{need.product_measure_unit}}
                            </td>
                            <td>
                                @{{need.product_type}}
                            </td>
                            <td>
                                @{{need.product_valid_until}}
                            </td>
                            <td>
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
@endsection
