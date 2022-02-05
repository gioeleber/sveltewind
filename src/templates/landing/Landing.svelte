<script lang="ts">
  import type { Post } from "../../interfaces/global";
  import type { DefaultContent } from "../../interfaces/global";
  import Layout from "/src/widgets/Layout.svelte";

  interface Content extends DefaultContent {
    posts: Post[]
  }

  export let content: Content;
</script>

<Layout contentLayout={content.layout}>
  {#each content.posts as page}
    <article class="content">
      <h1>{page.title}</h1>
      {@html page.content}
    </article>
  {/each}
</Layout>