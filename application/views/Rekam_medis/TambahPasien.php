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
          <div class="flex absolute bottom-12 left-12">
              <div class="flex w-10 h-10 bg-Button1-40 rounded-lg justify-center items-center shadow-Button hover:bg-Button1-default">
                  <a href="<?= base_url(); ?>Rekam_medis/logout">
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

              <div class="w-full rounded-3xl p-10 mt-8 bg-Bg4-30 shadow-Card">
                  <div class="header mb-5">
                      <h3 class="text-center">TAMBAH DATA PASIEN</h3>
                  </div>

                  <form class="mt-8 mx-8" action="" method="post">

                      <!-- Judul FORM -->
                      <div class="border-t opacity-100 border-blue-300 my-8"></div>

                      <!-- DATA PASIEN -->
                      <div class="id-eksternal form-control w-full max-w-full mb-4">
                          <span class="p-regular label-text mb-1">
                              ID Eksternal
                          </span>
                          <input
                              type="text"
                              name="id-eksternal"
                              class="p-light input input-bordered w-full max-w-full input-md h-10 grow"
                              placeholder="ex: PAT-19901230-001" required>
                      </div>

                      <div class="nama grid grid-cols-5 gap-8 mb-4">
                          <div class="nama-lengkap form-control max-w-full col-span-3">
                              <span class="p-regular label-text mb-1 text-base">Nama Lengkap</span>
                              <input
                                  type="text"
                                  name="nama-lengkap"
                                  class="p-light input input-bordered w-full max-w-full input-md h-10"
                                  placeholder="ex: AURA SASI KIRANA" required>
                          </div>

                          <div class="nama-panggilan form-control  max-w-full col-span-2">
                              <span class="p-regular label-text mb-1 text-base">Nama Panggilan</span>
                              <input
                                  type="text"
                                  name="nama-panggilan"
                                  class="p-light input input-bordered w-full max-w-full input-md h-10"
                                  placeholder="ex: AURA" required>
                          </div>
                      </div>

                      <div class="nama-ibu form-control w-full max-w-full mb-4">
                          <span class="p-regular label-text mb-1 text-base">Nama Ibu</span>
                          <input
                              type="text"
                              name="nama-ibu"
                              class="p-light input input-bordered w-full max-w-full input-md h-10"
                              placeholder="ex: TARA WINDARA">
                      </div>

                      <div class="jenis-kelamin mb-4">
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

                      <div class="kelahiran grid grid-cols-2 gap-8 mb-4">
                          <div class="tempat-lahir">
                              <span class="p-regular label-text mb-1 text-base">Tempat Lahir</span>
                              <input
                                  type="text"
                                  name="tempat-lahir"
                                  class="p-light input input-bordered w-full max-w-full input-md h-10"
                                  placeholder="ex: SURABAYA" required>
                          </div>

                          <div class="tgl-lahir">
                              <span class="p-regular label-text mb-1 text-base">Tanggal Lahir</span>
                              <input
                                  type="date"
                                  name="tgl-lahir"
                                  class="p-light input input-bordered w-full max-w-full input-md h-10" required>
                          </div>
                      </div>

                      <div class="agama-ras grid grid-cols-2 gap-8 mb-4">
                          <div class="agama form-control w-full max-w-full">
                              <span class="p-regular label-text mb-1 text-base">Agama</span>
                              <select
                                  name="agama"
                                  class="p-light select select-bordered w-full max-w-full select-sm h-10" required>
                                  <option class="p-light" disabled selected hidden>-- Pilih Agama --</option>
                                  <option value="Islam" class="p-light">Islam</option>
                                  <option value="Kristen" class="p-light">Kristen</option>
                                  <option value="Hindu" class="p-light">Hindu</option>
                                  <option value="Buddha" class="p-light">Buddha</option>
                                  <option value="Katolik" class="p-light">Katolik</option>
                                  <option value="Lainnya" class="p-light">Lainnya</option>
                              </select>
                          </div>

                          <div class="ras form-control w-full max-w-full">
                              <span class="p-regular label-text mb-1 text-base">Ras</span>
                              <select
                                  name="ras"
                                  class="p-light select select-bordered w-full max-w-full select-sm h-10" required>
                                  <option class="p-light" disabled selected hidden>-- Pilih Ras --</option>
                                  <option value="Asia" class="p-light">Asia</option>
                                  <option value="Hitam" class="p-light">Hitam</option>
                                  <option value="Putih" class="p-light">Putih</option>
                                  <option value="Lainnya" class="p-light">Lainnya</option>
                              </select>
                          </div>
                      </div>

                      <div class="alamat form-control w-full max-w-full mb-4">
                          <span class="p-regular label-text mb-1 text-base">Alamat</span>
                          <textarea
                              name="alamat"
                              class="p-light textarea textarea-bordered"
                              required>
                        </textarea>
                      </div>

                      <div class="telepon grid grid-cols-4 gap-8 mb-4">
                          <div class="kode-negara form-control w-full max-w-full col-span-1">
                              <span class="p-regular label-text mb-1 text-base">Kode Negara</span>
                              <input
                                  type="number"
                                  name="kode-negara"
                                  class="p-light input input-bordered w-full max-w-full input-md h-10"
                                  placeholder="12" required>
                          </div>

                          <div class="no-telp form-control w-full max-w-full col-span-2">
                              <span class="p-regular label-text mb-1 text-base">Nomor Telepon</span>
                              <input
                                  type="text"
                                  name="no-telp"
                                  class="p-light input input-bordered w-full max-w-full input-md h-10"
                                  placeholder="123XX" required>
                          </div>
                      </div>

                      <div class="bahasa-utama form-control w-full max-w-full mb-4">
                          <span class="p-regular label-text mb-1 text-base">Bahasa Utama</span>
                          <input
                              type="text"
                              name="bahasa-utama"
                              class="p-light input input-bordered w-full max-w-full input-md h-10"
                              placeholder="ex: BAHASA INDONESIA">
                      </div>

                      <div class="status form-control w-1/4 mb-4">
                          <span class="p-regular label-text mb-1 text-base">Status Pernikahan</span>
                          <select
                              name="status"
                              class="p-light select select-bordered w-full max-w-full select-sm h-10" required>
                              <option class="p-light" disabled selected hidden>-- Pilih Status --</option>
                              <option value="Belum Menikah" class="p-light">Belum Menikah</option>
                              <option value="Sudah Menikah" class="p-light">Sudah Menikah</option>
                              <option value="Bercerai" class="p-light">Bercerai</option>
                              <option value="Janda" class="p-light">Janda</option>
                              <option value="Duda" class="p-light">Duda</option>
                          </select>
                      </div>

                      <div class="nomor grid grid-cols-2 gap-8 mb-4">
                          <div class="no-rek form-control w-full max-w-full">
                              <span class="p-regular label-text mb-1 text-base">Nomor Rekening</span>
                              <input
                                  type="text"
                                  name="no-rek"
                                  class="p-light input input-bordered w-full max-w-full input-md h-10"
                                  placeholder="ex: 123XXX">
                          </div>

                          <div class="no-sim form-control w-full max-w-full">
                              <span class="p-regular label-text mb-1 text-base">Nomor SIM</span>
                              <input
                                  type="text"
                                  name="no-sim"
                                  class="p-light input input-bordered w-full max-w-full input-md h-10"
                                  placeholder="ex: 123XXX" required>
                          </div>
                      </div>

                      <div class="identitas grid grid-cols-2 gap-8 mb-4">
                          <div class="kel-etnis form-control w-full max-w-full">
                              <span class="p-regular label-text mb-1 text-base">Kelompok Etnis</span>
                              <input
                                  type="text"
                                  name="kel-etnis"
                                  class="p-light input input-bordered max-w-full input-md h-10">
                          </div>

                          <div class="kewarganegaraan form-control w-full max-w-full">
                              <span class="p-regular label-text mb-1 text-base">Kewarganegaraan</span>
                              <select
                                  name="kewarganegaraan"
                                  class="p-light select select-bordered w-full max-w-full select-sm h-10" required>
                                  <option class="p-light" disabled selected hidden>-- Kewarganegaraan --</option>
                                  <option value="WNI" class="p-light">WNI</option>
                                  <option value="WNA" class="p-light">WNA</option>
                                  <option value="Tidak Diketahui" class="p-light">Tidak Diketahui</option>
                              </select>
                          </div>
                      </div>

                      <div class="kembar grid grid-cols-2 gap-8 mb-4">
                          <div class="kelahiran-kembar">
                              <span class="p-regular label-text mb-1 text-base">Kelahiran Kembar</span>
                              <div class="flex mt-2">
                                  <input
                                      type="radio"
                                      name="kelahiran-kembar"
                                      value="1"
                                      class="p-light radio radio-info radio-xs ml-5" required />
                                  <span>Ya</span>

                                  <input
                                      type="radio"
                                      name="kelahiran-kembar"
                                      value="0"
                                      class="p-light radio radio-info radio-xs ml-5" required />
                                  <span>Tidak</span>
                              </div>

                          </div>

                          <div class="jml-kembar">
                              <span class="p-regular label-text mb-1 text-base">Jumlah Kembar</span>
                              <input
                                  type="number"
                                  name="jml-kembar"
                                  class="p-light input input-bordered w-full max-w-full input-md h-10"
                                  placeholder="Jumlah Kembaran">
                          </div>
                      </div>

                      <div class="indikator-meninggal grid grid-cols-2 gap-8">
                          <div class="w-full max-w-full">
                              <span class="p-regular label-text mb-1 text-base">Indikator Meninggal</span>
                              <div class="flex mt-2">
                                  <input
                                      type="radio"
                                      name="indikator-meninggal" value="Belum"
                                      class="p-light radio radio-info radio-xs ml-5" required />
                                  <span>Belum Meninggal</span>

                                  <input
                                      type="radio"
                                      name="indikator-meninggal" value="Sudah"
                                      class="p-light radio radio-info radio-xs ml-5" required />
                                  <span>Sudah Meninggal</span>
                              </div>

                          </div>

                          <div class="tgl-meninggal form-control w-full max-w-full">
                              <span class="p-regular label-text mb-1 text-base">Tanggal Meninggal</span>
                              <input
                                  type="date"
                                  name="tgl-meninggal"
                                  class="p-light input input-bordered w-full max-w-full input-md h-10">
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