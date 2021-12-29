<script lang="ts">
import Sidebar from "../../commons/Sidebar.svelte";

import Thumbnail from "../../commons/Thumbnail.svelte";
import Time from "../../commons/Time.svelte";

import type { Content } from "./index";

export let content: Content;
</script>

<div class="content-wrapper">
  <div class="content-list">
    {#each content.archiveItems as item}
    <article class="content mb-5 pb-5 border-b-2 last:mb-0 last:pb-0 last:border-b-0 dark:border-neutral-800">
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
  {#if content.sidebar} 
    <Sidebar html={content.sidebar} direction="v" />
  {/if}
</div>
