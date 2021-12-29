import Footer from "./Footer.svelte";

import { desirializeData } from "../../utils/utils";

export interface Content {
  sidebar: string;
}

let footer: null | Footer = null;
const target = document.getElementById("main-footer");

if (target) {
  const content: Content = desirializeData(target.dataset);

  // remove data attribute
  target.removeAttribute("data-props");

  footer = new Footer({
    target,
    props: {
      content,
    },
  });
}

export default footer;
