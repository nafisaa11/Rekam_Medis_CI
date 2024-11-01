  <!-- Sidebar and Main Content Wrapper -->
  <div class="flex flex-1">
    
    <!-- Sidebar -->
    <aside class="w-64 bg-Main8 text-white flex flex-col">
        <div class="flex justify-center items-center mt-5">
            <div class="w-32 h-32 bg-white rounded-full overflow-hidden">
                <img src="<?= base_url(); ?>asset/img/gojo.png" alt="" class="w-full h-full object-cover">
            </div>
        </div>
        <div class="flex justify-center items-center mt-5 text-black">
            <h1 class="text-2xl font-bold text-center">ADMIN 1</h1>
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

    <!-- Main Content -->
    <main class="flex-1 p-8 bg-gray-100">
        <div class="content max-w-4xl mx-auto mt-5">
            <div class="flex w-full h-auto items-center ">
                <img src="<?= base_url(); ?>asset/img/Shield.png" alt="" class="w-16 ml-2">
                <h2>PENS HOSPITAL</h2>
            </div>
            <br><br>
            <div class="w-full rounded-3xl p-5 bg-Bg4-30">
                <div class="header mb-5">
                   
                    <h1 class="text-2xl font-bold text-center">Rekam Medis Pasien</h1>
                    
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-5">
                    <div class="flex flex-col space-y-2">
                        <div class="flex">
                            <span class="w-32">Nama</span>
                            <span>: Nama_Lengkap</span>
                        </div>
                        <div class="flex">
                            <span class="w-32">Jenis Kelamin</span>
                            <span>: Jenis_Kelamin</span>
                        </div>
                        <div class="flex">
                            <span class="w-32">Tanggal Lahir</span>
                            <span>: Tanggal_Lahir</span>
                        </div>
                        
                        
                    </div>
                    <div class="flex flex-col space-y-2 mr-20">
                        <div class="flex">
                            <span class="w-32">Nama Ibu</span>
                            <span>: Ibunya Pasien</span>
                        </div>
                        <div class="flex">
                            <span class="w-32">Alamat</span>
                            <span>: Alamat Pasien</span>
                        </div>
                        <div class="flex">
                            <span class="w-32">No. Telepon</span>
                            <span>: No_Telp</span>
                        </div>
                    </div>
                </div>
                      
            </div>
            <br>
            <div class="w-full rounded-3xl p-10 bg-Bg4-30">
            <table class="table w-full">
                        <!-- head -->
                        <thead class="bg-Main8 text-white">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Tanggal Masuk</th>
                                <th class="text-center">Tanggal Keluar</th>
                                <th class="text-center">Diagnosa</th>
                                <th class="text-center">Obat</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="text-center">1</th>
                            <td class="text-center">Tanggal_Masuk</td>
                            <td class="text-center">Tanggal_Keluar</td>
                            <td class="text-center">Diagnosa</td>
                            <td class="text-center">Obat</td>
                            <td class="text-center">
                                <button class="btn bg-Main8 hover:bg-Main9 text-white rounded-lg px-3 py-1">
                                <img src="<?= base_url(); ?>asset/img/edit.svg" class="w-8 h-8 object-contain icon-white">
                                    Edit
                                </button>
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                    <br>
                    <div class="flex justify-end mr-8">
                        <button class="btn bg-Main8 hover:bg-Main9 text-white rounded-lg px-3 py-1">
                        <img src="<?= base_url(); ?>asset/img/positive.svg" class="w-8 h-8 object-contain icon-white">Tambah Rekam Medis</button>
                    </div>

                      
            </div>
            
        </div>    
    </main>
                  
</div>