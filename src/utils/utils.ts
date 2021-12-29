import type { Themes } from "../interfaces/global";

export const desirializeData = (data: DOMStringMap) => {
  return data.props
    ? JSON.parse(decodeURIComponent(data.props?.replace(/\+/g, " ") ?? ""))
    : console.error("Target does not have daset-props");
};

export const systemTheme: Themes = window.matchMedia(
  "(prefers-color-scheme: dark)"
).matches
  ? "dark"
  : "light";
