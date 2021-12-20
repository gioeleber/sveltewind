<script lang="ts">
import type { Post } from "../../interfaces/global";

export let pages: Post[];
</script>

<div class="content-wrapper">
  {#each pages as page}
  <article class="content">
    <h1>{page.title}</h1>
    {@html page.content}
  </article>
  {/each}
</div>