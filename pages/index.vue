<template>
  <div>
    <v-container fluid class="container-inicial">
      <v-row class="texto ma-3">
        <v-col cols="12" sm="9">
          <h1>
            Uma plataforma voltada para
            <span class="texto-destaque">prestadores de serviços</span> e
            <span class="texto-destaque">clientes</span>
            em busca de profissionais.
          </h1>
        </v-col>
      </v-row>
      <v-row class="botoes ma-3">
        <v-col cols="12">
          <v-btn large color="#00656D" medium>
            <span style="color: #fff">Buscar bicos</span>
          </v-btn>
        </v-col>

        <v-col>
          <v-btn large outlined medium>
            Postar bicos
          </v-btn>
        </v-col>
      </v-row>
    </v-container>

    <v-container fluid class="quem-somos">
      <v-container class="texto-container d-flex justify-center my-4 py-5">
        <v-row class="d-flex justify-center align-center">
          <v-col cols="12" class="my-5">
            <h1 class="text-center">
              Oque é iBicos?
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
                    isso claro, sendo compátiveis com a média estipulada</span>.
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
                    conversar melhor e dar continuidade</span>.
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

    <v-container fluid class="principais-categorias">
      <v-container>
        <v-row class="d-flex justify-center my-5 py-5">
          <h1 class="text-center my-5 py-5">
            Procurando um bico?
          </h1>
        </v-row>

        <v-row>
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
      </v-container>
    </v-container>

    <v-container fluid class="blog">
      <v-container class="my-5 py-5">
        <v-row>
          <h1>Blog</h1>
        </v-row>
      </v-container>
    </v-container>
  </div>
</template>

<script>
export default {
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
