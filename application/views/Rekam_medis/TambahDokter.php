<div class="flex flex-1">

<!-- Sidebar -->
<aside class="flex flex-col w-64 bg-Main8 text-white px-12 py-12 relative">
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
        <a href="main">
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

        <div class="w-full rounded-3xl p-10 mt-8 bg-Bg4-30 shadow-Card">
          <div class="header mb-5">
              <h3 class="text-center">TAMBAH DATA DOKTER</h3>
          </div>

          <form class="mt-8 mx-8" action="" method="post">

              <!-- Judul FORM -->
              <div class="border-t opacity-100 border-blue-300 my-8"></div>

              <!-- DATA PASIEN -->

              <div class="nama mb-4">
                  <div class="form-control w-full">
                      <span class="p-regular label-text mb-1 text-base">Nama</span>
                      <input
                          type="text"
                          name="nama"
                          class="p-light input input-bordered w-full max-w-full input-md h-10"
                          placeholder="ex: AURA SASI KIRANA" required>
                  </div>
              </div>

              <div class="email mb-4">
                  <div class="form-control w-full">
                      <span class="p-regular label-text mb-1 text-base">E-mail</span>
                      <input
                          type="email"
                          name="email"
                          class="p-light input input-bordered w-full max-w-full input-md h-10"
                          placeholder="ex: aurasasi@mail.com">
                  </div>
              </div>

              <div class="grid grid-cols-2 gap-8 mb-4">
                  <div class="jenis-kemain form-control w-full">
                      <span class="p-regular label-text mb-1 text-base">Jenis Kelamin</span>
                      <div class="flex mt-2">
                          <input
                              type="radio"
                              name="jenis-kelamin"
                              value="Laki-laki"
                              class="p-light radio radio-info radio-xs ml-5 items-center" required />
                          <span>Laki-laki</span>

                          <input
                              type="radio"
                              name="jenis-kelamin"
                              value="Perempuan"
                              class="p-light radio radio-info radio-xs ml-5 items-center" required />
                          <span>Perempuan</span>
                      </div>
                  </div>

                  <div class="tanggal-lahir form-control w-full">
                      <span class="p-regular label-text mb-1 text-base">Tanggal Lahir</span>
                      <input
                          type="date"
                          name="tgl-lahir"
                          class="p-light input input-bordered w-full max-w-full input-md h-10" required>
                  </div>
              </div>

              <div class="grid grid-cols-4 gap-8 mb-4">
                  <div class="alamat form-control col-span-2">
                      <span class="p-regular label-text mb-1 text-base">Alamat</span>
                      <textarea
                          name="alamat"
                          class="p-light textarea textarea-bordered"
                          required></textarea>
                  </div>
              </div>

              <div class="grid grid-cols-4 gap-8 mb-4">
                  <div class="npi form-control col-span-2">
                      <span class="p-regular label-text mb-1 text-base">NPI</span>
                      <input
                          type="text"
                          name="npi"
                          class="p-light input input-bordered w-full max-w-full input-md h-10"
                          placeholder="123456789" required>
                  </div>

                  <div class="no-hp form-control col-span-2">
                      <span class="p-regular label-text mb-1 text-base">Nomor HP</span>
                      <input
                          type="text"
                          name="no-hp"
                          class="p-light input input-bordered w-full max-w-full input-md h-10"
                          placeholder="0812345xxxxx" required>
                  </div>
              </div>

              <div class="spesialisasi grid grid-cols-2 gap-8 mb-4">
                  <div class="no-rek form-control w-full">
                      <span class="p-regular label-text mb-1 text-base">Spesialisasi</span>
                      <input
                          type="text"
                          name="spesialisasi"
                          class="p-light input input-bordered w-full max-w-full input-md h-10"
                          placeholder="ex: Spesialis Jantung">
                  </div>

                  <div class="tanggal-lisensi form-control w-full">
                      <span class="p-regular label-text mb-1 text-base">Tanggal Lisensi</span>
                      <input
                          type="date"
                          name="tanggal-lisensi"
                          class="p-light input input-bordered w-full max-w-full input-md h-10"
                          required>
                  </div>
              </div>

        <div class="border-t opacity-100 border-blue-300 my-8"></div>

        <!-- Button Tambah Data Pasien -->
        <div class="btn-simpan flex justify-end">
            <button type="submit" name="simpanPasien" id="nextBtn" class="p-regular btn bg-Main8 hover:bg-Main9 text-white px-3 py-1 shadow-Button">Submit</button>
        </div>
    </form>
</div>


    </div>
</main>

</div>