<?php
include_once 'header.php';
?>
<!-Content->
    <div id="main">

    <div class="header">
    <div class="hero">
	<div class="hero-title">
		<center><h1>RPP MANUAL</h1>
	<br>
		<a href="contoh1.php"> Download Contoh RPP</a></center>
	</div>
	<div class="input-form">
		<center><h3>Masukan Data</h3></center>
		<form action="laporanmanual1.php" method="POST">
		<fieldset>
				<legend><b>KOMPETENSI DAN INDIKATOR</b></legend>
				<table>
					<tr><td><textarea class="form-control" name="ki" placeholder="Kompetensi Inti"></textarea></td></tr>
					<tr><td><textarea class="form-control" name="kd" placeholder="Kompetensi Dasar"></textarea></td></tr>
					<tr><td><textarea class="form-control" name="ipk" placeholder="Indikator Pencapaian Kompetensi"></textarea></td></tr>
				</table>
			</fieldset>
			<br/>
			<fieldset>
                <legend><b>IDENTITAS NAMA</b></legend>
                <table>
                    <tr><td><input class="form-control" type="text" name="namasekolah" placeholder="Nama Sekolah"></td></tr>
                    <tr><td><input class="form-control" type="text" name="mp" placeholder="Mata Pelajaran"></td></tr>
					<tr><td><input class="form-control" type="text" name="kelas" placeholder="Kelas / Semester"></td></tr>
					<tr><td><input class="form-control" type="text" name="waktu" placeholder="Alokasi Waktu (menit)"></td></tr>
					<tr><td><input class="form-control" type="text" name="pertemuan" placeholder="Pertemuan ke-"></td></tr>
					<tr><td><input class="form-control" type="text" name="tahun" placeholder="Tahun Pelajaran"></td></tr>
					<tr><td><textarea class="form-control" name="materipokok" placeholder="Materi Pokok / Sub Materi"></textarea></td></tr>
                </table>
            </fieldset>
            <br/>
			<fieldset>
				<legend><b>TUJUAN PEMBELAJARAN</b></legend>
				<table>
					<tr><td><textarea class="form-control" name="tujuan" placeholder="Tujuan Pembelajaran"></textarea></td></tr>
				</table>
			</fieldset>
			<br/>
			<fieldset>
				<legend><b>ALAT, MEDIA, DAN SUMBER BELAJAR</b></legend>
				<table>
					<tr><td><input class="form-control" type="text" name="alat" placeholder="Alat dan Bahan"></td></tr>
					<tr><td><input class="form-control" type="text" name="media" placeholder="Media"></td></tr>
					<tr><td><textarea class="form-control" name="sumber" placeholder="Sumber Pembelajaran"></textarea></td></tr>
				</table>
			</fieldset>
			<br/>
			<fieldset>
				<legend><b>MODEL DAN METODE PEMBELAJARAN</b></legend>
				<table>
					<tr><td><textarea class="form-control" type="text" name="model" placeholder="Model pembelajaran"></textarea></td></tr>
					<tr><td><textarea class="form-control" type="text" name="metode" placeholder="Metode Pembelajaran"></textarea></td></tr>
				</table>
			</fieldset>
			<br/>
			<fieldset>
				<legend><b>LANGKAH-LANGKAH KEGIATAN PEMBELAJARAN</b></legend>
				<table>
					<tr><td>Kegiatan Pendahuluan</td></tr>	
					<tr><td><textarea class="form-control" name="pendahuluan" placeholder="Keg. Pendahuluan"></textarea></td></tr>
					<tr><td><input class="form-control" type="text" name="waktpn" placeholder="Waktu Pendahuluan(menit)"></td></tr>
					<tr><td>Kegiatan Inti</td></tr>
					<tr><td><textarea class="form-control" name="kegiatanliterasi" placeholder="Keg. Literasi"></textarea></td></tr>
					<tr><td><textarea class="form-control" name="criticalthinking" placeholder="Critical Thinking"></textarea></td></tr>
					<tr><td><textarea class="form-control" name="collaboration" placeholder="Collaboration"></textarea></td></tr>
					<tr><td><textarea class="form-control" name="communication" placeholder="Communication"></textarea></td></tr>
					<tr><td><textarea class="form-control" name="creativity" placeholder="Creativity"></textarea></td></tr>
					<tr><td><input class="form-control" type="text" name="waktii" placeholder="Waktu Keg. Inti(menit)"></td></tr>
					<tr><td>Kegiatan Penutup</td></tr>
					<tr><td><textarea class="form-control" name="penutup" placeholder="Keg. Penutup"></textarea></td></tr>
					<tr><td><input class="form-control" type="text" name="waktpp" placeholder="Waktu Keg. Penutup(menit)"></td></tr>
				</table>
			</fieldset>
			<br/>
			<fieldset>
				<legend><b>PENILAIAN</b></legend>
				<table>
					<tr><td><textarea class="form-control" type="text" name="penilaians" placeholder="Penilaian Sikap"></textarea></td></tr>
					<tr><td><textarea class="form-control" type="text" name="penilaianp" placeholder="Penilaian Pengetahuan"></textarea></td></tr>
					<tr><td><textarea class="form-control" type="text" name="penilaiank" placeholder="Penilaian Ketrampilan"></textarea></td></tr>
				</table>
			</fieldset>
			<br/>
			<fieldset>
				<legend><b>TTD</b></legend>
				<table>
					<tr><td><input class="form-control" type="text" name="pembuatan" placeholder="Kota dan Tanggal RPP"></td></tr>
					<tr><td><input class="form-control" type="text" name="namakepsek" placeholder="Nama Kepala Sekolah"></td></tr>
					<tr><td><input class="form-control" type="text" name="nipkepsek" placeholder="NIP Kepala Sekolah"></td></tr>
					<tr><td><input class="form-control" type="text" name="namaguru" placeholder="Nama Guru"></td></tr>
					<tr><td><input class="form-control" type="text" name="nipguru" placeholder="NIP Guru"></td></tr>
				</table>
			</fieldset>
			<br/>
			<center><tr>
				<td colspan=3><input type="submit" value="Print"/></td>
			</tr></center>
		</form>
    </div>
	</div>
    </div>
    </div>

<?php
include_once 'footer.php';
?>