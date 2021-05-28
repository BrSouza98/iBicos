<template>
  <v-container fluid class="principais-categorias">
      <v-container class="my-10">
        <v-row class="d-flex justify-center my-5">
          <h1 class="text-center my-5">
            Bem-vindo ao mural de bicos
          </h1>
        </v-row>

        <v-row class="my-15">
          <v-col
            v-for="categoria in categorias"
            :key="categoria.text"
            cols="12"
            md="6"
            lg="4"
          >
            <v-card width="100%">
              <v-img
                height="300px"
                gradient="to top right, rgba(59,75,75,.35), rgba(32,32,32,.7)"
                :src="require(`~/assets/imagens/${categoria.img}.jpg`)"
                class="d-flex align-center card-imagem"
              >
                <nuxt-link class="card-titulo" to="/">
                  <v-card-title class="text-center justify-center card-titulo">
                    {{ categoria.text }}
                  </v-card-title>
                </nuxt-link>
              </v-img>
            </v-card>
          </v-col>
        </v-row>
        <div>          <h1 class="text-center my-5">
            Siga o ibicos nas redes sociais para ficar por dentro das novidades de bicos.
          </h1></div>
      </v-container>
    </v-container>
</template>

<script>
export default {
  async asyncData ({ $content, params }) {
    const artigos = await $content('artigos')
      .only(['titulo', 'createdAt', 'descricao', 'img', 'slug', 'autor'])
      .sortBy('createdAt', 'asc')
      .limit(3)
      .fetch()

    return {
      artigos
    }
  },
  data () {
    return {
      categorias: [
        { img: 'pintura', text: 'Pintura' },
        { img: 'faxina', text: 'Faxina' },
        { img: 'pedreiro', text: 'Pedreiro(a)' },
        { img: 'encanador', text: 'Encanador(a)' },
        { img: 'eletricista', text: 'Eletricista' },
        { img: 'banho-e-tosa', text: 'Banho e Tosa' }
      ]
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
@import url("https://fonts.googleapis.com/css2?family=Anton&display=swap");

/* Conceito de mobile first, as configurações são feitas especificamente para mobile e
   adaptado para as telas maiores */
.container-inicial {
  background-color: #f5fffe;
  box-sizing: border-box;

  background-image: url("~assets/imagens/banner.svg");
  background-position-y: 25vh;
  background-position-x: 45vw;
  h1 {
    font-family: "Anton", sans-serif;
    color: rgb(70, 70, 70);
    font-size: 30px;
    .texto-destaque {
      color: #00656d;
    }
  }
}

.quem-somos {
  background-color: #eceff1;
  display: flex;
  font-size: 23px;
  .texto-container {
    .imagem {
      background-image: url("~assets/imagens/aperto-de-mao.svg");
      background-position: center;
      min-height: 300px;
    }
  }
}

.sobre-como-funciona {
  background-color: #263238;
  color: #f0f0f0;
  .sobre-texto-container {
    width: 65%;
  }
}

.principais-categorias {
  background-color: #f0f0f0;
  .card-imagem {
    .card-titulo {
      color: rgb(241, 241, 241);
      font-size: 25px;
      height: 100vh;
      text-decoration: none;
    }
    &:hover {
      .card-titulo {
        color: aliceblue;
        font-size: 26px;
        background-image: linear-gradient(
          to right top,
          rgba(172, 149, 255, 0.411),
          rgba(0, 146, 139, 0.712)
        );
      }
    }
  }
}

.blog-container {
  background-color: #ffffff;
  .v-card {
    font-size: 20px;

    .v-card-conteudo {
      height: 100%;
      .v-card-title {
        font-size: 1.2em;
        word-break: inherit;
      }

      .v-card-subtitle {
        font-size: inherit;
        margin: 5px auto 5px auto;
        height: 120px;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .card-action-autor {
        .v-card-autor-data {
          color: rgba(0, 0, 0, 0.6);
          font-size: 0.8em;
          font-style: italic;
          padding: 16px;
        }

        .v-card-actions {
          display: flex;
          flex-direction: row-reverse;
        }
      }
    }
  }
}
/* Mobile/tela deitada */
@media (min-width: 480px) {
  .container-inicial {
    background-position-y: 10vh;
    background-position-x: 40vh;
  }
}

/* Tablet */
@media (min-width: 600px) {
  .container-inicial {
    background-position-y: 5vh;
    background-position-x: 45vh;
    height: 65vh;
  }
}

/* iPad e tablets grandes */
@media (min-width: 801px) {
  .container-inicial {
    background-position-y: bottom;
    background-position-x: right;
  }
}

/* Desktop */
@media (min-width: 1025px) {
}

/* Telas HD+ */
@media (min-width: 1281px) {
}
</style>
