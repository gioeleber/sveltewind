<script lang="ts">
  import Hamburger from "./components/Hamburger.svelte";
  import type { Content } from "./header";

  export let content: Content;
  let isMenuOpen = false;

  const toggleMenu = () => {
		isMenuOpen = !isMenuOpen
	}

</script>

<a href={content.homeUrl}>
  {#if content.logoSrc}
  <img src={content.logoSrc} alt="logo" class="w-10 mr-3" id="logo">
  {:else}
	<h5 class="mb-0">{content.siteName}</h5>
  {/if}
</a>
{@html content.menu}
<button on:click={toggleMenu}>
  <div id="menuToggle" class={isMenuOpen? "isOpen": "isClosed"}> 
    <Hamburger />
  </div>
</button>