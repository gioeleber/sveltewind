import type { ArchiveItem } from "src/interfaces/global";
import { desirializeData } from "../../utils/utils";

const target = document.getElementById("main-index");

if (target) {
  import("./Index.svelte")
    .then((module) => module.default)
    .then((Index) => {
      const archiveItems: ArchiveItem[] = desirializeData(target.dataset);

      // remove data attribute
      target.removeAttribute("data-props");

      new Index({
        target,
        props: {
          archiveItems,
        },
      });
    })
    .catch((err) => console.error(err));
}
