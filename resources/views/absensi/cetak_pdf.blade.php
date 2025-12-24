<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Absensi Mahasiswa</title>
    <style>
        /* CSS murni agar tampilan PDF rapi */
        body {
            font-family: sans-serif;
            font-size: 12px;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #444;
            padding-bottom: 10px;
        }
        .header h2 {
            margin: 0;
            text-transform: uppercase;
        }
        .header p {
            margin: 5px 0 0;
            color: #666;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
        }
        .text-center {
            text-align: center;
        }
        .bg-green { background-color: #e6fffa; color: #2c7a7b; }
        .bg-blue { background-color: #ebf8ff; color: #2b6cb0; }
        .bg-yellow { background-color: #fffaf0; color: #975a16; }
        .bg-red { background-color: #fff5f5; color: #c53030; }
        
        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 10px;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Laporan Rekapitulasi Absensi</h2>
        <p>Sistem Informasi Absensi Mahasiswa</p>
    </div>

    <table>
        <thead>
            <tr>
                <th width="15%">NIM</th>
                <th>Nama Mahasiswa</th>
                <th width="10%">Hadir</th>
                <th width="10%">Izin</th>
                <th width="10%">Sakit</th>
                <th width="10%">Alpa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $m)
            <tr>
                <td class="text-center">{{ $m->nim }}</td>
                <td>{{ $m->nama }}</td>
                <td class="text-center bg-green">{{ $m->absensis->where('status', 'Hadir')->count() }}</td>
                <td class="text-center bg-blue">{{ $m->absensis->where('status', 'Izin')->count() }}</td>
                <td class="text-center bg-yellow">{{ $m->absensis->where('status', 'Sakit')->count() }}</td>
                <td class="text-center bg-red">{{ $m->absensis->where('status', 'Alpa')->count() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
       * Data laporan ini dicetak pada {{ \Carbon\Carbon::now('Asia/Jakarta')->format('d M Y, H:i') }}
    </div>

</body>
</html>