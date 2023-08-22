<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <table>
        <tr>
            <td colspan="6">
                <h6>Surat Perintah Kerja Operator</h6>
            </td>
        </tr>
        <tr>
            <td>Id Operator</td>
            <td>:</td>
            <td>{{ $data->employee }}</td>
            <td colspan="5"></td>
            <td>No SPKO</td>
            <td>:</td>
            <td>{{ $data->sw }}</td>
        </tr>
        <tr>
            <td>Nama Operator</td>
            <td>:</td>
            <td>{{ $data->pegawai->nama }}</td>
            <td colspan="5"></td>
            <td>Proses</td>
            <td>:</td>
            <td>{{ $data->process }}</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td>{{ $data->trans_date }}</td>
            <td colspan="5"></td>
            <td>Catatan</td>
            <td>:</td>
            <td></td>
        </tr>

    </table>


    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No</th>
                <th>Deskripsi</th>
                <th>Carat</th>
                <th>SKU</th>
                <th>Qty</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->product->description }}</td>
                    <td>{{ $item->product->carat }}</td>
                    <td>{{ $item->product->sub_category . '.' . $item->product->serial_no }}</td>
                    <td>{{ $item->qty }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
