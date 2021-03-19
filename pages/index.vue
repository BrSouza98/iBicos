<template>
  <div>
    <div class="container-inicial">
      <v-container class="imagem-fundo">
        <h1>
          Uma plataforma voltada para
          <span class="texto-destaque">prestadores de serviços</span> e pessoas
          em <span class="texto-destaque">busca de profissionais</span>.
        </h1>

        <v-row class="my-2">
          <v-col cols="7" sm="7">
            <v-btn large color="#00656D" medium>
              <span style="color: #fff">Buscar bicos</span>
            </v-btn>
          </v-col>

          <v-col cols="7" sm="7">
            <v-btn large outlined medium>
              Postar bicos
            </v-btn>
          </v-col>
        </v-row>
      </v-container>
    </div>
  </div>
</template>

<script>
export default {}
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css2?family=Anton&display=swap");

.container-inicial {
  background-color: #effffe;
  /* background-image: url("~assets/imagens/banner.svg");
  background-position-y: 170px;
  background-position-x: 150px; */
  .imagem-fundo {
    background-image: url("~assets/imagens/banner.svg");
    background-position-y: 170px;
    background-position-x: 180px;
    height: 100%;
  }
  height: 65vh;
  h1 {
    margin-top: 10px;
    margin-bottom: 30px;
    font-size: 22px;
    width: 80%;
    font-family: "Anton", sans-serif;
    color: rgb(71, 71, 71);
  }
}

.texto-destaque {
  color: #00656d;
}

@media (min-width: 320px) {
  .container-inicial {
    .imagem-fundo {
      background-position-y: 130px;
      background-position-x: 170px;
    }
  }
}

@media (min-width: 480px) {
  .container-inicial {
    .imagem-fundo {
      background-position-y: 40px;
      background-position-x: 170px;
    }
  }
}

@media (min-width: 600px) {
   .container-inicial {
    .imagem-fundo {
      background-position-y: 40px;
      background-position-x: 270px;
    }
  }
}
@media (min-width: 801px) {
    .container-inicial {
    .imagem-fundo {
      background-position-y: 40px;
      background-position-x: right;
    }
  }
}
@media (min-width: 1025px) {
  /* big landscape tablets, laptops, and desktops */
}
@media (min-width: 1281px) {
  /* hi-res laptops and desktops */
}
</style>
