<script lang="ts">
  import { fly } from "svelte/transition"
  import { quintOut } from "svelte/easing"

  import type { Content } from "./header";
  import Hamburger from "./components/Hamburger.svelte";
  import Close from "./components/Close.svelte";

  export let content: Content;
  let isMenuOpen = false;

  const toggleMenu = () => {
		isMenuOpen = !isMenuOpen
	}
</script>

<div id="menu-wrapper" class={`flex items-center justify-between md:justify-start ${isMenuOpen? "isOpen": "isClosed"}`}> 
  <a href={content.homeUrl}>
    {#if content.logoSrc}
    <img src={content.logoSrc} alt="logo" class="w-10 mr-3" id="logo">
    {:else}
    <h5 class="mb-0">{content.siteName}</h5>
    {/if}
  </a>
  <div id="menu-desktop" class="hidden md:flex">
    {@html content.menu}
  </div>
  
  {#if isMenuOpen}
    <div transition:fly={{x: 240, easing: quintOut}} id="menu-mobile" class="absolute md:hidden top-0 right-0 px-4 py-3 w-60 bg-white shadow-xl">
      <div class="flex w-full justify-end">
        <button class="my-1" on:click={toggleMenu}>
          <Close />
        </button>
      </div>
      {@html content.menu}
    </div>
  {/if}

  <button class="md:hidden" on:click={toggleMenu}>
    <Hamburger />
  </button>
</div>