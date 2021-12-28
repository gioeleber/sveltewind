<script lang="ts">
  import Moon from "../icons/Moon.svelte";
  import Sun from "../icons/Sun.svelte";
  
import { isDarkMode } from "../stores/persistentStore";
</script>

<button on:click={() => isDarkMode.set($isDarkMode === "light" ? "dark" : "light")}>
  {#if $isDarkMode === "light"}
  <Moon />
  {:else}
  <Sun />
  {/if}
</button>