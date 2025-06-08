<template>
  <div class="pt-16 min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
    <!-- Floating Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
      <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
      <div class="absolute top-3/4 right-1/4 w-64 h-64 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-2000"></div>
      <div class="absolute bottom-1/4 left-1/2 w-64 h-64 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-4000"></div>
    </div>

    <!-- Hero Section -->
    <section class="relative z-10 min-h-screen flex items-center px-6 lg:px-16">
      <div class="max-w-7xl mx-auto w-full">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <!-- Left Content -->
          <div class="space-y-8" data-aos="fade-right" data-aos-duration="1000">
            <!-- Main Heading -->
            <div class="space-y-4">
              <h1 class="text-4xl lg:text-6xl font-bold leading-tight" data-aos="fade-up" data-aos-delay="200">
                <span class="text-gray-900">Jasa Website</span>
                <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 bg-clip-text text-transparent block animate-pulse">
                  Kebumen
                </span>
              </h1>
              
              <p class="text-lg  text-gray-600 leading-relaxed max-w-2xl" data-aos="fade-up" data-aos-delay="400">
                Wujudkan <span class="font-semibold text-blue-600">impian digital</span> Anda dengan website profesional yang modern, responsif, dan optimized untuk bisnis masa depan.
              </p>
            </div>

            <!-- Features List -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4" data-aos="fade-up" data-aos-delay="600">
              <div v-for="(feature, index) in features" :key="index" 
                   class="flex items-center space-x-3 p-3 bg-white/60 backdrop-blur-sm rounded-2xl border border-white/20"
                   :data-aos-delay="700 + (index * 100)"
                   data-aos="fade-up">
                <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center">
                  <span class="text-white text-sm">{{ feature.icon }}</span>
                </div>
                <span class="font-medium text-gray-700">{{ feature.text }}</span>
              </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="1000">
              <button @click="scrollToServices" 
                      class="group relative px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 overflow-hidden">
                <span class="relative z-10 flex items-center space-x-2">
                  <span>Mulai Sekarang</span>
                  <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                  </svg>
                </span>
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              </button>
              
              <a href="#portofolio" class="px-8 py-4 bg-white/80 backdrop-blur-sm text-gray-700 font-semibold rounded-2xl border border-white/20 hover:bg-white hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                Lihat Portofolio
              </a>
            </div>        
          </div>

          <!-- Right Content - Hero Image -->
          <div class="relative" data-aos="fade-left" data-aos-delay="500">
            <div class="relative z-10 transform hover:scale-105 transition-transform duration-700">
              <!-- Main illustration container -->
              <div class="relative bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-2xl border border-white/20">
                <!-- Floating elements -->
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-r from-blue-400 to-purple-800 rounded-2xl shadow-lg animate-bounce"></div>
                <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-r from-green-400 to-blue-500 rounded-full shadow-lg animate-pulse"></div>
                
                <!-- Mock website preview -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                  <!-- Browser bar -->
                  <div class="bg-gray-100 px-4 py-3 flex items-center space-x-2">
                    <div class="flex space-x-2">
                      <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                      <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                      <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                    </div>
                    <div class="flex-1 bg-white rounded-lg px-3 py-1 text-xs text-gray-500">
                      yourwebsite.com
                    </div>
                  </div>
                  
                  <!-- Mock content -->
                  <div class="p-6 space-y-4">
                    <div class="h-4 bg-gradient-to-r from-blue-200 to-purple-200 rounded-full"></div>
                    <div class="h-4 bg-gradient-to-r from-gray-200 to-blue-200 rounded-full w-3/4"></div>
                    <div class="h-32 bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl"></div>
                    <div class="grid grid-cols-2 gap-4">
                      <div class="h-16 bg-gradient-to-r from-green-100 to-blue-100 rounded-lg"></div>
                      <div class="h-16 bg-gradient-to-r from-purple-100 to-pink-100 rounded-lg"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Background decoration -->
            <div class="absolute inset-0 bg-gradient-to-r from-blue-200 to-purple-200 rounded-3xl transform rotate-6 scale-105 opacity-20"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section ref="servicesSection" class="relative py-24 px-6 lg:px-16 dark-section">
      <!-- Background -->
      <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900"></div>
              <div class="absolute inset-0 opacity-10">
          <div class="w-full h-full" style="background-image: url('data:image/svg+xml,<svg width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><g fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.1&quot;><circle cx=&quot;10&quot; cy=&quot;10&quot; r=&quot;1&quot;/></g></svg>'); background-repeat: repeat;"></div>
        </div>
      
      <div class="relative z-10 max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
          <div class="inline-block bg-white/10 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
            <span class="text-white/80 text-sm font-medium">Layanan Premium</span>
          </div>
          <h2 class="text-4xl lg:text-6xl font-bold text-white mb-6">
            Paket <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Terbaik</span>
          </h2>
          <p class="text-xl text-white/80 max-w-2xl mx-auto">
            Pilih paket yang sesuai dengan kebutuhan bisnis Anda. Semua paket sudah termasuk hosting dan domain gratis.
          </p>
        </div>

        <!-- Service Cards -->
        <div class="grid md:grid-cols-3 gap-8" :data-aos-delay="index * 200"
               data-aos="fade-up">
         <div v-for="(service, index) in services" :key="index"
     class="group relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20 
            hover:bg-white/20 transform transition duration-700 ease-[cubic-bezier(0.25,0.8,0.25,1)] 
            hover:scale-[1.025] hover:shadow-2xl "

               >
        
            <!-- Content -->
            <h3 class="text-2xl font-bold text-white mb-4">{{ service.title }}</h3>
            <p class="text-white/80 mb-6 leading-relaxed">{{ service.description }}</p>
            

            
            <!-- Price -->
            <div class="mb-6">
              <div class="text-2xl font-bold text-white">{{ service.price }}</div>
              <div class="text-white/60 text-sm">{{ service.duration }}</div>
            </div>
            
            <!-- CTA Button -->
            <button class="w-full py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 group-hover:from-purple-600 group-hover:to-pink-600">
              Pilih Paket Ini
            </button>
          </div>
        </div>
      </div>
    </section>
   <section id="portofolio" class="relative py-24 px-6 lg:px-16">
  <div class="max-w-7xl mx-auto">
    <h3 class="text-3xl font-semibold text-center mb-12" data-aos="fade-up">Portofolio</h3>

 <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
  <!-- Card Template -->
  <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all p-5 text-left" data-aos="fade-up" data-aos-delay="100">
    <img src="/public/images/project-sekolah.png" alt="Website Sekolah" class="w-full h-40 object-cover rounded-lg mb-4" />
    <h4 class="text-lg font-semibold mb-2">Website Sekolah</h4>
    <p class="text-sm text-gray-600 mb-4">Portal resmi sekolah untuk informasi, berita, dan layanan siswa-guru.</p>
<button class="font-bold relative group text-blue-800  py-2 transition">
  Lihat Detail 
  <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-blue-800 transition-all duration-300 group-hover:w-full"></span>
</button>  </div>

  <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all p-5 text-left" data-aos="fade-up" data-aos-delay="200">
    <img src="/public/images/project-magang.png" alt="Website Magang" class="w-full h-40 object-cover rounded-lg mb-4" />
    <h4 class="text-lg font-semibold mb-2">Manajemen Magang</h4>
    <p class="text-sm text-gray-600 mb-4">Platform untuk mengelola data peserta magang, absensi, dan laporan harian.</p>
<button class="font-bold relative group text-blue-800 py-2 transition">
  Lihat Detail 
  <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-blue-800 transition-all duration-300 group-hover:w-full"></span>
</button>  </div>

  <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all p-5 text-left" data-aos="fade-up" data-aos-delay="300">
    <img src="/public/images/project-organisasi.png" alt="Website Organisasi" class="w-full h-40 object-cover rounded-lg mb-4" />
    <h4 class="text-lg font-semibold mb-2">Website PSHT</h4>
    <p class="text-sm text-gray-600 mb-4">Media informasi kegiatan organisasi, profil anggota, dan publikasi resmi.</p>
<button class="font-bold relative group text-blue-800  py-2 transition">
  Lihat Detail 
  <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-blue-800 transition-all duration-300 group-hover:w-full"></span>
</button>  </div>

  <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all p-5 text-left" data-aos="fade-up" data-aos-delay="400">
    <img src="/public/images/project-nectar.png"  alt="Proyek 4" class="w-full h-40 object-cover rounded-lg mb-4" />
    <h4 class="text-lg font-semibold mb-2">UI/UX Nectar</h4>
    <p class="text-sm text-gray-600 mb-4">Pengembangan desain antarmuka aplikasi untuk pencarian kerja berbasis mobile.</p>
<button class="font-bold relative group text-blue-800 py-2 transition">
  Lihat Detail 
  <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-blue-800 transition-all duration-300 group-hover:w-full"></span>
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
  
  data() {
    return {
      features: [
        { icon: '🎨', text: 'Desain Custom & Responsif' },
        { icon: '🚀', text: 'Loading Super Cepat' },
        { icon: '📱', text: 'Mobile Friendly' },
        { icon: '📈', text: 'SEO Optimized' },
      ],
            
      services: [
      
        {
          title: 'Landing Page',
          description: 'Solusi cepat dan elegan untuk tampil online. Perfect untuk promosi produk atau layanan utama dengan konversi tinggi.',
          
          price: 'Rp499.000',
          duration: 'Selesai 1-3 hari',
          popular: false
        },
        {
          title: 'Company Profile',
          description: 'Website profesional untuk membangun kredibilitas bisnis. Tampilkan identitas perusahaan dengan sempurna.',
        
          price: 'Rp1.249.000',
          duration: 'Selesai 3-5 hari',
          popular: true
        },
        {
          title: 'Website Sekolah',
          description: 'Website sekolah yang dilengkapi dengan berbagai fitur unggulan seperti penerbitan artikel, pengumuman, hingga galeri kegiatan.',
         
          price: 'Rp1.749.000',
          duration: 'Selesai 7-14 hari',
          popular: false
        }
      ]
    }
  },
  
  mounted() {
    // Initialize AOS if available
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 1000,
        once: true,
        offset: 100
      });
    }
  },
  
  methods: {
    scrollToServices() {
      this.$refs.servicesSection.scrollIntoView({ 
        behavior: 'smooth' 
      });
    }
  }
};
</script>

<style scoped>
button:hover {
  cursor: pointer;
}

.animation-delay-2000 {
  animation-delay: 2s;
}

.animation-delay-4000 {
  animation-delay: 4s;
}

/* Custom scrollbar */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #f1f5f9;
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
}
</style>