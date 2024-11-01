<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-sky-500 text-white flex flex-col">
        <div class="flex justify-center items-center mt-5">
            <div class="w-32 h-32 bg-white rounded-full overflow-hidden">
                <img src="<?= base_url(); ?>asset/img/gojo.png" alt="" class="w-full h-full object-cover">
            </div>
        </div>

        <div class="flex justify-center items-center mt-5 text-black">
            <h1 class="font-bold">ADMIN 1</h1>
        </div>
        <div class="flex justify-center items-center mt-8">
            <div class="w-48 h-12 bg-white rounded-lg flex items-center">
                <img src="<?= base_url(); ?>asset/img/clinical_f.svg" alt="Data" class="h-8 ml-2">
                <h6 class="text-black ml-2">Data Pasien</h6>
            </div>
        </div>
        <div class="ml-8 mt-5">
            <a href="TambahPasien">
                <div class="w-10 h-10 bg-white rounded-lg flex justify-center items-center">
                    <img src="<?= base_url(); ?>asset/img/plus-03.svg" alt="Tambah" class="w-8 h-8 object-contain">
                </div>
            </a>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="logout ml-8 mt-5">
            <div class="w-10 h-10 bg-sky-200 rounded-lg flex justify-center items-center">
                <a href="<?= base_url(); ?>Rekam_medis/logout">
                    <img src="<?= base_url(); ?>asset/img/logout-04.svg" alt="Logout" class="w-8 h-8 object-contain">
                </a>
            </div>
        </div>
    </aside>

    <!-- Content Area -->
    <main class="flex-1 p-8 bg-gray-100 ml-[70px]">
        <div class="judul mt-[20px]">
            <h1 class="text-4xl font-bold">PENS HOSPITAL</h1>
        </div>

        <div class="content mt-[50px] mr-[70px] flex justify-center items-center">
            <div class="w-full h-[500px] bg-sky-200 rounded-3xl p-8">
                <div class="header flex justify-between items-center mb-5">
                    <h1 class="text-2xl font-bold">DATA PASIEN</h1>
                    <div class="search">
                        <form class="flex items-center" action="<?= base_url(); ?>Rekam_medis/main" method="post">
                            <label for="voice-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <input type="text" id="voice-search" name="keyword"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-3"
                                    placeholder="Cari Pasien..." autocomplete="off" autofocus />
                            </div>
                            <input type="submit" name="submit" value="CARI"
                                class="py-3 px-3 ms-2 text-sm font-medium text-black bg-sky-500 rounded-lg hover:bg-slate-300 focus:ring-4">
                        </form>
                    </div>
                </div>


                <!-- Table positioned below search and header -->
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead class="bg-sky-500 text-white">
                            <tr>
                                <th class="text-center">ID Pasien</th>
                                <th class="text-center">Nama Pasien</th>
                                <th class="text-center">Nama Ibu</th>
                                <th class="text-center">Tgl. Lahir</th>
                                <th class="text-center">No. Telp</th>
                                <th class="text-center">Lihat Rekam Medis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pasien as $row): ?>
                                <tr>
                                    <th class="text-center"><?= $row["ID_Pasien"]; ?></th>
                                    <td class="text-center"><?= $row["Nama_Lengkap"]; ?></td>
                                    <td class="text-center"><?= $row["Nama_Ibu"]; ?></td>
                                    <td class="text-center"><?= $row["Tanggal_Lahir"]; ?></td>
                                    <td class="text-center"><?= $row["No_Telp"]; ?></td>
                                    <td class="text-center"><a href="<?= base_url(); ?>Rekam_medis/detail/<?= $row['ID_Pasien']; ?>"
                                            class="text-blue-500 hover:text-blue-700">
                                            <i class="fa-solid fa-eye fa-lg"></i>
                                        </a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <br>
                    <div class="pagination flex justify-end mt-4">
                        <?php if (!$keyword): ?>
                            <?= $this->pagination->create_links(); ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </main>
</div>