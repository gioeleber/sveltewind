import type { Article } from "src/interfaces/global";
import { desirializeData } from "../../utils/utils";

export interface Content {
  sidebar: string | null;
  homeUrl: string;
  articles: Article[];
}

const target = document.getElementById("main-single");

if (target) {
  import("./Single.svelte")
    .then((module) => module.default)
    .then((Single) => {
      const content: Content = desirializeData(target.dataset);

      // remove data attribute
      target.removeAttribute("data-props");

      new Single({
        target,
        props: {
          content,
        },
      });
    })
    .catch((err) => console.error(err));
}
