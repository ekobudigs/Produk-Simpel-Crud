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
					<option value="1">Tinta Printer</option>
					<option value="2">CISS Infus Modifikasi</option>
					<option value="3">Cartridge</option>
					<option value="4">Toner</option>
					<option value="5">Paket Printer</option>
					<option value="6">Aksesoris Printer</option>
				</select>
			</div>


            <div class="form-group">
				<label for="status">Status Produk</label>
				<select class="form-control <?= form_error('status') ? 'is-invalid' : '' ?>" id="status" name="status">
					<option value="1">Bisa DiJual</option>
					<option value="0">Belum Bisa Dijual</option>
				</select>
			</div>

			<button type="submit" class="btn btn-primary btn-user btn-block">
				Register Account
			</button>
		</form>

	</div>
</div>