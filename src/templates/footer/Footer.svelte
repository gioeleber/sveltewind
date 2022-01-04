<script lang="ts">
import type { Content } from "./footer";

export let content: Content;
</script>

{#if content.sidebar}
  <div id="main-footer-sidebar" class="content-wrapper">
    <!-- <Sidebar html={content.sidebar} direction="h" /> -->
  </div>
{/if}
<div id="main-footer-bottom" class="p-4 bg-neutral-200 dark:bg-neutral-700">
  Proudly created with SvelteWind
</div>