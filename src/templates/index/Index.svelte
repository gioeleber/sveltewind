<script lang="ts">
import type { ArchiveItem } from "../../interfaces/global";

export let archiveItems: ArchiveItem[];
</script>

<div class="content-wrapper">
  <div class="content-list">
    {#each archiveItems as item}
    <article class="content">
      <h2><a href="{item.permalink}">{item.title}</a></h2>
      {@html item.content}
    </article>
    {/each}
  </div>
</div>
