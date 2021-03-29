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

    <v-footer color="blue-grey darken-3" padless>
      <v-row justify="center" no-gutters>
        <v-col
          v-for="link in links"
          :key="link"
          cols="3"
          md="2"
          lg="1"
          class="d-flex justify-center"
        >
          <v-btn color="white" text rounded class="my-2">
            {{ link }}
          </v-btn>
        </v-col>
      </v-row>
      <v-col class="blue-grey darken-4 py-4 text-center white--text" cols="12">
        {{ new Date().getFullYear() }} — <strong>iBicos</strong>
      </v-col>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  data () {
    return {
      links: ['Inicio', 'Sobre nós', 'Equipe', 'Serviços', 'Blog', 'Contatos']
    }
  }
}
</script>

<style lang="scss" scoped>
*,
*:before,
*:after {
  box-sizing: inherit;
}
</style>
