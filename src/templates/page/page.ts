import { desirializeData } from "../../utils/utils";

export interface Content {
  title: string;
  content: string;
}

const target = document.getElementById("main-page");

if (target) {
  import("./Page.svelte")
    .then((module) => module.default)
    .then((Page) => {
      const content: Content[] = desirializeData(target.dataset);

      // remove data attribute
      target.removeAttribute("data-content");

      new Page({
        target,
        props: {
          content,
        },
      });
    })
    .catch((err) => console.error(err));
}
