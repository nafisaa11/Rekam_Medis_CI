<div class="flex flex-1">
    <!-- Sidebar -->
    <aside class="flex flex-col w-64 bg-Main8 text-white px-12 py-12 relative">
        <div class="flex justify-center items-center">
            <div class="w-32 h-32 bg-White rounded-full overflow-hidden shadow-Button">
                <img src="<?= base_url(); ?>asset/img/gojo.png" alt="" class="w-full h-full object-cover">
            </div>
        </div>
        <div class="flex justify-center items-center mt-5 text-black">
            <h3>Admin 1</h3>
        </div>
          <div class="flex justify-start items-center mt-8">
            <a href="<?= base_url(); ?>Rekam_medis/main">
                  <div class="flex w-auto h-12 bg-Bg3 px-4 py-2 rounded-lg items-center shadow-Button hover:bg-Main9">
                      <img src="<?= base_url(); ?>asset/img/clinical_f.svg" alt="Data" class="w-8 mr-2">
                      <p class="p-regular text-black">Data Pasien</p>
                  </div>
              </a>
            </div>

    </aside>

    <!-- Main Content -->
    <main class="flex-1 px-12 py-8 bg-Bg3">
        <div class="content w-full h-full mx-auto">
            <div class="flex w-full h-auto items-center">
                <img src="<?= base_url(); ?>asset/img/Shield.png" alt="" class="w-16">
                <h2>PENS HOSPITAL</h2>
            </div>

            <div class="w-full rounded-3xl p-8 mt-8 bg-Bg4-30 shadow-Card">
                <div class="header mb-5">
                    <h3 class="text-center">REKAM MEDIS PASIEN</h3>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 px-4 py-2">
                    <div class="flex flex-col space-y-2">
                        <div class="flex">
                            <span class="p-regular w-32">Nama</span>
                            <span>: <?= $pasien["Nama_Lengkap"]; ?></span>
                        </div>
                        <div class="flex">
                            <span class="p-regular w-32">Jenis Kelamin</span>
                            <span>: <?= $pasien["Jenis_Kelamin"]; ?></span>
                        </div>
                        <div class="flex">
                            <span class="p-regular w-32">Tanggal Lahir</span>
                            <span>: <?= $pasien["Tanggal_Lahir"]; ?></span>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-2 mr-20">
                        <div class="flex">
                            <span class="p-regular w-32">Nama Ibu</span>
                            <span>: <?= $pasien["Nama_Ibu"]; ?></span>
                        </div>
                        <div class="flex">
                            <span class="p-regular w-32">Alamat</span>
                            <span>: <?= $pasien["Alamat"]; ?></span>
                        </div>
                        <div class="flex">
                            <span class="p-regular w-32">No. Telepon</span>
                            <span>: <?= $pasien["No_Telp"]; ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full rounded-3xl p-10 my-8 bg-Bg4-30 shadow-Card">
                <table class="table w-full">
                    <thead class="bg-Main8 text-white">
                        <tr>
                            <th class="p-light text-center">No</th>
                            <th class="p-light text-center">Tanggal Masuk</th>
                            <th class="p-light text-center">Tanggal Keluar</th>
                            <th class="p-light text-center">Diagnosa</th>
                            <th class="p-light text-center">Obat</th>
                            <th class="p-light text-center">Edit Rekam Medis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($rekam_medis as $row): ?>
                        <input type="hidden" name="NO_RekamMedis" value="<?= $row["NO_RekamMedis"]; ?>">
                            <tr>
                                <th class="p-light text-center"><?= $i++; ?></th>
                                <td class="p-light text-center"><?= $row["Tanggal_MRS"]; ?></td>
                                <td class="p-light text-center"><?= $row["Tanggal_KRS"]; ?></td>
                                <td class="p-light text-center"><?= $row["Diagnosa"]; ?></td>
                                <td class="p-light text-center"><?= $row["Obat"]; ?></td>
                                <td class="p-light text-center">
                                    <a href="<?= base_url(); ?>Rekam_medis/edit/<?= $row['NO_RekamMedis']; ?>"
                                        class="text-Main7 hover:text-Main9">
                                        <i class="fa-solid fa-pen-to-square fa-lg"></i>
                                    </a>


                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <br>
                <div class="flex justify-end">
                    <a href="<?= base_url('Rekam_medis/tambahRekamMedis/' . $pasien['ID_Pasien']); ?>">
                        <button class="p-regular btn bg-Main8 hover:bg-Main9 text-white px-3 py-1 shadow-Button">
                            <i class="fa-solid fa-circle-plus fa-lg"></i>
                            Tambah Rekam Medis
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>