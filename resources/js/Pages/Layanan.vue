<template>
    <!-- Services Section -->
    <section id="services" ref="servicesSection" class="relative py-24 px-6 lg:px-16 dark-section">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900"></div>
        <div class="absolute inset-0 opacity-10">
            <div class="w-full h-full"
                style="background-image: url('data:image/svg+xml,<svg width=&quot;20&quot; height=&quot;20&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><g fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.1&quot;><circle cx=&quot;10&quot; cy=&quot;10&quot; r=&quot;1&quot;/></g></svg>'); background-repeat: repeat;">
            </div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl lg:text-6xl font-bold text-white mb-4">
                    Paket <span
                        class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Terbaik</span>
                </h2>
                <p class="text-md text-white/80 max-w-2xl mx-auto">
                    Pilih paket yang sesuai dengan kebutuhan bisnis Anda. Semua paket jasa pembuatan website <span
                        class="text-purple-400"></span> sudah termasuk hosting dan domain untuk
                    1 tahun.
                </p>
            </div>
            <!-- Service Cards -->
            <div class="grid md:grid-cols-3 gap-8" :data-aos-delay="index * 200" data-aos="fade-up">
                <div v-for="(layanan, index) in layanan" :key="index" class="group relative bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20 
            hover:bg-white/20 transform transition duration-700 ease-[cubic-bezier(0.25,0.8,0.25,1)] 
            hover:scale-[1.025] hover:shadow-2xl ">

                    <!-- Content -->
                    <h3 class="text-2xl font-bold text-white mb-4">{{ layanan.nama }}</h3>
                    <p class="text-white/80 mb-6 leading-relaxed">{{ layanan.detail }}</p>



                    <!-- Price -->
                    <div class="mb-6">
                        <div class="text-2xl font-bold text-white">Rp{{ layanan.harga }}</div>
                    </div>

                    <!-- CTA Button -->
                    <button
                        class="w-full py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 group-hover:from-purple-600 group-hover:to-pink-600">
                        Pilih Paket Ini
                    </button>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
import AppLayout from '@/Layout/AppLayout.vue';

export default {
    layout: AppLayout,
    props: {
        layanan: Object,
    },
    mounted() {
        document.title = `Jasa Pembuatan Website ${this.lokasi || ''}`;
        console.log(this.portofolio);
        console.log(this.layanan);
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
