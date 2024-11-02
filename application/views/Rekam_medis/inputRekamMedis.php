<body class="bg-gray-100">
  <!-- Sidebar -->
  <aside class="w-64 bg-sky-500 text-white flex flex-col fixed h-screen">
        <div class="flex justify-center items-center mt-5">
            <div class="w-32 h-32 bg-white rounded-full overflow-hidden">
                <img src="<?= base_url(); ?>asset/img/gojo.png" alt="" class="w-full h-full object-cover">
            </div>
        </div>
        <div class="flex justify-center items-center mt-5 text-black">
            <h1 class="font-bold">ADMIN 1</h1>
        </div>
        <div class="flex justify-center items-center mt-8">
            <a href="main">
                <div class="w-48 h-12 bg-white rounded-lg flex items-center">
                    <img src="<?= base_url(); ?>asset/img/clinical_f.svg" alt="Logo" class="h-8 ml-2">
                    <h6 class="text-black ml-2">Data Pasien</h6>
                </div>
            </a>
        </div>
        <div class="flex-grow"></div>
        <div class="logout ml-8 mb-5">
            <div class="w-10 h-10 bg-sky-200 rounded-lg flex justify-center items-center">
                <a href="<?= base_url(); ?>Rekam_medis/logout">
                    <img src="<?= base_url(); ?>asset/img/logout-04.svg" alt="Logout" class="w-8 h-8 object-contain">
                </a>
            </div>
        </div>
    </aside>

        <!-- Form Card - Tambahkan margin left dan atur max-width -->
        <div class="card bg-base-100 shadow-xl ml-64 max-w-[calc(100%-16rem)] mx-auto p-6">
          <!-- Header Data Pasien dengan background biru muda -->
          <div class="bg-blue-100 p-4 rounded-t-lg">
            <h2 class="text-xl font-semibold mb-4">DATA PASIEN</h2>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <div class="mb-2">
                  <label class="block text-sm">Nama</label>
                  <input type="text" class="input input-bordered w-full" />
                </div>
                <div class="mb-2">
                  <label class="block text-sm">Jenis Kelamin</label>
                  <input type="text" class="input input-bordered w-full" />
                </div>
                <div class="mb-2">
                  <label class="block text-sm">Tanggal Lahir</label>
                  <input type="date" class="input input-bordered w-full" />
                </div>
              </div>
              <div>
                <div class="mb-2">
                  <label class="block text-sm">Nomor RM</label>
                  <input type="text" class="input input-bordered w-full" />
                </div>
                <div class="mb-2">
                  <label class="block text-sm">Alamat</label>
                  <input type="text" class="input input-bordered w-full" />
                </div>
                <div class="mb-2">
                  <label class="block text-sm">No. Telepon</label>
                  <input type="text" class="input input-bordered w-full" />
                </div>
              </div>
            </div>
          </div>

          <!-- Form Rekam Medis dengan background biru muda -->
          <div class="bg-blue-100 p-4 mt-4 rounded-lg">
            <div class="grid grid-cols-3 gap-4 mb-4">
              <div>
                <label class="block text-sm">Tanggal MRS</label>
                <input type="date" class="input input-bordered w-full" />
              </div>
              <div>
                <label class="block text-sm">Tanggal KRS</label>
                <input type="date" class="input input-bordered w-full" />
              </div>
              <div>
                <label class="block text-sm">Nama Ruang/Kelas</label>
                <input type="text" class="input input-bordered w-full" />
              </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mb-4">
              <div>
                <label class="block text-sm">Keluhan</label>
                <textarea class="textarea textarea-bordered w-full" rows="3"></textarea>
              </div>
              <div>
                <label class="block text-sm">Diagnosa</label>
                <textarea class="textarea textarea-bordered w-full" rows="3"></textarea>
              </div>
              <div>
                <label class="block text-sm">Pengobatan/Medis</label>
                <textarea class="textarea textarea-bordered w-full" rows="3"></textarea>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mb-4">
              <div>
                <label class="block text-sm">Hasil Pemeriksaan</label>
                <textarea class="textarea textarea-bordered w-full" rows="2"></textarea>
              </div>
              <div>
                <label class="block text-sm">Nama Dokter</label>
                <input type="text" class="input input-bordered w-full mb-2" />
                <label class="block text-sm">Obat</label>
                <input type="text" class="input input-bordered w-full" />
              </div>
              <div>
                <label class="block text-sm">Tindakan</label>
                <textarea class="textarea textarea-bordered w-full" rows="2"></textarea>
              </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
              <div>
                <label class="block text-sm">Pelayanan</label>
                <textarea class="textarea textarea-bordered w-full" rows="2"></textarea>
              </div>
              <div>
                <label class="block text-sm">Rujukan</label>
                <textarea class="textarea textarea-bordered w-full" rows="2"></textarea>
              </div>
            </div>

            <div class="mb-4">
              <label class="block text-sm">Catatan</label>
              <textarea class="textarea textarea-bordered w-full" rows="3"></textarea>
            </div>

            <div class="text-right">
              <button class="btn btn-primary">Simpan Data</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
