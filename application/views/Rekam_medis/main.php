<div class="flex min-h-screen bg-Bg3">
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
        <div class="flex mt-8">
            <div class="flex w-full h-12 bg-Bg3 px-4 py-2 rounded-lg items-center shadow-Button">
                <i class="fa-solid fa-file-medical text-black w-7 mr-1"></i>
                <p class="p-regular text-black">Data Pasien</p>
            </div>
        </div>
        <div class="flex mt-5">
            <a href="<?= base_url(); ?>Rekam_medis/mainDokter">
                <div class="flex w-full h-12 bg-Bg3 px-4 py-2 rounded-lg items-center shadow-Button hover:bg-Main9">
                    <i class="fa-solid fa-file-medical text-black w-7 mr-1"></i>
                    <p class="p-regular text-black">Data Dokter</p>
                </div>
            </a>
        </div>
        <div class="flex mt-5">
            <a href="<?= base_url(); ?>Rekam_medis/TambahDokter">
                <div
                    class="flex w-full h-12 bg-Bg3 px-4 py-2 rounded-lg justify-center items-center shadow-Button hover:bg-Main9">
                    <i class="fa-solid fa-plus text-black w-7 mr-1"></i>
                    <p class="p-regular text-black">Tambah Dokter</p>
                </div>
            </a>
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

    <!-- Content Area -->
    <main class="flex-1 px-12 py-8">
        <div class="flex w-full h-auto items-center">
            <img src="<?= base_url(); ?>asset/img/Shield.png" alt="" class="w-16">
            <h2>PENS HOSPITAL</h2>
        </div>

        <div class="content my-8 flex justify-center items-center">
            <div class="w-full h-auto bg-Bg4-30 rounded-2xl p-8 shadow-Card">
                <div class="header flex justify-between items-center mb-5">
                    <h3>DATA PASIEN</h3>
                    <div class="search">
                        <form class="flex items-center" action="<?= base_url(); ?>Rekam_medis/main" method="post">
                            <label for="voice-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <input type="text" id="voice-search" name="keyword"
                                    class="p-light bg-Bg3 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-3 shadow-Popup"
                                    placeholder="Cari Pasien..." autocomplete="off" autofocus />
                            </div>
                            <input type="submit" name="submit" value="Cari"
                                class="p-regular px-4 py-3 ms-2 text-sm font-medium text-black bg-Bg3 rounded-lg hover:bg-Main9 focus:ring-4 shadow-Button">
                        </form>
                    </div>
                </div>

                <!-- Table positioned below search and header -->
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead class="bg-Main8 text-white">
                            <tr>
                                <th class="p-light text-center">ID Pasien</th>
                                <th class="p-light text-center">Nama Pasien</th>
                                <th class="p-light text-center">Nama Ibu</th>
                                <th class="p-light text-center">Tgl. Lahir</th>
                                <th class="p-light text-center">No. Telp</th>
                                <th class="p-light text-center">Lihat Rekam Medis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $apiUrl = "https://rawat-jalan.pockethost.io/api/collections/pasien/records";
                            $data = json_decode(file_get_contents($apiUrl), true); // Mengambil data API dalam bentuk array
                            
                            // Cek apakah data items tersedia di dalam hasil decode JSON
                            if (isset($data['items']) && is_array($data['items'])):
                                // Loop melalui setiap item dalam data items
                                foreach ($data['items'] as $item):
                                    ?>
                                    <tr>
                                        <th class="p-medium text-center"><?= htmlspecialchars($item["id"]); ?></th>
                                        <td class="p-light text-center"><?= htmlspecialchars($item["nama_lengkap"]); ?></td>
                                        <td class="p-light text-center"><?= htmlspecialchars($item["nama_ibu"]); ?></td>
                                        <td class="p-light text-center"><?= htmlspecialchars($item["tanggal_lahir"]); ?></td>
                                        <td class="p-light text-center"><?= htmlspecialchars($item["no_telp"]); ?></td>
                                        <td class="p-light text-center">
                                            <a href="<?= base_url(); ?>Rekam_medis/detail/<?= htmlspecialchars($item['id']); ?>"
                                                class="text-Main7 hover:text-Main9">
                                                <i class="fa-solid fa-eye fa-lg"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                            else:
                                echo "<tr><td colspan='6' class='text-center'>Data pasien tidak tersedia.</td></tr>";
                            endif;
                            ?>
                        </tbody>


                    </table>
                    <div class="p-regular pagination flex justify-end mt-4">
                        <?php if (!$keyword): ?>
                            <?= $this->pagination->create_links(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>