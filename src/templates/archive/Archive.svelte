<script lang="ts">
import Thumbnail from "../../commons/Thumbnail.svelte";
import Time from "../../commons/Time.svelte";

import type { Content } from "./archive";

export let content: Content;
</script>

<div class="content-wrapper">
  <div class="content-list">
    <h1>Categoria: {content.catName}</h1>
    {#each content.archivePosts as item}
    <article class="content mb-5 pb-5 border-b-2 last:mb-0 last:pb-0 last:border-b-0">
      <h2><a href={item.permalink}>{item.title}</a></h2>
      <Time>{item.publishDate}</Time>
      {#if item.thumbUrl}
      <a href={item.permalink}>
        <Thumbnail src={item.thumbUrl}/>
      </a>
      {/if}
      {@html item.content}
    </article>
    {/each}
  </div>
  <aside class="widget-container">
    {@html content.sidebar}
  </aside>
</div>
