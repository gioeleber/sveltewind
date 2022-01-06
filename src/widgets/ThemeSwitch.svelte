<script lang="ts">
import { theme } from "../stores/persistentStore";
import Moon from "/src/icons/Moon.svelte";
import Sun from "/src/icons/Sun.svelte";

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