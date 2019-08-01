<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Price Quotation</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
      @if(isset($productDetails) )
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="http://drongo.tech/img/logo_side_writing.svg" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Quotation #: {{$productDetails["quotation_id"]}}<br>
                                Created: {{$productDetails["create_date"]}}<br>
                                Due: {{$productDetails["due_date"]}}<br><br>

                                Product Name: {{$productDetails["product_name"]}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                {{$productDetails["company_name"]}}<br>
                                {{$productDetails["company_address"]}}<br>
                                {{$productDetails["company_city"]}}
                            </td>
                            
                            <td>
                                {{$productDetails["customer_name"]}}<br>
                                {{$productDetails["customer_email"]}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Details
                </td>
                
                <td>
                    Detail No
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Payment method: {{"Check"}}
                </td>
                
                <td>
                    {{"216526"}}
                </td>
            </tr>
            <tr class="details">
                <td>
                    Original Price
                </td>
                
                <td>
                    {{$productDetails["product_price"]}}
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Customer Price
                </td>
            </tr>
            
            
            <tr class="item last">
                <td>
                    {{$productDetails["product_name"]}}
                </td>
                
                <td>
                    {{$productDetails["product_customer_price"]}}
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Price Difference: {{$productDetails["product_price"] - $productDetails["product_customer_price"]}} 
                </td>
            </tr>
        </table>
      @endif
    </div>
</body>
</html>