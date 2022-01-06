// styles
import "/src/assets/styles/main.scss";
import { desirializeData } from "./utils/utils";

const target = document.getElementById("app");

if (target) {
  const content = desirializeData(target.dataset);

  import(
    `./templates/${content.layout.templateName.toLowerCase()}/${
      content.layout.templateName
    }.svelte`
  )
    .then((module) => module.default)
    .then((Page) => {
      // remove data attribute
      target.removeAttribute("data-props");

      new Page({
        target,
        props: { content },
      });
    })
    .catch((err) => console.error(err));
}

const loader = document.getElementById("main-loader");
loader?.remove();
