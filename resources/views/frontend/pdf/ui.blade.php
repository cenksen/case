<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>{{config('app.name')}}</title>

    <style>


        @page {
            margin: 0in;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            background-image: url("https://r.resimlink.com/ofe0x.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            font-family: DejaVu Sans, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 10px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: center;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.top table td.title p {
            font-size: 15px;
            line-height: 15px;
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

        .invoice-box table tr.item td {

        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {

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
        .invoice-box.rtl {
            direction: rtl;
            font-family: DejaVu Sans, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .minify {
            font-size: 12px;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="1">
                <table>
                    <tr>
                        <td class="title">
                            <img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/2560px-Logo.min.svg.png"
                                style="width: 100%; max-width: 150px"
                            />
                            <p>Teklif Numarası: #{{ rand(1000000000, 9999999999)  }} </p>
                            <p>Oluşturulma Tarihi: {{ \Carbon\Carbon::parse($quotationForm->start_date)->translatedFormat('d M,Y', 'tr') }}</p>
                            <p> Son Geçerlilik Tarihi:{{ \Carbon\Carbon::parse($quotationForm->end_date)->translatedFormat('d M,Y', 'tr') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="3">
                <table>
                    <tr>
                        <td>
                            <p style="font-size: 13px">  {{$quotationForm->customer_company}}</p>
                            <p  style="font-size: 13px"> {{$quotationForm->customer_name}}</p>
                            <p  style="font-size: 13px">{{$quotationForm->customer_phone}}</p>
                            <p  style="font-size: 13px">{{$quotationForm->customer_address}}</p>
                            <p  style="font-size: 13px"> {{$quotationForm->customer_mail}}</p>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr class="heading">
            <td>Ürün</td>
            <td>Adet</td>
            <td>Fiyat</td>
        </tr>


        @php
            $totalPrice = 0; // Toplam fiyatı sıfırla
            $totalTax = 0;   // Toplam vergiyi sıfırla
            $taxRate = $quotationForm->tax; // Vergi oranını al

            // Her bir ürün için işlem yap
            foreach($quotationForm->product as $data) {
                $price = floatval($data['price']); // Ürün fiyatını al ve float türüne dönüştür
                $quantity = floatval($data['quantity']); // Ürün miktarını al ve float türüne dönüştür
                $taxAmount = ($price * $quantity * $taxRate) / 100; // Ürünün toplam vergi tutarını hesapla
                $totalPrice += ($price * $quantity); // Ürün fiyatını toplam fiyata ekle
                $totalTax += $taxAmount; // Ürünün vergi tutarını toplam vergiye ekle
            }
        @endphp

        @foreach($quotationForm->product as $data)
            <tr class="item">
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['quantity'] }}</td>
                <td>{{ $data['price'] }}</td>
            </tr>
        @endforeach

        <tr class="heading">
            <td>Tutar</td>
            <td>KDV</td>
            <td>Toplam</td>
        </tr>

        <tr class="item">
            <td><strong>{{ $totalPrice }} ₺</strong></td>
            <td><strong> % {{ $quotationForm->tax }}</strong></td>
            <td><strong>{{ $totalPrice + $totalTax }} ₺</strong></td>
        </tr>
    </table>


</div>
</body>
</html>
