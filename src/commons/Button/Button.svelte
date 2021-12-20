<script lang="ts">
  import { createEventDispatcher } from 'svelte';
  import "./button.scss"

  type ButtonTypes = "primary"

  export const href: string | null = null
  export const type: ButtonTypes = "primary"

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