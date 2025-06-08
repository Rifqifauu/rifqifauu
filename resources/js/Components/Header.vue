<template>
  <div
    ref="navbar"
    :class="['w-full fixed top-4 left-1/2 transform -translate-x-1/2 z-50 px-4 transition-colors duration-500', isDark ? 'text-white' : 'text-sky-900']"
  >
    <div
      class="backdrop-blur-md bg-white/30 border border-white/20 rounded-full shadow-lg flex items-center justify-between px-10 py-3"
      :class="isDark ? 'bg-black/30 border-white/30' : ''"
    >
      <div class="text-xl font-semibold">Rifqifauu</div>
      <nav class="flex space-x-6 font-medium">
        <a href="#" class="hover:text-orange-400 transition">Home</a>
        <a href="#" class="hover:text-orange-400 transition">Services</a>
        <a href="#" class="hover:text-orange-400 transition">Portofolio</a>
                <a href="#" class="hover:text-orange-400 transition">About</a>

      </nav>
    </div>
  </div>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      isDark: false,
    };
  },
  mounted() {
    // Tunggu sebentar sampai semua section di-load
    setTimeout(() => {
      const darkSections = document.querySelectorAll(".dark-section");

      const observer = new IntersectionObserver(
        (entries) => {
          const isIntersectingDark = entries.some((entry) => entry.isIntersecting);
          this.isDark = isIntersectingDark;
        },
        {
          root: null,
          rootMargin: "-50px 0px 0px 0px",
          threshold: 0.1,
        }
      );

      darkSections.forEach((section) => observer.observe(section));
    }, 100); // Delay kecil supaya layout lain keburu render
  },
};
</script>
