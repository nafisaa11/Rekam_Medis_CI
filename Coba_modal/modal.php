<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">4

    <style>
        /* Modal disembunyikan dengan Tailwind kelas .hidden */
.modal.hidden {
    display: none;
}

/* Pastikan modal terlihat ketika kelas .hidden dihapus */
.modal:not(.hidden) {
    display: block;
    z-index: 50;
}

    </style>
</head>
<body>
<div class="container mx-auto">
    <table class="table w-full">
        <thead class="bg-Main8 text-white">
            <tr>
                <th class="p-light text-center">No</th>
                <th class="p-light text-center">Nama</th>
                <th class="p-light text-center">Tanggal</th>
                <th class="p-light text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Contoh data dari database
            $data = [
                ['id' => 1, 'nama' => 'John Doe', 'tanggal' => '2024-11-25', 'detail' => 'Detail rekam medis John Doe'],
                ['id' => 2, 'nama' => 'Jane Doe', 'tanggal' => '2024-11-20', 'detail' => 'Detail rekam medis Jane Doe'],
            ];
            foreach ($data as $index => $row): ?>
                <tr>
                    <td class="p-light text-center"><?= $index + 1; ?></td>
                    <td class="p-light text-center"><?= htmlspecialchars($row['nama']); ?></td>
                    <td class="p-light text-center"><?= htmlspecialchars($row['tanggal']); ?></td>
                    <td class="p-light text-center">
                        <!-- Button to trigger modal -->
                        <button 
                            onclick="openModal(<?= htmlspecialchars(json_encode($row)); ?>)" 
                            class="btn btn-primary">Lihat Detail</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Pop-Up -->
<div id="modal" class="modal hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center">
    <div class="modal-box bg-white p-6 rounded-lg shadow-lg relative">
        <!-- Modal Header -->
        <h3 class="font-bold text-lg mb-4" id="modalTitle">Detail Rekam Medis</h3>
        
        <!-- Modal Body -->
        <p class="py-4" id="modalContent">Loading...</p>
        
        <!-- Modal Footer -->
        <div class="modal-action mt-4">
            <button class="btn btn-secondary" onclick="closeModal()">Tutup</button>
        </div>

        <!-- Close Button (Top Right) -->
        <button 
            class="absolute top-2 right-2 btn btn-sm btn-circle btn-ghost"
            aria-label="Close" onclick="closeModal()">&times;</button>
    </div>
</div>


<script>
// Fungsi untuk membuka modal dan mengisi data
function openModal(data) {
    // Isi data modal
    document.getElementById('modalTitle').innerText = `Detail Rekam Medis - ${data.nama}`;
    document.getElementById('modalContent').innerText = data.detail;

    // Tampilkan modal
    document.getElementById('modal').classList.remove('hidden');
}

// Fungsi untuk menutup modal
function closeModal() {
    document.getElementById('modal').classList.add('hidden');
}

 
</script>

<script src="https://cdn.jsdelivr.net/npm/daisyui@1.7.0/dist/full.js"></script>

</body>
</html>