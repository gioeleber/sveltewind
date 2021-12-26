<script lang="ts">
import Sidebar from "../../commons/Sidebar.svelte";

import type { Content } from "./footer";

export let content: Content;
</script>

{#if content.sidebar}
  <div id="main-footer-sidebar" class="content-wrapper">
    <Sidebar html={content.sidebar} direction="h" />
  </div>
{/if}
<div id="main-footer-bottom" class="p-4 bg-gray-200">
  Proudly created with SvelteWind
</div>