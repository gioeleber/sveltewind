// styles
import "/src/assets/styles/main.scss";
import { desirializeData } from "./utils/utils";

const target = document.getElementById("app");

if (target) {
  let Template: any;
  const content = desirializeData(target.dataset);
  const { templateName } = content.layout;

  // remove data attribute
  target.removeAttribute("data-props");

  (async () => {
    Template = (
      await import(
        `./templates/${templateName.toLowerCase()}/${templateName}.svelte`
      )
    ).default;

    if (Template) {
      new Template({
        target,
        props: { content },
      });
    }
  })();
}

const loader = document.getElementById("main-loader");
loader?.remove();
