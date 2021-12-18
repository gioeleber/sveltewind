export const desirializeData = (data: DOMStringMap) => {
  return JSON.parse(decodeURIComponent(data.content.replace(/\+/g, " ")));
};
