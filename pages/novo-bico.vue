<template>
  <div>
    <v-container fluid class="quem-somos">
      <v-container class="texto-container d-flex justify-center my-4 py-5">
        <v-row class="d-flex justify-center align-center">
          <v-col cols="12" class="my-5">
            <h1 class="text-center">
              Publique seu bico!
            </h1>
          </v-col>

          <v-col class="imagem" cols="12" md="6" order-md="2" />

          <v-col cols="12" md="6">
            <p>
              Já aconteceu de você precisar de um bom eletricista e não conhecer
              ninguém? Ou então passar aquela semana em branco por falta de
              demanda? Para isso surgiu a iBicos, conhecemos e sabemos das
              dificuldades de ambos os lados, logo, nosso objetivo é fazer o
              meio de campo entre o cliente que precisa ter seu problema
              solucionado e o prestador de serviços disposto a assumir novos
              desafios!
            </p>
          </v-col>
        </v-row>
      </v-container>
    </v-container>
    <v-container fluid class="sobre-como-funciona">
      <v-container>
        <v-row class="my-5">
          <v-col class="my-3" cols="12">
            <h1 class="text-center">
              E como funciona?
            </h1>
          </v-col>

          <v-col cols="12" md="6" class="my-2">
            <div
              class="sobre-texto-imagem-container d-flex justify-space-around align-center"
            >
              <div class="sobre-texto-container">
                <h4>Cadastre-se</h4>
                <p>
                  Crie sua conta de forma rápida e gratis, você só precisa de um
                  email ativo e garantir uma senha segura.
                </p>
              </div>

              <div class="sobre-imagem-container">
                <v-icon color="white" size="150">
                  mdi-text-box-plus
                </v-icon>
              </div>
            </div>
          </v-col>

          <v-col cols="12" md="6" class="my-2">
            <div
              class="sobre-texto-imagem-container d-flex justify-space-around align-center"
            >
              <div class="sobre-imagem-container order-md-2">
                <v-icon color="white" size="150">
                  mdi-format-paint
                </v-icon>
              </div>
              <div class="sobre-texto-container">
                <h4>Publique seu Bico</h4>
                <p>
                  Hora de nos contar sobre oque precisa, você pode sobre o bico
                  bem como qual o tipo de profissional que precisa, quantos, o
                  prazo e claro, o valor orçamentado.
                </p>
              </div>
            </div>
          </v-col>

          <v-col cols="12" md="6" class="my-2">
            <div
              class="sobre-texto-imagem-container d-flex justify-space-around align-center"
            >
              <div class="sobre-texto-container">
                <h4>Analise as propostas</h4>
                <p>
                  Assim que postado, seu bico vai para o topo da lista! Todos os
                  prestadores de serviço disponiveis poderão se candidatar
                  <span
                  class="d-none d-sm-inline"
                    >enviando o tempo, experiencias com qual cumprira o bico,
                    isso claro, sendo compátiveis com a média estipulada</span
                  >.
                </p>
              </div>

              <div class="sobre-imagem-container">
                <v-icon color="white" size="150">
                  mdi-text-search
                </v-icon>
              </div>
            </div>
          </v-col>

          <v-col cols="12" md="6" class="my-2">
            <div
              class="sobre-texto-imagem-container d-flex justify-space-around align-center"
            >
              <div class="sobre-imagem-container order-md-2">
                <v-icon color="white" size="150">
                  mdi-handshake
                </v-icon>
              </div>

              <div class="sobre-texto-container">
                <h4>Acordo fechado</h4>

                <p>
                  Encontrou a pessoa ideal para o trampo? Parabéns! Agora é só
                  aprovar a proposta<span class="d-none d-sm-inline">
                    , nossa plataforma disponibilizará um chat para que possam
                    conversar melhor e dar continuidade</span
                  >.
                </p>
              </div>
            </div>
          </v-col>

          <v-col cols="12" class="d-flex justify-center my-5 py-5">
            <v-btn outlined color="white">
              Desejo publicar um Bico!
            </v-btn>
          </v-col>
        </v-row>
      </v-container>
    </v-container>
            <h1 class="text-center py-10">
              Preencha o formulário para publicar o seu bico!
            </h1>
               <v-col cols="6" class="mx-auto">
     <v-form ref="form" v-model="valid" lazy-validation class="justify-center my-10 py-0">
      <v-text-field
        v-model="name"
        :counter="40"
        :rules="nameRules"
        label="Nome"
        required
      ></v-text-field>

      <v-text-field
        v-model="email"
        :rules="emailRules"
        label="E-mail"
        required
      ></v-text-field>

      <v-select
        v-model="select"
        :items="items"
        :rules="[v => !!v || 'Item is required']"
        label="Bico"
        required
      ></v-select>

      <v-checkbox
        v-model="checkbox"
        :rules="[v => !!v || 'You must agree to continue!']"
        label="Aceita os termos de uso?"
        required
      ></v-checkbox>

      <v-btn :disabled="!valid" color="success" class="mr-4" @click="validate">
        Enviar
      </v-btn>

      <v-btn color="error" class="mr-4" @click="reset">
        Limpar
      </v-btn>
    </v-form>
               </v-col>
  </div>
</template>

<script>
export default {
  data: () => ({
    valid: true,
    name: '',
    nameRules: [
      v => !!v || 'Name is required',
      v => (v && v.length <= 30) || 'Name must be less than 10 characters'
    ],
    email: '',
    emailRules: [
      v => !!v || 'E-mail is required',
      v => /.+@.+\..+/.test(v) || 'E-mail must be valid'
    ],
    select: null,
    items: ['Pintura', 'Faxina', 'Pedreiro', 'Encanador', 'Eletricista', 'Banho e tosa'],
    checkbox: false
  }),

  methods: {
    validate () {
      this.$refs.form.validate()
    },
    reset () {
      this.$refs.form.reset()
    },
    resetValidation () {
      this.$refs.form.resetValidation()
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
