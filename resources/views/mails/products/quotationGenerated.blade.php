@extends('mails.layout.main_layout')
@section('mail_title')
    New Quotation
@endsection
@section('mail_body')

<p> Hello {{$target_name}}</p><br>

<p> A new quotation has been generated. Please find the attached PDF of the quotation to 
    see the details of the product and the involved parties in this quotation.
</p>
@endsection

