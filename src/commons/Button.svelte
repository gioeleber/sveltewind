<script lang="ts">
  import { createEventDispatcher } from 'svelte';
  
  type ButtonTypes = "primary"
  
  export let href: string | null = null
  export let type: ButtonTypes = "primary"

	const dispatch = createEventDispatcher();

	const onClick = () => {
		dispatch('click');
	}
</script>

<a
  href={href}
  on:click={onClick}
  class={`btn btn-${type}`}
>
  <slot>Click</slot>
</a>