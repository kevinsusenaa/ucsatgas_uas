<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Surat Tugas</title>
</head>

<body style=" ">
    <h2>
        <center>SURAT TUGAS</center>
    </h2>
    <h4>
        <center>No :011/UC.Dek/FTI/STVIII/2021</center>
    </h4>
    <br></br>
    <h5>
        Dekan Fakultas Teknologi Informasi Universitas Surabaya Menugaskan Kepada:
    </h5>

    <table style="border-collapse: collapse; border: 1px solid black;" width="100%">
        <thead>
            <tr>
                <th style="border: 1px solid black;">NIK</th>
                <th style="border: 1px solid black;">Nama</th>
                <th style="border: 1px solid black;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $satgas->details as $item )
            <tr>
                <td style="border: 1px solid black;">{{ $item->nik }}</td>
                <td style="border: 1px solid black;">{{ $item->name }}</td>
                <td style="border: 1px solid black;">{{ $item->comment }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <h5>
        Tugas: {{ $satgas->tugas }}
    </h5>
    <h5>
        Waktu: {{ $satgas->waktu }}
        
    </h5>
    <br>
    <br>
    <br>
    <h5>
    Demikian Surat Tugas ini dibuat untuk dilaksanakan dengan baik dan penuh tanggung jawab.

    </h5>
</body>

</html>