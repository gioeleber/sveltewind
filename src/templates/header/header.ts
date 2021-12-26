import Header from "./Header.svelte";

import { desirializeData } from "../../utils/utils";
import "./header.scss";

export interface Content {
  menu: string;
  logoSrc: string | null;
  siteName: string;
  homeUrl: string;
}

let header: null | Header = null;
const target = document.getElementById("main-menu");

if (target) {
  const content: Content = desirializeData(target.dataset);

  // remove data attribute
  target.removeAttribute("data-props");

  header = new Header({
    target,
    props: {
      content,
    },
  });
}

export default header;
