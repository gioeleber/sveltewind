import type { ArchiveItem } from "src/interfaces/global";
import { desirializeData } from "../../utils/utils";

export interface Content {
  sidebar: string | null;
  homeUrl: string;
  archiveItems: ArchiveItem[];
}

const target = document.getElementById("main-index");

if (target) {
  import("./Index.svelte")
    .then((module) => module.default)
    .then((Index) => {
      const content: Content = desirializeData(target.dataset);

      // remove data attribute
      target.removeAttribute("data-props");

      new Index({
        target,
        props: {
          content,
        },
      });
    })
    .catch((err) => console.error(err));
}
