<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="flex flex-col w-64 bg-Main8 text-white px-12 py-12 relative">

          <!-- Admin -->
          <div class="flex justify-center items-center">
              <div class="w-32 h-32 bg-White rounded-full overflow-hidden shadow-Button">
                  <img src="<?= base_url(); ?>asset/img/gojo.png" alt="" class="w-full h-full object-cover">
              </div>
          </div>
          <div class="flex justify-center items-center mt-5 text-black">
              <h3>Admin 1</h3>
          </div>

                  <!-- Button -->
        <div class="flex mt-8">
            <a href="<?= base_url(); ?>Rekam_medis/main">
                <div class="flex w-full h-12 bg-Bg3 px-4 py-2 rounded-lg items-center shadow-Button hover:bg-Main9">
                    <i class="fa-solid fa-file-medical text-black w-7 mr-1"></i>
                    <p class="p-regular text-black">Data Pasien</p>
                </div>
            </a>
        </div>
        <div class="flex mt-5">
            <a href="<?= base_url(); ?>Rekam_medis/mainDokter">
                <div class="flex w-full h-12 bg-Bg3 px-4 py-2 rounded-lg items-center shadow-Button hover:bg-Main9">
                    <i class="fa-solid fa-file-medical text-black w-7 mr-1"></i>
                    <p class="p-regular text-black">Data Dokter</p>
                </div>
            </a>
        </div>
      </aside>

        <!-- Main Content -->
        <div class="flex-1 px-12 py-8 bg-Bg3">
            <!-- Logo -->
            <div class="flex w-full h-auto items-center">
                <img src="<?= base_url(); ?>asset/img/Shield.png" alt="" class="w-16">
                <h2>PENS HOSPITAL</h2>
            </div>

            <div>
                <!-- Form Rekam Medis -->
                <?php
                    $apiUrl = "https://rawat-jalan.pockethost.io/api/collections/pasien/records";
                    $data = json_decode(file_get_contents($apiUrl), true);

                    if (isset($data['items']) && is_array($data['items'])):
                        $id_pasien = $data['items'][0]['id']; // Ambil ID Pasien pertama
                ?>

                <form action="<?= base_url(); ?>Rekam_medis/tambahRekamMedis" method="POST" class="bg-Bg4-30 rounded-3xl p-8 mt-8 shadow-Card">
                    <div class="header mb-8 text-center">
                        <h3>TAMBAH REKAM MEDIS</h3>
                    </div>

                    <!-- Hidden Input for id_pasien -->
                    <input type="hidden" name="id_pasien" value="<?= htmlspecialchars($id_pasien); ?>">


                    <!-- Form Fields -->
                    <div class="grid grid-cols-2 gap-8 mb-4">
                        <div class="form-control">
                            <label class="label p-regular">Tanggal MRS</label>
                            <input type="date" name="Tanggal_MRS" class="p-light input input-bordered w-full bg-white" required />
                        </div>
                        <div class="form-control">
                            <label class="label p-regular">Tanggal KRS</label>
                            <input type="date" name="Tanggal_KRS" class="p-light input input-bordered w-full bg-white" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-8 mb-4">
                        <div class="form-control">
                            <label class="label p-regular">Nama Rumah Sakit</label>
                            <input type="text" name="Nama_RumahSakit" class="p-light input input-bordered w-full bg-white" required />
                        </div>
                        <div class="form-control">
                            <label class="label p-regular">Rujukan</label>
                            <input type="text" name="Rujukan" class="p-light input input-bordered w-full bg-white" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-8 mb-4">
                        <div class="form-control">
                            <label class="label p-regular">Nama Dokter</label>
                            <input type="text" name="Nama_Dokter" class="p-light input input-bordered w-full bg-white" required />
                        </div>
                        <div class="form-control">
                            <label class="label p-regular">Pelayanan</label>
                            <input type="text" name="Pelayanan" class="p-light input input-bordered w-full bg-white" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-8 mb-4">
                        <div class="form-control">
                            <label class="label p-regular">Keluhan</label>
                            <textarea name="Keluhan" class="p-light textarea textarea-bordered w-full bg-white" required></textarea>
                        </div>
                        <div class="form-control">
                            <label class="label p-regular">Diagnosa</label>
                            <textarea name="Diagnosa" class="p-light textarea textarea-bordered w-full bg-white" required></textarea>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-8 mb-4">
                        <div class="form-control">
                            <label class="label p-regular">Penanganan Medis</label>
                            <textarea name="Penanganan_Medis" class="p-light textarea textarea-bordered w-full bg-white" required></textarea>
                        </div>
                        <div class="form-control">
                            <label class="label p-regular">Hasil Pemeriksaan</label>
                            <textarea name="Hasil_Pemeriksaan" class="p-light textarea textarea-bordered w-full bg-white" required></textarea>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-8 mb-4">
                        <div class="form-control">
                            <label class="label p-regular">Tindakan</label>
                            <textarea name="Tindakan" class="p-light textarea textarea-bordered w-full bg-white" required></textarea>
                        </div>
                        <div class="form-control">
                            <label class="label p-regular">Obat</label>
                            <textarea name="Obat" class="p-light textarea textarea-bordered w-full bg-white" required></textarea>
                        </div>
                    </div>

                    <div class="form-control mb-4">
                        <label class="label p-regular">Catatan</label>
                        <textarea name="Catatan" class="p-light textarea textarea-bordered w-full bg-white h-32" required></textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="btn-simpan flex justify-between gap-4">
                        <a href="<?= base_url(); ?>Rekam_medis/main" class="p-regular btn bg-Main8 hover:bg-Main9 text-white px-3 py-1 shadow-Button">Kembali</a>
                        <button type="submit" name="submit" class="p-regular btn bg-Main8 hover:bg-Main9 text-white px-3 py-1 shadow-Button">Tambah Rekam Medis</button>
                    </div>
                </form>

                <?php else: ?>
                    <p class="text-center text-red-500">Gagal mengambil data pasien dari API.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
