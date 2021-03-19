<template>
  <v-row class="container-navbar">
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
      >
        <nuxt-link :to="`/${item.link}`">
          {{ item.text }}
        </nuxt-link>
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
              <v-btn text active-class="link-ativo">
                <nuxt-link :to="`/${item.link}`">
                  {{ item.text }}
                </nuxt-link>
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
        { text: 'Sobre Nós', link: 'sobre' },
        { text: 'Como funciona?', link: 'como-funciona' },
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
  }
}

.menu {
  background-color: #effffe;
}
a {
  text-decoration: none;
  color: #006064;
  font-weight: bold;
}

.link-ativo{
  color: #29d0d6;
}
</style>
