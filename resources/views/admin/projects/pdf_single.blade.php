<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project - {{ $project->title }}</title>
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

    th, td {
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
    <table>
        <tr>
            <th colspan="2">
                    <img src="{{ public_path('images/'.$project->image) }}" alt="{{ $project->title }}"
                         style="width: 100%; height: auto; object-fit: cover;">           
             </th>
        </tr>
        <tr>
            <th colspan="2">Detail Project</th>
        </tr>
        <tr>
            <th>Judul</th>
            <td>{{ $project->title }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $project->description }}</td>
        </tr>
        <tr>
            <th>Teknologi</th>
            <td>{{ $project->teknologi }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $project->status }}</td>
        </tr>
    </table>
</body>
</html>