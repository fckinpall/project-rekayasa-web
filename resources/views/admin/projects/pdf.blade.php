<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .subtitle {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, 
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>LAPORAN DATA PROJECT</h2>
    <div class="subtitle">Tanggal Cetak : {{ date ('d-m-Y')}}</div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Teknologi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $index => $projects)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    <img src="{{ public_path('images/'.$projects->image) }}" alt="{{ $projects->title }}"
                    style="width: 100px; height: auto;">
                </td>
                <td>{{ $projects->title }}</td>
                <td>{{ $projects->description }}</td>
                <td>{{ $projects->technologies }}</td>
                <td>{{ $projects->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</body>
</html>