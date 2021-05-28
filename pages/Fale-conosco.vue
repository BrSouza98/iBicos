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

<style>
</style>
