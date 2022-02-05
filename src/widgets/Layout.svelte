<script lang="ts">
import Footer from "/src/templates/footer/Footer.svelte";
import Header from "/src/templates/header/Header.svelte";

import type { Layout } from "../interfaces/global"
import Sidebar from "./Sidebar.svelte";
export let contentLayout: Layout;
export let header: boolean = true;
export let footer: boolean = true;
export let wrapper: boolean = true;
</script>

{#if header}
<Header content={contentLayout.header} />
{/if}
<div class={wrapper? "content-wrapper": ""}>
  <div class="w-full">
    <slot></slot>
  </div>
  {#if contentLayout.sidebar}
  <Sidebar html={contentLayout.sidebar} direction="v" />
  {/if}
</div>
{#if footer}
  <Footer content={contentLayout.footer} />
{/if}
