<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family:sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: small;
        }
        /* tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        } */
        .invoice {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: grey;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
        .invoice td,.invoice tr,.invoice table{
        	border:1px solid black;
        	border-collapse: collapse;
        }
        .invoice td,.invoice th{
        	padding:10px;
        }
        thead{
        	text-align: center;
        }
        tbody{
        	text-align: center;
        }
        tfoot{
        	background-color: #000;
        	color:#fff;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h3>{{session('user')->name ?? "John Doe"}}</h3>
                <pre>{{session('user')->email}}
Date: {{date('d M Y')}}
Identifier: #{{rand(111111,999999)}}
Order type: {{$payment['type']}}
</pre>


            </td>
            <td align="center">
                <img src="https://source.unsplash.com/random/50x50" alt="Logo" width="64" class="logo"/>
            </td>
            <td align="right" style="width: 40%;">

                <h3>Shopper Street</h3>
                <pre>
                    https://shopperStreet.com

                    GT Road,
                    144401 Jalandhar
                    Punjab,India
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>

<div class="invoice">
    <h3>Invoice specification #{{rand(15,35)}}</h3>
    <table width="100%">
        <thead>
        <tr>
            <th>SN</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $item)
        <tr>
            @php
            $var = $loop->iteration
            @endphp
            <td>{{$loop->iteration}}</td>
            <td align="left">{{$item['name']}}
            <br>
            <small>{{$item['description']}}</small>
            </td>
            <td>{{$item['price']}} x {{$item['quantity']}}</td>
            <td align="right">{{$item['total']}}</td>
        </tr>
        @endforeach
        <tr>
            <td>{{++$var}}</td>
            <td colspan="2">Shipping</td>
            <td align="right">{{$shipping}}</td>
        </tr>
        <tr>
            <td>{{++$var}}</td>
            <td colspan="2">Order payment By
            </td>
            <td align="right">{{$payment['name']}}
            @if($payment['name'] == "Cash On Delivery")
            <br>
            <small>Extra Charge Applicable Rs. 40</small>
            @php
            $total += 40
            @endphp
            @endif
            </td>
        </tr>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="3">Total</td>
            <td align="right">{{$total}}</td>
        </tr>
        </tfoot>
    </table>
    <p>This is a computer generated invoice and doesnot require signature.</p>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%" style="width: 100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                Shopper Street - Absolutely. Positively. Perfect.
            </td>
        </tr>

    </table>
</div>
</body>
</html>