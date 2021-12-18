<script lang="ts">
import type { Content } from ".";

export let content: Content[];
</script>

<div class="content-wrapper">
  <div class="content-list">
    {#each content as article}
    <article class="content">
      <h2><a href="{article.permalink}">{article.title}</a></h2>
      {@html article.content}
    </article>
    {/each}
  </div>
</div>
