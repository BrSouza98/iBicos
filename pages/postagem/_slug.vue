<template>
  <v-container>
    <article>
      <h1>{{ artigo.titulo }}</h1>
      <p>Criado em: {{ formatarData(artigo.createdAt) }}</p>
      <img
        :src="require(`~/assets/imagens-blog/${artigo.img}`)"
        :alt="artigo.alt"
      >

      <nuxt-content :document="artigo" />

      <autor :autor="artigo.autor" />

      <div>
        <NuxtLink v-if="prev" :to="{ name: 'postagem-slug', params: { slug: prev.slug } }">
          {{ prev.titulo }}
        </NuxtLink>

        <NuxtLink v-if="next" :to="{ name: 'postagem-slug', params: { slug: next.slug } }">
          {{ next.titulo }}
        </NuxtLink>
      </div>
    </article>
  </v-container>
</template>

<script>
export default {
  components: {},
  async asyncData ({ $content, params }) {
    const artigo = await $content('artigos', params.slug).fetch()

    const [prev, next] = await $content('artigos')
      .only(['titulo', 'slug'])
      .sortBy('createdAt', 'asc')
      .surround(params.slug)
      .fetch()

    return {
      prev,
      next,
      artigo
    }
  },

  methods: {
    formatarData (data) {
      const opcao = { dia: 'numeric', mes: 'long', ano: 'numeric' }
      return new Date(data).toLocaleDateString('pt', opcao)
    }
  }
}
</script>

<style>
</style>
