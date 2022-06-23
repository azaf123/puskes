<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cetak Data</title>
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="card-body mt-5">
                <div class="text-center">
                    <h4 class="card-title">Cetak Data Surat Masuk Jianbang BPPD Palembang</h4>
                    <h6>Jl. Merdeka No.21, 19 Ilir, Kec. Bukit Kecil, Kota Palembang, Sumatera Selatan 30113</h6>
                </div>
                <table class="table table-striped mt-5">
                    <thead>
                        <tr>
                            <th> No. </th>
                            <th> Nomor Surat </th>
                            <th> Perihal </th>
                            <th> Asal Surat </th>
                            <th> Tanggal </th>
                            <th> Keterangan </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($smasuk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nomasuk }} </td>
                                <td>{{ $item->perihal }} </td>
                                <td>{{ $item->asal }} </td>
                                <td>{{ $item->tanggal }} </td>
                                <td>{{ $item->ket }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <script type='text/javascript'>
                window.print()
            </script>

            <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
            <script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript"></script>
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="{{ asset('js/off-canvas.js') }}"></script>
            <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
            <script src="{{ asset('js/misc.js') }}"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <script src="{{ asset('js/dashboard.js') }}"></script>
            <script src="{{ asset('js/todolist.js') }}"></script>
        </div>
    </div>
</body>

</html>
