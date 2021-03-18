<template>
  <div>
    <div class="container-inicial">
      <v-container>
        <h1>
          Uma plataforma voltada para
          <span class="texto-destaque">prestadores de serviços</span> e pessoas
          em <span class="texto-destaque">busca de profissionais</span>.
        </h1>

        <div class="my-3">
          <v-btn large color="#00656D" medium class="mt-2 mr-2">
            <span style="color: #fff">Buscar bicos</span>
          </v-btn>

          <v-btn large outlined medium class="mt-2">
            Postar bicos
          </v-btn>
        </div>
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
  background-image: url('@assets/imagens/banner.svg');
  height: 45vh;
  h1 {
    font-size: 25px;
    width: 90%;
    font-family: "Anton", sans-serif;
    color: rgb(71, 71, 71);
  }
}

.texto-destaque {
  color: #00656d;
}

@media only screen and (min-width: 600px) {
.container-inicial{
  h1 {
    width: 50%;
    margin-top: 40px;
  }
}
}
</style>
