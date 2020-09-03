<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Document</title>
    <!-- Bootstrap.css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="mb-5 mt-5">
            <button type="button" class="btn btn-warning text-white mr-3">Tambah</button>
            <button type="button" class="btn btn-warning text-white">Download Laporan</button>
        </div>

        <table class="table table-striped">
            <thead class="text-center text-muted ">
                <tr>
                    <th class="font-weight-normal">#</th>
                    <th class="text-left font-weight-normal">NAMA DOKUMEN</th>
                    <th class="font-weight-normal">TANGGAL UPLOAD</th>
                    <th class="font-weight-normal">PENGUPLOAD</th>
                    <th class="font-weight-normal">AKSI</th>
                </tr>
            </thead>
            <tbody>

                <!--Fetch data dari database-->

                <?php foreach ($data->result() as $row) :
                    $no = 1;
                ?>

                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td><?php echo $row->nama_dokumen; ?></td>
                        <td class="text-center"><?php echo $row->tanggal; ?></td>
                        <td class="text-center"><?php echo $row->pengupload; ?></td>
                        <td class="text-center"><button type="button" class="btn btn-danger btn-sm px-2">Hapus</button></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col ">
                <!--Tampilkan pagination-->
                <?php echo $pagination; ?>
            </div>
        </div>


    </div>
    <!--Load file bootstrap.js-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>