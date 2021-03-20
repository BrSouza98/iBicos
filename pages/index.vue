<template>
  <div>
    <v-container fluid class="container-inicial">
      <v-row>
        <v-col cols="12" sm="9">
          <h1>
            Uma plataforma voltada para
            <span class="texto-destaque">prestadores de serviços</span> e
            pessoas em
            <span class="texto-destaque">busca de profissionais</span>.
          </h1>
        </v-col>
      </v-row>
      <v-row class="container-botao-imagem">
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
  </div>
</template>

<script>
export default {}
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css2?family=Anton&display=swap");

.container-inicial {
  background-color: #f5fffe;
  height: 75vh;

  background-image: url("~assets/imagens/banner.svg");
  background-position-y: bottom;
  background-position-x: 150px;
  h1 {
    font-family: "Anton", sans-serif;
    color: rgb(71, 71, 71);
    font-size: 30px;
  }
}

.texto-destaque {
  color: #00656d;
}

@media (min-width: 480px) {
  .container-inicial {
    background-position-y: bottom;
    background-position-x: 100px;
  }
}

@media (min-width: 600px) {
  .container-inicial {
    background-position-y: 50px;
    background-position-x: 150%;
    height: 65vh;
  }
}
@media (min-width: 801px) {
  .container-inicial {
    background-position-y: bottom;
    background-position-x: right;
  }
}
@media (min-width: 1025px) {
}
@media (min-width: 1281px) {
}
</style>
