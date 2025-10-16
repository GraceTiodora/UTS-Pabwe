<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <style>
    body { font-family: DejaVu Sans, Arial, sans-serif; font-size: 12px; }
    table { width: 100%; border-collapse: collapse; margin-top:10px; }
    th, td { border: 1px solid #999; padding: 6px; text-align: left; }
    th { background: #d9e9f9; color:#002B5B; }
    h2 { margin-bottom: 10px; text-align:center; color:#002B5B; }
  </style>
</head>
<body>
  <h2>Daftar Peserta Acara Kampus IT Del</h2>
  <table>
    <thead>
      <tr>
        <th>No</th><th>Nama</th><th>Email</th><th>Acara</th><th>Tanggal Daftar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($participants as $i => $p)
      <tr>
        <td>{{ $i+1 }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->email }}</td>
        <td>{{ $p->event->name ?? '-' }}</td>
        <td>{{ \Carbon\Carbon::parse($p->created_at)->format('d-m-Y H:i') }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
