<script lang="ts">
  import type { Post, Social } from "../../interfaces/global";
  import type { DefaultContent } from "../../interfaces/global";
  import Layout from "/src/widgets/Layout.svelte";
  import ThemeSwitch from "/src/widgets/ThemeSwitch.svelte";
  import Button from "/src/commons/Button.svelte";
  import Logo from "/src/commons/Logo.svelte";
  import Socials from "/src/commons/Socials.svelte";

  interface Content extends DefaultContent {
    posts: Post[]
    socials: Social[]
  }

  export let content: Content;
</script>

<Layout contentLayout={content.layout} header={false} footer={false} wrapper={false}>
  {#each content.posts as page}
    <article class="content flex flex-col h-screen items-center">
      <div class="pt-6 px-6"><ThemeSwitch /></div>
      <div class="flex-1 flex flex-col justify-center items-center">
        <Logo />
        {@html page.content}
        <Button href="/primo-progetto">Crea il tuo primo progetto</Button>
      </div>
      <div class="pb-6"><Socials socials={content.socials} /></div>
    </article>
  {/each}
</Layout>