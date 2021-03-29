<template>
  <div>
    <v-img :src="require(`~/assets/imagens-blog/autores/${autor.img}`)" class="rounded-circle" width="100px" height="100px" />
    <div>
      <h3>{{ autor.nome }}</h3>
      <p>{{ autor.bio }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Autor',
  props: {
    autor: {
      required: true,
      typeof: Object
    }
  }
}
</script>

<style lang="scss" scoped>
</style>
