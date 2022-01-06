<script lang="ts">
import Footer from "/src/templates/footer/Footer.svelte";
import Header from "/src/templates/header/Header.svelte";

import type { Layout } from "../interfaces/global"
import Sidebar from "./Sidebar.svelte";
export let contentLayout: Layout;
</script>

<Header content={contentLayout.header} />
<div class="content-wrapper">
  <div class="content-list w-full">
    <slot></slot>
  </div>
  {#if contentLayout.sidebar}
    <Sidebar html={contentLayout.sidebar} direction="v" />
  {/if}
</div>
<Footer content={contentLayout.footer} />
