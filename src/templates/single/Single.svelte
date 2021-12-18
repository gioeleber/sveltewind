<script lang="ts">
import type { Content } from "./single";

export let content: Content;
</script>

<div class="content-wrapper">
  {#each content.articles as article}
  <article class="content">
    <h1>{article.title}</h1>
    {@html article.content}
  </article>
  {/each}
  <aside>
    {@html content.sidebar}
  </aside>
</div>