<div class="col-md-8 mt-3">

	<div class="card-body mt-3">
		<form class="user" method="post" action="<?= base_url('produk/simpanproduk'); ?>">

			<div class="form-group">
            <label for="namaproduk">Nama Produk</label>
				<input type="text" class="form-control <?= form_error('namaproduk') ? 'is-invalid' : '' ?>" id="namaproduk" name="namaproduk" placeholder="Nama Produk"
					value="<?= set_value('namaproduk'); ?>">
                    <?= form_error('namaproduk', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>

			<div class="form-group">
            <label for="hargaproduk">Harga Produk</label>
				<input type="number" class="form-control <?= form_error('hargaproduk') ? 'is-invalid' : '' ?>" id="hargaproduk" name="hargaproduk" placeholder="harga Produk"
					value="<?= set_value('hargaproduk'); ?>">
                    <?= form_error('hargaproduk', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>

			<div class="form-group">
				<label for="kategoriproduk">Kategori Produk</label>
				<select class="form-control <?= form_error('kategoriproduk') ? 'is-invalid' : '' ?>" id="kategoriproduk" name="kategoriproduk">
					<option value="Tinta Printer">Tinta Printer</option>
					<option value="CISS Infus Modifikasi">CISS Infus Modifikasi</option>
					<option value="Cartridge">Cartridge</option>
					<option value="Toner">Toner</option>
					<option value="Paket Printer">Paket Printer</option>
					<option value="Aksesoris Printer">Aksesoris Printer</option>
				</select>
			</div>


            <div class="form-group">
				<label for="statusproduk">Status Produk</label>
				<select class="form-control <?= form_error('statusproduk') ? 'is-invalid' : '' ?>" id="statusproduk" name="statusproduk">
					<option value="Bisa DiJual">Bisa DiJual</option>
					<option value="Belum Bisa Dijual">Belum Bisa Dijual</option>
				</select>
			</div>

			<button type="submit" class="btn btn-primary btn-user btn-block">
				Simpan Data
			</button>
		</form>

	</div>
</div>