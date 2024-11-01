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
            <a href="main">
                <div class="w-48 h-12 bg-white rounded-lg flex items-center">
                    <img src="<?= base_url(); ?>asset/img/clinical_f.svg" alt="Logo" class="h-8 ml-2">
                    <h6 class="text-black ml-2">Data Pasien</h6>
                </div>
            </a>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="logout ml-8 mt-5">
            <div class="w-10 h-10 bg-sky-200 rounded-lg flex justify-center items-center">
                <a href="<?= base_url(); ?>Rekam_medis/logout">
                    <img src="<?= base_url(); ?>asset/img/logout-04.svg" alt="Logout" class="w-8 h-8 object-contain">
                </a>
            </div>
        </div>
    </aside>

    <main class="flex-1 p-8 bg-gray-100 ml-[70px]">
        <div class="judul mt-[20px]">
            <h1 class="text-4xl font-bold">PENS HOSPITAL</h1>
        </div>

        <div class="content mt-[50px] mr-[70px] flex justify-center items-center">
            <div class="w-full h-[500px] bg-sky-200 rounded-3xl p-8">
                <div class="header flex justify-between items-center mb-5">
                    <h1 class="text-2xl font-bold">REKAM MEDIS PASIEN</h1>
                </div>
            </div>
        </div>
                
</div>