  <!-- Sidebar and Main Content Wrapper -->
  <div class="flex flex-1">
    
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
            <div class="w-full rounded-3xl p-10 bg-white">
                <div class="header mb-5">
                   
                    <h1 class="text-2xl font-bold text-center">TAMBAH DATA PASIEN</h1>
                    
                </div>

                <form class="mt-8 mx-8" action="" method="post">
        
                    <!-- Judul FORM -->
                    <div class="border-t opacity-100 border-blue-300"></div>

                    <br>
        
                    <!-- DATA PASIEN -->
                    <div class="id-eksternal form-control w-full max-w-full">
                        <span class="label-text mb-1 text-base font-semibold">
                        ID Eksternal
                        </span>
                        <input 
                        type="text" 
                        name="id-eksternal"              
                        class="input input-bordered w-full max-w-full input-md h-10 grow"  
                        placeholder="ex: PAT-19901230-001" required
                        >
                    </div><br>
                    
                    <div class="nama grid grid-cols-5 gap-8">
                        <div class="nama-lengkap form-control max-w-full col-span-3">
                        <span class="label-text mb-1 text-base font-semibold">Nama Lengkap</span>
                        <input 
                            type="text"
                            name="nama-lengkap"              
                            class="input input-bordered w-full max-w-full input-md h-10"  
                            placeholder="ex: AURA SASI KIRANA" required
                        >
                        </div>
            
                        <div class="nama-panggilan form-control  max-w-full col-span-2">
                        <span class="label-text mb-1 text-base font-semibold">Nama Panggilan</span>
                        <input 
                            type="text"
                            name="nama-panggilan"
                            class="input input-bordered w-full max-w-full input-md h-10" 
                            placeholder="ex: AURA" required
                        >
                        </div>
                    </div><br>
        
                    <div class="nama-ibu form-control w-full max-w-full">
                        <span class="label-text mb-1 text-base font-semibold">Nama Ibu</span>
                        <input 
                        type="text"
                        name="nama-ibu"
                        class="input input-bordered w-full max-w-full input-md h-10"
                        placeholder="ex: TARA WINDARA" 
                        >
                    </div><br>
        
                    <div class="jenis-kelamin">
                        <span class="label-text mb-1 text-base font-semibold">Jenis Kelamin</span>  <br>            
                        <input 
                        type="radio" 
                        name="jenis-kelamin" 
                        value="Laki-laki" 
                        class="radio radio-info radio-xs ml-5 mt-2" required
                        />
                        <span>Laki-laki</span>
        
                        <input 
                        type="radio" 
                        name="jenis-kelamin" 
                        value="Perempuan" 
                        class="radio radio-info radio-xs ml-5" required
                        />
                        <span>Perempuan</span>
                    </div><br>
        
                    <div class="kelahiran grid grid-cols-2 gap-8">
                        <div class="tempat-lahir">
                        <span class="label-text mb-1 text-base font-semibold">Tempat Lahir</span>
                        <input 
                            type="text"
                            name="tempat-lahir"
                            class="input input-bordered w-full max-w-full input-md h-10" 
                            placeholder="ex: SURABAYA" required
                        >
                        </div>

                        <div class="tgl-lahir">
                        <span class="label-text mb-1 text-base font-semibold">Tanggal Lahir</span>
                        <input 
                            type="date" 
                            name="tgl-lahir"              
                            class="input input-bordered w-full max-w-full input-md h-10" required
                        >
                        </div>              
                    </div><br>
        
                    <div class="agama-ras grid grid-cols-2 gap-8">
                        <div class="agama form-control w-full max-w-full">
                        <span class="label-text mb-1 text-base font-semibold">Agama</span>
                        <select 
                            name="agama" 
                            class="select select-bordered w-full max-w-full select-sm h-10" required
                        >
                            <option disabled selected>-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        </div>
        
                        <div class="ras form-control w-full max-w-full">
                        <span class="label-text mb-1 text-base font-semibold">Ras</span>
                        <select 
                            name="ras" 
                            class="select select-bordered w-full max-w-full select-sm h-10" required
                        >
                            <option disabled selected>-- Pilih Ras --</option>
                            <option value="Asia">Asia</option>
                            <option value="Hitam">Hitam</option>
                            <option value="Putih">Putih</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        </div>
                    </div><br>
        
                    <div class="alamat form-control w-full max-w-full">
                        <span class="label-text mb-1 text-base font-semibold">Alamat</span>
                        <textarea 
                        name="alamat"             
                        class="textarea textarea-bordered"
                        required
                        >
                        </textarea>
                    </div><br>
                    
                    <div class="telepon grid grid-cols-4 gap-8">
                        <div class="kode-negara form-control w-full max-w-full col-span-1">
                        <span class="label-text mb-1 text-base font-semibold">Kode Negara</span>
                        <input 
                            type="number" 
                            name="kode-negara"              
                            class="input input-bordered w-full max-w-full input-md h-10"
                            placeholder="12" required
                        >
                        </div>
            
                        <div class="no-telp form-control w-full max-w-full col-span-2">
                        <span class="label-text mb-1 text-base font-semibold">Nomor Telepon</span>
                        <input 
                            type="text" 
                            name="no-telp"              
                            class="input input-bordered w-full max-w-full input-md h-10"
                            placeholder="123XX" required
                        >
                        </div>
                    </div><br>
        
                    <div class="bahasa-utama form-control w-full max-w-full">
                        <span class="label-text mb-1 text-base font-semibold">Bahasa Utama</span>
                        <input 
                        type="text" 
                        name="bahasa-utama"              
                        class="input input-bordered w-full max-w-full input-md h-10"
                        placeholder="ex: BAHASA INDONESIA"
                        >
                    </div><br>
        
                    <div class="status form-control w-1/4">
                        <span class="label-text mb-1 text-base font-semibold">Status Pernikahan</span>
                        <select 
                        name="status" 
                        class="select select-bordered w-full max-w-full select-sm h-10" required
                        >
                        <option disabled selected>-- Pilih Status --</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Bercerai">Bercerai</option>
                        <option value="Janda">Janda</option>
                        <option value="Duda">Duda</option>
                        </select>
                    </div><br>
                    
                    <div class="nomor grid grid-cols-2 gap-8">
                        <div class="no-rek form-control max-w-full">
                        <span class="label-text mb-1 text-base font-semibold">Nomor Rekening</span>
                        <input 
                            type="text" 
                            name="no-rek"              
                            class="input input-bordered w-full max-w-full input-md h-10"
                            placeholder="ex: 123XXX"
                        >
                        </div>
            
                        <div class="no-sim form-control max-w-full">
                        <span class="label-text mb-1 text-base font-semibold">Nomor SIM</span>
                        <input 
                            type="text" 
                            name="no-sim"              
                            class="input input-bordered w-full max-w-full input-md h-10"
                            placeholder="ex: 123XXX" required
                        >
                        </div>
                    </div><br>

                    <div class="identitas grid grid-cols-2 gap-8">
                        <div class="kel-etnis form-control w-full max-w-full">
                        <span class="label-text mb-1 text-base font-semibold">Kelompok Etnis</span>
                        <input 
                        type="text"
                        name="kel-etnis"              
                        class="input input-bordered max-w-full input-md h-10"
                        >
                        </div>
                        
                        <div class="kewarganegaraan form-control max-w-xs">
                        <span class="label-text mb-1 text-base font-semibold">Kewarganegaraan</span>
                        <select 
                            name="kewarganegaraan" 
                            class="select select-bordered w-full max-w-xs select-sm h-10" required
                        >
                            <option disabled selected>-- Kewarganegaraan --</option>
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                            <option value="Tidak Diketahui">Tidak Diketahui</option>
                        </select>
                        </div>
                    </div> <br>
        
                    <div class="kembar grid grid-cols-2 gap-8">
                        <div class="kelahiran-kembar ">
                        <span class="label-text mb-1 text-base font-semibold">Kelahiran Kembar</span>
                        <br>
                        <input 
                            type="radio" 
                            name="kelahiran-kembar" 
                            value="1" 
                            class="radio radio-info radio-xs ml-5 mt-2" required
                        />
                        <span >Ya</span>
            
                        <input 
                            type="radio" 
                            name="kelahiran-kembar" 
                            value="0" 
                            class="radio radio-info radio-xs ml-5" required
                        />
                        <span>Tidak</span>
                        </div>

                        <div class="jml-kembar">
                        <span class="label-text mb-1 text-base font-semibold">Jumlah Kembar</span>
                        <input 
                            type="number" 
                            name="jml-kembar"              
                            class="input input-bordered w-full max-w-xs input-md h-10"
                            placeholder="Jumlah Kembaran"
                        >
                        </div>
                    </div><br>
            
                    <div class="indikator-meninggal grid grid-cols-2 gap-8">
                        <div>
                        <span class="label-text mb-1 text-base font-semibold">Indikator Meninggal</span><br>            
                        <input 
                        type="radio" 
                        name="indikator-meninggal" value="Belum"
                        class="radio radio-info radio-xs ml-5 mt-2" required
                        />
                        <span>Belum Meninggal</span>
                        <input 
                        type="radio" 
                        name="indikator-meninggal" value="Sudah"
                        class="radio radio-info radio-xs ml-5" required
                        />
                        <span>Sudah Meninggal</span>
                        </div>

                        <div class="tgl-meninggal form-control w-full max-w-xs">
                            <span class="label-text mb-1 text-base font-semibold">Tanggal Meninggal</span>
                            <input 
                            type="date"
                            class="input input-bordered w-full max-w-xs input-md h-10"
                            >
                        </div>
                    </div><br>
        

                    <br>
                    <div class="border-t opacity-100 border-blue-300"></div>
                    <br>
                    <!-- Button Tambah Data Pasien -->
                    <div class="btn-simpan flex justify-end">
                        <button type="submit" name="simpanPasien" id="nextBtn" class="btn btn-info text-white text-opacity-90" style="font-size: 16px;">SUBMIT</button>
                    </div>
                </form>        
            </div>
            
        </div>    
    </main>
                  
</div>