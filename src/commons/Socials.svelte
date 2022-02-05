<script lang="ts">
  import type { Social } from "../interfaces/global";
  export let socials: Social[]
</script>

<ul class="flex gap-x-6">
  {#each socials as social}
    <li class="list-none pl-0">
      <a href={social.link}>
        <img class="w-10" src={social.thumbUrl} alt={social.title}>
      </a>
    </li>
  {/each}
</ul>
