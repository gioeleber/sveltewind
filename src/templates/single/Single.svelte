<script lang="ts">
  import Category from "/src/commons/Category.svelte";
  import Thumbnail from "/src/commons/Thumbnail.svelte";
  import Time from "/src/commons/Time.svelte";
  import type { Article, DefaultContent } from "../../interfaces/global";
  import Layout from "/src/widgets/Layout.svelte";

  interface Content extends DefaultContent {
    posts: Article[];
  }

  export let content: Content;
</script>

<Layout contentLayout={content.layout}>
  {#each content.posts as article}
    <article class="content">
      <h1>{article.title}</h1>
      <Time>{article.publishDate}</Time>
      <Category homeUrl={content.layout.header.homeUrl} categories={article.categories} />
      {#if article.thumbUrl}
        <Thumbnail src={article.thumbUrl}/>
      {/if}
      {@html article.content}
    </article>
  {/each}
</Layout>
