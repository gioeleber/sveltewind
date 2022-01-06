<script lang="ts">
  import { fly } from "svelte/transition"
  import { quintOut } from "svelte/easing"

  import "./header.scss";
  import type { Header } from "../../interfaces/global";
  import ThemeSwitch from "/src/widgets/ThemeSwitch.svelte";
  import Hamburger from "/src/icons/Hamburger.svelte";
  import Close from "/src/icons/Close.svelte";

  export let content: Header;
  let isMenuOpen = false;

  const toggleMenu = () => {
		isMenuOpen = !isMenuOpen
	}
</script>

<header id="main-menu">
  <div id="menu-wrapper" class={`flex items-center justify-between md:justify-start ${isMenuOpen? "isOpen": "isClosed"}`}> 
    <a href={content.homeUrl}>
      {#if content.logoSrc}
      <img src={content.logoSrc} alt="logo" class="w-10 mr-3" id="logo">
      {:else}
      <h5 class="mb-0">{content.siteName}</h5>
      {/if}
    </a>
    <div id="menu-desktop" class="hidden md:flex mr-auto">
      {@html content.menu}
    </div>
    
    {#if isMenuOpen}
      <div transition:fly={{x: 240, easing: quintOut}} id="menu-mobile" class="absolute md:hidden top-0 right-0 px-4 py-3 w-60 bg-white dark:bg-neutral-900 dark:shadow-white/10 shadow-xl">
        <div class="flex w-full justify-end">
          <button class="my-1" on:click={toggleMenu}>
            <Close />
          </button>
        </div>
        {@html content.menu}
      </div>
    {/if}

    <ThemeSwitch />

    <button class="md:hidden" on:click={toggleMenu}>
      <Hamburger />
    </button>
  </div>
</header>
