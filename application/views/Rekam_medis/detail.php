<div class="flex flex-1 min-h-screen">
    <!-- Sidebar -->
    <aside class="flex flex-col w-64 bg-Main8 text-white px-10 py-12 relative">
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
        <div class="flex w-full mt-8">
            <div class="flex w-full h-12 bg-Bg3 px-4 py-2 rounded-lg items-center shadow-Button hover:bg-Main9">
                <a href="<?= base_url(); ?>Rekam_medis/main">
                    <i class="fa-solid fa-file-medical text-black w-6"></i>
                    <label class="p-regular text-black">Data Pasien</label>
                </a>
            </div>
        </div>
        <div class="flex w-full mt-5">
            <div class="flex w-full h-12 bg-Bg3 px-4 py-2 rounded-lg items-center shadow-Button hover:bg-Main9">
                <a href="<?= base_url(); ?>Rekam_medis/mainDokter">
                    <i class="fa-solid fa-file-medical text-black w-6"></i>
                    <label class="p-regular text-black">Data Dokter</label>
                </a>
            </div>
        </div>
        <div class="flex absolute bottom-12 left-12">
            <div
                class="flex w-10 h-10 bg-Button1-40 rounded-lg justify-center items-center shadow-Button hover:bg-Button1-default">
                <a href="<?= base_url(); ?>Rekam_medis">
                    <img src="<?= base_url(); ?>asset/img/logout-04.svg" alt="Logout" class="w-6 object-contain">
                </a>
            </div>
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

                <script>
                    // Cek apakah ada flashdata sukses
                    <?php if ($this->session->flashdata('success')): ?>
                        Swal.fire({
                            title: 'Berhasil!',
                            text: '<?= $this->session->flashdata('success'); ?>',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    <?php endif; ?>
                </script>

                <?php
                // Ambil ID dari URL
                $urlPath = $_SERVER['REQUEST_URI'];
                $segments = explode('/', $urlPath);
                $id_pasien = end($segments);

                // Ambil data pasien
                $apiUrlPasien = "https://rawat-jalan.pockethost.io/api/collections/pasien/records";
                $dataPasien = json_decode(file_get_contents($apiUrlPasien), true);

                $pasien = null;

                if ($id_pasien && isset($dataPasien['items']) && is_array($dataPasien['items'])) {
                    foreach ($dataPasien['items'] as $item) {
                        if ($item['id'] === $id_pasien) {
                            $pasien = $item;
                            break;
                        }
                    }
                }

                if ($pasien): ?>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 px-4 py-2">
                        <div class="flex flex-col space-y-2">
                            <div class="flex">
                                <span class="p-regular w-32">Nama</span>
                                <span>: <?= htmlspecialchars($pasien["nama_lengkap"]); ?></span>
                            </div>
                            <div class="flex">
                                <span class="p-regular w-32">Jenis Kelamin</span>
                                <span>: <?= htmlspecialchars($pasien["jenis_kelamin"]); ?></span>
                            </div>
                            <div class="flex">
                                <span class="p-regular w-32">Tanggal Lahir</span>
                                <span>: <?= htmlspecialchars($pasien["tanggal_lahir"]); ?></span>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 mr-20">
                            <div class="flex">
                                <span class="p-regular w-32">Nama Ibu</span>
                                <span>: <?= htmlspecialchars($pasien["nama_ibu"]); ?></span>
                            </div>
                            <div class="flex">
                                <span class="p-regular w-32">Alamat</span>
                                <span>: <?= htmlspecialchars($pasien["alamat"]); ?></span>
                            </div>
                            <div class="flex">
                                <span class="p-regular w-32">No. Telepon</span>
                                <span>: <?= htmlspecialchars($pasien["no_telp"]); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- TABEL REKAM MEDIS-->
                    <div class="w-full rounded-3xl p-10 my-8 bg-Bg4-30 shadow-Card">
                        <table class="table w-full">
                            <thead class="bg-Main8 text-white">
                                <tr>
                                    <th class="p-light text-center">No</th>
                                    <th class="p-light text-center">Tanggal</th>
                                    <th class="p-light text-center">Keluhan</th>
                                    <th class="p-light text-center">Dokter</th>
                                    <th class="p-light text-center">Edit Rekam Medis</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // URL API Rekam Medis
                                $apiUrlRekamMedis = "https://rawat-jalan.pockethost.io/api/collections/pendaftaran/records";
                                $dataRekamMedis = json_decode(file_get_contents($apiUrlRekamMedis), true);

                                // URL API Dokter  
                                $apiUrlDokter = "https://0sr024r8-3000.asse.devtunnels.ms/api/dokter/";
                                $dataDokter = json_decode(file_get_contents($apiUrlDokter), true);

                                // URL API Diagnosa
                                $apiUrlDiagnosa = "https://rawat-jalan.pockethost.io/api/collections/diagnosa/records";
                                $dataDiagnosa = json_decode(file_get_contents($apiUrlDiagnosa), true);

                                // Buat array untuk menyimpan data diagnosa berdasarkan ID pendaftaran
                                $diagnosaKeluhanMap = [];
                                if (isset($dataDiagnosa['items']) && is_array($dataDiagnosa['items'])) {
                                    foreach ($dataDiagnosa['items'] as $diagnosa) {
                                        // Gunakan 'pendaftaran' sebagai kunci untuk pemetaan keluhan
                                        $diagnosaKeluhanMap[$diagnosa['pendaftaran']] = $diagnosa['keluhan'];
                                    }
                                }

                                //Buat array untuk menyimpan data dokter
                                $dokterMap = [];
                                if (isset($dataDokter['payload']) && is_array($dataDokter['payload'])) {
                                    foreach ($dataDokter['payload'] as $dokter) {
                                        $dokterMap[$dokter['ID_Dokter']] = $dokter['Nama'];
                                    }
                                }

                                // Filter data rekam medis berdasarkan ID pasien
                                $rekamMedisFiltered = [];
                                if (isset($dataRekamMedis['items']) && is_array($dataRekamMedis['items'])) {
                                    foreach ($dataRekamMedis['items'] as $rekamMedis) {
                                        // Filter berdasarkan ID Pasien yang ada pada rekam medis
                                        if ($rekamMedis['pasien'] === $id_pasien) {
                                            $rekamMedisFiltered[] = $rekamMedis;
                                        }
                                    }
                                }

                                // Cek jika data rekam medis ditemukan
                                if (!empty($rekamMedisFiltered)):
                                    $i = 1;
                                    foreach ($rekamMedisFiltered as $rekamMedis):
                                        $namaDokter = isset($dokterMap[$rekamMedis["dokter"]]) ? $dokterMap[$rekamMedis["dokter"]] : "Dokter Tidak Ditemukan"; 
                                        // Ambil keluhan dari diagnosa, jika tersedia
        $keluhanDiagnosa = isset($diagnosaKeluhanMap[$rekamMedis['id']]) ? $diagnosaKeluhanMap[$rekamMedis['id']] : "Keluhan Tidak Ditemukan";
                                        ?>

                                        <tr>
                                            <th class="p-light text-center"><?= $i++; ?></th>
                                            <td class="p-light text-center">
                                                <?= date('d-m-Y', strtotime($rekamMedis["tanggal"])); ?>
                                            </td>
                                            <td class="p-light text-center"><?= htmlspecialchars($keluhanDiagnosa); ?></td>
                                            <td class="p-light text-center"><?= htmlspecialchars($namaDokter); ?></td>
                                            <td class="p-light text-center">
                                                <a href="<?= base_url(); ?>Rekam_medis/detail/<?= htmlspecialchars($item['id']); ?>"
                                                    class="text-Main7 hover:text-Main9">
                                                    <i class="fa-solid fa-eye fa-lg"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6" class="text-center">Data rekam medis tidak ditemukan.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <br>
                    </div>
                <?php else: ?>
                    <p>Pasien dengan ID tersebut tidak ditemukan.</p>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>