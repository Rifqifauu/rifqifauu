<template>
  <div class="app-layout">
    <Header />
    <main class="content">
      <slot />
    </main>
    <Footer />
  </div>
</template>

<script>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";

import AOS from "aos";
import "aos/dist/aos.css";

export default {
  name: "AppLayout",
  components: {
    Header,
    Footer,
  },
  mounted() {
    AOS.init({
      duration: 800,
      once: true, // animasi hanya muncul sekali
    });
  },
};
</script>


<style scoped>
.app-layout {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.content {
  flex: 1;
}
</style>
