<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>CETAK LAPORAN PESERTA MAGANG DISKOMINFO MADIUN</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="backend2/assets/img/book.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="backend2/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['backend2/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
</head>

            <h1 style="text-align:center;">PESERTA DITERIMA PKL / MAGANG</h1>
                    <h1 style="text-align:center;">DISKOMINFO KOTA MADIUN</h1><br>
                            <table border="1" cellspacing="0" cellpadding="5">
                                    <tr>
                                            <th>No.</th>
                                            <th>Nama Pemohon</th> 
                                            <th>Anggota PKL / Magang</th>
                                            <th>Divisi Tujuan</th>
                                            <th>Durasi PKL / Magang</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Berakhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @php $i=1 @endphp
                                         <tr>
                                            @foreach ($laporanaktif as $lprn)
                                            <td style="text-align:center;">{{ $i++ }}</td>
                                            <td style="text-align:center;">{{ $lprn->user->name }}</td>
                                            <td style="text-align:center; line-height: 1.5;">{{ $lprn->peserta1 }} <br>
                                                {{ $lprn->peserta2 }} <br>
                                                {{ $lprn->peserta3 }}
                                            </td>
                                            <td style="text-align:center;">{{ $lprn->bidang->nama }}</td>
                                            <td style="text-align:center;">{{ $lprn->durasi }}</td>
                                            <td style="text-align:center;">{{ $lprn->tgl_mulai }}</td>
                                            <td style="text-align:center;">{{ $lprn->tgl_selesai }}</td>
                                           
                                        </tr>
                                        @endforeach
                            </table>