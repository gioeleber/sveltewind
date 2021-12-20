<script lang="ts">
  import type { Category } from "../interfaces/global";

  export let homeUrl: string;
  export let categories: Category[];
</script>

<p class="text-gray-400 text-sm mb-3">Categories: 
  {#each categories as cat, i}
    <a class="text-gray-400 no-underline font-bold" href={`${homeUrl}/${cat.taxonomy}/${cat.slug}`}>{cat.name}</a>
    {i+1 === categories.length ? "" : ", "}
  {/each}
</p>