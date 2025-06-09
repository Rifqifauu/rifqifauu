<template>
  <section id="about" class="relative py-24 px-6 lg:px-16 text-white dark-section">
    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 z-0"></div>

    <div class="relative grid grid-cols-1 md:grid-cols-3 gap-10 z-10 items-center">
      <!-- Left: Image & Social Links -->
      <div
        data-aos="fade-right"
        data-aos-delay="200"
        data-aos-offset="100"
        class="md:col-span-1 flex flex-col items-center bg-white/10 px-10 py-10 rounded-2xl backdrop-blur-md border border-white/20 shadow-xl space-y-4 hover:scale-105 transition-transform duration-500"
      >
        <!-- Foto Profil -->
        <img
          src="/public/images/profil.png"
          alt="Foto Profil"
          class="w-64 rounded-2xl shadow-2xl bg-gray-400/40 transition-transform duration-300 hover:scale-110"
        />

        <!-- Social Media -->
        <div class="flex space-x-6 mt-6">
          <a
            href="https://instagram.com/rifqifauu"
            target="_blank"
            class="text-white hover:text-pink-400 text-3xl transition-colors duration-300"
          >
            <i class="fab fa-instagram"></i>
          </a>
          <a
            href="https://wa.me/6281325243608"
            target="_blank"
            class="text-white hover:text-green-400 text-3xl transition-colors duration-300"
          >
            <i class="fab fa-whatsapp"></i>
          </a>
          <a
            href="https://tiktok.com/"
            target="_blank"
            class="text-white hover:text-black text-3xl transition-colors duration-300"
          >
            <i class="fab fa-tiktok"></i>
          </a>
          <a
            href="https://linkedin.com/in/Rifqifauu"
            target="_blank"
            class="text-white hover:text-blue-400 text-3xl transition-colors duration-300"
          >
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
      </div>

      <!-- Right: Biodata & Pengalaman -->
      <div data-aos-delay="300" data-aos-offset="100" class="md:col-span-2 space-y-8">
        <!-- Biodata -->
        <div>
          <h2 class="text-2xl md:text-5xl font-extrabold mb-2 tracking-wide drop-shadow-lg">
            Rifqi Nur Fauzi
          </h2>
          <p class="text-gray-300 text-lg italic">Fullstack Web Developer</p>
          <p class="text-gray-300 text-sm italic max-w-xl">
            Menyediakan jasa pembuatan website, desain UI/UX, desain grafis, hingga optimasi SEO.
          </p>
        </div>

        <!-- Pengalaman -->
        <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="bg-white/10 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-400 border border-white/30 hover:border-pink-400">
            <h4 class="text-md font-semibold mb-2">Fullstack Developer - Balai Layanan Perpustakaan DPAD DIY</h4>
            <p class="text-xs text-gray-300">Jan 2025 - Feb 2025</p>
          </div>

          <div class="bg-white/10 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-400 border border-white/30 hover:border-green-400">
            <h4 class="text-md font-semibold mb-2">Freelance Web Developer</h4>
            <p class="text-xs text-gray-300">Mei 2025 - Sekarang</p>
          </div>

          <div class="bg-white/10 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-400 border border-white/30 hover:border-blue-400">
            <h4 class="text-md font-semibold mb-2">Mahasiswa Informatika - Universitas Jenderal Soedirman</h4>
            <p class="text-xs text-gray-300">2022 - Sekarang</p>
          </div>

          <div class="bg-white/10 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-400 border border-white/30 hover:border-purple-400">
            <h4 class="text-md font-semibold mb-2">Penerima Beasiswa Bank Indonesia</h4>
            <p class="text-xs text-gray-300">2024</p>
          </div>

          <div class="bg-white/10 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-400 border border-white/30 hover:border-yellow-400">
            <h4 class="text-md font-semibold mb-2">Content Writer - Promedia Teknologi</h4>
            <p class="text-xs text-gray-300">2022 - 2023</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import AppLayout from '@/Layout/AppLayout.vue'

export default {
  layout: AppLayout
}
</script>
