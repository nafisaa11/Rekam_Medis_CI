<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-Main8 text-white px-12 py-12 fixed h-full">
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
            <div class="flex justify-start items-center mt-8">
                <div class="flex w-auto h-12 bg-Bg3 px-4 py-2 rounded-lg items-center shadow-Button hover:bg-Main9">
                    <img src="<?= base_url(); ?>asset/img/clinical_f.svg" alt="Data" class="w-8 mr-2">
                    <p class="p-regular text-black">Data Pasien</p>
                </div>
            </div>
            <div class="flex mt-5">
                <a href="<?= base_url(); ?>Rekam_medis/TambahPasien">
                    <div class="w-10 h-10 bg-Bg3 rounded-lg flex justify-center items-center shadow-Button hover:bg-Main9">
                        <i class="fa-solid fa-plus text-black"></i>
                    </div>
                </a>
            </div>
            
            <!-- Logout Button -->
            <div class="absolute bottom-12">
                <div class="flex w-10 h-10 bg-Button1-40 rounded-lg justify-center items-center shadow-Button hover:bg-Button1-default">
                    <a href="<?= base_url(); ?>Rekam_medis/logout">
                        <img src="<?= base_url(); ?>asset/img/logout-04.svg" alt="Logout" class="w-6 object-contain">
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 ml-64 p-8">
            <!-- Logo -->
            <div class="flex items-center mb-6">
                <img src="<?= base_url(); ?>asset/img/Shield.png" alt="" class="w-16">
                <h2 class="text-2xl font-bold ml-4">PENS HOSPITAL</h2>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <!-- Data Pasien -->
                <div class="bg-blue-100 rounded-lg p-6 mb-6">
                    <h2 class="text-xl font-semibold mb-4">DATA PASIEN</h2>
                    <div class="grid grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <div class="flex gap-2 items-center">
                                <span class="w-32">Nama</span>
                                <span>:</span>
                                <input type="text" name="nama" value="<?php echo $nama ?? ''; ?>" class="input input-bordered input-sm w-48">
                            </div>
                            <div class="flex gap-2 items-center">
                                <span class="w-32">Jenis Kelamin</span>
                                <span>:</span>
                                <select name="jenis_kelamin" class="select select-bordered select-sm w-48">
                                    <option value="" <?php echo empty($jenis_kelamin) ? 'selected' : ''; ?>>Pilih</option>
                                    <option value="Laki-laki" <?php echo ($jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                                    <option value="Perempuan" <?php echo ($jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="flex gap-2 items-center">
                                <span class="w-32">Tanggal Lahir</span>
                                <span>:</span>
                                <input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir ?? ''; ?>" class="input input-bordered input-sm w-48">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex gap-2 items-center">
                                <span class="w-32">Nama Ibu</span>
                                <span>:</span>
                                <input type="text" name="nama_ibu" value="<?php echo $nama_ibu ?? ''; ?>" class="input input-bordered input-sm w-48">
                            </div>
                            <div class="flex gap-2 items-center">
                                <span class="w-32">Alamat</span>
                                <span>:</span>
                                <input type="text" name="alamat" value="<?php echo $alamat ?? ''; ?>" class="input input-bordered input-sm w-48">
                            </div>
                            <div class="flex gap-2 items-center">
                                <span class="w-32">No. Telepon</span>
                                <span>:</span>
                                <input type="text" name="no_telp" value="<?php echo $no_telp ?? ''; ?>" class="input input-bordered input-sm w-48">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Rekam Medis -->
                <form method="POST" class="bg-blue-100 rounded-lg p-6">
                    <!-- Baris 1 -->
                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <div class="form-control">
                            <label class="label text-sm">Tanggal MRS</label>
                            <input type="date" name="Tanggal_MRS" class="input input-bordered w-full bg-white" />
                        </div>
                        <div class="form-control">
                            <label class="label text-sm">Tanggal KRS</label>
                            <input type="date" name="Tanggal_KRS" class="input input-bordered w-full bg-white" />
                        </div>
                        <div class="form-control">
                            <label class="label text-sm">Nama Rumah Sakit</label>
                            <input type="text" name="Nama_RumahSakit" class="input input-bordered w-full bg-white" />
                        </div>
                    </div>

                    <!-- Baris 2 -->
                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <div class="form-control">
                            <label class="label text-sm">Keluhan</label>
                            <textarea name="Keluhan" class="textarea textarea-bordered w-full bg-white"></textarea>
                        </div>
                        <div class="form-control">
                            <label class="label text-sm">Diagnosa</label>
                            <textarea name="Diagnosa" class="textarea textarea-bordered w-full bg-white"></textarea>
                        </div>
                        <div class="form-control">
                            <label class="label text-sm">Penanganan Medis</label>
                            <textarea name="Penanganan_Medis" class="textarea textarea-bordered w-full bg-white"></textarea>
                        </div>
                    </div>

                    <!-- Baris 3 -->
                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <div class="form-control">
                            <label class="label text-sm">Hasil Pemeriksaan</label>
                            <textarea name="Hasil_Pemeriksaan" class="textarea textarea-bordered w-full bg-white"></textarea>
                        </div>
                        <div class="form-control col-span-2">
                            <label class="label text-sm">Tindakan</label>
                            <textarea name="Tindakan" class="textarea textarea-bordered w-full bg-white"></textarea>
                        </div>
                    </div>

                    <!-- Baris 4 -->
                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <div class="form-control">
                            <label class="label text-sm">Pelayanan</label>
                            <input type="text" name="Pelayanan" class="input input-bordered w-full bg-white" />
                        </div>
                        <div class="form-control">
                            <label class="label text-sm">Nama Dokter</label>
                            <input type="text" name="Nama_Dokter" class="input input-bordered w-full bg-white" />
                            <div class="mt-2">
                                <label class="label text-sm">Obat</label>
                                <textarea name="Obat" class="textarea textarea-bordered w-full bg-white"></textarea>
                            </div>
                        </div>
                        <div class="form-control">
                            <label class="label text-sm">Rujukan</label>
                            <input type="text" name="Rujukan" class="input input-bordered w-full bg-white" />
                        </div>
                    </div>

                    <!-- Catatan -->
                    <div class="form-control mb-4">
                        <label class="label text-sm">Catatan</label>
                        <textarea name="Catatan" class="textarea textarea-bordered w-full bg-white h-32"></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>