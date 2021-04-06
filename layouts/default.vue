<template>
  <!-- App.vue -->

  <v-app>
    <v-app-bar color="#F5FFFE" height="80px" elevate-on-scroll app>
      <Navbar />
    </v-app-bar>
    <v-main>
      <!-- Conteudo principal da página-->
      <Nuxt />
    </v-main>

    <v-footer dark padless>
      <v-container fluid class="container-rodape">
        <v-row class="teal pa-3">
          <v-col cols="12" sm="6" class="frase d-flex justify-left">
            <h2>Estamos nas principais redes sociais!!</h2>
          </v-col>

          <v-spacer class="d-flex d-sm-none" />
          <v-col
            cols="12"
            sm="6"
            class="redes-sociais d-flex justify-space-around"
          >
            <v-btn v-for="icon in icons" :key="icon" class="mx-4" dark icon>
              <v-icon size="24px">
                {{ icon }}
              </v-icon>
            </v-btn>
          </v-col>
        </v-row>

        <v-row class="teal darken-2 pa-5 align-start" dark>
          <v-col cols="12" sm="4">
            <div>
              <h4>Precisa contratar?</h4>
              <p>
                É empresa e esta precisando de profissionais? É muito simples!
                Crie já um
                <a style="color: #fff" href="">cadastro</a> e deixe seu bico a
                mostra em nosso mural de bicos, fique de olho nas notificações e
                busque sempre manter os requisitos atualizados para não ter
                nenhuma surpresa, para mais dúvidas clique aqui.
              </p>
            </div>
          </v-col>

          <v-col cols="12" sm="4">
            <div>
              <h4>Precisa trabalhar?</h4>
              <p>
                É prestador de serviços? Então
                <a style="color: #fff" href="">cadastre-se</a> já e fique por
                dentro das novidades, tanto no mural de bicos quanto em nosso
                blog sempre com alguma dica para ajudar você a conseguir aquela
                renda extra todo mês, se ainda sim estiver sentindo alguma dificuldade então da uma olhada aqui no nosso <a href="" style="color: white">guia passo a passo</a>, temos um guia passo a passo perfeito para você.
              </p>
            </div>
          </v-col>

          <v-col cols="12" sm="4">
            <h4 class="text-center">
              Institucional
            </h4>
            <div class="d-flex flex-column align-center">
              <v-btn
                v-for="button in buttons"
                :key="button.text"
                max-width="150px"
                text
                rounded
                nuxt
                :to=" button.link "
              >
                {{ button.text }}
              </v-btn>
            </div>
          </v-col>
        </v-row>

        <v-row class="d-flex teal darken-4 pa-5">
          <v-col class="d-flex justify-center">
            {{ new Date().getFullYear() }} — &nbsp;<strong> NTC solutions</strong>
          </v-col>
        </v-row>
      </v-container>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  data () {
    return {
      icons: ['mdi-facebook', 'mdi-twitter', 'mdi-linkedin', 'mdi-instagram'],
      buttons: [
        { text: 'Inicio', link: '/' },
        { text: 'Sobre', link: 'quem-somos' },
        { text: 'Contatos', link: 'fale-conosco' },
        { text: 'Serviços', link: 'nossos-servicos' }
      ]
    }
  }
}
</script>

<style lang="scss" scoped>
*,
*:before,
*:after {
  box-sizing: inherit;
}

.container-rodape{
  font-size: 15px;
  h4{
    font-size: 1.2em;
    margin: 12px 0 12px 0;
  }
}
</style>
