<!DOCTYPE html>
<html>

<head>
    <title>@lang('pdf_payment_label') - {{ $payment->payment_number }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style type="text/css">
        /* -- Base -- */
        body {
            font-family: "DejaVu Sans";
        }

        html {
            margin: 0px;
            padding: 0px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        table {
            border-collapse: collapse;
        }


        hr {
            color: rgba(0, 0, 0, 0.2);
            border: 0.5px solid #EAF1FB;
        }

       /* -- Header -- */

        .header-container {            

            background: #0E2F45;
            position: absolute;
            width: 100%;
            height: 141px;
            left: 0px;
            top: -60px;
        }

        .header-section-left {
            padding-top: 45px;
            padding-bottom: 45px;
            padding-left: 30px;
            display: inline-block;
            width: 30%;
        }

        .header-logo {
            position: absolute;

            text-transform: capitalize;
            color: #fff;
        }

        .header-section-right {
            display: inline-block;
            width: 70%;
            float: right;
            padding: 20px 30px 20px 0px;
            text-align: right;
            color: white;
        }

        .header {
            font-size: 20px;
            color: rgba(0, 0, 0, 0.7);
        }

        /* -- invoice Details -- */

        .invoice-details-container {
            text-align: center;
            width: 70%;
        }

        .invoice-details-container h1 {
            margin: 0;
            font-size: 24px;
            line-height: 36px;
            text-align: right;
            font-family: "DejaVu Sans";
        }

        .invoice-details-container h4 {
            margin: 0;
            font-size: 10px;
            line-height: 15px;
            text-align: right;
        }

        .invoice-details-container h3 {
            margin-bottom: 1px;
            margin-top: 0;
        }


        /* -- Company Address -- */

        .company-details h1 {
            margin: 0;

            font-weight: bold;
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.05em;
            text-align: left;
            max-width: 220px;
        }

        .company-address {
            margin-top: 0px;
            font-size: 12px;
            line-height: 15px;
            padding-right: 60px;
            color: #595959;
            word-wrap: break-word;
        }
        /* -- Address -- */

        .content-wrapper {
            display: block;
            margin-top: 60px;
            padding-bottom: 20px;
        }

        .address-container {
            display: block;
            padding-bottom: 10px; 
            margin-bottom: 10px;

            margin-top: 10px;
             background: #f2f0e2;
        }


        .main-content {
            display: inline-block;
            padding-top: 20px
        }

        /* -- Customer Address -- */
        .company-address-container {
            padding: 0 0 0 30px;
            display: inline;
            float: left;
            width: 30%;
        }

        .company-address-container {
            padding-left: 30px;
            float: left;
            width: 30%;
            text-transform: capitalize;
            margin-bottom: 2px;
        }

        /* -- Shipping -- */

        .shipping-address-label {
            padding-top: 5px;
            font-size: 12px;
            line-height: 18px;
            margin-bottom: 0px;
        }

        .shipping-address-name {
            padding: 0px;
            font-size: 15px;
            line-height: 22px;
            margin: 0px;
        }

        .shipping-address {
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            margin: 0px;
            width: 160px;
        }

        /* -- Billing -- */

        .billing-address-container {
            display: block;
            /* position: absolute; */
            float: right;
            padding: 0 40px 0 0;
        }

        .billing-address-container--right {
            float: right;
        }

        .billing-address-label {
            padding-top: 5px;
            font-size: 12px;
            line-height: 18px;
            margin-bottom: 0px;
            color: #55547A;
        }

        .billing-address-name {
            padding: 0px;
            font-size: 15px;
            line-height: 22px;
            margin: 0px;
        }

        .billing-address {
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            margin: 0px;
            width: 180px;
            word-wrap: break-word;
        }

        /* -- Payment Details -- */

        .payment-details-container {
            width: 50%;
            height: 120px;
            left: 140px;

            float: right;
            padding: 12px 15px 15px 15px;
        }

        .attribute-label {
            font-size: 12px;
            line-height: 18px;
            text-align: left;
            color: #55547A
        }

        .attribute-value {
            font-size: 12px;
            line-height: 18px;
            text-align: right;
        }

        /* -- Notes -- */

        .notes {
            font-size: 12px;
            color: #595959;
            margin-top: 100px;
            margin-left: 30px;
            width: 90%;
            text-align: left;
            page-break-before: avoid;
        }

        .notes-label {
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.05em;
            color: #040405;
            width: 108px;
            white-space: nowrap;
            height: 19.87px;
            padding-bottom: 10px;
        }

        .content-heading {
            margin-top: 10px;
            width: 100%;
            text-align: center;
        }

        p {
            padding: 0 0 0 0;
            margin: 0 0 0 0;
        }

        .content-heading span {
            font-weight: normal;
            font-size: 14px;
            line-height: 25px;
            padding-bottom: 5px;
            border-bottom: 1px solid #B9C1D1;
        }

        /* -- Total Display Box -- */

        .total-display-box {
        position:relative;
            min-width: 315px;

            margin-right:15px;
            background: #F9FBFF;
            border: 1px solid #EAF1FB;
            box-sizing: border-box;
            float: right;
            padding: 12px 15px 15px 15px;
        }

        .total-display-label {
            display: inline;
            font-weight: bold;
            font-size: 14px;
            line-height: 21px;
            color: #595959;
        }

        .total-display-box .amount {
            float: right;
            font-weight: bold;
            font-size: 14px;
            line-height: 21px;
            text-align: right;
            color: #5851D8;
            margin-left: 150px;
        }

    </style>

    @if (App::isLocale('th'))
        @include('app.pdf.locale.th')
    @endif
</head>

<body>


    <div class="header-container">
        <table width="100%">       
            <tr>
                @if ($logo)
                <td width="60%" class="header-section-left">
                    <a href='https://www.etayage.fr' target="_blank"><img class="header-logo" style="height: 50px;" src="{{ $logo }}" alt="Company Logo"></a>
                </td>
                @else
                <td width="60%" class="header-section-left" style="padding-top: 0px;">
                    @if ($payment->customer->company)
                        <h2 class="header-logo"> {{ $payment->customer->company->name }}</h2>
                    @endif
                </td>
                @endif
                <td width="40%" class="header-section-right invoice-details-container">
                    <h1>@lang('pdf_payment_receipt_label')</h1>
                    <h4>@lang('pdf_payment_number') {{ $payment->payment_number }}</h4>
                    <h4>{{ $payment->formattedInvoiceDate }}</h4>
                </td>
            </tr>
        </table>
    </div>
    <hr>


    <div class="content-wrapper">
        <div class="address-container">

            <div class="company-address-container company-address">
            {!! $company_address !!}
            </div>

            <div class="billing-address-container billing-address" style="float:right; margin-right:30px;">
                <div style="float:right;">
                    @if ($billing_address)
                        @lang('pdf_received_from')
                        {!! $billing_address !!}
                    @endif         
                </div>
            </div>

            <div style="clear: both;"></div>
        </div>


    
        <div class="payment-details-container">
            <table width="100%">
                <tr>
                    <td class="attribute-label">@lang('pdf_payment_date')</td>
                    <td class="attribute-value"> &nbsp;{{ $payment->formattedPaymentDate }}</td>
                </tr>
                <tr>
                    <td class="attribute-label">@lang('pdf_payment_number')</td>
                    <td class="attribute-value"> &nbsp;{{ $payment->payment_number }}</td>
                </tr>
                <tr>
                    <td class="attribute-label">@lang('pdf_payment_mode')</td>
                    <td class="attribute-value">
                        &nbsp;{{ $payment->paymentMethod ? $payment->paymentMethod->name : '-' }}</td>
                </tr>
                @if ($payment->invoice && $payment->invoice->invoice_number)
                    <tr>
                        <td class="attribute-label">@lang('pdf_invoice_label')</td>
                        <td class="attribute-value"> &nbsp;{{ $payment->invoice->invoice_number }}</td>
                    </tr>
                @endif
            </table>
        </div>

                <div style="clear: both;"></div>


        <div class="total-display-box">
            <p class="total-display-label">@lang('pdf_payment_amount_received_label')</p>
            <span class="amount">{!! format_money_pdf($payment->amount, $payment->customer->currency) !!}</span>
        </div>
                <div style="clear: both;"></div>

        
        <div class="notes">
            @if ($notes)
                <div class="notes-label">
                    @lang('pdf_notes')
                </div>
                {!! $notes !!}
            @endif
        </div>
        
                <div style="clear: both;"></div>

    </div>
</body>

</html>
