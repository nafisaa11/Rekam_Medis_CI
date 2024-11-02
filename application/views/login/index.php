<div class="w-full min-h-screen bg-Bg3 px-8 pt-8">
    <div class="w-full h-full">
        <!-- Logo -->
        <div class="flex w-full h-auto items-center">
            <img src="<?= base_url(); ?>asset/img/Shield.png" alt="" class="w-16">
            <h2>PENS HOSPITAL</h2>
        </div>
        <div class="flex w-full h-full items-center">
            <!-- Gradian Backgorund + Logo -->
            <div class="flex w-3/5 h-full bg-radial-gradient justify-center">
                <img src="<?= base_url(); ?>asset/img/DNA.png" alt="" class="w-72 my-32">
            </div>
            <!-- Form Login Admin -->
            <div class="w-2/5 h-full bg-Bg4-30 px-12 py-14 mr-2 rounded-2xl shadow-Card items-center">
                <form action="<?= base_url(); ?>login" method="POST" class="space-y-4">
                    <div class="flex mb-12 justify-center">
                        <h2>Login Admin</h2>
                    </div>
                    <div class="flex mb-8">
                        <div class="w-full h-full">
                            <label for="email" class="p-regular block mb-1">Email</label>
                            <input type="email" id="email" name="email" class="w-full h-10 bg-Bg3 p-2 rounded-lg required">
                        </div>
                    </div>
                    <div class="flex mb-8">
                        <div class="w-full h-full">
                            <label for="password" class="p-regular block mb-1">Password</label>
                            <input type="password" id="password" name="password" class="w-full h-10 bg-Bg3 p-2 rounded-lg" required>
                        </div>
                    </div>
                    <div class="flex justify-start gap-2">
                        <input type="checkbox" name="remember" class="text-sky-500 focus:ring-sky-500">
                        <label for="checkbox" class="p-regular">Remember Me</label>
                    </div>
                    <button type="submit" class="flex btn w-full bg-Main8 hover:bg-Main9 shadow-Button">
                        <h4 class="text-white">Login</h4>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>