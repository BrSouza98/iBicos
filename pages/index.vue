<template>
  <div>
    <v-container fluid class="container-inicial">
      <v-row class="texto ma-3">
        <v-col cols="12" sm="9">
          <h1>
            Uma plataforma voltada para
            <span class="texto-destaque">prestadores de serviços</span> e
            pessoas em
            <span class="texto-destaque">busca de profissionais</span>.
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
      <v-container class="texto-container d-flex justify-center">
        <v-row class="d-flex justify-center mx-5 px-5">
          <v-col cols="12">
            <h2>
              Oque é iBicos?
            </h2>
          </v-col>

          <v-col class="imagem" cols="12" md="6" order-md="2" />

          <v-col cols="12" md="6">
            <p>
              Já aconteceu de você precisar de um bom eletricista e não conhecer
              ninguém? Ou então passar aquela semana em branco por falta de
              demanda? Para isso surgiu a iBicos, conhecemos e sabemos das
              dificuldades de ambos os lados, logo, nosso objetivo é fazer o
              meio de campo entre o cliente que precisa ter seu problema
              solucionado e o prestador de serviço disposto a novos desafios!
            </p>
          </v-col>
        </v-row>
      </v-container>
    </v-container>
  </div>
</template>

<script>
export default {}
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css2?family=Anton&display=swap");

/* Conceito de mobile first, as configurações são feitas especificamente para mobile e adapt
   adaptado para as telas maiores */
.container-inicial {
  background-color: #f5fffe;
  box-sizing: border-box;

  background-image: url("~assets/imagens/banner.svg");
  background-position-y: bottom;
  background-position-x: 150px;
  h1 {
    font-family: "Anton", sans-serif;
    color: rgb(70, 70, 70);
    font-size: 30px;
  }
}

.quem-somos {
  background-color: #eceff1;
  display: flex;
  font-size: 20px;
  .texto-container {
    .imagem {
      background-image: url("~assets/imagens/aperto-de-mao.svg");
      background-position: center;
      min-height: 200px;
    }
  }
}

.texto-destaque {
  color: #00656d;
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

/* iPad e tablet com telas maiores */
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
