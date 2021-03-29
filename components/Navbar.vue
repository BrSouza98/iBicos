<template>
  <v-row class="container-navbar d-flex justify-center align-center">
    <v-col cols="10" md="6" class="d-flex align-center botao-inicio">
      <nuxt-link class="ml-3" to="/">
        iBicos
      </nuxt-link>
    </v-col>

    <v-col class="d-flex justify-space-around" cols="2" md="6">
      <v-btn
        v-for="item in items"
        :key="item.text"
        text
        class="d-none d-md-flex"
        color="#006064"
        nuxt
        :to="`/${item.link}`"
        exact-active-class="link-ativo"
      >
        {{ item.text }}
      </v-btn>

      <v-menu bottom left>
        <template #activator="{ on, attrs }">
          <v-btn
            class="d-flex d-md-none"
            icon
            color="#006064"
            v-bind="attrs"
            v-on="on"
          >
            <v-icon class="botao-inicio">
              mdi-menu
            </v-icon>
          </v-btn>
        </template>

        <v-list class="menu">
          <v-list-item v-for="item in items" :key="item.text">
            <v-list-item-title>
              <v-btn
                text
                nuxt
                :to="`/${item.link}`"
                color="#006064"
                exact-active-class="link-ativo"
              >
                {{ item.text }}
              </v-btn>
            </v-list-item-title>
          </v-list-item>
        </v-list>
      </v-menu>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: 'Navbar',
  props: {},
  data () {
    return {
      items: [
        { text: 'Serviços disponíveis', link: 'servicos-disponiveis' },
        { text: 'Novidades', link: 'novidades' },
        { text: 'Quem somos?', link: 'quem-somos' },
        { text: 'Fale Conosco', link: 'fale-conosco' }
      ]
    }
  },
  created () {},
  methods: {}
}
</script>

<style lang="scss" scoped>
.container-navbar {
  .botao-inicio {
    font-size: 28px;
    font-weight: bolder;
    a {
      color: #006064;
    }
  }
}

.menu {
  background-color: #f5fffe;
}

.link-ativo {
  color: #4329d6 !important;
}

a {
  text-decoration: none;
  font-weight: bolder;
}
</style>
