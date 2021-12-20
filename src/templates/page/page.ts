import type { Post } from "src/interfaces/global";
import { desirializeData } from "../../utils/utils";

const target = document.getElementById("main-page");

if (target) {
  import("./Page.svelte")
    .then((module) => module.default)
    .then((Page) => {
      const pages: Post[] = desirializeData(target.dataset);

      // remove data attribute
      target.removeAttribute("data-props");

      new Page({
        target,
        props: { pages },
      });
    })
    .catch((err) => console.error(err));
}
