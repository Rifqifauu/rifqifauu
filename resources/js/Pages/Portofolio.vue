<template>
  <div class="pt-6 min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
    <!-- Floating Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
      <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
      <div class="absolute top-3/4 right-1/4 w-64 h-64 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-2000"></div>
      <div class="absolute bottom-1/4 left-1/2 w-64 h-64 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-4000"></div>
    </div>
   <section id="portofolio" class="relative py-24 px-6 lg:px-16">
  <div class="max-w-7xl mx-auto">
    <h3 class="text-3xl font-semibold text-center mb-12" data-aos="fade-up">Portofolio</h3>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
  <div 
    v-for="(item, index) in portofolio" 
    :key="index"
    class="flex flex-col justify-between bg-white rounded-2xl shadow-md hover:shadow-xl transition-all p-5 text-left"
    data-aos="fade-up" 
    :data-aos-delay="100 * index"
  >
    <img 
      :src="`/storage/${item.gambar}`" 
      :alt="`Portofolio Jasa Pembuatan Website ${lokasi || 'Kebumen'}`" 
      class="w-full h-40 object-cover rounded-lg mb-4"
      @error="event.target.src = '/images/placeholder.jpg'" 
    />

    <!-- Konten utama isi card -->
    <div class="flex-1">
      <h4 class="text-lg font-semibold mb-2">{{ item.nama }}</h4>
      <p class="text-sm text-gray-600 mb-4">{{ item.deskripsi }}</p>
    </div>

    <!-- Tombol -->
    <button class="text-left mt-auto font-bold relative group text-blue-800 py-2 transition">
      Lihat Detail 
      <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-blue-800 transition-all duration-300 group-hover:w-1/2"></span>
    </button>
  </div>
</div>
</div>
  </section>



  </div>
</template>

<script>
import AppLayout from '@/Layout/AppLayout.vue';

export default {
  layout: AppLayout,
  props: {
    portofolio: Object,
  },
  
  
  
  mounted() {
  document.title = `Portofolio Jasa Pembuatan Website`;
     console.log(this.portofolio);
    // Initialize AOS if available
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        offset: 50,
        delay: 100,
      })
    }
  },
};
</script>

