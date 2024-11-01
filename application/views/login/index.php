<<<<<<< HEAD
<div class="w-full min-h-screen bg-Bg3 p-10">
    <div class="w-full h-full">
        <div class="flex w-full h-auto items-center">
            <img src="<?= base_url(); ?>asset/img/Shield.png" alt="" class="w-16 ml-2">
            <h1>PENS HOSPITAL</h1>
        </div>
        <div class="flex w-full h-full items-center">
            <div class="flex w-3/5 h-full bg-radial-gradient justify-center">
                <img src="<?= base_url(); ?>asset/img/DNA.png" alt="" class="h-80 my-36">
            </div>
            <div class="w-2/5 h-full bg-Bg4-30 p-20 rounded-2xl items-center">
                <form action="<?= base_url(); ?>login" method="POST" class="space-y-4">
                    <div class="flex mb-12">
                        <h2>Login Admin</h2>
                    </div>
                    <div class="flex mb-8">
                        <div class="w-full h-full">
                            <label for="email" class="block">Email</label>
                            <input type="email" id="email" name="email" class="w-full h-10 bg-Bg3 p-2 rounded-lg required">
                        </div>
                    </div>
                    <div class="flex mb-8">
                        <div class="w-full h-full">
                            <label>Password</label>
                            <input type="password" class="w-full h-10 bg-Bg3 p-2 rounded-lg">
                        </div>
                    </div>
                    <button type="submit" class="flex btn w-full bg-Main8 hover:bg-Main9">
                        <h2 class="text-white">Login</h2>
                    </button>
                </form>
            </div>
        </div>
=======
<div class="flex h-screen">
    <!-- Bagian Kiri -->
    <div class="w-1/3 bg-slate-100 text-white flex items-center justify-center">
        <div class="w-[400px] h-[400px] bg-sky-500 bg-opacity-30 rounded-full overflow-hidden relative drop-shadow-lg shadow-[0_0_30px_rgba(56,189,248,0.5)]">
            <!-- Gambar di tengah lingkaran -->
            <img src="<?= base_url(); ?>asset/img/2.png" alt="" class="h-[300px] w-[300px] object-cover absolute inset-0 m-auto">
        </div>
    </div>

    <!-- Bagian Kanan -->
    <div class="w-2/3 bg-slate-100 flex items-center justify-center">
        <!-- Form Login -->
        <div class="w-full max-w-sm p-8 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
            <form action="<?= base_url(); ?>login" method="POST" class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 mt-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 mt-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="text-sky-500 focus:ring-sky-500">
                </div>
                <button type="submit"
                    class="w-full py-2 mt-4 font-semibold text-white bg-sky-500 rounded hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-500">
                    Login
                </button>
            </form>
        </div>
>>>>>>> 3ecee42ec461658987d8dc0794265aedd5e24b2c
    </div>
</div>