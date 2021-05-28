<template>
  <div>
            <h1 class="text-center py-10">
              Preencha os campos para criar sua conta
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
        v-model="senha"
                :counter="12"
        :rules="passwordRules"
        label="Senha"
        required
      ></v-text-field>

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
                           <p class="text-center py-10">
              Cadastre-se no ibicos é gratuito e fácil de usar, <a href="/criarconta">clique aqui</a>.
            </p>
  </div>
</template>

<script>
export default {
  data: () => ({
    valid: true,
    name: '',
    nameRules: [
      v => !!v || 'Digite o seu nome',
      v => (v && v.length <= 30) || 'Name must be less than 10 characters'
    ],
    email: '',
    emailRules: [
      v => !!v || 'E-mail is required',
      v => /.+@.+\..+/.test(v) || 'E-mail must be valid'
    ],
    telephone: '',
    telephoneRules: [
      v => !!v || 'E-mail is required',
      v => /.+@.+\..+/.test(v) || 'E-mail must be valid'
    ],
    password: '',
    passwordRules: [
      v => !!v || 'Digite sua senha',
      v => (v && v.length <= 30) || 'Name must be less than 10 characters'
    ],
    select: null,
    items: ['Contratante', 'Freelance'],
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
