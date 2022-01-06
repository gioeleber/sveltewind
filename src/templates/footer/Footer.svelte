<script lang="ts">
  import Sidebar from "/src/widgets/Sidebar.svelte";
  import type { Footer } from "../../interfaces/global";

  export let content: Footer;
</script>

<footer id="main-footer">
  {#if content.footerSidebar}
    <div id="main-footer-sidebar" class="content-wrapper">
      <Sidebar html={content.footerSidebar} direction="h" />
    </div>
  {/if}
  <div id="main-footer-bottom" class="p-4 bg-neutral-200 dark:bg-neutral-700">
    Proudly created with SvelteWind
  </div>
</footer>