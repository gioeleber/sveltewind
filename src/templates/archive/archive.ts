import type { ArchivePost } from "src/interfaces/global";
import { desirializeData } from "../../utils/utils";

export interface Content {
  sidebar: string | null;
  homeUrl: string;
  catName: string;
  archivePosts: ArchivePost[];
}

const target = document.getElementById("main-archive");

if (target) {
  import("./Archive.svelte")
    .then((module) => module.default)
    .then((Archive) => {
      const content: Content = desirializeData(target.dataset);

      // remove data attribute
      target.removeAttribute("data-props");

      new Archive({
        target,
        props: {
          content,
        },
      });
    })
    .catch((err) => console.error(err));
}
