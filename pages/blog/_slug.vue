<template>
  <v-container fluid>
    <article>
      <nuxt-content :document="artigos" />
    </article>
  </v-container>
</template>

<script>
export default {
  async asyncData ({ $content, params }) {
    const artigos = await $content('artigos', params.slug).fetch()

    return { artigos }
  }
}
</script>
