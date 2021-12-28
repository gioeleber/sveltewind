<script lang="ts">
  export let html: string;
  export let direction: "h" | "v";

  const addClass = direction === "v" ?
    "widget-vertical flex-[0.5_0%] border-t-2 pt-3 md:border-t-0 md:pt-0 md:border-l-2 md:pl-3":
    "widget-horizontal md:flex-row flex-1"
</script>

<aside class={`widget-container flex flex-col gap-8 ${addClass}`}>
  {@html html}
</aside>