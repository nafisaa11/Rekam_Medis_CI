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
                        <table class="table w-full ">
                            <thead class="bg-Main8 text-white">
                                <tr>
                                    <th class="p-light text-center">No</th>
                                    <th class="p-light text-center">Tanggal</th>
                                    <th class="p-light text-center">Keluhan</th>
                                    <th class="p-light text-center">Dokter</th>
                                    <th class="p-light text-center">Lihat Rekam Medis</th>
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

                                // Buat array untuk menyimpan data dokter
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
                                        if ($rekamMedis['pasien'] === $id_pasien) {
                                            $rekamMedisFiltered[$rekamMedis['id']] = $rekamMedis;
                                        }
                                    }
                                }

                                // Menyimpan diagnosa berdasarkan pendaftaran
                                $diagnosaByPendaftaran = [];
                                if (isset($dataDiagnosa['items']) && is_array($dataDiagnosa['items'])) {
                                    foreach ($dataDiagnosa['items'] as $diagnosa) {
                                        $diagnosaByPendaftaran[$diagnosa['pendaftaran']][] = $diagnosa;
                                    }
                                }

                                // Cek jika data rekam medis ditemukan
                                if (!empty($rekamMedisFiltered)):
                                    $i = 1;
                                    foreach ($rekamMedisFiltered as $rekamMedisId => $rekamMedis):
                                        $namaDokter = isset($dokterMap[$rekamMedis["dokter"]]) ? $dokterMap[$rekamMedis["dokter"]] : "Dokter Tidak Ditemukan";

                                        // Periksa apakah ada diagnosa untuk rekam medis ini
                                        if (isset($diagnosaByPendaftaran[$rekamMedisId])) {
                                            foreach ($diagnosaByPendaftaran[$rekamMedisId] as $diagnosa) {
                                                ?>
                                                <tr>
                                                    <th class="p-light text-center"><?= $i++; ?></th>
                                                    <td class="p-light text-center"><?= date('d-m-Y', strtotime($diagnosa["tanggal"])); ?>
                                                    </td>
                                                    <td class="p-light text-center"><?= htmlspecialchars($diagnosa['keluhan']); ?></td>
                                                    <td class="p-light text-center"><?= htmlspecialchars($namaDokter); ?></td>
                                                    <td class="p-light text-center">
                                                    <button onclick="openModal(
                                                '<?= htmlspecialchars($diagnosa['id']); ?>', 
                                                '<?= htmlspecialchars($namaDokter); ?>', 
                                                '<?= date('d-m-Y', strtotime($diagnosa['tanggal'])); ?>',
                                                '<?= htmlspecialchars($diagnosa['keluhan']); ?>',
                                                '<?= htmlspecialchars($diagnosa['detail']); ?>',
                                                '<?= htmlspecialchars($diagnosa['jenis_layanan']); ?>',
                                                '<?= htmlspecialchars($diagnosa['jenis_pemeriksaan']); ?>'
                                                )"
                                                        class="text-Main7 hover:text-Main9">
                                                        <i class="fa-solid fa-eye fa-lg"></i>
                                                    </button>
                                                </td>

                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            // Jika tidak ada diagnosa untuk rekam medis ini
                                            ?>
                                            <tr>
                                                <th class="p-light text-center"><?= $i++; ?></th>
                                                <td class="p-light text-center"><?= date('d-m-Y', strtotime($rekamMedis["tanggal"])); ?>
                                                </td>
                                                <td class="p-light text-center">Diagnosa Tidak Ditemukan</td>
                                                <td class="p-light text-center"><?= htmlspecialchars($namaDokter); ?></td>
                                                <td class="p-light text-center">
                                                    <button onclick="openModal(
                                                            '<?= htmlspecialchars($diagnosa['id']); ?>', 
                                                            '<?= htmlspecialchars($namaDokter); ?>', 
                                                            '<?= date('d-m-Y', strtotime($diagnosa['tanggal'])); ?>',
                                                            '<?= htmlspecialchars($diagnosa['detail']); ?>',
                                                            '<?= htmlspecialchars($diagnosa['keluhan']); ?>',
                                                            '<?= htmlspecialchars($diagnosa['jenis_layanan']); ?>',
                                                            '<?= htmlspecialchars($diagnosa['jenis_pemeriksaan']); ?>'
                                                        )"
                                                    class="text-Main7 hover:text-Main9">
                                                        <i class="fa-solid fa-eye fa-lg"></i>
                                                    </button>
                                                </td>

                                            </tr>
                                            <?php
                                        }
                                    endforeach;
                                else:
                                    ?>
                                    <tr>
                                        <td colspan="6" class="text-center">Data rekam medis tidak ditemukan.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                    </div>
                <?php else: ?>
                    <p>Pasien dengan ID tersebut tidak ditemukan.</p>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>

<!-- Modal untuk menampilkan detail Rekam Medis -->
<div id="formModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center"
    style="z-index: 10;">
    <div class="modal-box bg-white rounded-xl shadow-lg w-full max-w-md p-6 transform transition-transform scale-95 opacity-0">
        <!-- Header Modal -->
        <div class="modal-header flex justify-between items-center border-b pb-4">
            <h1 class="text-2xl font-semibold text-gray-800" id="formModalLabel">Detail Rekam Medis</h1>
            <button type="button" class="text-gray-500 hover:text-gray-700" aria-label="Close" onclick="closeModal()">
                <i class="fa-solid fa-times fa-lg"></i>
            </button>
        </div>
        <!-- Isi Modal -->
        <div class="modal-body py-6 space-y-4">
            <strong class="p-semibold">Nama Dokter:</strong> <span id="dokterName">Loading...</span>
            <br>
            <br>
            <strong class="p-semibold">Tanggal Rekam Medis:</strong> <span id="tanggal">Loading...</span>
            <br>
            <br>
            <strong class="p-semibold">Keluhan:</strong> <span id="keluhan">Loading...</span>
            <br>
            <br>
            <strong class="p-semibold">Detail:</strong> <span id="detail">Loading...</span>
            <br>
            <br>
            <strong class="p-semibold">Jenis Layanan:</strong> <span id="jenis_layanan">Loading...</span>
            <br>
            <br>
            <strong class="p-semibold">Jenis Pemeriksaan:</strong> <span id="jenis_pemeriksaan">Loading...</span>
        </div>
        <!-- Footer Modal -->
        <div class="modal-footer flex justify-end mt-4">
            <button type="button" class="btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700"
                onclick="closeModal()">Kembali</button>
        </div>
    </div>
</div>

<!-- Skrip untuk membuka dan menutup modal -->
<script>
    // Fungsi untuk membuka modal dengan animasi
    function openModal(diagnosaId, dokter, tanggal, keluhan, detail, jenis_layanan, jenis_pemeriksaan) {
        // Update isi modal
        document.getElementById("dokterName").innerText = dokter;
        document.getElementById("tanggal").innerText = tanggal;
        document.getElementById("keluhan").innerText = keluhan;
        document.getElementById("detail").innerText = detail;
        document.getElementById("jenis_layanan").innerText = jenis_layanan;
        document.getElementById("jenis_pemeriksaan").innerText = jenis_pemeriksaan;

        // Tampilkan modal dengan animasi
        const modal = document.getElementById("formModal");
        modal.classList.remove("hidden");
        setTimeout(() => {
            const box = modal.querySelector(".modal-box");
            box.style.transform = "scale(1)";
            box.style.opacity = "1";
        }, 100);
    }

    // Fungsi untuk menutup modal dengan animasi
    function closeModal() {
        const modal = document.getElementById("formModal");
        const box = modal.querySelector(".modal-box");
        box.style.transform = "scale(0.95)";
        box.style.opacity = "0";
        setTimeout(() => modal.classList.add("hidden"), 200);
    }
</script>
    

<!-- Tambahkan Tailwind CSS dan DaisyUI JS -->
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/daisyui@1.7.0/dist/full.js"></script>