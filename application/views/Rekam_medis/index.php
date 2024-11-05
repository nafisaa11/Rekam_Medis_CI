<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Login</title>
	<link rel="stylesheet" href="<?= base_url(); ?>asset/css/output.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<style>
		/* Import font dari Google Fonts */
		@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap');

		/* Atur font untuk body, heading, dan paragraph */
		body,
		h1,
		h2,
		h3,
		h4,
		p {
			font-family: 'Kanit', sans-serif;
		}

		/* Atur font untuk body */
		.b-light {
			font-weight: 300;
			font-style: normal;
			font-size: 20px;
		}

		.b-regular {
			font-weight: 400;
			font-style: normal;
			font-size: 20px;
		}

		.b-medium {
			font-weight: 500;
			font-style: normal;
			font-size: 20px;
		}

		.b-semibold {
			font-weight: 600;
			font-style: normal;
			font-size: 20px;
		}

		/* Atur font untuk heading */
		h1 {
			font-weight: 500;
			font-style: normal;
			font-size: 48px;
		}

		h2 {
			font-weight: 500;
			font-style: normal;
			font-size: 36px;
		}

		h3 {
			font-weight: 500;
			font-style: normal;
			font-size: 24px;
		}

		h4 {
			font-weight: 500;
			font-style: normal;
			font-size: 16px;
		}

		/* Atur font untuk paragraph */
		.p-light {
			font-weight: 300;
			font-style: normal;
			font-size: 16px;
		}

		.p-regular {
			font-weight: 400;
			font-style: normal;
			font-size: 16px;
		}

		.p-medium {
			font-weight: 500;
			font-style: normal;
			font-size: 16px;
		}

		.p-semibold {
			font-weight: 600;
			font-style: normal;
			font-size: 16px;
		}
	</style>
</head>

<body>
<div class="w-full min-h-screen bg-Bg3 px-8 pt-8">
    <div class="w-full h-full">
        <!-- Logo -->
        <div class="flex w-full h-auto items-center">
            <img src="<?= base_url(); ?>asset/img/Shield.png" alt="" class="w-16">
            <h2>PENS HOSPITAL</h2>
        </div>
        <div class="flex w-full h-full items-center">
            <!-- Gradient Background + Logo -->
            <div class="flex w-3/5 h-full bg-radial-gradient justify-center">
                <!-- Carousel -->
                <div id="carousel" class="w-72 my-32">
                    <img src="<?= base_url(); ?>asset/img/DNA.png" alt="" class="w-full h-72 object-contain transition-opacity duration-500">
                </div>
            </div>
            <!-- Admin Login Form -->
            <div class="w-2/5 h-full bg-Bg4-30 px-12 py-14 mr-2 rounded-2xl shadow-Card items-center">
                <form action="" method="POST" class="space-y-4">
                    <div class="flex mb-12 justify-center">
                        <h2>Login Admin</h2>
                    </div>
                    <div class="flex mb-8">
                        <div class="w-full h-full">
                            <label for="username" class="p-regular block mb-1">Username</label>
                            <input type="text" id="username" name="username" class="w-full h-10 bg-Bg3 p-2 rounded-lg" required>
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


<script>
const carousel = document.getElementById('carousel');
const images = [
    '<?= base_url(); ?>asset/img/DNA.png',
    '<?= base_url(); ?>asset/img/Medicine.png',
    '<?= base_url(); ?>asset/img/Checklist.png',
    '<?= base_url(); ?>asset/img/Hearth.png',
];

let currentImageIndex = 0;

function changeImage() {
    const img = carousel.querySelector('img');
    img.style.opacity = '0';

    setTimeout(() => {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        img.src = images[currentImageIndex];
        img.style.opacity = '1';
    }, 500);
}

// Change image every 3 seconds
setInterval(changeImage, 3000);
</script>
</body>
</html>
