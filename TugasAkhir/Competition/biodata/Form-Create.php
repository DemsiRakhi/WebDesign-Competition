<!DOCTYPE html>
<html>
	<body>
		<form method="POST" action="Read.php">
			<section id="input-form">
                        <!--<form method="#" action="#">!-->
                            <div class="judul">
                                FORM PENDAFTARAN
                            </div>
                            <div class="form">
                                <label for="NIS">NIS Peserta</label>
                                <input type="text" name="NIS" id="NIS"
                                placeholder="Masukkan NIS anda">
                            </div>
                            <div class="form">
                                <label for="namaPeserta">Nama</label>
                                <input type="text" name="NamaPeserta" id="namaPeserta"
                                placeholder="Masukkan nama anda">
                            </div>
                            <div class="form">
                                <label for="TanggalLahir">Tanggal Lahir</label>
                                <input type="text" name="TanggalLahir" id="TanggalLahir"
                                placeholder="Masukkan tanggal lahir anda">
                            </div>
                            <div class="form">
                                <label for="NoHP">No HP</label>
                                <input type="text" name="NoHP" id="NoHP"
                                placeholder="Masukkan No HP anda">
                            </div>
                            <div class="form">
                                <label for="Sekolah">Sekolah</label>
                                <input type="text" name="Sekolah" id="Sekolah"
                                placeholder="Masukkan sekolah anda">
							</div>
							<div class="form1">
                                <input type="submit" name="btnSimpan"
								value="Daftar" class="bg-blue">
							</div>
                            </div>
                        <!-- </form> -->
                    </section>
		</form>
	</body>
</html>
<style>
body{
    background-color: #00C3FF;
}

.bg-blue{
    background-color: #55a8fd;
    color: #fff;
    box-shadow: 0 0 7px 0px #55a8fd;
    border: 1px solid #55a8fd;
    cursor: pointer;
}

section#input-form{
    position: relative;
    max-width: 80%;
    margin-left: 10%;
    margin-right: 10%;
    margin-top: 60px;
    border-radius: 6px;
    background-color: #fff;
    box-shadow: 0 0 7px 0px rgba(136, 136,136, 0.2);
    padding: 30px;
}
#input-form .form{
    width: 100%;
    display: grid;
    margin-top: 15px;
    margin-bottom: 15px;
}

#input-form .form1{
    width: 100%;
    margin-top: 15px;
    margin-bottom: 15px;
    display: grid;
}

label{
    font-family: 'Helvetica', sans-serif;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

input{
    font-family: 'helvetica', sans serif;
    padding: 10px 20px 10px 10px;
    border-radius: 3px;
    border: 1px solid #8888;
    margin-top: 5px;
    margin-bottom: 5px;
    font-size: 16px;
}

#input-form .judul{
    font-family: 'helvetica', sans serif;
    text-align: center;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}
</style>