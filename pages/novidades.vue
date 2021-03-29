<template>
  <v-container fluid class="novidade-container">
    <v-container class="cards-container rounded-lg elevation-20 my-5 py-5">
      <h1 class="text-center mt-5">
        Noticias mais recentes
      </h1>
      <div v-for="artigo of artigos" :key="artigo.slug">
        <v-hover>
          <template #default="{ hover }">
            <v-card
              max-width="850px"
              :class="`elevation-${hover ? 24 : 6}`"
              class="mx-auto pa-6 transition-swing"
            >
              <v-img
                :src="require(`~/assets/imagens-blog/${artigo.img}`)"
                width="400px"
              />

              <div class="v-card-conteudo">
                <v-card-title class="v-card-title">
                  {{ artigo.titulo }}
                </v-card-title>

                <v-card-subtitle class="v-card-subtitle">
                  {{ artigo.descricao }}
                </v-card-subtitle>

                <div class="v-card-autor-data">
                  Autor: {{ artigo.autor.nome }}
                  <br>
                  Data: {{ formatarData(artigo.createdAt) }}
                </div>

                <v-card-actions class="v-card-actions">
                  <v-btn
                    color="teal lighten-1"
                    dark
                    nuxt
                    large
                    :to="{
                      name: 'postagem-slug',
                      params: { slug: artigo.slug },
                    }"
                  >
                    Leia
                  </v-btn>
                </v-card-actions>
              </div>
            </v-card>
          </template>
        </v-hover>
      </div>
    </v-container>
  </v-container>
</template>

<script>
export default {
  async asyncData ({ $content, params }) {
    const artigos = await $content('artigos')
      .only(['titulo', 'createdAt', 'descricao', 'img', 'slug', 'autor'])
      .sortBy('createdAt', 'asc')
      .fetch()

    return {
      artigos
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

<style lang="scss" scoped>
.novidade-container {
  background-color: #90a4ae;
  .cards-container {
    background-color: #ffffffe1;
    h1 {
      color: rgb(27, 35, 46);
    }
    .v-card {
      display: flex;
      margin: 80px;
      font-size: 20px;

      .v-card-conteudo {
        display: flex;
        flex-direction: column;
        justify-content: space-between;

        .v-card-title {
          font-size: 1.2em;
          word-break: inherit;
        }

        .v-card-subtitle {
          font-size: inherit;
          margin: 5px 2px 5px 2px;
        }

        .v-card-autor-data {
          color: rgba(0, 0, 0, 0.6);
          font-size: 0.8em;
          margin: 5px 2px 5px 2px;
          padding: 16px;
          font-style: italic;
        }

        .v-card-actions {
          display: flex;
          flex-direction: row-reverse;
        }
      }
    }
  }
}

@media (max-width: 700px) {
  .novidade-container {
    .cards-container {
      .v-img {
        width: 50%;
        height: auto;
      }
      .v-card {
        display: flex;
        flex-direction: column;
        margin: 80px;
        justify-content: center;
        align-items: center;
      }
    }
  }
}
</style>
