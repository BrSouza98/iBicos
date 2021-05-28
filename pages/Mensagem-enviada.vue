<template>
  <v-container>
    <h1>Seja bem-vindo a iBicos!</h1>
    <h2>Seu cadastro encontra-se em validação no momento</h2>
    <h3>Até lá aproveite para navegar em nosso <nuxt-link to="blog">blog!</nuxt-link></h3>
    <v-img
      :src="require('~/assets/imagens/login.jpg')"
      width="400px"
    />
  </v-container>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped></style>
