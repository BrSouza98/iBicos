<template>
  <v-container>
    <h1>Blog Posts</h1>
    <div v-for="artigo of artigos" :key="artigo.slug">
      <v-card max-width="900px" class="mx-auto" elevation="5" tile>
        <v-img
          :src="require(`~/assets/imagens-blog/${artigo.img}`)"
          max-width="500px"
        />

        <div class="v-card-conteudo">
          <v-card-title class="v-card-title">
            {{ artigo.titulo }}
          </v-card-title>

          <v-card-subtitle>
            {{ artigo.descricao }}
          </v-card-subtitle>

          <v-card-actions class="v-card-actions">
            <v-btn
              color="teal lighten-1"
              dark
              nuxt
              :to="{ name: 'postagem-slug', params: { slug: artigo.slug } }"
            >
              Leia
            </v-btn>
          </v-card-actions>
        </div>
      </v-card>
    </div>
  </v-container>
</template>

<script>
export default {
  async asyncData ({ $content, params }) {
    const artigos = await $content('artigos')
      .only(['titulo', 'descricao', 'img', 'slug', 'autor'])
      .sortBy('createdAt', 'asc')
      .fetch()

    return {
      artigos
    }
  }
}
</script>

<style lang="scss" scoped>
.v-card {
  display: flex;
  margin: 80px;
  .v-card-conteudo {
    display: flex;
    flex-direction: column;
    justify-content: space-between;

    .v-card-title{
      word-break: inherit;
    }

    .v-card-actions {
      display: flex;
      flex-direction: row-reverse;
    }
  }
}

@media (max-width: 700px) {
  .v-card{
    display: inherit;
      margin: inherit;
  }
}
</style>
