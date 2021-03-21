<template>
  <!-- App.vue -->

  <v-app>
    <v-app-bar color="#F5FFFE" height="80px" elevate-on-scroll app>
      <Navbar />
    </v-app-bar>
    <v-main>
      <!-- Conteudo principal da página-->
      <Nuxt />
    </v-main>

    <v-footer app>
    <!-- Rodapé-->
    </v-footer>
  </v-app>
</template>

<style lang="scss" scoped>
  *, *:before, *:after {
  box-sizing: inherit;
}
</style>
