<script lang="ts">
  import Moon from "../icons/Moon.svelte";
  import Sun from "../icons/Sun.svelte";
  
  import { theme } from "../stores/persistentStore";

  const switchTheme = () => {
    if ($theme === "light") {
      theme.set("dark")
      document.documentElement.classList.add('dark')
      return
    }
    theme.set("light")
    document.documentElement.classList.remove('dark')
  }
</script>

<button on:click={switchTheme}>
  {#if $theme === "light"}
  <Moon />
  {:else}
  <Sun />
  {/if}
</button>