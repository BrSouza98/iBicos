<template>
  <div>
    <NuxtLink v-if="prev" :to="{ name: 'postagem-slug', params: { slug: prev.slug } }">
      {{ prev.titulo }}
    </NuxtLink>

    <NuxtLink v-if="next" :to="{ name: 'postagem-slug', params: { slug: next.slug } }">
      {{ next.titulo }}
    </NuxtLink>
  </div>
</template>

<script>
export default {
  async asyncData ({ $content, params }) {
    const [prev, next] = await $content('artigos')
      .only(['titulo', 'slug'])
      .sortBy('createdAt', 'asc')
      .surround(params.slug)
      .fetch()

    return {
      prev,
      next
    }
  }
}
</script>
