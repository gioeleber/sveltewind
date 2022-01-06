<script lang="ts">
import Thumbnail from "/src/commons/Thumbnail.svelte";
import Time from "/src/commons/Time.svelte";
import Layout from "/src/widgets/Layout.svelte";
import type { DefaultContent, ArchiveItem } from "../../interfaces/global";

interface Content extends DefaultContent {
  posts: ArchiveItem[];
}

export let content: Content;
</script>

<Layout contentLayout={content.layout}>
  {#each content.posts as item}
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
</Layout>
