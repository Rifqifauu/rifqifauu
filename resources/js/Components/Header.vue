<template>
  <div
    ref="navbar"
    :class="[
      'w-full fixed top-4 left-1/2 transform -translate-x-1/2 z-50 px-4 transition-colors duration-500',
      isDark ? 'text-white' : 'text-sky-900'
    ]"
  >
    <div
      class="backdrop-blur-md bg-white/30 border border-white/20 rounded-full shadow-lg flex items-center justify-between px-6 py-3"
      :class="isDark ? 'bg-black/30 border-white/30' : ''"
    >
      <div class="text-xl font-semibold">Rifqifauu</div>

      <!-- Desktop Nav -->
      <nav class="hidden md:flex space-x-6 font-medium">
        <a @click.prevent="scrollToSection('home')" class="hover:text-purple-400 transition cursor-pointer">Home</a>
        <a @click.prevent="scrollToSection('services')" class="hover:text-purple-400 transition cursor-pointer">Services</a>
        <a @click.prevent="scrollToSection('portofolio')" class="hover:text-purple-400 transition cursor-pointer">Portofolio</a>
        <a @click.prevent="scrollToSection('about')" class="hover:text-purple-400 transition cursor-pointer">About</a>
      </nav>

      <!-- Hamburger Icon -->
      <button class="md:hidden focus:outline-none" @click="isMenuOpen = !isMenuOpen">
        <svg
          v-if="!isMenuOpen"
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg
          v-else
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <transition name="fade">
      <div
        v-if="isMenuOpen"
        class="md:hidden mt-2 backdrop-blur-md bg-white/30 border border-white/20 rounded-xl shadow-lg py-4 px-6 space-y-4 text-center font-medium"
        :class="isDark ? 'bg-black/30 border-white/30 text-white' : 'text-sky-900'"
      >
        <a @click.prevent="scrollToSection('home')" class="block hover:text-orange-400 transition cursor-pointer">Home</a>
        <a @click.prevent="scrollToSection('services')" class="block hover:text-orange-400 transition cursor-pointer">Services</a>
        <a @click.prevent="scrollToSection('portofolio')" class="block hover:text-orange-400 transition cursor-pointer">Portofolio</a>
        <a @click.prevent="scrollToSection('about')" class="block hover:text-orange-400 transition cursor-pointer">About</a>
      </div>
    </transition>
  </div>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      isDark: false,
      isMenuOpen: false,
    };
  },
  mounted() {
    setTimeout(() => {
      this.setupIntersectionObserver();
    }, 100);
  },
  methods: {
    setupIntersectionObserver() {
      const darkSections = document.querySelectorAll(".dark-section");
      
      if (darkSections.length === 0) return;

      // Observer untuk dark sections dengan detection point di atas navbar
      const observer = new IntersectionObserver(
        (entries) => {
          let shouldBeDark = false;
          
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              shouldBeDark = true;
            }
          });
          
          this.isDark = shouldBeDark;
        },
        {
          root: null,
          rootMargin: "-80px 0px 0px 0px", // Deteksi 80px dari atas (sekitar posisi navbar)
          threshold: 0
        }
      );

      // Observasi hanya dark sections
      darkSections.forEach((section) => {
        observer.observe(section);
      });

      // Backup scroll listener untuk kasus edge
      let ticking = false;
      this.scrollHandler = () => {
        if (!ticking) {
          requestAnimationFrame(() => {
            this.checkCurrentSection();
            ticking = false;
          });
          ticking = true;
        }
      };

      window.addEventListener('scroll', this.scrollHandler, { passive: true });
      
      // Initial check
      this.checkCurrentSection();
    },

    checkCurrentSection() {
      // Posisi tepat di mana navbar berada (sekitar 80px dari atas)
      const navbarPosition = window.scrollY + 80;
      const darkSections = document.querySelectorAll(".dark-section");
      
      let isInDarkSection = false;
      
      darkSections.forEach((section) => {
        const rect = section.getBoundingClientRect();
        const sectionTop = rect.top + window.scrollY;
        const sectionBottom = sectionTop + rect.height;
        
        // Cek apakah posisi navbar berada di dalam dark section
        if (navbarPosition >= sectionTop && navbarPosition <= sectionBottom) {
          isInDarkSection = true;
        }
      });
      
      this.isDark = isInDarkSection;
    },

    closeMenu() {
      this.isMenuOpen = false;
    },

    scrollToSection(id) {
      this.closeMenu();

      setTimeout(() => {
        const el = document.getElementById(id);
        if (el) {
          let yOffset = 0;

          // Atur offset khusus untuk section tertentu
          if (id === 'home') {
            yOffset = -100; // home biasanya ketutupan navbar
          } else {
            yOffset = -25; // section lain bisa offset ringan atau 0
          }

          const y = el.getBoundingClientRect().top + window.pageYOffset + yOffset;
          window.scrollTo({ top: y, behavior: 'smooth' });
        }
      }, 100);
    }
  },

  beforeUnmount() {
    // Cleanup scroll listener
    if (this.scrollHandler) {
      window.removeEventListener('scroll', this.scrollHandler);
    }
  }
};
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>