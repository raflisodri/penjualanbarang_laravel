{{-- 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cetak Struk</title>
        <style>
       
            body {
                font-family: Arial, sans-serif;
            }
            .struk-container {
                max-width: 300px;
                margin: 0 auto;
                border: 2px solid #000;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            .judul {
                font-size: 24px;
                font-weight: bold;
                text-align: center;
                margin-bottom: 10px;
            }
            .data-petugas {
                font-size: 18px;
                margin-bottom: 10px;
            }
            .id-barang {
                font-size: 18px;
                margin-bottom: 10px;
            }
            .total {
                font-size: 20px;
                font-weight: bold;
                text-align: right;
                margin-bottom: 10px;
            }
            .tanda-tangan {
                font-size: 16px;
                text-align: left;
            }
        </style>
    </head>
    <body onload="print()">
        <div class="struk-container">
            <br>
            <br>
            <br>
            <div class="judul">Struk Pembelian</div>
            <div class="data-petugas">
                Petugas :       {{ Auth()->User()->name }}
            </div>
            <div class="id-barang">
                Nama barang :   {{ $transaksi->id_barang }} - {{ $transaksi->Barang->nama_barang }}
            </div>
            <div class="id-barang">
                Jenis barang :  {{ $transaksi->id_barang }} - {{ $transaksi->Barang->jenis }}
            </div>
            <div class="total">
                Total:          Rp.{{number_format( $transaksi->total ,2,',','.')}}
            </div>
            <div class="tanda-tangan">
                Tanda Tangan:
                <br>
                <br>
                <br>
                <br>
              Bandung <?php echo date("Y - F - d");?>
            </div>
        </div>
    </body>
    </html>
    


</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        .invoice-container {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 15px 0;
        }

        .invoice-title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .total-amount {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
    <title>Invoice</title>
</head>
<body onload="print()">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="invoice-container">
                    <div class="invoice-header">
                        <h2>Invoice</h2>
                    </div>
                    <div class="invoice-body">
                        <h4 class="invoice-title">Invoice Details</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>{{ $transaksi->Barang->nama_barang }}</td>
                                    <td>{{ $transaksi->jumlah }}</td>
                                    <td>{{ $transaksi->total }}</td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                    <div class="invoice-footer">
                        <div class="total-amount">
                            {{-- <strong>Total Amount: {{ $totalAmount }}</strong> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


