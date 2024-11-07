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
            
            <div class="flex w-full h-12 bg-Bg3 px-4 py-2 rounded-lg items-center shadow-Button hover:bg-Main9">
                <a href="<?= base_url(); ?>Rekam_medis/main">
                    <i class="fa-solid fa-file-medical text-black w-6"></i>
                    <label class="p-regular text-black">Data Pasien</label>
                </a>
            </div>
            </a>
        </div>
        <div class="flex mt-5">
            <div class="flex w-full h-12 bg-Bg3 px-4 py-2 rounded-lg items-center shadow-Button">
                <i class="fa-solid fa-file-medical text-black w-7"></i>
                <label class="p-regular text-black">Data Dokter</label>
            </div>
        </div>
        <div class="flex w-full mt-5">
            <div class="flex w-full h-12 bg-Bg3 px-4 py-2 rounded-lg items-center shadow-Button hover:bg-Main9">
                <a href="<?= base_url(); ?>Rekam_medis/TambahDokter">
                    <i class="fa-solid fa-plus text-black w-5 mr-1"></i>
                    <label class="p-regular text-black">Tambah Dokter</label>
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

    <!-- Content Area -->
    <main class="flex-1 px-12 pt-8">
        <div class="flex w-full h-auto items-center">
            <img src="<?= base_url(); ?>asset/img/Shield.png" alt="" class="w-16">
            <h2>PENS HOSPITAL</h2>
        </div>

        <div class="content mt-8 flex justify-center items-center">
        <div class="w-full h-auto bg-Bg4-30 rounded-2xl p-8 shadow-Card">
            <div class="header flex justify-between items-center mb-5">
                <h3>DATA DOKTER</h3>
                <div class="search">
                    <form class="flex items-center" action="<?= base_url(); ?>Rekam_medis/mainDokter" method="post">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <input type="text" id="search" name="keyword"
                                class="p-light bg-Bg3 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-3 shadow-Popup"
                                placeholder="Cari Dokter..." autocomplete="off" autofocus />
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
                            <th class="p-light text-center">ID Dokter</th>
                            <th class="p-light text-center">Nama Dokter</th>
                            <th class="p-light text-center">Spesialisasi</th>
                            <th class="p-light text-center">Alamat</th>
                            <th class="p-light text-center">No. Telp</th>
                            <th class="p-light text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dokter as $row): ?>
                        <tr>
                            <th class="p-medium text-center"><?= $row["ID_Dokter"]; ?></th>
                            <td class="p-light text-center"><?= $row["Nama"]; ?></td>
                            <td class="p-light text-center"><?= $row["Spesialisasi"]; ?></td>
                            <td class="p-light text-center"><?= $row["Alamat"]; ?></td>
                            <td class="p-light text-center"><?= $row["No_Hp"]; ?></td>
                            <td class="p-light text-center">
                                <a  href="<?= base_url(); ?>Rekam_medis/editDokter/<?= $row['ID_Dokter']; ?>"
                                    class="text-Main7 hover:text-Main9">
                                    <button>Edit</button>
                                </a>
                                <a href="<?= base_url(); ?>Rekam_medis/hapusDokter/<?= $row['ID_Dokter']; ?>"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data dokter ini?');">
                                    <button class="text-red-600 hover:text-red-800 ml-3">Hapus</button>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="p-regular pagination flex justify-end mt-4">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
        </div>
    </main>
</div>