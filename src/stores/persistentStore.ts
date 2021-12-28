import { writable } from "svelte/store";

type Themes = "dark" | "light";

const storedTheme = (localStorage.getItem("theme") as Themes) || "light";
export const isDarkMode = writable<Themes>(storedTheme);
isDarkMode.subscribe((value) => {
  localStorage.setItem("theme", value === "dark" ? "dark" : "light");
});
