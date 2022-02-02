// styles
import "/src/assets/styles/main.scss";
import { desirializeData } from "./utils/utils";
import Page from "./templates/page/Page.svelte";

const target = document.getElementById("app");

if (target) {
  const content = desirializeData(target.dataset);
  let Template;

  switch (content.layout.templateName) {
    case "page":
      Template = Page;
      break;

    default:
      break;
  }

  // remove data attribute
  target.removeAttribute("data-props");

  if (Template)
    new Template({
      target,
      props: { content },
    });
}

const loader = document.getElementById("main-loader");
loader?.remove();
