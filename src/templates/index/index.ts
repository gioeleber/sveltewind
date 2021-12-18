import { desirializeData } from "../../utils/utils";

export interface Content {
  title: string;
  content: string;
  permalink: string;
}

const target = document.getElementById("main-index");

if (target) {
  import("./Index.svelte")
    .then((module) => module.default)
    .then((Index) => {
      const content: Content[] = desirializeData(target.dataset);

      // remove data attribute
      target.removeAttribute("data-content");

      new Index({
        target,
        props: {
          content,
        },
      });
    })
    .catch((err) => console.error(err));
}
