<script lang="ts">
import type { Content } from "./page";


export let content: Content[];
</script>

<div class="content-wrapper">
  {#each content as article}
  <article class="content">
    <h1>{article.title}</h1>
    {@html article.content}
  </article>
  {/each}
</div>