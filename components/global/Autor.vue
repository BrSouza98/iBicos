<template>
  <div>
    <img :src="require(`~/assets/imagens-blog/autores/${autor.img}`)">
    <div>
      <p>{{ autor.nome }}</p>
      <p>{{ autor.bio }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Autor',
  props: {
    autor: {
      typeof: Object,
      required: true
    }
  }
}
</script>

<style lang="scss" scoped>
img {
  height: 100px;
}
</style>
