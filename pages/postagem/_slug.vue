<template>
  <div class="container-postagem">
    <v-parallax
      dark
      :src="require(`~/assets/imagens-blog/${artigo.img}`)"
      :alt="artigo.alt"
      class="v-parallax"
    >
      <v-row class="container-inicio-postagem">
        <v-col class="text-left" cols="12">
          <v-container class="my-5 py-5" style="background-color: transparent">
            <h1 class="display-1 mb-4">
              {{ artigo.titulo }}
            </h1>
            <h4 class="font-weight-thin">
              Criado em: {{ formatarData(artigo.createdAt) }}
            </h4>
            <h4 class="font-weight-thin">
              Por: {{ artigo.autor.nome }}
            </h4>
          </v-container>
        </v-col>
      </v-row>
    </v-parallax>
    <v-container>
      <article>
        <div class="container-artigo ma-5">
          <nuxt-content :document="artigo" />

          <autor :autor="artigo.autor" />
          <NuxtLink
            v-if="prev"
            :to="{ name: 'postagem-slug', params: { slug: prev.slug } }"
          >
            {{ prev.titulo }}
          </NuxtLink>

          <NuxtLink
            v-if="next"
            :to="{ name: 'postagem-slug', params: { slug: next.slug } }"
          >
            {{ next.titulo }}
          </NuxtLink>
        </div>
      </article>
    </v-container>
  </div>
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

<style lang="scss" scoped>
.container-postagem {
  background-color: #90a4ae;
  font-size: 24px;
  .v-parallax {
    .container-inicio-postagem {
      align-items: flex-end;
      margin: -20px;
      background-image: linear-gradient(
        to right top,
        rgba(0, 0, 0, 0.801),
        rgba(39, 78, 76, 0.699)
      );
    }
  }
  .container-artigo {
    font-size: 0.8em;
    padding: 25px;
    background-color: rgb(255, 255, 255);
    border-radius: 20px;
  }
}

@media (min-width: 480px) {
}

/* Tablet */
@media (min-width: 600px) {
}

/* iPad e tablets grandes */
@media (min-width: 801px) {
  .container-inicial {
  }
}

/* Desktop */
@media (min-width: 1025px) {
  .container-artigo {
    width: 100%;
  }
}

/* Telas HD+ */
@media (min-width: 1281px) {
}
</style>
