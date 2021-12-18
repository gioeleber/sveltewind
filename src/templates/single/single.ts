import { desirializeData } from "../../utils/utils";

export interface Article {
  title: string;
  content: string;
}

export interface Content {
  sidebar: string | null;
  articles: Article[];
}

const target = document.getElementById("main-single");

if (target) {
  import("./Single.svelte")
    .then((module) => module.default)
    .then((Single) => {
      const content: Content = desirializeData(target.dataset);

      // remove data attribute
      target.removeAttribute("data-content");

      new Single({
        target,
        props: {
          content,
        },
      });
    })
    .catch((err) => console.error(err));
}