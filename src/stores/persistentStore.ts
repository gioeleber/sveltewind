import type { Themes } from "../interfaces/global";
import { writable } from "svelte/store";
import { systemTheme } from "../utils/utils";

const storedTheme = (localStorage.getItem("theme") as Themes) || systemTheme;
export const theme = writable<Themes>(storedTheme);
theme.subscribe((value) => {
  localStorage.setItem("theme", value === "dark" ? "dark" : "light");
  if (value === "dark") document.documentElement.classList.add("dark");
});
