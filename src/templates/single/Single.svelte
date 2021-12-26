<script lang="ts">
  import Sidebar from "../../commons/Sidebar.svelte";
  import Category from "../../commons/Category.svelte";
  import Thumbnail from "../../commons/Thumbnail.svelte";
  import Time from "../../commons/Time.svelte";
  import type { Content } from "./single";

  export let content: Content;
</script>

<div class="content-wrapper">
  {#each content.articles as article}
  <article class="content">
    <h1>{article.title}</h1>
    <Time>{article.publishDate}</Time>
    <Category homeUrl={content.homeUrl} categories={article.categories} />
    {#if article.thumbUrl}
      <Thumbnail src={article.thumbUrl}/>
    {/if}
    {@html article.content}
  </article>
  {/each}
  {#if content.sidebar}
    <Sidebar html={content.sidebar} direction="v" />
  {/if}
</div>